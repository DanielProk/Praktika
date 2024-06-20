@extends('layouts.app')

@section('content')
    <div class="container mx-auto">
        <h1 class="text-3xl font-bold mb-4">Posts</h1>
        <a href="{{ route('posts.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Create Post</a>

        @if ($message = Session::get('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mt-4" role="alert">
                <span class="block sm:inline">{{ $message }}</span>
            </div>
        @endif

        <table class="table-auto w-full mt-4">
            <thead>
                <tr class="bg-gray-200">
                    <th class="px-4 py-2">No</th>
                    <th class="px-4 py-2">Title</th>
                    <th class="px-4 py-2">Content</th>
                    <th class="px-4 py-2" width="280px">Action</th>
                </tr>
            </thead>
            <tbody>
                @php $i = 0 @endphp
                @foreach ($posts as $post)
                    <tr class="border-b">
                        <td class="px-4 py-2">{{ ++$i }}</td>
                        <td class="px-4 py-2">{{ $post->title }}</td>
                        <td class="px-4 py-2">{{ $post->content }}</td>
                        <td class="px-4 py-2">
                            <form action="{{ route('posts.destroy', $post->id) }}" method="POST">
                                <a class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-2 rounded mr-2" href="{{ route('posts.show', $post->id) }}">Show</a>
                                <a class="bg-green-500 hover:bg-green-700 text-white font-bold py-1 px-2 rounded mr-2" href="{{ route('posts.edit', $post->id) }}">Edit</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-2 rounded">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
