@extends('layouts.app')
@section('content')
<h4>your cart </h4>


<table class="table">
    <thead>
        <tr>
            <th>Name</th>
            <th>unit Price</th>
            <th>subtotal Price</th>
            <th>Quantity</th>

            <th>Action</th>
        </tr>
    </thead>
    @foreach ($items as $item)
    <tbody>
        <tr>
        <td scope="row">{{$item->name}}</td>
            <td>
                {{$item->price}}</td>
            <td>
               {{ Cart::session(auth()->id())->get($item->id)->getPriceSum()}}
            </td>
            <td>
                <form action="{{route('cart.update',$item->id)}}">
                    <input name="quantity" type="number" value="{{$item->quantity}}">
                    <input type="submit" value="save">
                </form>

            </td>
            <td>
                <a href="{{route('cart.destroy',$item->id)}}">Delete</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>


   <h4 fa-pull-right> Total:{{ Cart::session(auth()->id())->getTotal()}}.tk  </h4>

<a class="btn btn-primary" href="{{route('cart.checkout')}}" role="button">proced to checkout</a>
@endsection
