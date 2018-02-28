@extends('master')

@section('content')

		<div class="row row1">

			<div class="col-lg-6 col-lg-offset-3 col1">

					<form action="/newToDo" method="POST">

						{{ csrf_field() }}

						<div class="form-group">

							<input class="form-control" type="text" name="addToDo" placeholder="Add a new Todo!" required>

						</div>

					</form>

			</div>

		</div>

		<div class="row">

			<div class="col-lg-6">

				<div class="left-content">

				<center><h3>Todo Lists</h3></center>

				<hr>

					<ul>

						@foreach($allTodos as $todo)

							<li class="li">{{ $todo->task }}</li>

						@endforeach

					</ul>

				</div>

			</div>

			<div class="col-lg-6">

			<center><h3>Actions</h3></center>

			<hr>

				<div class="row">

					<div class="col-lg-2">

						<div class="right-content">

							<ul>

								@foreach($allTodos as $todo)

									<li class="li1"><a href="/delete/{{ $todo->id }}" class="btn alert-denger">Delete</a></li>

								@endforeach

							</ul>

						</div>

					</div>

					<div class="col-lg-2">

						<div class="right-content">

							<ul>

								@foreach($allTodos as $todo)

									<li class="li2"><a href="/update/{{ $todo->id }}" class="btn alert-primery">Update</a></li>

								@endforeach

							</ul>

						</div>

					</div>

					<div class="col-lg-2">

						<div class="right-content">

							<ul>

								@foreach($allTodos as $todo)

									@if($todo->completed === 0)

										<li class="li3"><a href="/mark/{{ $todo->id }}" class="btn alert-primery">Mark as Completed!</a></li>

									@else

										<li class="li4"><a class="btn alert-primery">Completed!</a></li>

									@endif

								@endforeach

							</ul>

						</div>

					</div>

				</div>

			</div>

		</div>



@stop('content')
