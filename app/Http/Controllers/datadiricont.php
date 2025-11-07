<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class datadiricont extends Controller
{
    function index() {
        return view ('datadiri');
        //return "<h1>data diri Ida</h1>";
    } 
}
