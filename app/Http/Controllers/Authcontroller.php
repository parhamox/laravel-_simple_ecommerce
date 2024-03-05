<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class Authcontroller extends Controller
{
    public function Login(){


        validator(request()->all(),[


             'email'=>'required|email',
             'password'=>'required'


        ])->validate();

        if (auth()->attempt(request()->only(['email', 'password']))){

            return redirect()->route('index');


        }

        return redirect()->back()->withErrors(['email'=> 'the email and password is incorrect']);

}

}
