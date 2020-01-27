@extends('layout')

@section('title', 'Companies')

@section('content')
<nav class="navbar navbar-expand-lg navbar-light bg-light justify-content-between">
    <a class="navbar-brand">Companies</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link btn btn-outline-success" href="{{ route('companies.create') }}">Add company <span class="sr-only">(current)</span></a>
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
        <div class="col-sm-4">
            <div class="card" style="width: 18rem; margin:5px;">
                <img src="{{ $company->photo }}" class="card-img-top" alt="..."> 
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
                            <a href="{{ route('companies.show', $company) }}"> <button class="btn btn-primary" type="submit"> <i class="material-icons">details</i> </button> </a>
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