@extends('layout')

@section('title', 'Companies')

@section('content')
<nav class="navbar navbar-expand-lg navbar-light bg-light justify-content-between">
    <a class="navbar-brand" href="#">
        <!-- <img src="https://uploads.scratch.mit.edu/users/avatars/35672485.png" width="50" height="50" alt="" class="rounded-circle"> -->
        Jobs
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item mr-3">
                <a class="nav-link" href="/">Home</a>
            </li>
            <li class="nav-item mr-3">
                <a href="{{ route('companies.create') }}"> <button type="button" class="btn btn-success">Add company</button> </a>
            </li>
        </ul>
    </div>

    <form action="{{ route('companies.search') }}" method="GET" class="form-inline">
		<input class="form-control mr-sm-2" name="search" type="search" placeholder="Search" aria-label="Search">
		<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
	</form>

</nav>


<div class="col-sm-12 mt-3" style="list-style-type: none;;">
			@if (isset($notfound))
				<div class="alert alert-danger">
					<span>{{ $notfound  }}</span>
				</div>
			@endif
		</div>
<div class="row row-cols-1 row-cols-md-2">

    
    @foreach($companies as $company)
    <div class="col mb-3 mt-3">
        <div class="card" style="height:180px;">
            <div class="row" style="max-height:180px;">
                <div class="col-4 col-sm-4 col-md-4 col-lg-4">
                    <img src="{{ url('storage/companies/'.$company->photo) }}" class="img-fluid" style="height:178px; width:180px;" class="card-img" alt="...">
                </div>

                <div class="col-6 col-sm-6 col-md-6 col-lg-6" >
                    <div class="card-body" style="max-height:180px;" >
                        <h5 class="card-title">{{$company->name}}</h5>
                        <p class="card-text" style="text-overflow: ellipsis; white-space: nowrap; width: 100%; overflow: hidden;">{{$company->description}}</p>
                        <p class="card-text"><small class="text-muted">{{$company->location}}</small></p>
                        <p class="card-text"><small class="text-muted">{{$company->linkedin}}</small></p>
                    </div>
                </div>

                <div class="col-2 col-sm-2 col-md-2 col-lg-2 d-flex justify-content-end align-items-center mb-2" style="flex-direction:column;">



                    <a href="{{ route('companies.show', $company) }}"> <button class="btn btn-primary" type="submit"> <i class="material-icons">more</i> </button> </a>

                </div>

            </div>
        </div>
    </div>
    @endforeach
</div>


{{ $companies->links() }}

@endsection