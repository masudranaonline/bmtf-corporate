<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    function getData(){

        $contactList = Contact::all();
        
        return view('pages/contact')->with('contactList', $contactList);
    }
}