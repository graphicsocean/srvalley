<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use App\Models\Banquet;
use App\Models\Service;
use App\Models\Amenitie;
use Illuminate\Http\Request;

class BanquetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $banquet = Banquet::all();
        return view('admin.banquet.index', compact('banquet'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.banquet.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Banquet  $banquet
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $banquet = Banquet::where('slug', $slug)->with('slider')->first();
        if ($banquet === null) {
            return response()->json([
                'message' => 'Record not found.'
            ], 404);
        }else{
        $banquets = Banquet::where('status', 1)->get();
        $sliders = Slider::where('banquet_id',$banquet->id)->get();
        return view('frontend.banquetmodel')->with(['banquet'=>$banquet, 'banquets'=>$banquets, 'sliders'=>$sliders]);
        }

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Banquet  $banquet
     * @return \Illuminate\Http\Response
     */
    public function edit(Banquet $banquet)
    {
        return view('admin.banquet.edit', compact('banquet'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Banquet  $banquet
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Banquet $banquet)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Banquet  $banquet
     * @return \Illuminate\Http\Response
     */
    public function destroy(Banquet $banquet)
    {
        //
    }
}
