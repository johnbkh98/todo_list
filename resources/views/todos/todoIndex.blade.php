@extends('layouts.app')

@section('main_layout')

	<p>My Todo List</p>
	<div class='container'>
		@foreach($all_todos as $todo)
		<div class='mb-2 card {{ $todo->isComplete() ? " border-success" : ""  }}'>
			<div class='card-body'>
				<p> {{ $todo->todo }} </p>
				<span>
				@if($todo->isComplete())
					<span class="mb-2 badge rounded-pill bg-success">Todo Comepleted<i class="fa fa-check" aria-hidden="true"></i></span>
				@else
					<form method='POST' action="/completed/{{ $todo->id }}">
						@method('PATCH')
						@csrf
						<button type='submit' class='btn btn-success sm'>Mark Complete</button>
					</form>
				@endif
				<form method='POST' action="/delete/{{ $todo->id }}">
					@method('DELETE')
					@csrf
					<span>
						<button type='submit' class='btn btn-danger sm'><i class="fa fa-trash" aria-hidden="true"></i></button>
					</span>
					
				</form>
				</span>
			</div>
		</div>
			@endforeach
		<button class="btn btn-primary" onclick="location.href='/create'" type="button"> Add TODO</button>
	</div>

@endsection()

