@extends('layout')

@section('title', 'Edit Job')

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



<form method="post" action="{{ route('jobs.update', $job) }}" style="margin-top:50px;">
    @csrf
    @method('PATCH')
    <div class="form-group">
        <label for="exampleFormControlInput1">Title</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" name="title" value="{{ $job->title }}">
    </div>

    <div class="form-group">
        <label for="exampleFormControlInput1">Location</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" name="location" value="{{ $job->location }}">
    </div>

    <div class="form-group">
        <label for="exampleFormControlInput1">Challenge</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" name="challenge" value="{{ $job->challenge }}">
    </div>

    <div class="form-group">
        <label for="exampleFormControlInput1">Description</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" name="description" value="{{ $job->description }}">
    </div>

    <div class="form-group">
        <label for="exampleFormControlInput1">Skills</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" name="skills" value="{{ $job->skills }}">
    </div>

    <div class="form-group">
        <label for="exampleFormControlInput1">Experience</label>
        <input type="number" class="form-control" id="exampleFormControlInput1" name="experience" value="{{ $job->experience }}">
    </div>

    <div class="form-group">
        <label for="exampleFormControlInput1">Job Type</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" name="job_type" value="{{ $job->job_type }}">
    </div>

    <div class="form-group">
        <label for="exampleFormControlInput1">Salary initial</label>
        <input type="number" class="form-control" id="exampleFormControlInput1" name="range_salary_initial" value="{{ $job->range_salary_initial }}">
    </div>

    <div class="form-group">
        <label for="exampleFormControlInput1">Salary final</label>
        <input type="number" class="form-control" id="exampleFormControlInput1" name="range_salary_final" value="{{ $job->range_salary_final }}">
    </div>

    <div class="form-group">
        <label for="exampleFormControlInput1">Company Id</label>
        <input type="number" class="form-control" id="exampleFormControlInput1" name="company_id" value="{{ $job->company_id }}">
    </div>

    <div class="form-group">
        <label for="exampleFormControlInput1">Hiring Contact</label>
        <input type="number" class="form-control" id="exampleFormControlInput1" name="hiring_contact" value="{{ $job->hiring_contact }}">
    </div>

    <button type="submit" onclick="loadValuesInputs()" class="btn btn-primary">Update job</button>


</form>

@endsection