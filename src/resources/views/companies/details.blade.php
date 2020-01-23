@extends('layout')

@section('title', 'Companies')

@section('content')
<div class="container">
    <div class="row">
        
        <div class="col-8">
            <div class="card" style="width: 40rem;">
                <div class="card-body">
                <h5 class="card-title">{{ $company->name }}</h5>
                <h6 class="card-subtitle mb-2 text-muted">{{ $company->description }}</h6>
                <p class="card-text">{{ $company->location }}</p>
                <a href="#" class="card-link">Link do card</a>
                <a href="#" class="card-link">Outro link</a>
                </div>
            </div>
        </div>
            
        <div class="col-4">
            <div class="card" style="width: 25rem;">
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
</div>