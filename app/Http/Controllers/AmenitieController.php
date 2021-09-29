<?php

namespace App\Http\Controllers;

use App\Models\Amenitie;
use Illuminate\Http\Request;

class AmenitieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $amenitie = Amenitie::all();
        return view('admin.amenitie.index', compact('amenitie'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.amenitie.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = 'Amenitie-'.time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('ui/images'), $imageName);
            $data['image'] = $imageName;
        }
        Amenitie::create($data);
        return redirect()->route('Amenitie.index')->with('success', 'Banner created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Amenitie  $amenitie
     * @return \Illuminate\Http\Response
     */
    public function show(Amenitie $amenitie)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Amenitie  $amenitie
     * @return \Illuminate\Http\Response
     */
    public function edit(Amenitie $amenitie)
    {
        return view('admin.amenitie.edit', compact('amenitie'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Amenitie  $amenitie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Amenitie $amenitie)
    {
        $data = $request->all();

        $amn = Amenitie::find($amenitie->id);

        if ($request->hasFile('image')) {
            if(\File::exists(public_path('ui/images/slider/'. $amn->image))){
                \File::delete(public_path('ui/images/slider/'. $amn->image));
            }
            $image = $request->file('image');
            $imageName = 'home-banner-'.time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('ui/images/slider'), $imageName);
            $data['image'] = $imageName;
        }
        $amn->update($data);
        return redirect()->route('amenitie.index')->with('success', 'Amenitie updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Amenitie  $amenitie
     * @return \Illuminate\Http\Response
     */
    public function destroy(Amenitie $amenitie)
    {
        //
    }
}
