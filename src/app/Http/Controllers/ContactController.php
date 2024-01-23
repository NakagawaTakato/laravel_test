<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{    
    public function index()
    {
        return view('index');
    }

    public function confirm(ContactRequest $request)
    {
        $contact = $request->only(['name_one', 'name_two', 'sex_one', 'sex_two', 'sex_three', 'email', 'tel_one', 'tel_two', 'tel_three', 'address', 'address_2', 'kids', 'content']);
        return view('confirm', ['contact' => $contact]);
    }

    public function store(ContactRequest $request)
    {
        $contact = $request->only(['name_one', 'name_two', 'sex_one', 'sex_two', 'sex_three', 'email', 'tel_one', 'tel_two', 'tel_three', 'address', 'address_2', 'kids', 'content']);
        Contact::create($contact);

        return view('thanks');
    }
}
