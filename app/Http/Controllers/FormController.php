<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\CilentRequest;
use App\Models\Contact;

class FormController extends Controller
{
  public function form(){
  return view('form');
  }

  public function confirm (CilentRequest $request){

    $request->session()->put('familyname', $request->input('familyname'));
    $request->session()->put('firstname', $request->input('firstname'));
    $request->session()->put('gender', $request->input('gender'));
    $request->session()->put('email', $request->input('email'));
    $request->session()->put('postcode', $request->input('postcode'));
    $request->session()->put('address', $request->input('address'));
    $request->session()->put('building_name', $request->input('building_name'));
    $request->session()->put('opinion', $request->input('opinion'));
    return view ('confirm');
  }

  public function store (Request $request){

    $familyname = $request->session()->get('familyname');
    $firstname = $request->session()->get('firstname');
    $gender = $request->session()->get('gender');
    $email = $request->session()->get('email');
    $postcode = $request->session()->get('postcode');
    $address = $request->session()->get('address');
    $building_name = $request->session()->get('building_name');
    $opinion = $request->session()->get('opinion');

    $contact = New Contact;
    $contact->fullname = $fullname = $familyname." ".$firstname;
    $contact->gender = $gender;
    $contact->email = $email;
    $contact->postcode = $postcode;
    $contact->address = $address;
    $contact->building_name = $building_name;
    $contact->opinion = $opinion;
    $contact->save();

    return view('thanks');
  }
}