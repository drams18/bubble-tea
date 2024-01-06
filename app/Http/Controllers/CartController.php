<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BubbleTea;

class CartController extends Controller
{
    public function showAddToCart()
    {
        $bubbleTeas = BubbleTea::all();
        return view('cart.add-to-cart', compact('bubbleTeas'));
    }

    public function addToCart($id, Request $request)
    {
        $bubbleTea = BubbleTea::find($id);

        if (!$bubbleTea) {
            return redirect()->route('showAddToCart')->with('error', 'Bubble Tea not found');
        }

        $quantity = $request->input('quantity', 1);

        $cart = session()->get('cart', []);

        if (isset($cart[$id])) {
            $cart[$id]['quantity'] += $quantity;
        } else {
            $cart[$id] = [
                'id' => $bubbleTea->id,
                'name' => $bubbleTea->name,
                'price' => $bubbleTea->price,
                'quantity' => $quantity,
                'image_path' => $bubbleTea->image_path, // Ajout du chemin de l'image
            ];
        }

        session(['cart' => $cart]);

        return redirect()->route('showAddToCart')->with('success', 'Bubble Tea added to cart');
    }

    public function showCart()
    {
        $cart = session()->get('cart', []);
        $cartTotal = array_sum(array_map(fn($item) => $item['price'] * $item['quantity'], $cart));
    
        // Vérifiez si chaque élément du panier a un chemin d'image défini
        foreach ($cart as &$item) {
            if (!isset($item['image_path'])) {
                // Assurez-vous de définir un chemin d'image par défaut si nécessaire
                $item['image_path'] = 'default_image_path.jpg';
            }
        }
    
        return view('cart', compact('cart', 'cartTotal'));
    }

    public function updateCart($id, Request $request)
    {
        $quantity = $request->input('quantity', 1);

        $cart = session()->get('cart', []);

        if (isset($cart[$id])) {
            $cart[$id]['quantity'] = $quantity;
        }

        session(['cart' => $cart]);

        return redirect()->route('showCart')->with('success', 'Cart updated');
    }

    public function removeFromCart($id)
    {
        $cart = session()->get('cart', []);

        if (isset($cart[$id])) {
            unset($cart[$id]);
            session(['cart' => $cart]);
        }

        return redirect()->route('showCart')->with('success', 'Item removed from cart');
    }

    public function myOrder()
    {
        return redirect()->route('showCart');
    }
}
