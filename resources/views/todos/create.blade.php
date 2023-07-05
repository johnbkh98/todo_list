@extends('layouts.app')

@section('main_layout')
  <p><b>New To do</b></p>
  <form method='POST' action='/create'>
    <div class='form-group'>
      @csrf
      <input name='todo' placeholder='Enter a new to do' class='form-control mb-2'/>
      <button type="sumbit" class="btn btn-primary">Add Todo</button>
    </div>
  </form>
  <script src="" async defer></script>
@endsection()

