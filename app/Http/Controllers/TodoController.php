<?php

namespace App\Http\Controllers;

use App\Models\Todo;

use Illuminate\Http\Request;

class TodoController extends Controller
{
  public function index () {
    $all_todos = Todo::orderBy('completed_at')->get();
    return view('todos.todoIndex', ['all_todos' => $all_todos]);
  }
  public function createView () {
    return view('todos.create');
  }

  public function store () {
    Todo::create(['todo' => request('todo')]);
    return redirect('/');
  }

  public function markComplete ($id) {
    $todo = Todo::where('id', $id)->first();
    $todo->completed_at = now();
    $todo->save();
    return redirect('/');
  }


  // rename todolist
  // delete todolist
  // add todo item  to a todo list
  // see all todo on a todo list
  // delete todo item from a todo list
  // mark todo items as complete
}