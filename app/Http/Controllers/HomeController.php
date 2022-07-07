<?php

namespace App\Http\Controllers;

use App\Models\Portofolio;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index(){
        $portofolio = Portofolio::all();
        return view('home', compact('portofolio'));
    }
}
