<?php

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

Route::get('/', function () {
    return view('components.portofolio.index');
});
Route::get('/resume', function () {
    return view('components.portofolio.resume');
});
Route::get('/project', function () {
    return view('components.portofolio.project');
});
Route::get('/contact', function () {
    return view('components.portofolio.contact');
});
