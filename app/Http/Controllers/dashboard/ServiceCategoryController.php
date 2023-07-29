<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Models\media;
use App\Models\Schedule;
use App\Models\Service;
use App\Models\ServiceCategory;
use Illuminate\Http\Request;

class ServiceCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $categries = ServiceCategory::all();
        return view('dashboard.service-category.list',compact('categries'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $schedule = Schedule::all();
        return view('dashboard.service-category.create',compact('schedule'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $service = ServiceCategory::create([
            'name' => $request->name,
            'name_ar' => $request->name_ar,
            'description' => $request->description,
            'description_ar' => $request->description_ar,
        ]);

        if($request->hasFile('image')){

            $upload = new media;
            $upload->file_original_name = null;
            $arr = explode('.', $request->file('image')->getClientOriginalName());

            for($i=0; $i < count($arr)-1; $i++){
                if($i == 0){
                    $upload->file_original_name .= $arr[$i];
                }
                else{
                    $upload->file_original_name .= ".".$arr[$i];
                }
            }
            $upload->file_name = $request->file('image')->store('uploads/all','public');

            $upload->extension = $request->file('image')->getClientOriginalExtension();
            $upload->type = 'image';
            $upload->file_size = $request->file('image')->getSize();
            $upload->save();

            $service->update([
                'image' => $upload->id,
            ]);
        }

        return redirect()->route('service-category.index')->with('success', 'Employee created successfully');

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
        $service_category = ServiceCategory::find($id);
        return view('dashboard.service-category.edit',compact('service_category'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $service = ServiceCategory::find($id);
        $service->update([
            'name' => $request->name,
            'name_ar' => $request->name_ar,
            'description' => $request->description,
            'description_ar' => $request->description_ar,
        ]);

        if($request->hasFile('image')){

            $upload = new media;
            $upload->file_original_name = null;
            $arr = explode('.', $request->file('image')->getClientOriginalName());

            for($i=0; $i < count($arr)-1; $i++){
                if($i == 0){
                    $upload->file_original_name .= $arr[$i];
                }
                else{
                    $upload->file_original_name .= ".".$arr[$i];
                }
            }
            $upload->file_name = $request->file('image')->store('uploads/all','public');

            $upload->extension = $request->file('image')->getClientOriginalExtension();
            $upload->type = 'image';
            $upload->file_size = $request->file('image')->getSize();
            $upload->save();

            $service->update([
                'image' => $upload->id,
            ])  ;
        }

        return redirect()->route('service-category.index')->with('success', 'Employee created successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $service_category = ServiceCategory::find($id);
        $service_category->delete();
        return redirect()->route('service-category.index')->with('success', 'Employee deleted successfully');
    }
}
