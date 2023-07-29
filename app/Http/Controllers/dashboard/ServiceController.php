<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Models\Doctor;
use App\Models\DoctorService;
use App\Models\media;
use App\Models\Service;
use App\Models\ServiceCategory;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $services = Service::all();
        return view('dashboard.service.list',compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $service_category = ServiceCategory::all();
        $doctors = Doctor::all();
        return view('dashboard.service.create',compact('service_category','doctors'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $service = Service::create([
            'name' => $request->name,
            'name_ar' => $request->name_ar,
            'doctor_id' => $request->doctor,
            'service_category_id' => $request->service_category ?$request->service_category :null,
            'description' => $request->description,
            'description_ar' => $request->description_ar,
        ]);
        if(!$request->doctor)
            foreach ($request->doctor as $doctor) {
                DoctorService::create([
                    'doctor_id'=>$doctor,
                    'service_id'=>$service->id,
                ]);
            }


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

        return redirect()->route('service.index')->with('success', 'Employee created successfully');

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
        $service = Service::find($id);
        $service_category = ServiceCategory::all();
        $doctors = Doctor::all();
        return view('dashboard.service.edit',compact('service','doctors','service_category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $service =Service::find($id);
        $service->update([
            'name' => $request->name,
            'name_ar' => $request->name_ar,
            'service_category_id' => $request->service_category ? $request->service_category : null,
            'description' => $request->description,
            'description_ar' => $request->description_ar,
        ]);
        DoctorService::where('service_id',$service->id)->delete();

        if(!empty($request->doctor))
            foreach ($request->doctor as $doctor) {
                DoctorService::create([
                    'doctor_id'=>$doctor,
                    'service_id'=>$service->id,
                ]);
            }
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

        return redirect()->route('service.index')->with('success', 'Employee created successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $service = Service::find($id);
        $service->delete();
        return redirect()->route('service.index')->with('success', 'Employee deleted successfully');
    }
}
