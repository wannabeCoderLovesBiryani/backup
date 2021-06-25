@extends('layouts.layout')

@section('content')
<div class="wrapper create-pizza">
  <h1>Create a New Pizza</h1>
  <!-- Linked to "post/pizzas" method -->
  <form action="/pizzas" method="POST">
<!-- Preventing CSRF Requests. Laravel automatically generates a CSRF "token" for each active
user session managed by the application.  -->
  @csrf
<!-- Cross-site request forgery is an example of a confused deputy attack against a
web browser because the web browser is tricked into submitting a forged request by a less privileged attacker.
 CSRF commonly has the following characteristics: It involves sites that rely on a user's identity. -->

    <label for="name">Your name:</label>
    <input type="text" name="name" id="name" required>
    <label for="type">Choose type of pizza:</label>
    <select name="type" id="type">
      <option value="margarita">Margarita</option>
      <option value="hawaiian">Hawaiian</option>
      <option value="veg supreme">Veg Supreme</option>
      <option value="volcano">Volcano</option>
    </select>
    <label for="base">Choose crust:</label>
    <select name="base" id="base">
      <option value="thick">Thick</option>
      <option value="thin & crispy">Thin & Crispy</option>
      <option value="cheese crust">Cheese Crust</option>
      <option value="garlic crust">Garlic Crust</option>
    </select>
    <!-- PASS AN ARRAY OF TOOPINGS DATA -->
    <fieldset>
      <label>Extra toppings:</label>
      <input type="checkbox" name="toppings[]" value="mushrooms">Mushrooms<br />
      <input type="checkbox" name="toppings[]" value="peppers">Peppers<br />
      <input type="checkbox" name="toppings[]" value="garlic">Garlic<br />
      <input type="checkbox" name="toppings[]" value="olives">Olives<br />
    </fieldset>
    <input type="submit" value="Order Pizza">
  </form>
</div>
@endsection
