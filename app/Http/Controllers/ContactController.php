<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::paginate(10); // Menggunakan paginate untuk pagination
        return view('contacts.index', compact('contacts'));
    }


    public function create()
    {
        return view('contacts.create');
    }

    public function store(Request $request)
    {
        Contact::create($request->all());
        return redirect()->route('contacts.index');
    }

    public function edit(Contact $contact)
    {
        return view('contacts.edit', compact('contact'));
    }

    public function update(Request $request, Contact $contact)
    {
        $contact->update($request->all());
        return redirect()->route('contacts.index');
    }

    public function destroy(Contact $contact)
    {
        $contact->delete();
        return redirect()->route('contacts.index');
    }

}
