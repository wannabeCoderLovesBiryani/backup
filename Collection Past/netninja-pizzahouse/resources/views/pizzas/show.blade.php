@extends('layouts.layout')

@section('content')
<div>
<div class="wrapper pizza-details">
  <h1>Order for {{ $pizza->name }}</h1>
  <p class="type">Type - {{ $pizza->type }}</p>
  <p class="base">Base - {{ $pizza->base }}</p>
</div>
<!--
    NO SPACES IN LARAVEL 8
    <form action="/pizzas/{{ $pizza->id }}" method="POST">
-->

<form action="/pizzas/{{$pizza->id}}" method="POST">
<!-- Cross-site request forgery is an example of a confused deputy attack against a
web browser because the web browser is tricked into submitting a forged request by a less privileged attacker.
 CSRF commonly has the following characteristics: It involves sites that rely on a user's identity. -->
 @method('DELETE')
 @csrf


    <button>Complete Order</button>
  </form>
<a href="/pizzas" class="back"><- Back to all pizzas</a>
</div>
@endsection
