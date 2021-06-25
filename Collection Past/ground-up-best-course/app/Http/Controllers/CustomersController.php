<?php

namespace App\Http\Controllers;

use App\Company;
use App\Customer;
use App\Events\NewCustomerHasRegisteredEvent;
use App\Mail\WelcomeNewUserMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Intervention\Image\Facades\Image;



class CustomersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $customers = Customer::with('company')->paginate(25);

        return view('customers.index', compact('customers'));

        /*
        SAME AS 'customers.index'

        return view('customers.index', [
            'customers'=> $customers,
        ];
        */
    }

    /*
    public function list()
    {
        // ---QUERY

        _______________________________________________________________
        a) write query here using Eloquent Model's methods that
        Customer (App\Customer) model already has from its parent
        like Customer::all;

        $companies= Company:all();
        $activeCustomers = Customer::where('active', '1')->get();
        $inActiveCustomers = Customer::where('active', '0')->get();

        // OR YOU CAN ALSO DO

        b) Seperate queries from controllers by puttting queries in the
        model FOR MODEL::WHERE() queries.

        write new method for (App\Customer) Customer model:

        public function scopeActive($query) {
            return $query->where('active', 1);
        }

        public function scopeInactive($query) {
            return $query->where('active', 0);
        }

        in CustomersController=>

        $companies= Company:all();
        $activeCustomers = Customer::active('active', '1')->get();
        $inActiveCustomers = Customer::inactive('active', '0')->get();
        _____________________________________________________________________

        // ---VIEW

        ________________________________________________________________
        return view('customers.list', [
            'activeCustomers'=> $activeCustomers,
            'inactiveCustomers'=> $inactiveCustomers,
            'companies'=> $companies
        ];

        // OR YOU CAN ALSO WRITE

        return view('customers.list', compact(
            'activeCustomers',
            'inactiveCustomers',
            'companies';
        );
        __________________________________________________________________

    }
    */

    public function create()
    {
        $companies = Company::all();
        // actually "customers.create" route is sharing view with "customers.edit"
        // where you do have a "$customers" object demanded by blade template
        $customer = new Customer();
        /*
        Customer has been saved. No need to:
        $customer->save()
        */

        return view('customers.create', compact('companies', 'customer'));
    }

    // private function validateRequest does this

    public function store()
    {
        $this->authorize('create', Customer::class);

        /*
        $data= request()->validate([
                'name' => 'required|min:3',
                'email' => 'required|email',
                'active' => 'required',
                'company_id' => 'required',
                'image' => 'sometimes|file|image|max:5000',
            ]);

        __________________________________________________________
        a) inititalise by 0-parameter contructor and assign fields
        If you assign feels you need to save:

        $customer = new Customer();
        $customer->name= request('name');
        $customer->email= request('email');
        $customer->active= request('active');

        // Save fields:
        $customer->save;

        b) initialise by mass assignment Model::create($data) but
        Laravel is protected by mass assignment vulnerabilities by
        default.

        To allow mass assignment add $fillable and $guarded in Model

        // No need to save by:    $customer->save;

        $customer = Customer::create($data);
        ___________________________________________________________

        return back();

        ____________________________________________________________
        Sometimes you may wish to redirect the user to their previous
        location, such as when a submitted form is invalid. You may do
        so by using the global back helper function. Since this feature
        utilizes the session, make sure the route calling the back function
        is using the web middleware group or has all of the session middleware applied:

        */

        // private function validateRequest does this->validateRequest()
        $customer = Customer::create($this->validateRequest());

        $this->storeImage($customer);

        event(new NewCustomerHasRegisteredEvent($customer));

        return redirect('customers');
    }

    public function show(Customer $customer)
    {
        /*



        1)
        Controller doesn't bind to model, Customer

        php artisan make:controller -resource

        public function show($customer){
            $customer= Customer::find($customer);
            return view('customers.show', compact('customer'));
        }

        PROBLEM: IF QUERY FAILS, CUSTOMER= NULL AND compact('customer') WON'T WORK!
        SOLUTION: PAGE 404 IF QUERY FAILS

        $customer= Customer::findOrFail($customer);

        public function show($customer){
            $customer= Customer::findOrFail($customer);
            return view('customers.show', compact('customer'));
        }

        2) IMPLICIT ROUTE HANDLING:

         Controller binds to model, Customer

        php artisan make:controller -resource --model=Customer

        public function show($customer){
            $customer= Customer::findOrFail(  Customer  $customer);
            //                                ^Customer class is the magic keyword
            return view('customers.show', compact('customer'));
        }

        If using ***Route::resource***
        If you are using route model binding and would like the resource controller's methods to type-hint
        a model instance, you may use the --model option when generating the controller:

        >>> php artisan make:controller PhotoController --resource --model=Photo


        DONT MESS WITH EXPLICIT ROUTE HANDLING BTW!

        For '/customers/{customer}', by default
        $customer= Customer::findOrFail($customer); command is implemented

        In such a case, you can find $customer in the callback function

        use App\Models\Customer;
         Route::get('/customers/{customer}', function (Customer $customer) {
            return $customer->email;
        });

        How it works:
        Route::get('/customers/{parameterXYZ}', function (Customer $parameterXYZ) {
            $parameterXYZ
            return $parameterXYZ->email;
        });

        use App\Http\Controllers\CustomerController;
        use App\Models\Customer;

         // Route definition...
        Route::get('/customers/{customer}', [CustomerController::class, 'show']);

        // Controller method definition...
        public function show(Customer $customer)
        {
            return view('customer.profile', ['customer' => $customer]);
        }

        Customizing The Key

        a) For one instance

        use App\Models\Post;
        Route::get('/posts/{post:slug}', function (Post $post) {
            return $post;
        });

        b) If you would like model binding to always use a database column other than id when
        retrieving a given model class, you may override the getRouteKeyName method on the Eloquent model:

        public function getRouteKeyName()
        {
            return 'slug';
        }

        */
        return view('customers.show', compact('customer'));
    }

    public function edit(Customer $customer)
    {
        $companies = Company::all();

        return view('customers.edit', compact('customer', 'companies'));
    }

    public function update(Customer $customer)
    {
        $customer->update($this->validateRequest());

        $this->storeImage($customer);

        return redirect('customers/' . $customer->id);
    }

    public function destroy(Customer $customer)
    {
        $this->authorize('delete', $customer);
        // wowww so easy
        $customer->delete();

        return redirect('customers');
    }

    private function validateRequest()
    {
        return request()->validate([
            'name' => 'required|min:3',
            'email' => 'required|email',
            'active' => 'required',
            'company_id' => 'required',
            'image' => 'sometimes|file|image|max:5000',
        ]);
    }

    private function storeImage($customer)
    {
        if (request()->has('image')) {
            $customer->update([
                'image' => request()->image->store('uploads', 'public'),
            ]);

            $image = Image::make(public_path('storage/' . $customer->image))->fit(300, 300, null, 'top-left');
            $image->save();
        }
    }
}
