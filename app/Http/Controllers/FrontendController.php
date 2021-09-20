<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
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
    public function banquet($name)
    {
        return view('frontend.banquetmodel', ['name' => $name]);
        // return dd($name);
    }
}
