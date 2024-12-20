<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{


    public function store(ContactRequest $request)
    {

        // Store the data
        Contact::create($request->validated());
        return redirect()->back()->with('success', 'Your message has been sent successfully!');
    }

    public function destroy($id)
{
    // Find the contact by ID and delete it
    $contact = Contact::findOrFail($id);
    $contact->delete();

    // Redirect with success message
    return redirect()->back()->with('success', 'Contact deleted successfully!');
}




}
