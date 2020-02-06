@extends('layout')

@section('title', 'Companies')

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
                <img src="data:image/png;base64,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" class="card-img-top" alt="...">
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