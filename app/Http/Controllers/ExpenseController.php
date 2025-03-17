<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Expense;
use Illuminate\Http\Request;

class ExpenseController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $expenses = Expense::with('category')->get();
        return view('expenses.index', compact('expenses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('expenses.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'date' => 'required|date',
            'amount' => 'required|numeric',
            'category_id' => 'required|exists:categories,id',
            'notes' => 'nullable|string',
        ]);

        Expense::create($request->all());

        return redirect()->route('expenses.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Expense $expense)
    {
        return view('expenses.show', compact('expense'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Expense $expense)
    {
        $categories = Category::all();
        return view('expenses.edit', compact('expense', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Expense $expense)
    {
        $request->validate([
            'date' => 'required|date',
            'amount' => 'required|numeric',
            'category_id' => 'required|exists:categories,id',
            'notes' => 'nullable|string',
        ]);

        $expense->update($request->all());

        return redirect()->route('expenses.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Expense $expense)
    {
        $expense->delete();
        return redirect()->route('expenses.index');
    }
}
