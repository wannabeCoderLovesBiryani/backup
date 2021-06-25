<?php

use App\Http\Controllers\PizzaController;

Route::get('/', function () {
    return view('welcome');
});

    return view('pizzaPage');
    return "hi";
    return
        ["hi" => 1, "bye" => 2];

/*
Request parameter : http://text.com/wall?id=23&name=hdtopi
     
   /* returns Ony Id value */
    $id = $request->input('id');
  /* returns array of entire input query value */
  $query = $request->all();

    /* ________ OR _________ */
  
  /* returns Ony Id value */
  $id = Input::get('id');
  /* returns array of entire input query value */
  $query = Input::all();

Route::get('/menu', function () {
    // request parameter
/*
    ?greeting=salam
*/

    $greeting = request('greeting');
    // must pass an object. Its property will be used in the template.
    return view('pizzas', [
        'type' => 'hawaiian',
        'pizzas' => [
            ['type' => 'hawaiian', 'base' => 'cheesy crust'],
            ['type' => 'volcano', 'base' => 'garlic crust'],
            ['type' => 'veg supreme', 'base' => 'thin & crispy']
        ],
        //
        'greeting' => $greeting
    ]);
});

Route parameter

Route::get('/menu/{id}', function ($id) {
    // id parameter must be passed into the function?
    // use the $id variable to query the db for a record
    return view('details', ['id' => $id]);
});

/*
Controller: Controller class is inherited by PizzaController
Controller imports the Pizza model and extracts/ modifies the Model (ie. the table)
The PizaController's methods are fired on the logic to be executed at each route.

Route::get('/routeName', controllerMethodOfPizzaController class)

GET "/pizzas" --> PizzaController@index
GET "/pizzas/{id}" --> PizzaController@show
*/

// new syntax Laravel 8
Route::get('/pizzasFaker', [PizzaController::class, 'index']);

public function index() {
    // get data from a database
    $pizzas = [
      ['type' => 'hawaiian', 'base' => 'cheesy crust'],
    ...
    ];

    return view('pizzas', [
      'pizzas' => $pizzas,
    ]);
  }

// old syntax Laravel 6
Route::get('/pizzasFaker/{id}', 'App\Http\Controllers\PizzaController@show');

  public function show($id) {
    // use the $id variable to query the db for a record
    return view('details', ['id' => $id]);
  }

// SOMETIMES MIGRATIONS GET STUCK NEED TO RUN
// composer.phar dump-autoload -o

// there should be only 1 php; XAMP PHP
// THAT PHP WILL BE USED TO CONNECT TO MYSQL
// OTHERWISE ERRORS

//CONNECT TO MYSQL as user(-u) 'root' in CMD
// mysql -u root

// MAKE DATABASE "netninja_pizzahouse" IN CMD
//  create database netninja_pizzahouse

// MIGRATION: ADD A TABLE INTO DATABASE IF TABLE DOES NOT EXIST
// ADD DATABASE NAME IN .ENV FILE

// BLUEPRINT OF CREATING TABLE:
// php artisan make:migration create_XXX_table
// php artisan make:migration create_pizzas_table
// php artisan migrate

// STATUS OF MIGRATION:
// php artisan migrate:status

// BLUEPRINT OF EDITTING TABLE TO ADD 'price' INTEGER COLUMN:

// PART 1 (ok in dev as we will lose previous data)
// php artisan migrate:rollback
// in database/migrations/create_pizzas_table add the column:
//      $table->integer('price');
// php artisan migrate

// PART 2 (ok in production, no data lost)
// php artisan make:migration add_XXX_to_YYY_table --table=YYY
// php artisan make:migration add_price_to_pizzas_table --table=pizzas
// in database/migrations/add_price_to_pizzas_table add the column:
//      $table->integer('price');
// php artisan migrate

// BLUEPRINT OF EDITTING TABLE TO REMOVE 'price' INTEGER COLUMN:
// in database/migrations/create_pizzas_table remove the line:
//      $table->integer('price')
// php artisan migrate:refresh

// OTHER MIGRATION OPERATIONS:

// php artisan migrate:rollback
// To roll back the latest migration operation
// php artisan migrate:rollback --step=5

// php artisan migrate:refresh
// = rollback ALL + migrate
// USAGE: Make any change in database/migrations to columns and restructure database

/*

MVC-style container for route '/pizzas' route :

Every URL has 3 basic routes usually: "/pizzas", "/pizzas/{id}", "/pizzas.create"

1. Model: Model is a class inherited by Pizza class
A table is abstracted into a classc called a model. So, a model represents a database table.
Its methods are all the possible methods you can interact with the table.

2. Controller: Controller class is inherited by PizzaController. Its methods are called actions
Controller imports the Pizza model and extracts/ modifies the Model (ie. the table)
The PizaController's methods are fired on the logic to be executed at each route.

Route::get('', controllerMethodOfPizzaController class)

View                 -> Request & Route             --> Controller@action

"pizzas.index"       -> GET "/pizzas"               --> PizzaController@index
"pizzas.create"      -> GET "/pizzas/create"        --> PizzaController@create
"pizzas.show"        -> GET "/pizzas/{id}"          --> PizzaController@show
"----------"         -> POST "/pizzas"              --> PizzaController@store
"----------"         -> DELETE "/pizzas/{id}"       --> PizzaController@destroy

3. View:

Controller Class must have the view imported. Anyways, the PizzaController will declare
which view to generate


-> view directory:
Create pizzas folder for pizzas route

-> view folder:
1. "pizzas.show"
2. "pizzas.create"
3. "pizzas.show"

-> views in routes

# "/pizzas/create" must be above "/pizzas/{id}", or "/pizzas/{id}" will be routed at "/pizzas/create":
# No views needed for pizzas/post


"pizzas.index"-> GET "/pizzas"
"pizzas.create"-> GET "/pizzas/create"
"pizzas.show"-> GET "/pizzas/{id}"
"---"-> POST "/pizzas"

*/
// php artisan make:controller PizzaController
// Import controller at top:
// ===>>> use App\Http\Controllers\PizzaController;


// Eloquent model
// A table is abstracted into a classc called a model. Its methods are all the possible methods you can interact
// with the table
// So, a model represents a database table.
// In laravel, the name is quite important.

// php artisan make:model Pizza will work on table "pizzas"
// You can override that by writing inside Pizza Class
// protected $table= ""

// delete a model: https://stackoverflow.com/questions/30517098/how-to-delete-a-model-using-php-artisan
// 1. delete the file
// 2. composer.phar dumpautoload
// 3. Check if under "vendor/composer/autoload_classmap.php" file

Route::get('/pizzas', 'App\Http\Controllers\PizzaController@index2');
public function index2() {

    // get data from a database

    // ONLY ONE WITH NO ->GET() METHOD
    // SELECT * FROM PIZZAS
    // ON
    $pizzas = Pizza::all();

    // HAS ->GET() METHOD
    // 1. order by desc. order name
    // $pizzas = Pizza::orderBy('name', 'desc')->get();
    // 2. where type='haiwaan'
    // $pizzas = Pizza::where('type', 'hawaiian')->get();
    // 3. get latest data
    // $pizzas = Pizza::latest()->get();
    return view('pizzas.index', [
      'pizzas' => $pizzas,
    ]);
  }
Route::get('/pizzas/create', 'App\Http\Controllers\PizzaController@create2');
 public function create2() {
    return view('pizzas.create');
  }
Route::post('/pizzas', 'App\Http\Controllers\PizzaController@store2');
public function store2() {

    $pizza = new Pizza();
    // config/database.php
    // 'strict' = false
    // so database allows default values for DATE at created_at and updated_at
    $pizza->name = request('name');
    $pizza->type = request('type');
    $pizza->base = request('base');
    $pizza->toppings = implode(request('toppings'));

    $pizza->save();

    return redirect('/pizzas')->with('mssg', 'Thanks for your order');

    /*
    $msgArray= array(request('name'), request('type'), request('base') );
    // array to string
    error_log( join(" ", $msgArray) );
    error_log($pizza);

    */
  }

Route::get('/pizzas/{id}', 'App\Http\Controllers\PizzaController@show2');
 public function show2($id) {
    // use the $id variable to query the db for a record
    $pizza = Pizza::findOrFail($id);
    return view('pizzas.show', [
        'pizza' => $pizza,
      ]);
  }
Route::delete('/pizzas/{id}', 'App\Http\Controllers\PizzaController@destroy')->name('delete');
 public function destroy($id) {

    $pizza = Pizza::findOrFail($id);
    $pizza->delete();

    return redirect('/pizzas');

  }

use App\Models\Pizza;

class PizzaController extends Controller
{

}
