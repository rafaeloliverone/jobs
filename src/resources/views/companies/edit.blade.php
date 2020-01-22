@extends('layout')

@section('title', 'Edit Company')

@section('content')

@if ($errors->any())
<div class="alert alert-danger">
    <ul>

        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach

    </ul>
</div>
@endif

<div class="card">
    <div class="card-body ">
        <form method="post" action="{{ route('companies.update', $company) }}" style="margin-top:50px;">
            @csrf
            @method('PATCH')
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="exampleFormControlInput1">Name</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" name="name" value="{{ $company->name }}">
                </div>

                <div class="form-group col-md-6">
                    <label for="exampleFormControlInput1">Photo</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" name="photo" value="{{ $company->photo }}">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="exampleFormControlInput1">Description</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" name="description" value="{{ $company->description }}">
                </div>

                <div class="form-group col-md-6">
                    <label for="exampleFormControlInput1">Location</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" name="location" value="{{ $company->location }}">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="exampleFormControlInput1">Website</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" name="website" value="{{ $company->website }}">
                </div>

                <div class="form-group col-md-4">
                    <label for="exampleFormControlInput1">Linkedin</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" name="linkedin" value="{{ $company->linkedin }}">
                </div>
                <div class="form-group col-md-4">
                    <label for="exampleFormControlInput1">Twitter</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" name="twitter" value="{{ $company->twitter }}">
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Update company</button>
        </form>
    </div>
</div>

@endsection

