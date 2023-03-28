<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LanguagesController extends Controller
{

    function index(){

        return view('languages.index');
    }
}
