<?php

namespace App\Http\Controllers;

use App\Models\Todo;

use Illuminate\Http\Request;

class TodoController extends Controller
{
  public function index () {
    $all_todos = Todo::get();
    return view('todos.todoIndex', ['all_todos' => $all_todos]);
  }
  public function createView () {
    return view('todos.create');
  }

  public function store () {
    $todo = Todo::create(['todo' => request('todo')]);
    return redirect('/');
  }

  // create a todo list
  // view list of todos
  // rename todolist
  // delete todolist
  // add todo item  to a todo list
  // see all todo on a todo list
  // delete todo item from a todo list
  // mark todo items as complete
}