<!-- resources/views/layouts/welcome.blade.php -->

@extends('layouts.app')

@section('title', 'Home')

@section('content')
<div class="text-center">
    <h1 class="text-4xl font-bold mb-4">Welcome to Our Laravel Application</h1>
    <p class="text-lg mb-4">This is the home page of our awesome Laravel application.</p>
    <div class="flex justify-center space-x-4">
        <a href="/about" class="px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-700 transition">Learn More About Us</a>
        <a href="/contact" class="px-4 py-2 bg-green-500 text-white rounded-lg hover:bg-green-700 transition">Contact Us</a>
    </div>
</div>
@endsection
