{{-- resources/views/profile/edit.blade.php --}}

@extends('layouts.app')

@section('content')
    <h1>Modifier le profil de {{ $user->name }}</h1>
    <form method="POST" action="{{ route('profile.update') }}">
        @csrf
        @method('put')

        <!-- Ajouter les champs de formulaire pour la modification du profil -->
        <!-- Par exemple: -->
        <label for="name">Nom:</label>
        <input type="text" id="name" name="name" value="{{ $user->name }}" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="{{ $user->email }}" required>

        <button type="submit">Mettre à jour le profil</button>
    </form>
@endsection
