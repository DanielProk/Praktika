@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Dashboard</h1>
        <p>Welcome to your dashboard!</p>
        <a href="{{ route('posts.index') }}" class="btn btn-primary">View Posts</a>
    </div>
@endsection
