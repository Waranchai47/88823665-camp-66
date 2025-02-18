<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    //
    function index(){
        return view('register');
    }

    function create(Request $req){
        print_r($req->input());

    }
}
