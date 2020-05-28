<?php

namespace App\Http\Controllers;

use App\Company;
use App\Job;
use Illuminate\Http\Request;

class CompanyController extends Controller
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

        $companies = Company::where('name', 'LIKE', '%' . $search . '%')
            ->orWhere('website', 'LIKE', '%' . $search . '%')
            ->paginate($per_page);

        if ($per_page){
            $companies->appends(['per_page' => $per_page]);
        }

        if ($search){
            $companies->appends(['search' => $search] );
        }

        return view('companies.index', compact('companies', 'per_page', 'search'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('companies.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $company = new Company();

        $company->name = $request->name;
        $company->photo = '';
        $company->description = $request->description;
        $company->website = $request->website;
        $company->linkedin = $request->linkedin;
        $company->twitter = $request->twitter;
        $company->location = $request->location;

        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $extension = $file->extension();

            $nameFile = $request->name . '.' . $extension;
            $upload = $request->photo->storeAs('companies', $nameFile);

            $request->photo = $nameFile;
            $company->photo = $request->photo;
        }
       
        $company->save();

        return redirect(route('companies.index'))->with('success', 'Company is successfully saved');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function show(Company $company)
    {
        $company = Company::findOrFail($company->id);
        $jobs = Job::where('company_id', '=', $company->id)->get();
        

        return view('companies.details', compact('company','jobs'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function edit(Company $company)
    {
        $company = Company::findOrFail($company->id);
        return view('companies.edit', compact('company'));
    }

    public function createjob(Company $company)
    {
        $company = Company::findOrFail($company->id);
        return view('companies.job', compact('company'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Company $company)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:100',
            'description' => 'required',
            'website' => 'required|url',
        ]);

    

        // dd($validatedData['photo']);
        Company::whereId($company->id)->update($validatedData);

        return redirect(route('companies.index'))->with('sucess', 'Company is successfully saved');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function destroy(Company $company)
    {
        $company = Company::findOrFail($company->id);
        $company->delete();

        return redirect(route('companies.index'))->with('sucess', 'Company is successfully deleted');
    }

    
    public function search(Request $request)
    {
        $search = $request->get('search');
        $companies = Company::where('name', 'LIKE', '%'.$search.'%')->paginate(6); 
        
        if ($companies->count() < 1 ){
            $notfound = "No records found";
            return view('companies.index', compact('companies','notfound'));
        } else 
        {
            return view('companies.index', compact('companies'));
        }

    }


}
