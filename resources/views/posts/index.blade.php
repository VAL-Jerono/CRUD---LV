@extends('layouts.app')

@section('content')
<div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
        <div class="flex justify-between items-center mb-4">
            <h2 class="text-xl font-bold">All Posts</h2>
            <a href="{{ route('posts.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
                + New Post
            </a>
        </div>

        @foreach($posts as $post)
            <div class="mb-6 border-b pb-4">
                <h3 class="text-lg font-semibold text-gray-800">{{ $post->title }}</h3>
                <p class="text-gray-600 mb-2">{{ $post->content }}</p>

                @if($post->image_path)
                    <img src="{{ asset('storage/' . $post->image_path) }}" alt="Post Image" class="w-1/2 my-2 rounded shadow">
                @endif

                <div class="flex space-x-4 mt-3">
                    <a href="{{ route('posts.edit', $post) }}" class="text-blue-600 hover:underline">Edit</a>

                    <form action="{{ route('posts.destroy', $post) }}" method="POST" onsubmit="return confirm('Delete this post?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-red-600 hover:underline">Delete</button>
                    </form>
                </div>
            </div>
        @endforeach

        @if ($posts->isEmpty())
            <p class="text-gray-500">No posts available. Click "New Post" to create one.</p>
        @endif
    </div>
</div>
@endsection
