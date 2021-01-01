<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function showIndex()
    {
        return view('front.index');
    }
    public function ShowAboutUs()
    {
        return view('front.aboutUs');
    }
    public function ShowServices()
    {
        return view('front.services');
    }
    public function ShowPortfolio()
    {
        return view('front.portfolio');
    }
    public function ShowContact()
    {
        return view('front.contact');
    }
    public function Show404()
    {
        return view('front.404');
    }
    public function ShowBlog()
    {
        return view('front.blog');
    }
}
