<?php

namespace App\Http\Controllers;

use App\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
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
        $validatedData = $request->validate([
            'name' => 'required|max:100',
            'photo' => 'required',
            'description' => 'required',
            'website' => 'required',
            'linkedin' => 'required',
            'twitter' => 'required',
            'location' => 'required',
        ]);

        Company::create($validatedData);

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
        return view('companies.details', compact('company'));
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
}
