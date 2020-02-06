@extends('layout')

@section('title', 'Jobs')

@section('content')
<nav class="navbar navbar-expand-lg navbar-light bg-light justify-content-between">
	<a class="navbar-brand" href="#">
        <img src="https://uploads.scratch.mit.edu/users/avatars/35672485.png" width="50" height="50" alt="" class="rounded-circle">
        Jobs
    </a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
			<li class="nav-item active">
				<li class="nav-item mr-3">
					<a class="nav-link" href="/">Home</a>
				</li>
				<li class="nav-item">
					<a href="{{ route('jobs.create') }}"> <button type="button" class="btn btn-success">Add job</button> </a>
				</li>
			</li>
        </ul>
    </div>

	<form action="{{ route('jobs.search') }}" method="GET" class="form-inline">
		<input class="form-control mr-sm-2" name="search" type="search" placeholder="Search" aria-label="Search">
		<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
	</form>
</nav>





<div class="row">

	<div class="card-group mt-4">
		
		<div class="col-sm-12">
			@if (isset($notfound))
				<div class="alert alert-danger">
					<ul>
	        			<li>{{ $notfound  }}</li>
    				</ul>	
				</div>
			@endif
		</div>

		@foreach($jobs as $job)
		<div class="col-12 col-sm-6 col-md-6 col-lg-4">
			<div class="card" style="margin:5px; height:500px; margin-top:30px;">
				<!-- <img src="..." class="card-img-top" alt="..."> -->
				<div class="card-body">
					<h5 class="card-title">{{$job->title}}</h5>
					<p class="card-text"></p>
				</div>
				<ul class="list-group list-group-flush">
					<li class="list-group-item">{{ $job->location }}</li>
					<li class="list-group-item">{{ $job->job_type }}</li>
					<li class="list-group-item">{{ $job->experience }}</li>
					<li class="list-group-item"><i class="material-icons">
						attach_money
						</i>{{ $job->range_salary_initial }} - {{$job->range_salary_final}}</li>
					<li class="list-group-item">{{ $job->getNameCompany() }}</li>
				</ul>

				<div class="card-body">
                    <div class="d-flex flex-row">
                        <div class="p-2">
							<a href="{{ route('jobs.edit', $job) }}"> <button class="btn btn-primary" type="submit"> <i class="material-icons">edit</i> </button> </a>
						</div>	
						<div class="p-2">						
							<form action="{{ route('jobs.destroy', $job)}}" method="post">
								@csrf
								@method('DELETE')
								<button class="btn btn-danger" type="submit"> <i class="material-icons">delete</i> </button>
							</form>
						</div>
                    </div>
				</div>
				
			</div>
		</div>
		@endforeach
	</div>
</div>

{{ $jobs->links() }}

@endsection