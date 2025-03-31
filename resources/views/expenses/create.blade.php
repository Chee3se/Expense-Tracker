@extends('layouts.default')

@section('title', 'Create Expense')

@section('content')
    <h1 class="text-center text-4xl">Create Expense</h1>

    <form action="/expenses" method="POST" class="mx-auto mt-6 max-w-md flex flex-col gap-4">
        @csrf
        <div class="flex flex-col gap-4">
            <div class="flex flex-col">
                <label for="spent_at" class="text-lg">Date</label>
                <input type="datetime-local" name="spent_at" id="spent_at" class="border border-gray-200 rounded-lg p-2 focus:outline-none focus:ring focus:border-blue-300" required>
            </div>
            <div class="flex flex-col">
                <label for="amount" class="text-lg">Amount</label>
                <input type="number" name="amount" id="amount" class="border border-gray-200 rounded-lg p-2 focus:outline-none focus:ring focus:border-blue-300" step="0.01" required>
            </div>
            <div class="flex flex-col">
                <label for="notes" class="text-lg">Notes</label>
                <input type="text" name="notes" id="notes" class="border border-gray-200 rounded-lg p-2 focus:outline-none focus:ring focus:border-blue-300" required>
            </div>
            <div class="flex flex-col">
                <label for="category_id" class="text-lg">Category</label>
                <select name="category_id" id="category_id" class="border border-gray-200 rounded-lg p-2 focus:outline-none focus:ring focus:border-blue-300" required>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="bg-green-500 hover:bg-green-600 text-white text-2xl py-1 px-3.5 rounded-full">Create</button>
        </div>
    </form>
@endsection
