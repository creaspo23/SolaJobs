<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function create()
    {
        return view('auth.register');
    }
    public function store()
    {
        // validate the form 

        $this->validate(request(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:8|confirmed',
        ]);

        //create user and save it

        $user = User::create(request(['name', 'email', 'password']));

        //sing in them

        auth()->login($user);

        // redirect 
        return redirect('/dashbord');

    }
}
