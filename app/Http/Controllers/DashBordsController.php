<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade as PDF;
use App\Models\Company;
use Illuminate\Http\Request;

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

    public function store(Request $request)
    {
        $company = Company::create([
            'name' => $request->name,
            'email' => $request->email,
            'state' => $request->state,
        ]);

        $company->addMedia($request->logo)->toMediaCollection('logo');

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


    public function update(Request $request, Company $company)

    {
        $company->update([
            'name' => $request->name,
            'email' => $request->email,
            'state' => $request->state,
        ]);

        $company->addMedia($request->logo)->toMediaCollection('logo');

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
            'logo' => 'required',
        ]);
    }
}
