<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade as PDF;
use App\Models\Company;

class DashBordsController extends Controller
{

   

    public function index()

    {
        $companies = Company::all();
        return view('pages.dashbord.index', compact('companies'));
    }

    public function create()

    {
        return view('pages.dashbord.create');
    }

    public function store()

    {
        Company::create($this->validateRequest());

        return redirect('/dashbord');
    }


    public function show(Company $company)

    {
       
        return view('pages.dashbord.show', compact('company'));
    }

    public function edit(Company $company)

    {
        return view('pages.dashbord.edit', compact('company'));
    }


    public function update(Company $company)

    {
        $company->update($this->validateRequest());

        return redirect('/dashbord/' . $company->id);
    }


    public function destroy(Company $company)

    {
        $company->delete();

        return redirect('/dashbord');
    }



    private function validateRequest()

    {

        return request()->validate([
            'name' => 'required|min:3',
            'email' => 'required|email',
            'state' => 'required',
            'jobTitle' => 'required',
            'jobDescription' => 'required',
            'gender' => 'required',
        ]);
    }
}
