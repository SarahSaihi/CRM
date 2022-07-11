<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function create()
    {
        return View('companies.form-company');
    }

    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'statut' => 'required',
            'siren' => 'required|min:9|max:9',
            'mail' => 'required|email',
        ]);


        Company::create([
            "name" => $request->name,
            "statut" => $request->statut,
            "siren" => $request->siren,
            "mail" => $request->mail,
        ]);

        $companies = Company::all();

        return view('companies.create-success', ['companies' => $companies]);
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
