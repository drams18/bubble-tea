<?php
// HomeController.php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // Récupérer les informations de l'utilisateur actuellement authentifié
        $user = Auth::user();

        // Passer les données de l'utilisateur à la vue
        return view('home', ['user' => $user]);
    }
}
