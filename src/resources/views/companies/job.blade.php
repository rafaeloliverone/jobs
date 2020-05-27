@extends('layout')

@section('title', 'Create Job')

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
        <form method="post" action="{{ route('jobs.store') }}" style="margin-top:50px;">
            @csrf
            <div class="form-row ">
                <div class="form-group col-md-6">
                    <label for="exampleFormControlInput1">Title</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" name="title">
                </div>

                <div class="form-group col-md-6">
                    <label for="exampleFormControlInput1">Location</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" name="location">
                </div>
            </div>

            <div class="form-group">
                <label for="exampleFormControlInput1">Challenge</label>
                <input type="text-area" class="form-control" id="exampleFormControlInput1" name="challenge">
            </div>

            <div class="form-group">
                <label for="exampleFormControlInput1">Description</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name="description">
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="exampleFormControlInput1">Skills</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" name="skills">
                </div>

                <div class="form-group col-md-3">
                    <label for="exampleFormControlInput1">Experience</label>
                    <input type="number" class="form-control" id="exampleFormControlInput1" name="experience">
                </div>

                <div class="form-group col-md-3">
                    <label for="exampleFormControlInput1">Job Type</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" name="job_type">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="exampleFormControlInput1">Salary initial</label>
                    <input type="number" class="form-control" id="exampleFormControlInput1" name="range_salary_initial">
                </div>

                <div class="form-group col-md-4">
                    <label for="exampleFormControlInput1">Salary final</label>
                    <input type="number" class="form-control" id="exampleFormControlInput1" name="range_salary_final">
                </div>

                <div class="form-group">
                    <label style="display:none;" for="exampleFormControlInput1">Company Id</label>
                    <input type="hidden" class="form-control" id="exampleFormControlInput1" name="company_id" value="{{$company->id}}">
                </div>
                                            
                <div class="form-group col-md-4">
                    <label for="exampleFormControlInput1">Hiring Contact</label>
                    <input type="number" class="form-control" id="exampleFormControlInput1" name="hiring_contact">
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Add job</button>


        </form>      
    </div>                   
</div>
@endsection