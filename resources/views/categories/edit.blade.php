@extends('layouts.default')

@section('title', 'Edit Category')

@section('content')
    <h1 class="text-center text-4xl">Edit Category</h1>

    <form action="/categories/{{ $category->id }}" method="POST" class="mx-auto mt-6 w-52 flex flex-col gap-4">
        @csrf
        @method('PUT')
        <div class="flex flex-col gap-4">
            <div class="flex flex-col">
                <label for="name" class="text-lg">Name</label>
                <input type="text" name="name" id="name" class="border border-gray-200 rounded-lg p-2 focus:outline-none focus:ring focus:border-blue-300" value="{{ $category->name }}" required>
            </div>
            <div class="flex flex-col">
                <label for="hex_color" class="text-lg">Color</label>
                <input type="color" name="hex_color" id="hex_color" class="border border-gray-200 rounded-lg p-2 focus:outline-none focus:ring focus:border-blue-300" value="{{ $category->hex_color }}" required>
            </div>
            <button type="submit" class="bg-green-500 hover:bg-green-600 text-white text-2xl py-1 px-3.5 rounded-full">Update</button>
        </div>
    </form>
@endsection
