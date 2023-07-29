<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Models\ServiceCategory;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($id)
    {
        //
        $service_category = ServiceCategory::find($id);
        $services = $service_category->services;
        return view('home.services',compact('services','service_category'));
    }

    public function getServices(Request $request)
    {
        $service = ServiceCategory::find($request->id);
        return response()->json($service->services);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function showDoctors(Request $request)
    {
        //
        $service = Service::find($request->id);
        return response()->json($service->doctor);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function getServiceById($id)
    {
        //
        $service = Service::find($id);
        return view('home.service-show',compact('service'));
    }
}
