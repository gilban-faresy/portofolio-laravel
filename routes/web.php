<?php

use App\Http\Controllers\Portocontroller;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/home', function () {
    return view('home');
});
// Route::get('/about', function () {
//     return view('about');
// });

Route::get('/about', [Portocontroller::class, 'about']);

Route::get('/myskill', [Portocontroller::class, 'myskill']);

// Route::get('/myskill', function () {
//     return view('myskill');
// });
Route::get('/contact', function () {
    return view('contact');
});