<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $todos = Todo::orderBy('id', 'desc')->get();
        $pageTitle = 'Todo App';
        return view('index', compact('todos', 'pageTitle'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pageTitle = 'Add Todo';
        return view('create', compact('pageTitle'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'agenda' => 'required|max:255|string',
            'deskripsi' => 'required|max:255|string',
            'tanggal' => 'required|date'
        ]);

        $todo = new Todo;
        $todo->agenda = $request->agenda;
        $todo->deskripsi = $request->deskripsi;
        $todo->tanggal = $request->tanggal;

        $todo->save();

        return redirect('/')->with('success', 'Todo created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Todo $todo)
    {
        $pageTitle = 'Todo ' . $todo->id;
        return view('show', compact('todo', 'pageTitle'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Todo $todo)
    {
        $pageTitle = 'Edit Todo ' . $todo->id;
        return view('edit', compact('todo', 'pageTitle'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Todo $todo)
    {
        $request->validate([
            'agenda' => 'required|max:255|string',
            'deskripsi' => 'required|max:255|string',
            'tanggal' => 'required|date'
        ]);

        $todo->fill($request->post())->save();

        return redirect('/')->with('success', 'Todo successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Todo $todo)
    {
        $todo->delete();

        return redirect('/')->with('success', 'Todo successfully deleted');
    }
}
