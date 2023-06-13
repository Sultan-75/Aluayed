<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FrontController extends Controller
{
    public function index()
    {
        $result['posts'] = DB::table('posts')
            ->join('post_categories', 'post_categories.id', '=', 'posts.cat_id')
            ->get(['posts.*', 'post_categories.category_name']);
        return view('front.home', $result);
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
    public function about()
    {
        return view('front.about');
    }
    public function contact()
    {
        return view('front.contact');
    }
}
