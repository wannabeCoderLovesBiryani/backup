<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/*
    php artisan tinker
    >> $c= Company::create(['name'=> 'ridwan', 'phone'=> '8801817041463'])
    >> exit
*/

class Company extends Model
{
    protected $guarded = [];

/*
    implementing SQL RELATIONSHIP

    These 2 steps will create SQL relationship.
    1. One Company has many Customer. This is established in models.
    2. The contained table will store the container table's  as FOREIGN KEY id.
    This table change occurs in the migration class's up() method.

    1.

    a) Company has many customers
    b) Customer belongs to Company

    app\Company--------->
    _____________________

    public function customers()
    {
        return $this->hasMany(Customer::class);
    }

    app\Customer-------->
    _____________________

    public function company()
    {
        return $this->belongsTo(Company::class);
    }

    2.

    Customer belongs to which company? Store company ID in customer table

    database\migrations\create_customers_table------->
    __________________________________________________
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
           ..........
            $table->unsignedInteger('company_id');
            .........
        });
    }

*/

/*
    Results of the has-many relationship

    a) Table:
    Company table will store one more column: customers?
    Customer table will store one more column: company.
    b) Model:
    Company model will store one more attribute: company->customers
    Customer model will store one more attribute: customer->company

    Retrieve all customers of 1st company and the company of 1st customer.
    Print their names.

    php artisan tinker

    >> $company= Company::first
    >> $company->customers
    >> foreach( $company->customers as $customerFirstCompany )
            echo $customerFirstCompany->name

    >> $customer= Customer::first
    >> $customer->company
    >> echo $customer->company->name

    >> exit
*/

    public function customers()
    {
        return $this->hasMany(Customer::class);
    }
}


