<?php

namespace App\Http\Controllers;

use App\Models\Penjual;
use App\Models\Portofolio;
use App\Models\User;
use Illuminate\Http\Request;

class PenjualController extends Controller
{
    function index(){
        $portofolio = auth()->user()->portofolio;
        return view('penjual', compact('portofolio'));
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


    function show($id){
        $portofolio = Portofolio::find($id);
        return view('show', compact('portofolio'));
    }
}
