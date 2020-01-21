@extends('layout')

@section('title', 'Jobs')

@section('content')
<nav class="navbar navbar-light bg-light justify-content-between">
	<a class="navbar-brand">Jobs</a>
	<form class="form-inline">
		<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
		<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
	</form>
</nav>

<div class="row">
	<div class="card-group">

		@foreach($jobs as $job)
		<div class="col-sm-4">
			<div class="card" style="width: 18rem; margin:5px;">
				<!-- <img src="..." class="card-img-top" alt="..."> -->
				<div class="card-body">
					<h5 class="card-title">{{$job->title}}</h5>
					<p class="card-text"></p>
				</div>
				<ul class="list-group list-group-flush">
					<li class="list-group-item">{{$job->location}}</li>
					<li class="list-group-item">{{$job->job_type}}</li>
					<li class="list-group-item">{{$job->experience}}</li>
					<li class="list-group-item">{{$job->range_salary_initial}}</li>
					<li class="list-group-item">{{$job->range_salary_final}}</li>
				</ul>
				<div class="card-body">

					<a href="{{ route('jobs.edit', $job) }}"> <button class="btn btn-danger" type="submit"> <i class="material-icons">edit</i> </button> </a>
					<form action="{{ route('jobs.destroy', $job)}}" method="post">
						@csrf
						@method('DELETE')
						<button class="btn btn-danger" type="submit"> <i class="material-icons">delete</i> </button>
					</form>
				</div>
			</div>
		</div>
		@endforeach
	</div>
</div>

{{ $jobs->links() }}

<a href="{{ route('jobs.create') }}" class="btn btn-primary" role="button">Add job </a>

@endsection