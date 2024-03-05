<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;



class LoginController extends Controller
{
    public function LogInShow()

    {
        return view('Auth/login');
    }



}
