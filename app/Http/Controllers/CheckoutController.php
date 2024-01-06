<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function checkout()
    {
        // Logique de checkout ici

        // Par exemple, vider le panier après le checkout
        session()->forget('cart');

        return redirect()->route('home')->with('success', 'Checkout successful');
    }
}
