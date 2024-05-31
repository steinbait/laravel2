<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ContactController;
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
    return view('layout.public.home');
})->name('home');

Route::get('/profile', [ProfileController::class, 'index'])->name('profle');

Route::get('/contact', function (){
    return'halaman contact tanpa controler';
});

Route::get('/about', function () {
    return'halaman about';
});


