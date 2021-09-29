<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $banners = Banner::all();
        return view('admin.banner.index', compact('banners'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.banner.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title1' => 'required',
            'title2' => 'required',
            'image' => 'required',
        ]);
        $data = $request->all();
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = 'home-banner-'.time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('ui/images/slider'), $imageName);
            $data['image'] = $imageName;
        }
        Banner::create($data);
        return redirect()->route('banners.index')->with('success', 'Banner created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function show(Banner $banner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function edit(Banner $banner)
    {
        return view('admin.banner.edit', compact('banner'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Banner $banner)
    {
        $this->validate($request, [
            'title1' => 'required',
            'title2' => 'required',
        ]);
        $data = $request->all();

        $bnr = Banner::find($banner->id);

        if ($request->hasFile('image')) {
            if(\File::exists(public_path('ui/images/slider/'. $bnr->image))){
                \File::delete(public_path('ui/images/slider/'. $bnr->image));
            }
            $image = $request->file('image');
            $imageName = 'home-banner-'.time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('ui/images/slider'), $imageName);
            $data['image'] = $imageName;
        }
        $bnr->update($data);
        return redirect()->route('banners.index')->with('success', 'Banner updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function destroy(Banner $banner)
    {
        return $banner;
    }
}
