@extends('layouts.layout')
<!-- means "layouts/layout.blade.php -->

@section('content')

    <div class="flex-center position-ref full-height">
        <div class="content">
            @isset($greeting)
                <h1> {{ $greeting }} </h1>
            @endisset
            {{-- isset= !is_null --}}
            <div class="title m-b-md">
                Pizza List
            </div>
            <h1> Special pizza </h1>
            {{-- $type, $base, $price and $pizzas are all properties passed --}}

            <p>{{ $type ?? 'No special pizza' }} - {{ $base ?? 'No base' }} - £{{ $price ?? '0.00' }}</p>
            <!-- if, elseif, else, endif -->

            @isset($price)
                @if ($price > 15)
                    <p>this pizza is expensive</p>
                @elseif($price < 5) <p>this pizza is cheap</p>
                    @else
                        <p>this pizza is good value</p>
                @endif
                <!-- if(true){} but unless(false){} -->
                @unless($base != 'cheesy crust')
                    <span>You don't have a cheesy crust, </span>
                @endunless
            @endisset

            @php
                $name = 'shaun';
                echo "Ordered by $name";
            @endphp

            <p>
                @for ($i = 0; $i < count($pizzas); $i++)
                    <span>{{ $pizzas[$i]['type'] }}</span>
                @endfor
            </p>

            @foreach ($pizzas as $pizzaValue)
                <div>
                    {{-- $loop variable provides access to some useful bits of information such as the current loop index 
                        and whether this is the first or last iteration through the loop: --}}
                    {{ $loop->index + 1 }} - {{ $pizzaValue['type'] }} - {{ $pizzaValue['base'] }}
                    @if ($loop->first)
                        <span> - first in the loop</span>
                    @endif
                    @if ($loop->last)
                        <span> - last in the loop</span>
                    @endif
                </div>
            @endforeach

        </div>
    </div>
@endsection
