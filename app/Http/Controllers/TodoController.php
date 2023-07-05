<?php

namespace App\Http\Controllers;

use App\Models\{Todo,TodoItem};

use Illuminate\Http\Request;

class TodoController extends Controller
{
  // ******Views*******
  public function index () {
    $all_todos = Todo::orderBy('completed_at')->get();
    return view('todos.todoIndex', ['all_todos' => $all_todos]);
  }

  public function createView () {
    return view('todos.create');
  }

  public function editNameView ($id) {
    $todo = Todo::where('id', $id)->first();
    return view('todos.edit-name', ['todo' => $todo]);
  }

  public function addItemView ($id) {
    $todo = Todo::where('id', $id)->first();
    return view('todos.add-item', ['todo' => $todo]);
  }

  public function todoItemsView ($id) {
    $todo_name = Todo::where('id', $id)->first()->todo;
    $todo_items = TodoItem::where('todo_id', $id)->get();
    return view('todos.todo-items', ['todo_items' => $todo_items, 'todo_name' => $todo_name]);
  }

  // ******Views*********

  public function store () {
    request()->validate([
      'todo' => 'required|string'
    ]);
    
    Todo::create(['todo' => request('todo')]);
    return redirect('/');
  }

  public function addItem ($id) {
    request()->validate([
      'todo_item' => 'required|string'
    ]);

    $todo_item = TodoItem::create(['todo_item' => request('todo_item'), 'todo_id' => $id]);
    return redirect('/');
  }

  public function editName ($id) {
    request()->validate([
      'todo' => 'required|string'
    ]);
    $new_todo_name  = request('todo');

    $todo = Todo::where('id', $id)->first();
    $todo->todo = $new_todo_name;
    $todo->save();
    return redirect('/');
  }

  public function delete ($id) {
    $todo = Todo::where('id', $id)->first();
    $todo->delete();
    return redirect('/');
  }

  public function deleteItem ($id) {
    $todo_item = TodoItem::where('id', $id)->first();
    $todo_item->delete();
    return back();
  }

  public function markComplete ($id) {
    $todo = Todo::where('id', $id)->first();
    $todo->completed_at = now();
    $todo->save();
    return redirect('/');
  }
}