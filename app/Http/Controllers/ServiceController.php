<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function update(Request $request)
    {
        $service = Service::findOrFail($request->id);
        if ($request->action == 'accept') {
            $service->status = 'accepté';
        }
        if ($request->action == 'refuse') {
            $service->status = 'refusé';
        }
        $service->save();
        
    }

}
