<?php

namespace App\Http\Controllers;

use App\Models\Portofolio;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    function index(){
        $user = User::all();
        $portofolio = Portofolio::all();
        return view('admin.dashboard', compact('user', 'portofolio'));
    }
}
