<?php

namespace App\Http\Controllers;

use App\Models\Amenitie;
use App\Models\Banner;
use App\Models\Banquet;
use App\Models\Service;
use App\Models\Slider;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        $banquets = Banquet::where('status', 1)->get();
        $banners = Banner::where('status', 1)->get();

        return view('frontend.home')->with(['banquets'=> $banquets, 'banners'=> $banners]);
    }
    public function about()
    {
        return view('frontend.about');
    }
    public function contact()
    {
        return view('frontend.contact');
    }
    public function submit(Request $request)
    {
        return $request->all();
    }
    public function gallery()
    {
        return view('frontend.gallery');
    }
}
