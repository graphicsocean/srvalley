<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $service = Service::all();
        return view('admin.service.index', compact('service'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.service.create');
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
            $imageName = 'service-'.time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('ui/images'), $imageName);
            $data['image'] = $imageName;
        }
        Service::create($data);
        return redirect()->route('service.index')->with('success', 'Banner created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit(Service $service)
    {
        return view('admin.service.edit', compact('service'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Service $service)
    {
        $data = $request->all();

        $srv = Service::find($service->id);

        if ($request->hasFile('image')) {
            if(\File::exists(public_path('ui/images/slider/'. $srv->image))){
                \File::delete(public_path('ui/images/slider/'. $srv->image));
            }
            $image = $request->file('image');
            $imageName = 'service-'.time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('ui/images'), $imageName);
            $data['image'] = $imageName;
        }
        $srv->update($data);
        return redirect()->route('service.index')->with('success', 'Banner updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service $service)
    {
        //
    }
}
