@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Posts</h1>
        <a href="{{ route('posts.create') }}" class="btn btn-primary">Create Post</a>
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Title</th>
                    <th>Content</th>
                    <th width="280px">Action</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $i = 0;
                @endphp
                @foreach ($posts as $post)
                    <tr>
                        <td>{{ ++$i }}</td>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->content }}</td>
                        <td>
                            <form action="{{ route('posts.destroy', $post->id) }}" method="POST">
                                <a class="btn btn-info" href="{{ route('posts.show', $post->id) }}">Show</a>
                                <a class="btn btn-primary" href="{{ route('posts.edit', $post->id) }}">Edit</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
