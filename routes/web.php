<?php

use App\Http\Controllers\frontend\AboutController;
use App\Http\Controllers\frontend\AddListingController;
use App\Http\Controllers\frontend\ContactController;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\frontend\NewsController;
use App\Http\Controllers\frontend\PagesController;
use App\Http\Controllers\frontend\PropertyController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

    // frontend route------------------ 
Route::controller(HomeController::class)->group(function(){
    Route::get('/','index')->name('home');
    Route::get('/home','index')->name('home');
});
Route::controller(AboutController::class)->group(function(){
    Route::get('/about','index')->name('about');
});
Route::controller(PropertyController::class)->group(function(){
    Route::get('/property','index')->name('property');
});
Route::controller(NewsController::class)->group(function(){
    Route::get('/news','index')->name('news');
});
Route::controller(ContactController::class)->group(function(){
    Route::get('/contact','index')->name('contact');
});
Route::controller(PagesController::class)->group(function(){
    Route::get('/portfolio','index')->name('portfolio');
});
Route::controller(AddListingController::class)->group(function(){
    Route::get('/add-listing','index')->name('add-listing');
});

