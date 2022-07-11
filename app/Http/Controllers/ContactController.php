<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function create()
    {
        return View('contacts.form-contact');
    }

    public function store(Request $request)
    {

        $request->validate([
            'lastname' => 'required',
            'firstname' => 'required',
            'cp' => 'required',
            'tel' => 'required',
            'city' => 'required',
            'date' => 'required',
        ]);


        Contact::create([
            "lastname" => $request->lastname,
            "firstname" => $request->firstname,
            "cp" => $request->cp,
            "tel" => $request->tel,
            "city" => $request->city,
            "date" => $request->date,
        ]);

        $contacts = Contact::all();

        return view('contacts.create-success', ['contacts' => $contacts]);
    }

    public function show($id)
    {
        $contact = Contact::findOrFail($id);

        return view('contacts.show', ['contact' => $contact]);
    }

    public function index()
    {
        $contacts = Contact::all();
        return view('contacts.create-success', ['contacts' => $contacts]);
    }

    public function edit($id)
    {
        $contact = Contact::findOrFail($id);
        return view('contacts.form-edit', ['contact' => $contact]);
    }

}
