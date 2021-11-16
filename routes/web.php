<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('pages.home');
})->name('home');
Route::get('/faq', function () {
    return view('pages.FAQ');
})->name('faq');
Route::get('/contactus', function () {
    return view('pages.ContactUs');
})->name('contact');
Route::get('/teams', function () {
    return view('pages.OurTeams');
})->name('teams');
Route::get('/about', function () {
    return view('pages.About');
})->name('about');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
