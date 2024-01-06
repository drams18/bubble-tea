<!-- resources/views/test.blade.php -->

@extends('layouts.app') <!-- Assurez-vous d'avoir un layout de base -->

@section('content')
    <h2>Test Page</h2>

    <p>This is a test page. Check out your <a href="{{ route('showCart') }}">shopping cart</a>.</p>
@endsection