<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //index
    public function index()
    {
        return view('home');
    }
    //about
    public function about()
    {
        return view('about');
    }
    //contact
    public function contact()
    {
        return view('contact');
    }
    //blog
    public function blog()
    {
        return view('blog');
    }
    //project
    public function projects()
    {
        return view('work');
    }
    //admin login
    public function adminLogin()
    {
        return view('admin.login');
    }
    public function admin()
    {
        return view('admin.new');
    }
}
