<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function add(Product $product)
    {

     // add the product to cart
\Cart::session(auth()->id())->add(array(
    'id' => $product->id,
    'name' => $product->name,
    'price' => $product->price,
    'quantity' => 1,
    'attributes' => array(),
    'associatedModel' => $product
));

         return redirect()->route('cart.index');

    }
    public function index()
    {
        $items = \Cart::session(auth()->id())->getcontent();
        return view('cart.index',compact('items'));
    }
    public function destroy($itemId)
    {
       \Cart::session(auth()->id())->remove($itemId);
        return back();
    }
    public function update($rowId)
    {
        \Cart::session(auth()->id())->update($rowId,[
            'quantity' => [
            'relative' => false,
            'value' => request('quantity')]
        ]);
        return back();
    }
    public function checkout()
    {
        return view('cart.checkout');
    }
}
