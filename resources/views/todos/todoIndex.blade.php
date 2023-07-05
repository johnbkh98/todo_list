@extends('layouts.app')

@section('main_layout')
	<p>My Todo List</p>
	<div class='container'>
		@foreach($all_todos as $todo)
		<div class='mb-2 card'>
			<div class='card-body'>
				<p> {{ $todo->todo }} </p>
				<span><a class='btn btn-success sm'>Mark Complete</a></span>
				<a class='ml-2'><i class="fa fa-trash" aria-hidden="true"></i></a>
			</div>
		</div>
			@endforeach
		<button class="btn btn-primary" onclick="location.href='/create'" type="button"> Add TODO</button>
	</div>

@endsection()

