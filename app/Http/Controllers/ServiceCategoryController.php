<?php

namespace App\Http\Controllers;

use App\Models\ServiceCategory;
use App\Http\Requests\StoreServiceCategoryRequest;
use App\Http\Requests\UpdateServiceCategoryRequest;

class ServiceCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {    
        $serviceCategories = ServiceCategory::all();
        return view('services.index',compact('serviceCategories'));
    }

    public function show($serviceCategory)
    {
        $serviceCategory = ServiceCategory::where('slug',$serviceCategory)->firstOrFail();
        $serviceSubCategories = $serviceCategory->serviceSubCategories;
        dd($serviceCategory);
        return view('services.show',compact('serviceCategory','serviceSubCategories'));
    }
}
