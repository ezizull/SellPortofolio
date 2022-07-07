<?php

namespace App\Http\Controllers;

use App\Models\Portofolio;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    function index($id){
        $portofolio = Portofolio::find($id);
        return view('show', compact('portofolio'));
    }
}
