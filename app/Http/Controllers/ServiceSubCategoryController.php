<?php

namespace App\Http\Controllers;

use App\Models\ServiceCategory;
use App\Models\ServiceSubCategory;
use Illuminate\Http\Request;

class ServiceSubCategoryController extends Controller
{
    public function show($serviceCategory, $serviceSubCategory)
    {
        $serviceCategories= ServiceCategory::all();
        $serviceSubCategory = ServiceSubCategory::where('slug',$serviceSubCategory)->firstOrFail();
        $serviceCategory = $serviceSubCategory->serviceCategory;
        $serviceSubCategories = $serviceCategory->serviceSubCategories;
        $serviceProviders = $serviceSubCategory->serviceProviders;
        return view('services.subservices.show',compact('serviceCategory','serviceSubCategories','serviceSubCategory','serviceProviders','serviceCategories'));
    }
}
