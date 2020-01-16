<!DOCTYPE html>
<html>
  <head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
   
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    
    <title>@yield('title')</title>
  </head>

  <body>
    <div class="container">
        
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
                </tr> 
                @endforeach

            </tbody>
        </table>

    </div>


    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  </body>
</html>