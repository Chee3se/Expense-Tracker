@extends('layouts.default')

@section('title', 'Category Details')

@section('content')
    <h1 class="text-center text-4xl">Category</h1>
    <div class="border rounded-lg shadow-sm mt-6 overflow-hidden bg-white">
        <div class="flex flex-row p-4 bg-gray-50 border-b border-gray-200">
            <div class="flex items-center">
                <p class="font-medium text-lg">{{ $category->name }}</p>
                <div class="w-5 h-5 ml-2 my-auto border rounded-full" style="background-color: {{ $category->hex_color }}"></div>
                <span class="ml-3 text-sm text-gray-500">{{ $category->expenses->count() }} expenses</span>
            </div>
            <div class="flex gap-4 ml-auto">
                <a href="/categories/{{ $category->id }}/edit" class="hover:text-blue-600">
                    <x-edit class="h-5 w-5"/>
                </a>
                <form action="/categories/{{ $category->id }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="hover:text-red-600">
                        <x-delete class="h-5 w-5"/>
                    </button>
                </form>
            </div>
        </div>

        <div class="divide-y divide-gray-100">
            @forelse($category->expenses as $expense)
                <div class="flex flex-row p-3 items-center">
                    <div class="flex-grow flex gap-4">
                        <span class="text-gray-600 w-24">{{ $expense->date }}</span>
                        <span class="font-medium">{{ $expense->amount }}</span>
                        <span class="text-gray-600">{{ $expense->notes }}</span>
                    </div>
                    <div class="flex gap-3">
                        <a href="/expenses/{{ $expense->id }}/edit" class="text-gray-400 hover:text-blue-600">
                            <x-edit class="h-4 w-4"/>
                        </a>
                    </div>
                </div>
            @empty
                <div class="p-3 text-gray-500 italic text-sm">No expenses in this category</div>
            @endforelse
        </div>
    </div>
@endsection
