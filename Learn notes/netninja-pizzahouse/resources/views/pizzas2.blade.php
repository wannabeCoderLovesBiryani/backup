@extends('layouts.layout')
<!-- means "layouts/layout.blade.php -->

@section('content')

    <div class="flex-center position-ref full-height">

    <!-- Actually both object indexing, $pizzaValue['type'] and $pizzaValue->type work -->
        <div class="content">
            <p>
                @foreach ($pizzas as $pizzaValue)
                    <span>
                        - {{ $pizzaValue['type'] }}                
                    </span>
                @endforeach
            </p>

            @foreach ($pizzas as $pizzaValue)
                <div>
                    <span> 
                        - {{$pizzaValue->name}} ordered {{$pizzaValue['type']}} with base {{$pizzaValue->base}} 
                    </span>
                </div>
            @endforeach

        </div>
    </div>
@endsection
