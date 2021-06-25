<?php

/*
1. MIGRATION-> DATABASE TABLE
2. SEED-> INITIAL VALUE
3. RESOURCES
4. ROUTES
5. CONTROLLER
6. MODEL
*/

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// view is simpler!
// Route::view('/', 'home');
// Route::view('about', 'about');

// dd: similar to printing
// dd stands for "Dump and Die." Laravel's dd() function
// can be defined as a helper function, which is used to
// dump a variable's contents to the browser and prevent
// the further script execution

Route::view('/', 'home')->name('index');

Route::get('contact', 'ContactFormController@create')->name('contact.create');
Route::post('contact', 'ContactFormController@store')->name('contact.store');

Route::view('about', 'about')->name('about');

Route::get('customers', 'CustomersController@index')->name('customers.index');
Route::get('customers/create', 'CustomersController@create')->name('customers.create');
Route::post('customers', 'CustomersController@store')->name('customers.store');
Route::get('customers/{customer}', 'CustomersController@show')->name('customers.show')->middleware('can:view,customer');
Route::get('customers/{customer}/edit', 'CustomersController@edit')->name('customers.edit');
Route::patch('customers/{customer}', 'CustomersController@update')->name('customers.update');
Route::delete('customers/{customer}', 'CustomersController@destroy')->name('customers.destroy');

/*
docs

>>> php artisan make:controller PhotoController --resource
>>> php artisan make:controller PhotoController --api

Specifying The Resource Model
If you are using route model binding and would like the resource controller's methods to type-hint
a model instance, you may use the --model option when generating the controller:

>>> php artisan make:controller PhotoController --resource --model=Photo

a) template routes

use App\Http\Controllers\PhotoController;
Route::resource('photos', PhotoController::class);

b) API routes

When declaring resource routes that will be consumed by APIs, you will commonly want to exclude routes
that present HTML templates such as create and edit.
For convenience, you may use the apiResource method to automatically exclude these two routes:

use App\Http\Controllers\PhotoController;
Route::apiResource('photos', PhotoController::class);

c) nested routes

Sometimes you may need to define routes to a nested resource. For example, a photo resource may
have multiple comments that may be attached to the photo. To nest the resource controllers,
you may use "dot" notation in your route declaration:

use App\Http\Controllers\PhotoCommentController;

Route::resource('photos.comments', PhotoCommentController::class);
This route will register a nested resource that may be accessed with URIs like the following:

/photos/{photo}/comments/{comment}


You may even register many resource controllers at once by passing an array to the resources method:

Route::resources([
    'photos' => PhotoController::class,
    'posts' => PostController::class,
]);

Actions Handled By Resource Controller
Verb	URI	Action	Route Name
GET	/photos	index	photos.index
GET	/photos/create	create	photos.create
POST	/photos	store	photos.store
GET	/photos/{photo}	show	photos.show
GET	/photos/{photo}/edit	edit	photos.edit
PUT/PATCH	/photos/{photo}	update	photos.update
DELETE	/photos/{photo}	destroy	photos.destroy

Customizing Missing Model Behavior

However, you may customize this behavior by calling the missing method when
defining your resource route. The missing method accepts a closure that will
be invoked if an implicitly bound model can not be found for any of the
resource's routes:

use App\Http\Controllers\PhotoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

Route::resource('photos', PhotoController::class)
        ->missing(function (Request $request) {
            return Redirect::route('photos.index');
        });

Partial Resource Routes

When declaring a resource route, you may specify a subset of actions the controller should
handle instead of the full set of default actions:

use App\Http\Controllers\PhotoController;

Route::resource('photos', PhotoController::class)->only([
    'index', 'show'
]);

Route::resource('photos', PhotoController::class)->except([
    'create', 'store', 'update', 'destroy'
]);

*/
// Route::resource('customers', 'CustomersController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
