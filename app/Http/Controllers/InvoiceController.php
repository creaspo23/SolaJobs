<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    public function show(Company $company)
    {
        $pdf = PDF::loadView('invoice', compact('company'));
        return $pdf->download('invoice.pdf');
    }
}
