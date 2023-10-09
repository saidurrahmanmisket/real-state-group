<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;



// frontend indexing route------------------ 

Route::controller(HomeController::class)->group(function(){
    Route::get('/','home')->name('home');
    Route::get('/home','home')->name('home');
    Route::get('/about','about')->name('about');
    Route::get('/property','property')->name('property');
    Route::get('/news','news')->name('news');
    Route::get('/contact','contact')->name('contact');
    Route::get('/portfolio','portfolio')->name('portfolio');
    Route::get('/add-listing','listing')->name('add-listing');
    Route::get('/faq','faq')->name('faq');
    Route::get('/history','history')->name('history');
    Route::get('/404','notFound')->name('404');
    Route::get('/sign-in','login')->name('sign-in');
    Route::get('/register','register')->name('register');
    Route::get('/my-account','account')->name('account');
    Route::get('/wishlist','wishlist')->name('wishlist');
});
