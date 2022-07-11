<?php

namespace App\Http\Controllers;

use App\Models\Facture;
use Illuminate\Http\Request;

class FacturesController extends Controller
{
    public function create()
    {
        return View('factures.form-facture');
    }

    public function store(Request $request)
    {

        $request->validate([
            'date' => 'required',
            'ht' => 'required',
        ]);


        Facture::create([
            "date" => $request->date,
            "ht" => $request->ht,
        ]);

        $factures = Facture::all();

        return view('factures.create-success', ['factures' => $factures]);
    }

    public function show($id)
    {
        $company = Company::findOrFail($id);

        return view('companies.show', ['company' => $company]);
    }

    public function index()
    {
        $companies = Company::all();
        return view('companies.create-success', ['companies' => $companies]);
    }

    public function edit($id)
    {
        $company = Company::findOrFail($id);
        return view('companies.form-edit', ['company' => $company]);
    }
}
