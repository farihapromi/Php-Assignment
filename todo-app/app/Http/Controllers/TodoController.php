<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;
class TodoController extends Controller
{

    public function index()
    {
        $todos = Todo::all();
        return view('todos.index', compact('todos'));
    }

    // Store a new to-do
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
        ]);

        Todo::create($request->all());
        return redirect('/');
    }

    // Edit an existing to-do
    public function edit($id)
    {
        $todo = Todo::find($id);
        return view('todos.edit', compact('todo'));
    }

    // Update a to-do
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
        ]);

        $todo = Todo::find($id);
        $todo->update($request->all());
        return redirect('/');
    }

    // Delete a to-do
    public function destroy($id)
    {
        Todo::find($id)->delete();
        return redirect('/');
    }
}