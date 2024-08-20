@extends('layouts.app')

@section('main_layout')

	<h3>My Todo Lists</h3>
	<div class='container'>
    @if(!$all_todos->count())
      <p>Please add some to do lists</p>
    @endif
		@foreach($all_todos as $todo)
		<div class='mb-2 card {{ $todo->isComplete() ? " border-success" : ""  }}'>
			<div class='card-body'>
				<h5> {{ $todo->todo }} </h5>
				@if($todo->isComplete())
					<span class="mb-2 badge rounded-pill bg-success">Todo Comepleted<i class="fa fa-check" aria-hidden="true"></i></span>
				@else
					<form method='POST' action="/completed/{{ $todo->id }}">
						@method('PATCH')
						@csrf
						<button type='submit' class='btn btn-success sm'>Mark Complete</button>
					</form>
				@endif

				<div class='d-flex flex-row'>
					<form action="/view-items/{{ $todo->id }}">
						<div class='m-1'>
							<button type='submit' title='view todo' class='btn btn-secondary sm'><i class="fa fa-eye" aria-hidden="true"></i></button>
						</div>
					</form>

					<form action="/add-item/{{ $todo->id }}">
						<div class='m-1'>
							<button type='submit' title='Add todo' class='btn btn-secondary sm'><i class="fa fa-plus-circle" aria-hidden="true"></i></button>
						</div>
					</form>

					<form action="/edit-name/{{ $todo->id }}">
						<div class='m-1'>
							<button type='submit' title='Edit todo' class='btn btn-primary sm'><i class="fa fa-pencil-square-o" aria-hidden="true"></i></i></button>
						</div>
					</form>

					<form method='POST' action="/delete/{{ $todo->id }}">
						@method('DELETE')
						@csrf
							<div class='m-1'>
								<button type='submit' title='Delete todo' class='btn btn-danger sm'><i class="fa fa-trash" aria-hidden="true"></i></button>
							</div>
					</form>

				</div>
				</span>
			</div>
		</div>
			@endforeach
		<button class="btn btn-primary m-3" onclick="location.href='/create'" type="button"> Add new TODO</button>
	</div>

@endsection()

