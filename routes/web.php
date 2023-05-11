<?php

use App\Http\Controllers\HomeController;
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

//make a route for / that calls HomeController and returns index method call the route home
Route::get('/',[HomeController::class,'index'])->name('home');
//route register that returns the view register
Route::get('/inscription',function(){
    return view('register');
})->name('register');
