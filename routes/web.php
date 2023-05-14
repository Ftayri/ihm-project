<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServiceCategoryController;
use App\Http\Controllers\ServiceSubCategoryController;
use App\Http\Controllers\UserController;
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
Route::get('/profil',[UserController::class,'profile'])->name('profile');
Route::get('/inscription',[HomeController::class,'register'])->name('register');
Route::post('/inscription/beneficaire',[UserController::class,'storeBeneficiary'])->name('beneficiary.store');
Route::post('/inscription/prestataire',[UserController::class,'storeServiceProvider'])->name('service-provider.store');
Route::post('/login',[UserController::class,'login'])->name('login');
Route::post('logout', [UserController::class,'logout'])->name('logout');
Route::get('/services',[ServiceCategoryController::class,'index'])->name('services.index');
Route::get('/{serviceCategory}/{serviceSubCategory}',[ServiceSubCategoryController::class,'show'])->name('services.subcategory.show');
Route::get('/{serviceCategory}',[ServiceCategoryController::class,'show'])->name('services.show');
