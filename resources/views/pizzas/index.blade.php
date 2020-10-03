@extends('layouts.layout')

@section('content')
        <div class="flex-center position-ref full-height">


            <div class="content">
                <div class="title m-b-md">
                    Pizza List
                </div>


         <!-- @for($i = 0; $i < 5; $i++)
            <p>The value of i is {{ $i }}</p>
             @endfor -->

           <!--  @for($i = 0; $i < count($pizzas); $i++)
             <p>{{ $pizzas[$i]['type'] }}</p>
             @endfor -->

             @foreach($pizzas as $pizza)
             <div>
            {{ $pizza->name }} - {{ $pizza->type }} - {{ $pizza->base }}
             </div>
             @endforeach
            </div>
        </div>
    @endsection
