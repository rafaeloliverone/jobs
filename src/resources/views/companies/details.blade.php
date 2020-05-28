@extends('layout')

@section('title', 'Companies')

@section('content')
<div class="container mt-3">

    <div class="row">
        <div class="col-12">
            
            <a href="{{ route('companies.index') }}"><i class="material-icons">arrow_back_ios</i></a>
            
        </div>
    </div>


    <div class="row mt-3">

        <div class="col-md-6">
            <div class="card" style="height:275px;">
                <div class="card-body">
                    <h5 class="card-title mt-3">{{ $company->name }}</h5>
                    <h6 class="card-subtitle mt-3 mb-3 text-muted">{{ $company->description }}</h6>
                    <p class="card-text mt-3">{{ $company->location }}</p>
                </div>
            </div>
        </div>

        <div class="col-md-3">
        <div class="card" style="height:275px;">
                <div class="card-body">
                    <a href="{{ route('companies.createjob',  $company->id ) }}"> <button type="button" class="btn btn-success mb-3" style="width:100%">Add a job</button> </a>
                    
                    <form action="{{ route('companies.destroy', $company)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" type="submit" style="width:100%"> Delete company </button>
                    </form>

                    <a href="{{ route('companies.edit', $company) }}"> <button class="btn btn-primary" type="submit" style="width:100%"> Edit company </button> </a>


                </div>
            </div>
        
        </div>


        <div class="col-md-3">
            <div class="card" style="height:275px;">
                <div class="card-body">
                    <h5 class="card-title">About {{ $company->name }}</h5>
                    <h5 class="card-text">Contact</h5>
                    <p class="card-text">{{ $company->website }}</p>
                    <p class="card-text">{{ $company->linkedin }}</p>
                    <p class="card-text">{{ $company->twitter }}</p>
                </div>
            </div>
        </div>

    </div>

    <div class="row mt-3">
        <div class="col-12">
            <div class="card shadow-sm bg-white rounded">
                <div class="card-body text-center">
                    <h2 class="card-title">Jobs Availables</h2>
                </div>
            </div>
        </div>
    </div>


    <div class="row">

            @foreach($jobs as $job)
            <div class="col-md-6 " style="margin-top:32px;">
                <div class="card shadow-sm bg-white rounded" style="height:200px;">
                    <div class="card-body">
                        <h5 class="card-title">{{ $job->title }}</h5>
                        <p class="card-text">{{ $job->challenge }}</p>
                        <p class="card-text">{{ $job->location }}</p>
                    </div>
                </div>
            </div>
            @endforeach
    </div>
</div>



