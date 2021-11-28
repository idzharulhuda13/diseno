<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;

class CartController extends Controller
{
    public function index()
    {
        $cart = Cart::all();
        return view('pages.cart', [
            'cart' => $cart
        ]);
    }

    public function destroy($id)
    {
        $cart = Cart::findOrFail($id);

        $cart->delete($cart);

        return redirect()->route('cart');
    }
}
