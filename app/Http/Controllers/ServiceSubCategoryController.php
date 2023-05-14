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
        if(auth()->user()){
            $serviceProviders = $serviceSubCategory->serviceProviders->sortBy(function($serviceProvider){
                return $serviceProvider->city == auth()->user()->city ? 0 : 1;
            });
        }
        $serviceProviders = $serviceProviders->take(5);
        return view('services.subservices.show',compact('serviceCategory','serviceSubCategories','serviceSubCategory','serviceProviders','serviceCategories'));
    }
}
