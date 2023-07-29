<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Models\media;
use App\Models\Offer;
use App\Models\OfferCategory;
use Illuminate\Http\Request;

class OfferCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $offers = OfferCategory::all();
        return view('dashboard.offer-category.list',compact('offers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('dashboard.offer-category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        //
        $offer = OfferCategory::create([
            'name' => $request->name,
            'name_ar' => $request->name_ar,
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

            $offer->update([
                'image' => $upload->id,
            ]);
        }

        return redirect()->route('offer-category.index')->with('success', 'Offer created successfully');
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
        $offer_category = OfferCategory::find($id);
        return view('dashboard.offer-category.edit',compact('offer_category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $offer = OfferCategory::find($id);
        $offer->update([
            'name' => $request->name,
            'name_ar' => $request->name_ar,
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

            $offer->update([
                'image' => $upload->id,
            ]);
        }

        return redirect()->route('offer-category.index')->with('success', 'Employee created successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $offer_category = OfferCategory::find($id);
        $offer_category->delete();
        return redirect()->route('offer-category.index')->with('success', 'Employee deleted successfully');
    }
}
