<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Doctor;
use App\Models\Service;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function search(Request $request)
    {
        //
        $doctors = null;
        $services = null;
        $blogs = null;
        if($request->keyword) {
            $doctors = Doctor::where('first_name_ar', 'LIKE', '%' . $request->keyword . '%')->take(4)->get();
            $services = Service::where('name_ar', 'LIKE', '%' . $request->keyword . '%')->take(4)->get();
            $blogs = Blog::where('title_ar', 'LIKE', '%' . $request->keyword . '%')->take(4)->get();
        }
        return view('home.search',compact('services','blogs','doctors'));

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
    public function show(string $id)
    {
        //
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
}
