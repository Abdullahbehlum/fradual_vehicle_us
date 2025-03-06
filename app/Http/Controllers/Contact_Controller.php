<?php

namespace App\Http\Controllers;

use App\Models\Contact_message_Model;
use Illuminate\Http\Request;

class Contact_Controller extends Controller
{
    public function Store(Request $request)
    {
        $contact = new Contact_message_Model();
        $contact->name = $request->input('name');
        $contact->email = $request->input('email');
        $contact->phone_number = $request->input('phone_number');
        $contact->company = $request->input('company');
        $contact->vin = $request->input('vin');
        $contact->message = $request->input('message');
        $contact->save();
        return redirect()->back()->with('success', "Contact Message Successfully");
    }

    public function index()
    {
        $contact = Contact_message_Model::latest()->paginate(10);
        return view('admin.all_messages', compact('contact'));
    }
}
