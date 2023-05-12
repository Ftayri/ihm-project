<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServiceCategoryController;
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

Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('/inscription',[HomeController::class,'register'])->name('register');
Route::get('/services',[ServiceCategoryController::class,'index'])->name('services.index');
//   view ('JardinageSubServ)
Route::get('/welcome', function () {
    $serviceCategories =[];
    return view('subServices.JardinageSubServ',compact('serviceCategories' ));
});

Route::get('/hi', function () {
    $serviceCategories =[];
    return view('subServices.Demenagement',compact('serviceCategories' ));
});

