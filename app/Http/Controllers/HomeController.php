<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home.index');
    }

    public function about()
    {
        return view('home.about');
    }

    public function portfolio_english()
    {
        return view('home.portfolio_english');
    }

    public function portfolio_stem()
    {
        return view('home.portfolio_stem');
    }

    public function portfolio_development()
    {
        return view('home.portfolio_development');
    }

    public function services()
    {
        return view('home.services');
    }

    public function news_fs()
    {
        return view('home.news_fs');
    }

    public function news_tb()
    {
        return view('home.news_tb');
    }

    public function news_event()
    {
        return view('home.news_event');
    }

    public function team()
    {
        return view('home.team');
    }

    public function contact()
    {
        return view('home.contact');
    }
}
