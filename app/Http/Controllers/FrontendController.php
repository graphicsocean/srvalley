<?php

namespace App\Http\Controllers;

use App\Models\Banquet;
use App\Models\Slider;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        return view('frontend.home')->with('banquets', Banquet::where('status', 1)->get());
    }
    public function about()
    {
        return view('frontend.about');
    }
    public function contact()
    {
        return view('frontend.contact');
    }
    public function gallery()
    {
        return view('frontend.gallery');
    }
}
