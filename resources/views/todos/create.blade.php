@extends('layouts.app')

@section('main_layout')
  <p><b>Create A New To do</b></p>
  @if($errors->any())
  <div class="alert alert-danger d-flex align-items-center" role="alert">
    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
    <div>
      {{print_r($errors->first('todo'))}}
    </div>
  </div>
  @endif
  <form method='POST' action='/create'>
    <div class='form-group'>
      @csrf
      <input name='todo' placeholder='Enter a new to do' class='form-control mb-2' required/>
      <button type="sumbit" class="btn btn-primary">Add Todo</button>
    </div>
  </form>
  <script src="" async defer></script>
@endsection()

