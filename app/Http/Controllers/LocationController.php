<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LocationController extends Controller
{

    function index(){

        return view('events.index');
    }
}
