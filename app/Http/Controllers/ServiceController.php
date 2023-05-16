<?php

namespace App\Http\Controllers;

use App\Models\Evaluation;
use App\Models\Service;
use App\Models\ServiceCategory;
use App\Models\ServiceProvider;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function update(Request $request)
    {
        $service = Service::findOrFail($request->id);
        if ($request->action == 'accept') {
            $service->status = 'accepted';
        }
        if ($request->action == 'refuse') {
            $service->status = 'refused';
        }
        $service->save();
        return redirect()->back();
        
    }
    public function evaluate(Request $request)
    {   
        $evaluation = Evaluation::create([
            'score' => $request->score,
            'comment' => $request->comment,
            'service_id' => $request->service_id,
        ]);
        $evaluation->save();
        return redirect()->back();
    }
    public function request(Request $request)
    {
        $service = new Service();
        $service->beneficiary_id = $request->beneficiary_id;
        $service->service_provider_id = $request->service_provider_id;
        $service->status = 'pending';
        $service->created_at = date('Y-m-d H:i:s');
        $service->save();
        return redirect()->back();
    }
    public function show($id)
    {
        //get service provider get where id = $id
        $serviceProvider = ServiceProvider::find($id);
        if($serviceProvider==null)
        {
            return redirect()->back();
        }
        $serviceCategories = ServiceCategory::all();
        $services = $serviceProvider->services;
        $evaluations=[];
        $averageScore = 0;
        $count = 0;
        foreach($services as $service)
        {
            if($service->evaluation!=null)
                $evaluations[] = $service->evaluation;
        }
        foreach($evaluations as $evaluation)
        {
            if($evaluation)
            {
                $averageScore += $evaluation->score;
                $count++;
            }
        }
        if($count > 0)
        {
            $averageScore = $averageScore / $count;
        }
        $serviceCount = $serviceProvider->services->where('status','accepted')->count();
        //check if current user has a pending service from this service provider
        $pendingService = null;
        if(auth()->user()!=null)
            if(auth()->user()->beneficiary!=null)
                $pendingService = Service::where('beneficiary_id',auth()->user()->beneficiary->id)->where('service_provider_id',$serviceProvider->id)->where('status','pending')->first();
        return view('services.subservices.service-provider',compact('serviceProvider','serviceCategories','services','evaluations','averageScore','count','serviceCount','pendingService'));
    }

}
