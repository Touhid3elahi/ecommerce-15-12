@extends('layouts.app')

@section('content')
        <div class="container text-center">
            <div class="row justify-content-center">
                <div class="col-md-9">
                    <div class="card">
                        <div class="card-header"><h2>{{ __('Products') }}</h2></div>


            <div class="row justify-content-center">
            @foreach ($allproducts as $product)

                <div class="col-4">
            <div class="card">
                <img class="card-img-top" src="{{asset('product.jpg')}}" alt="Card image cap">
                <div class="card-body">
                    <h4 class="card-title">{{$product->name}}</h4>
                    <p class="card-text">{{$product->description}}</p>
                    <h4>Tk.{{$product->price}}</h4>
                </div>
                <div class="card-body">
                <a href="{{route('cart.add',$product->id)}}" class="card-link">Add Card</a>
                </div>
            </div>
            </div>

            @endforeach
            </div>
                </div></div></div>
    </div>
@endsection
