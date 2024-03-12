<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Hash;
use Illuminate\Validation\ValidationException;
use Auth;


class Authcontroller extends Controller
{
   function register()
   {

        return view('auth/register');

   }

   function registerSave(Request $request)
   {

    Validator::make($request->all(),[

        'name' => 'required',
        'email' =>'required|email',
        'password' => 'required|confirmed',

    ])->validate();


    User::create([

        'name' => $request->name,
        'email' => $request->email,
        'password' => Hash::make($request->password),



    ]);
    return redirect()->route('login');
   }

   function login()
   {
    return view('auth/login');
   }
   function loginAction(Request $request)
    {

        Validator::make($request->all(),[

            'email' =>'required|email',
            'password' => 'required',

            ])->validate();

    if (!Auth::attempt($request->only('email', 'password'),$request->boolean('remember'))) {

        throw ValidationException::withMessages([

            'email' => trans('auth.failled') ,

        ]);


        # code...
    }
    $request->session()->regenerate();
        return redirect()->route('register');





    }



}


