<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

class ProfileController extends Controller
{

    public function edit()
    {
        // Récupérer les informations de l'utilisateur actuellement authentifié
        $user = Auth::user();

        // Passer les données de l'utilisateur à la vue
        return view('profile.edit_profile', ['user' => $user]);
    }

    public function update(Request $request)
    {
        $user = Auth::user();

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users,email,'.$user->id,
            // Ajoutez d'autres règles de validation en fonction de vos besoins
        ]);

        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            // Ajoutez d'autres champs que vous souhaitez mettre à jour
        ]);

        return redirect()->route('profile.edit')->with('success', 'Profile updated successfully.');
    }

}
