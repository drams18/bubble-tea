{{-- resources/views/profile/show.blade.php --}}

@extends('layouts.app')

@section('content')
<p>Name: {{ $user->name }}</p>
<p>Email: {{ $user->email }}</p>
@endsection
