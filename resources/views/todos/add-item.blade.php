@extends('layouts.app')

@section('main_layout')

  <h1>Add an Item to Todo</h1>
  <form method='POST' action='/add-item{{ $todo->id }}'>
    <div class='form-group'>
      @csrf
      <input name='todo_item' placeholder='Enter a todo item' class='form-control mb-2' required/>
      <button type="sumbit" class="btn btn-primary">Add Todo</button>
    </div>
  </form>

@endsection()