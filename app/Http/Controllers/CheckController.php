<?php

namespace App\Http\Controllers;

use App\models\Contact;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CheckController extends Controller
{
    public function check()
    {
        $contacts = Contact::all();
        return view('check', ['contacts' => $contacts]);
    }
}
