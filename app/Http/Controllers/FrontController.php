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
            ->limit(4)
            ->orderBy('id', 'desc')
            ->get(['posts.*', 'post_categories.category_name']);
        $result['edu_posts'] = DB::table('posts')
            ->join('post_categories', 'post_categories.id', '=', 'posts.cat_id')
            ->limit(4)
            ->where(['category_name' => 'Educational Projects'])
            ->orderBy('id', 'desc')
            ->get(['posts.*', 'post_categories.category_name']);
        $result['news_posts'] = DB::table('posts')
            ->join('post_categories', 'post_categories.id', '=', 'posts.cat_id')
            ->limit(4)
            ->where(['category_name' => 'Latest News'])
            ->orderBy('id', 'desc')
            ->get(['posts.*', 'post_categories.category_name']);
        return view('front.home', $result);
    }
    public function emergencyappeal()
    {
        return view('front.emergency_appeal');
    }
    public function donate_online($name = '')
    {
        $result['category'] = DB::table('post_categories')->get();
        if ($name != '') {
            $arr = DB::table('post_categories')
                ->where(['category_name' => $name])->get();
            $result['select_category_name'] = $arr[0]->category_name;
        } else {
            $result['select_category_name'] = '';
        }

        return view('front.donate_online', $result);
        //return view('front.donate_online');
    }
    public function donate_bank()
    {
        return view('front.donate_bank');
    }
    public function project()
    {
        $result['categories'] = DB::table('post_categories')->get();
        $result['posts'] = DB::table('posts')
            ->join('post_categories', 'post_categories.id', '=', 'posts.cat_id')
            ->get(['posts.*', 'post_categories.category_name']);
        return view('front.projects', $result);
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
