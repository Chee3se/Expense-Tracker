@extends('layouts.default')

@section('title', 'Expenses')

@section('content')
    <div class="flex flex-row justify-center items-center gap-6 mt-12">
        <h1 class="text-center text-4xl">Expenses</h1>
        <div class="">
            <a href="/expenses/create" class="bg-green-500 hover:bg-green-600 text-white text-3xl py-1 px-3.5 rounded-full">
                +
            </a>
        </div>
    </div>

    <div class="mt-6 bg-white shadow overflow-hidden border rounded-lg">
        <div class="bg-gray-50 px-4 py-3 border-b border-gray-200">
            <h2 class="text-lg font-medium text-gray-900">Your Expenses</h2>
        </div>
        <ul class="divide-y divide-gray-200">
            @foreach($expenses as $expense)
                <li class="hover:bg-gray-50">
                    <div class="flex items-center px-4 py-4 sm:px-6">
                        <div class="min-w-0 flex-1 flex items-center">
                            <div class="flex-shrink-0 text-center w-fit text-gray-500 text-sm">
                                {{ $expense->date }}
                            </div>
                            <div class="min-w-0 flex-1 px-4 md:grid md:grid-cols-3 md:gap-4">
                                <div class="font-medium">
                                    {{ $expense->amount }}
                                </div>
                                <div class="text-gray-600 truncate">
                                    {{ $expense->notes }}
                                </div>
                                <div class="mt-2 md:mt-0">
                                    <span class="px-3 py-1 rounded-full text-sm font-medium bg-gray-100 flex items-center w-fit">
                                        {{ $expense->category->name }}
                                        <div class="w-3 h-3 ml-2 border rounded-full" style="background-color: {{ $expense->category->hex_color }}"></div>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="flex gap-4">
                            <a href="/expenses/{{ $expense->id }}/edit" class="text-gray-400 hover:text-blue-600">
                                <x-edit class="h-5 w-5"/>
                            </a>
                            <form action="/expenses/{{ $expense->id }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-gray-400 hover:text-red-600">
                                    <x-delete class="h-5 w-5"/>
                                </button>
                            </form>
                        </div>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
@endsection
