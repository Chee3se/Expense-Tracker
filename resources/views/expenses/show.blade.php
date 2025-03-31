@extends('layouts.default')

@section('title', 'Expense Details')

@section('content')

    <h1 class="text-center text-4xl">Expense Details</h1>

    <div class="mx-auto mt-6 max-w-md flex flex-col gap-4">
        <div class="flex flex-col">
            <label for="spent_at" class="text-lg">Date</label>
            <input type="datetime-local" name="spent_at" id="spent_at" class="border border-gray-200 rounded-lg p-2 focus:outline-none focus:ring focus:border-blue-300" value="{{ $expense->date }}" readonly>
        </div>
        <div class="flex flex-col">
            <label for="amount" class="text-lg">Amount</label>
            <input type="number" name="amount" id="amount" class="border border-gray-200 rounded-lg p-2 focus:outline-none focus:ring focus:border-blue-300" step="0.01" value="{{ $expense->amount }}" readonly>
        </div>
        <div class="flex flex-col">
            <label for="notes" class="text-lg">Notes</label>
            <input type="text" name="notes" id="notes" class="border border-gray-200 rounded-lg p-2 focus:outline-none focus:ring focus:border-blue-300" value="{{ $expense->notes }}" readonly>
        </div>
        <div class="flex flex-col">
            <label for="category_id" class="text-lg">Category</label>
            <input type="text" name="category_id" id="category_id" class="border border-gray-200 rounded-lg p-2 focus:outline-none focus:ring focus:border-blue-300" value="{{ $expense->category->name }}" readonly>
        </div>
        <div class="flex flex-col">
            <a href="/expenses/{{ $expense->id }}/edit" class="bg-blue-500 hover:bg-blue-600 text-white text-2xl py-1 px-3.5 rounded-full text-center">Edit</a>
        </div>
    </div>

@endsection
