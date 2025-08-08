<!--{{--@extends - Use the main layout file as the base template--}}-->
@extends('layouts.app')

<!--{{--@section('content') - Define the content that goes into the layout's @yield('content')--}}-->
@section('content')

<div class="container text-center py-5">
    @auth <!-- Show welcome message for logged-in users -->
        <h1 class="mb-4">Welcome, {{ Auth::user()->name }}!</h1>
        <p class="lead">You are logged Successfuly.</p>
   
    @else <!-- Show welcome message for guests -->
    <h1 class="mb-4">Welcome to the Articles App</h1>
    <p class="lead">This website was designed by (Laravel + Bootstrap)</p>
     @endauth
    <!-- Test buttons to verify layout -->
    <div class="mt-4">
        <a href="{{ route('articles.index') }}" class="btn btn-success me-2">View Articles</a>
        @auth
            <a href="{{ route('articles.create') }}" class="btn btn-primary">Create Article</a>
        @else
            <a href="{{ route('login') }}" class="btn btn-outline-primary">Login</a>
        @endauth
    </div>
</div>
@endsection