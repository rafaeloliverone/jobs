@extends('layout')

@section('title', 'Create Job')

@section('content')
<div class="card">
    <div class="card-header">
      Add Vacancy
    </div>
    <div class="card-body">
      
      @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
          @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
      @endif

<div class="row">
    <form class="col s12" method="post" action="{{ route('jobs.store') }}" style="margin-top:50px;">
        @csrf
        <div class="row">
            <div class="input-field col s6">
                <input placeholder="Title" id="title" type="text" class="validate" name="title" >
                <label for="title">Title</label>
            </div>
            <div class="input-field col s6">
                <input placeholder="Location" id="location" type="text" class="validate" name="location">
                <label for="location">Location</label>
            </div>
            <div class="input-field col s6">
                <input placeholder="Enter a URL" id="challenge" type="text" class="validate" name="challenge">
                <label for="challenge">Challenge</label>
            </div>
            <div class="input-field col s6">
                <input placeholder="Describe the vacancy" id="description" type="text" class="validate" name="description">
                <label for="description">Description</label>
            </div>
            
            <div class="col s6">
                <div class="chips chips-placeholder" name="skills">
                </div>  
            </div>


            <input placeholder="experience" id="valueofexperience" type="text" class="validate" name="experience" style="display:none;">

            <div class="input-field col s6">
                <select id="experience">
                    <option value="" disabled selected></option>
                    <option value="0">-1 year</option>
                    <option value="1">+1 year</option>
                    <option value="2">+2 years</option>
                    <option value="3">+3 years</option>
                    <option value="4">+4 years</option>
                </select>
                <label>Experience</label>
              </div>
            
            <div class="input-field col s6">
            <select>
                <option value="" disabled selected></option>
                <option value="full_time">Full-Time</option>
                <option value="half_time">Half-Time</option>
            </select>
            <label for="job_type">Job Type</label>
            </div>
            
            <div class="input-field col s6">
                <input placeholder="Placeholder" id="range_salary_initial" type="text" class="validate" >
                <label for="range_salary_initial">Salary initial</label>
            </div>
            <div class="input-field col s6">
                <input placeholder="Placeholder" id="range_salary_final" type="text" class="validate">
                <label for="range_salary_final">Salary final</label>
            </div>
            
            <div class="input-field col s6">
                <input placeholder="Placeholder" id="company_id" type="text" class="validate" name="company_id">
                <label for="company_id">Company Id</label>
            </div>
            <div class="input-field col s6">
                <input placeholder="Placeholder" id="hiring_contact" type="text" class="validate" name="hiring_contact">
                <label for="hiring_contact">Hiring Contact</label>
            </div>
        </div>

        <button type="submit" onclick="loadValuesInputs()" class="btn btn-primary">Create job</button>
    </form>
@endsection

<script>
    var options = {
        placeholder: "Skills",
        autocompleteOptions: true,
        secondaryPlaceholder: "+Skills"
    };
   
    document.addEventListener('DOMContentLoaded', function() {
        var elems = document.querySelectorAll('.chips');
        var instances = M.Chips.init(elems, options);
    });


    document.addEventListener('DOMContentLoaded', function() {
        var elems = document.querySelectorAll('select');
        var instances = M.FormSelect.init(elems, options);
    });

    function loadValuesInputs() {
        var e = document.getElementById("experience");
        var selectedItemExperience = e.options[e.selectedIndex].value;   

        var inputF = document.getElementById("valueofexperience"); 
        inputF.value = selectedItemExperience;
    };


</script>