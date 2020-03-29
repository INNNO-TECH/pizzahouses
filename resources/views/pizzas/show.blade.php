@extends('layouts.app')
@section('content')
        <div class="wrapper pizza-details">
        <h1>Order for {{$pizza->name}}</h1>
        <p class="type">Type - {{$pizza->type}}</p>
        <p class="base">Base - {{$pizza->base}}</p>
        <p class="toppings">Extra Toppings -</p>
        <ul>
            @foreach ($pizza->toppings as $topping)
                <li>{{$topping}}</li>                
            @endforeach
        </ul>
        </div>
        <form action="{{route('pizzas.destroy',$pizza->id)}}" method="POST">
            @csrf
            @method('delete')
            <button class="btn btn-warning ml-5">Complete Order</button>
        </form>
    <a href="/laravel6/public/pizzas" class="back"><- Back to all Pizzas</a>
@endsection
   
