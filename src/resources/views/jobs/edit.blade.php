@extends('layout')

@section('title', 'Edit Job')

@section('content')
<div class="card">
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
</div>



<div class="row">

    <i class="small material-icons">arrow_back</i>
    
    <form class="col s12" method="post" action="{{ route('jobs.update', $job) }}" style="margin-top:50px;">
        @csrf
        @method('PATCH')
        <div class="row">
            <div class="input-field col s6">
                <input placeholder="Title" id="title" type="text" class="validate" name="title" value="{{ $job->title }}">
                <label for="title">Title</label>
            </div>

            <div class="input-field col s6">
                <input placeholder="Location" id="location" type="text" class="validate" name="location" value="{{ $job->location }}">
                <label for="location">Location</label>
            </div>

            <div class="input-field col s6">
                <input placeholder="Enter a URL" id="challenge" type="text" class="validate" name="challenge" value="{{ $job->challenge }}">
                <label for="challenge">Challenge</label>
            </div>

            <div class="input-field col s6">
                <input placeholder="Describe the vacancy" id="description" type="text" class="validate" name="description" value="{{ $job->description }}">
                <label for="description">Description</label>
            </div>
            
            <div class="col s6">
                <div class="chips chips-placeholder" name="skills"></div>  
            </div>

            <div class="input-field col s6">
                <select id="experience" >
                    <option value="" disabled selected></option>
                    <option value="-1 year">-1 year</option>
                    <option value="+1 year">+1 year</option>
                    <option value="+2 years">+2 years</option>
                    <option value="+3 years">+3 years</option>
                    <option value="+4 years">+4 years</option>
                </select>
                <label>Experience</label>
            </div>

            <input placeholder="experience" id="fieldExperience" type="text" class="validate" name="experience" style="display:none;" value="{{ $job->experience }}">

            
            <div class="input-field col s6">
                <select id="job_type">
                    <option value="" disabled selected></option>
                    <option value="Full-Time">Full-Time</option>
                    <option value="Half-Time">Half-Time</option>
                </select>
                <label>Job Type</label>
            </div>
            
            <input placeholder="jobs" id="fieldJob" type="text" class="validate" name="job_type" style="display:none;" value="{{ $job->job_type }}">

            <div class="input-field col s6">
                <input placeholder="Placeholder" id="range_salary_initial" type="number" class="validate" name="range_salary_initial" value="{{ $job->range_salary_initial }}">
                <label for="range_salary_initial">Salary initial</label>
            </div>

            <div class="input-field col s6">
                <input placeholder="Placeholder" id="range_salary_final" type="number" class="validate" name="range_salary_final" value="{{ $job->range_salary_final }}">
                <label for="range_salary_final">Salary final</label>
            </div>
            
            <div class="input-field col s6">
                <input placeholder="Placeholder" id="company_id" type="number" class="validate" name="company_id" value="{{ $job->company_id }}">
                <label for="company_id">Company Id</label>
            </div>

            <div class="input-field col s6">
                <input placeholder="Placeholder" id="hiring_contact" type="number" class="validate" name="hiring_contact" value="{{ $job->hiring_contact }}">
                <label for="hiring_contact">Hiring Contact</label>
            </div>
        </div>

    <button type="submit" onclick="loadValuesInputs()" class="btn btn-primary">Update job</button>
    </form>
</div>


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
        var optionsExperience = document.getElementById("experience");
        let valueExperience = optionsExperience.options[optionsExperience.selectedIndex].value;

        var inputExperience= document.getElementById("fieldExperience"); 
        inputExperience.value = valueExperience;


        var optionsJobs = document.getElementById("job_type");
        let valueJobType = optionsJobs.options[optionsJobs.selectedIndex].value;

        var inputJob = document.getElementById("fieldJob"); 
        inputJob.value = valueJobType;
    };

</script>

@endsection