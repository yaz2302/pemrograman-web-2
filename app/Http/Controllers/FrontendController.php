<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
        return view('frontend/dashboard');
    }

    public function about(){
        return view('frontend/about/about');
    }
}
