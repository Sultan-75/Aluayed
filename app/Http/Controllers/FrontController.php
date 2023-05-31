<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        return view('front.home');
    }
    public function emergencyappeal()
    {
        return view('front.emergency_appeal');
    }
    public function donate_online()
    {
        return view('front.donate_online');
    }
    public function donate_bank()
    {
        return view('front.donate_bank');
    }
    public function project()
    {
        return view('front.projects');
    }
}
