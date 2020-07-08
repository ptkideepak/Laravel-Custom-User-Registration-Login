<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;

class HomeController extends Controller
{
    public function home()
    {
        $userRole = auth()->user()->role->name;
        return view('home', compact('userRole'));
    }
}
