@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="my-4">Create Post</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('posts.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="title" class="form-label">Title:</label>
                <input type="text" name="title" class="form-control" id="title" placeholder="Enter title">
            </div>

            <div class="mb-3">
                <label for="content" class="form-label">Content:</label>
                <textarea name="content" class="form-control" id="content" rows="5" placeholder="Enter content"></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection

