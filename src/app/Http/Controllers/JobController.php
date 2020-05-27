<?php

namespace App\Http\Controllers;

use App\Job;
use Illuminate\Http\Request;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $per_page = $request->per_page ?? 6;
        $search = $request->search ?? '';

        $jobs = Job::where('title', 'LIKE', '%' . $search . '%')
            ->orWhere('location', 'LIKE', '%' . $search . '%')
            ->paginate($per_page);

        if ($per_page){
            $jobs->appends(['per_page' => $per_page]);
        }

        if ($search){
            $jobs->appends(['search' => $search] );
        }

        return view('jobs.index', compact('jobs', 'per_page', 'search'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('jobs.create');
    }

    public function search(Request $request)
    {
        $search = $request->get('search');
        $jobs = Job::where('title', 'LIKE', '%'.$search.'%')->paginate(6); 
        
        if ($jobs->count() < 1 ){
            $notfound = "No records found";
            return view('jobs.index', compact('jobs','notfound'));
        } else 
        {
            return view('jobs.index', compact('jobs'));
        }

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:100',
            'location' => 'required',
            'challenge' => 'required|url',
            'description' => 'required',
            'skills' => '',
            'job_type' => '',
            'experience' => 'required',
            'range_salary_initial' => '',
            'range_salary_final' => '',
            'company_id' => 'required',
            'hiring_contact' => '',
        ]);

        Job::create($validatedData);

        return redirect(route('companies.index'))->with('success', 'Job is successfully saved');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function show(Job $job)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function edit(Job $job)
    {
        $job = Job::findOrFail($job->id);
        return view('jobs.edit', compact('job'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Job $job)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:100',
            'description' => 'required',
            'experience' => 'required',
            'challenge' => 'required|url',
        ]);

        Job::whereId($job->id)->update($validatedData);

        return redirect(route('jobs.index'))->with('sucess', 'Job is successfully saved');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function destroy(Job $job)
    {
        $job = Job::findOrFail($job->id);
        $job->delete();

        return redirect(route('jobs.index'))->with('sucess', 'Vacancy is successfully deleted');
    }
}
