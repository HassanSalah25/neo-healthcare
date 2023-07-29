<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Models\Appinfo;
use App\Models\media;
use Illuminate\Http\Request;

class AppInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $appInfos = Appinfo::all();
        return view('dashboard.app-info.index',compact('appInfos'));

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
    public function update(Request $request)
    {
        //


        foreach ($request->type as $key => $type) {
            $value = $request[$type];

            $settings = Appinfo::where('type', $type)->first();
            if($settings!=null){
                if(gettype($value) == 'array'){
                    $settings->value = json_encode($value);
                }
                elseif ($request->hasFile($type))
                {
                    $upload = new media;
                    $upload->file_original_name = null;
                    $arr = explode('.', $request->file($type)->getClientOriginalName());

                    for($i=0; $i < count($arr)-1; $i++){
                        if($i == 0){
                            $upload->file_original_name .= $arr[$i];
                        }
                        else{
                            $upload->file_original_name .= ".".$arr[$i];
                        }
                    }
                    $upload->file_name = $request->file($type)->store('uploads/all','public');

                    $upload->extension = $request->file($type)->getClientOriginalExtension();
                    $upload->type = 'image';
                    $upload->file_size = $request->file($type)->getSize();
                    $upload->save();

                    $settings->value = $upload->id;

                }
                else {
                    $settings->value = $value;
                }
            }

            else{
                $settings = new Appinfo;
                $settings->type = $type;
                if(gettype($value) == 'array')
                {
                    $settings->value = json_encode($value);
                }
                elseif ($request->hasFile($type))
                {
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

                    $settings->value = $upload->id;

                }
                else
                {

                    $settings->value = $value;
                }
            }

            $settings->save();
            //}
        }
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
