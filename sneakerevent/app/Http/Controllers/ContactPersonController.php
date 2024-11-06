<?php

namespace App\Http\Controllers;

use App\Models\ContactPerson;
use Illuminate\Http\Request;

class ContactPersonController extends Controller
{
    // Display a list of contact persons
    public function index()
    {
        $contactPersons = ContactPerson::all();
        return view('admin.contact_persons.index', compact('contactPersons'));
    }

    // Show the form to create a new contact person
    public function create()
    {
        return view('admin.contact_persons.create');
    }

    // Store a new contact person
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'phone_number' => 'required',
            'email_address' => 'required|email',
        ]);

        ContactPerson::create($request->all());
        return redirect()->route('contact_persons.index')->with('success', 'Contact person created successfully.');
    }

    // Show the form to edit a contact person
    public function edit(ContactPerson $contactPerson)
    {
        return view('admin.contact_persons.edit', compact('contactPerson'));
    }

    // Update an existing contact person
    public function update(Request $request, ContactPerson $contactPerson)
    {
        $request->validate([
            'name' => 'required',
            'phone_number' => 'required',
            'email_address' => 'required|email',
        ]);

        $contactPerson->update($request->all());
        return redirect()->route('contact_persons.index')->with('success', 'Contact person updated successfully.');
    }

    // Delete a contact person
    public function destroy(ContactPerson $contactPerson)
    {
        $contactPerson->delete();
        return redirect()->route('contact_persons.index')->with('success', 'Contact person deleted successfully.');
    }
}
