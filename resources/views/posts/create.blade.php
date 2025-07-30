@extends('layouts.app')

@section('content')
<div class="max-w-xl mx-auto mt-10 p-6 bg-white shadow rounded">
    <h2 class="text-2xl font-bold mb-6">Create a New Post</h2>

    <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-4">
            <label class="block text-sm font-semibold">Caption</label>
            <input type="text" name="caption" class="w-full border rounded p-2" required>
        </div>

        <div class="mb-4">
            <label class="block text-sm font-semibold">Image</label>
            <input type="file" name="image" class="w-full border rounded p-2" accept="image/*" required>
        </div>

        <button type="submit"
                class="bg-green-500 text-black font-bold py-2 px-6 rounded-full shadow-md hover:bg-green-900 transition duration-300">
            Post
        </button>

    </form>
</div>
@endsection
