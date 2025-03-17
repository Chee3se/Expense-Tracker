<?php

use App\Http\Controllers\ExpenseController;
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::resource('expenses', ExpenseController::class);
Route::resource('categories', CategoryController::class);
