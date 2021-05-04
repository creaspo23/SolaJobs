<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $company = Company::get()->last();
        return view('pages.master', compact('company'));
    }
}
