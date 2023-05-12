<?php

namespace App\Http\Controllers;

use App\Models\ServiceCategory;
use App\Models\ServiceSubCategory;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $serviceCategories = ServiceCategory::all();
        $serviceSubCategories = ServiceSubCategory::take(10)->get();
        return view('home', compact('serviceCategories', 'serviceSubCategories'));
    }
    public function register()
    {
        $serviceCategories = ServiceCategory::all();
        return view('register', compact('serviceCategories'));
    }
}
