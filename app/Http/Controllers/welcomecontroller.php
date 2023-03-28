<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class welcomecontroller extends Controller
{
    function index(){
        return view('welcome');
    }
}
