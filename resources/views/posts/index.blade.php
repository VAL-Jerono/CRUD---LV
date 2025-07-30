@extends('layouts.app')

@section('content')
<div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
    <div class="bg-white shadow-xl sm:rounded-lg p-8">
        {{-- Header --}}
        <div class="text-center mb-8">
            <h2 class="text-3xl font-extrabold text-pink-600 mb-2 tracking-wide">All Posts</h2>
            <p class="text-gray-600 text-md">Manage your content with style and ease.</p>
        </div>

        {{-- New Post Button --}}
        <div class="flex justify-center mb-6">
            <a href="{{ route('posts.create') }}"
               class="bg-pink-500 text-black font-semibold py-3 px-8 rounded-full shadow-md hover:bg-pink-600 transition duration-300 ease-in-out">
                + NEW POST
            </a>
        </div>

        {{-- Empty State --}}
        @if($posts->isEmpty())
            <div class="text-center text-gray-500 mt-12">
                <p class="text-lg">No posts available.</p>
                <p class="text-md">Click <span class="font-semibold text-pink-500">“New Post”</span> to create one.</p>
            </div>
        @else
            {{-- Show posts --}}
            <div class="grid gap-6">
                @foreach($posts as $post)
                    <div class="bg-pink-50 border border-pink-200 p-6 rounded-lg shadow-sm hover:shadow-md transition duration-300 flex items-start space-x-4">
                        @if($post->image)
                            <img src="{{ asset('storage/' . $post->image) }}" alt="Post Image" class="w-20 h-20 object-cover rounded-md shadow-md">
                        @endif
                        <div class="flex-1">
                            <h3 class="text-xl font-bold text-pink-700">{{ $post->title }}</h3>
                            <p class="text-gray-600 mt-2">{{ Str::limit($post->content, 100) }}</p>
                            <div class="flex justify-end mt-4 space-x-3">
                                <a href="{{ route('posts.edit', $post->id) }}"
                                   class="text-blue-600 font-semibold hover:underline">Edit</a>
                                <form action="{{ route('posts.destroy', $post->id) }}" method="POST"
                                      onsubmit="return confirm('Are you sure?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-500 font-semibold hover:underline">
                                        Delete
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
</div>
@endsection
