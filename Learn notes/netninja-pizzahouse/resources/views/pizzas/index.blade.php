@extends('layouts.layout')
<!-- means "layouts/layout.blade.php -->

@section('content')

    <div class="flex-center position-ref full-height">

    <!-- Actually both object indexing, $pizzaValue['type'] and $pizzaValue->type work -->
        <div class="content">

            @foreach ($pizzas as $pizzaValue)
                <div>
                    <span>
                        - {{$pizzaValue->name}} ordered {{$pizzaValue['type']}} with base {{$pizzaValue->base}}
                    </span>
                </div>
            @endforeach

            <br>
            <br>
            <a class="mssg"> {{ session("mssg") }} </a>
            <br>
            <br>
            <a href="pizzas/create"> Order a pizza </a>

        </div>
    </div>
@endsection

