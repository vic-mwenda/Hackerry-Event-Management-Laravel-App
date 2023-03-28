<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MapsController extends Controller
{

    function index(){

        return view('events.index');
    }
}
