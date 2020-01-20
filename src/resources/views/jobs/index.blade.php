@extends('layout')

@section('title', 'Jobs')

@section('content')        
	<table>
		<thead>
			<tr>
				<th>#</th>
				<th>Title</th>
				<th>Location</th>
				<th>Job_type</th>
				<th>Experience</th>
				<th>Range_salary_initial</th>
				<th>Range_salary_end</th>
				<th>Edit</th>
				<th>Delete</th>
			</tr>
		</thead>
        
		<tbody>
			@foreach($jobs as $job) 
			
			<tr>
				<td></td>
				<td>{{$job->title}}</td>
				<td>{{$job->location}}</td>
				<td>{{$job->job_type}}</td>
				<td>{{$job->experience}}</td>
				<td>{{$job->range_salary_initial}}</td>
				<td>{{$job->range_salary_final}}</td>
				<td><a href="{{ route('jobs.edit', $job) }}"> <button class="btn btn-danger" type="submit"> <i class="material-icons">edit</i> </button> </td>
				<td>
					<form action="{{ route('jobs.destroy', $job)}}" method="post">
					@csrf
					@method('DELETE')
					<button class="btn btn-danger" type="submit"> <i class="material-icons">delete</i> </button>
					</form>
				</td>
			</tr> 
			@endforeach
		</tbody>
	</table>
	
	<div class="row ">
		<div class="center-align">
			{{ $jobs->links() }}
		</div>
	</div>

    <a href="{{ route('jobs.create') }}" class="btn btn-primary" role="button">Add job </a>

    @endsection

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  </body>
</html>