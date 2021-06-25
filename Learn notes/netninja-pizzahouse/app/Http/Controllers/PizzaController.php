<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// import Model
use App\Models\Pizza;

class PizzaController extends Controller
{

  public function index() {
    // get data from a database
    $pizzas = [
      ['type' => 'hawaiian', 'base' => 'cheesy crust'],
      ['type' => 'volcano', 'base' => 'garlic crust'],
      ['type' => 'veg supreme', 'base' => 'thin & crispy']
    ];

    return view('pizzas', [
      'pizzas' => $pizzas,
    ]);
  }

  public function show($id) {
    // use the $id variable to query the db for a record
    return view('details', ['id' => $id]);
  }

  // public function show($id)
  //   {
  //       return view('user.profile', [
  //           'user' => User::findOrFail($id)
  //       ]);
  //   }

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

  public function show2($id) {
    // use the $id variable to query the db for a record
    $pizza = Pizza::findOrFail($id);
    return view('pizzas.show', [
        'pizza' => $pizza,
      ]);
  }

  public function create2() {
    return view('pizzas.create');
  }

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

  public function destroy($id) {

    $pizza = Pizza::findOrFail($id);
    $pizza->delete();

    return redirect('/pizzas');

  }

}
