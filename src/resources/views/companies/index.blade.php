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

    <form class="form-inline">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
</nav>

<div class="row">
    <div class="card-group mt-4">

        @foreach($companies as $company)
        <div class="col-12 col-sm-6 col-md-6 col-lg-4">
            <div class="card" style="margin:5px; height:800px; margin-top:30px;">
                
                <img class="card-img-top" src="{{ url('storage/companies/'.$company->photo) }}" style="height:300px;" alt="Card image cap">

                <div class="card-body">
                    <h5 class="card-title">{{$company->name}}</h5>
                    <p class="card-text"></p>
                </div>

                <ul class="list-group list-group-flush">
                    <li class="list-group-item">{{$company->description}}</li>
                    <li class="list-group-item">{{$company->location}}</li>
                    <li class="list-group-item">{{$company->website}}</li>
                    <li class="list-group-item">{{$company->linkedin}}</li>
                    <li class="list-group-item">{{$company->twitter}}</li>
                </ul>

                <div class="card-body">
                    <div class="d-flex flex-row">
                        <div class="p-2">
                            <a href="{{ route('companies.edit', $company) }}"> <button class="btn btn-primary" type="submit"> <i class="material-icons">edit</i> </button> </a>
                        </div>
                        <div class="p-2">
                            <form action="{{ route('companies.destroy', $company)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" type="submit"> <i class="material-icons">delete</i> </button>
                            </form>
                        </div>
                        <div class="p-2">
                            <a href="{{ route('companies.show', $company) }}"> <button class="btn btn-primary" type="submit"> <i class="material-icons">more</i> </button> </a>
                        </div>
                      </div>
                </div>

            </div>
        </div>
        @endforeach
    </div>
</div>

{{ $companies->links() }}

@endsection