@extends('layout')

@section('title', 'Create Company')

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
        <form method="post" action="{{ route('companies.store') }}" style="margin-top:50px;">
            @csrf
            <div class="form-row ">
                <div class="form-group col-md-6">
                    <label for="exampleFormControlInput1">Name</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" name="name">
                </div>

                <div class="form-group col-md-6">
                    <label for="exampleFormControlInput1">Description</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" name="description">
                </div>

            </div>

            <div class="form-row ">
                <div class="form-group col-md-6">
                    <label for="exampleFormControlInput1">Location</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" name="location">
                </div>

                <div class="form-group col-md-6">
                    <label for="exampleFormControlInput1">Photo</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" name="photo">
                </div>
            </div>

            <div class="form-row ">
                <div class="form-group col-md-4">
                    <label for="exampleFormControlInput1">Website</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" name="website">
                </div>

                <div class="form-group col-md-4">
                    <label for="exampleFormControlInput1">Linkedin</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" name="linkedin">
                </div>

                <div class="form-group col-md-4">
                    <label for="exampleFormControlInput1">Twitter</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" name="twitter">
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Add company</button>

        </form>
    </div>
</div>

@endsection