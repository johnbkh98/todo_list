@extends('layouts.app')

@section('main_layout')

  <h1> Todo Items for: {{ $todo_name }} </h1>
  <div class="container">
    <ul class="list-group">
      @foreach($todo_items as $item)
        <li class="list-group-item justify-content-between"> 
          {{ $item->todo_item }} 

        @if($item->isComplete())
					<span class="mb-2 badge rounded-pill bg-success">completed<i class="fa fa-check" aria-hidden="true"></i></span>
				@else
					<form method='POST' action="/completed-item/{{ $item->id }}">
						@method('PATCH')
						@csrf
						<button type='submit' class='btn btn-success sm'>Mark Complete</button>
					</form>
				@endif

          <form method='POST' action="/delete-item/{{ $item->id }}">
						@method('DELETE')
						@csrf
							<div class='m-1'>
								<button type='submit' title='Delete todo item' class='btn btn-danger sm'><i class="fa fa-trash" aria-hidden="true"></i></button>
							</div>
        </li>
					</form>
      @endforeach
    </ul>
  </div>

@endsection()