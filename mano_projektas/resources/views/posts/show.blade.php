@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>{{ $post->title }}</h1>
        <p>{{ $post->content }}</p>
        <a class="btn btn-primary" href="{{ route('posts.index') }}">Back</a>
    </div>
@endsection
