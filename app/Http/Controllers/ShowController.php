<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShowController extends Controller
{
    function index($id){
        return view('show', compact('id'));
    }
}
