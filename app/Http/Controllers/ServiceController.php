<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Service;

class ServiceController extends Controller
{
    public function servicesDetailsPage($service_name) {
        $service = Service::where('Service_name_en', $service_name)->firstOrFail();
        return view('pages.details_services', compact('service'));
    }
}
