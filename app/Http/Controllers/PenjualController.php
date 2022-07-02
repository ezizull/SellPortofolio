<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PenjualController extends Controller
{
    function index(){
        return view('penjual');
    }

    function add(){
        return view('form');
    }

    function edit(){
        return view('form');
    }

    function delete(){
        return view('form');
    }


    function show(){
        return view('show');
    }
}
