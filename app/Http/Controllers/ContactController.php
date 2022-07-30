<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $contact = Contact::create($request->validate([
            'name' => 'required|string|min:3|max:25',
            'email' => 'required|string|email',
            'subject' => 'required|string|min:3|max:50',
            'message' => 'required|string',
        ]));

        return "Thankyou {$contact->name}, we will contact you shortly";
    }
}
