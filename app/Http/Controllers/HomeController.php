<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        return view('frontend.index');
    }
    public function about()
    {
        return view('frontend.pages.about');
    }
    public function listing()
    {
        return view('frontend.pages.add-listing');
    }
    public function contact()
    {
        return view('frontend.pages.contact');
    }
    public function news()
    {
        return view('frontend.pages.news');
    }
    public function property()
    {
        return view('frontend.pages.property');
    }
    public function faq()
    {
        return view('frontend.pages.faq');
    }
    public function history()
    {
        return view('frontend.pages.history');
    }
    public function notFound()
    {
        return view('frontend.pages.404');
    }
    public function login()
    {
        return view('frontend.pages.sign-in');
    }
    public function register()
    {
        return view('frontend.pages.register');
    }
    public function account()
    {
        return view('frontend.pages.my-account');
    }
    public function wishlist()
    {
        return view('frontend.pages.wishlist');
    }
    
}
