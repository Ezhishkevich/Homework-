<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class ContactController extends Controller
{
    public function submit(Request $red)
    {

        $contact = new User();
        $contact->name = $red->input('name');
        $contact->password = $red->input('password');
        $contact->email = $red->input('email');
        $contact->save();
        return redirect()->route('login');
    }

    public function authenticate(Request $red)
    {
        $credntioals = $red->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);

        return redirect()->route('list');
    }


    public function login()
    {
        return view('layouts.loginform');
    }


    public function Registr()
    {
        return view('layouts.login');
    }
}
