@extends('layouts.app')

@section('title', 'Profile')

@section('content')
<div class="container">
    <h1>{{ auth()->user()->name }}'s Profile</h1>
    <p>Email: {{ auth()->user()->email }}</p>
    <!-- Form for updating user information -->

    <!-- Logout -->
    @auth
    <form method="POST" action="{{ route('logout') }}">
    @csrf
    <button type="submit" class="btn btn-outline-danger" >
    Logout
    </button>
    </form>
    @endauth
    @guest
    <a class="btn btn-outline-primary" href="{{ route('login') }}">Login</a>
    @endguest
</div>
@endsection
