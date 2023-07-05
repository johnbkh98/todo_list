@extends('layouts.app')

@section('main_layout')
  <p><b>Edit Todo name</b></p>
  @if($errors->any())
  <div class="alert alert-danger d-flex align-items-center" role="alert">
    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
    <div>
      {{print_r($errors->first('todo'))}}
    </div>
  </div>
  @endif
  <form method='POST' action='/edit-name/{{ $todo->id }}'>
    <div class='form-group'>
      @method('PATCH')
      @csrf
      <input name='todo' placeholder='Enter new name' class='form-control mb-2'/>
      <button type="sumbit" class="btn btn-primary">Add Todo</button>
    </div>
  </form>
  <script src="" async defer></script>
@endsection()

