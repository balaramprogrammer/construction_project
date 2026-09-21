<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function contact() {
        return view('website.contact-us');    
    }

    public function about(){
        return view('website.about-us');
    }

    public function index(){
        return view('website.index');
    }

    public function projects(){
        return view('website.projects');
    }

    public function services(){
        return view('website.services');
    }
}
