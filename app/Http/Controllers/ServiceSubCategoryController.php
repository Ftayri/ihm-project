<?php

namespace App\Http\Controllers;

use App\Models\ServiceSubCategory;
use Illuminate\Http\Request;

class ServiceSubCategoryController extends Controller
{
    public function show($serviceCategory, $serviceSubCategory)
    {
        $serviceSubCategory = ServiceSubCategory::where('slug',$serviceSubCategory)->firstOrFail();
        $serviceCategory = $serviceSubCategory->serviceCategory;
        $serviceSubCategories = $serviceCategory->serviceSubCategories;
        $serviceProviders = $serviceSubCategory->serviceProviders;
        dd($serviceSubCategory);
    }
}
