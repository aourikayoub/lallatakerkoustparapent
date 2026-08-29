<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Review;
use App\Models\Service;

class HomeController extends Controller
{
    public function HomePage() {
        $reviews = Review::where('status', 'approved')->latest()->take(5)->get();
        $services = Service::all();
        return view('index', compact('reviews', 'services'));
    }
}
