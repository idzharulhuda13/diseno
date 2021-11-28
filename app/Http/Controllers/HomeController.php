<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;

class HomeController extends Controller
{
    public function index()
    {
        return view('pages.home');
    }

    public function store(Request $request)
    {
        $cart = new Cart();

        $cart->product = request('product');
        $cart->level = request('level');
        $cart->price = request('price');

        $cart->save();

        return redirect()->route('home');
    }
}
