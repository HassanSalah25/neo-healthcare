<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use App\Http\Controllers\dashboard\media;
use App\Models\Discount;
use App\Models\Service;
use App\Models\ServiceCategory;
use Illuminate\Http\Request;

class DiscountController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $discounts = Discount::all();
        return view('home.discount-list',compact('discounts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $service_category = ServiceCategory::all();
        return view('dashboard.discount.create',compact('service_category'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $offer = Discount::create([
            'name' => $request->name,
            'name_ar' => $request->name_ar,
            'offer_type' => $request->offer_type,
            'discount' => $request->price,
            'offer_category_id' => $request->service_category,
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

        return redirect()->route('discount.index')->with('success', 'Employee created successfully');
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
        $offer_category = ServiceCategory::all();
        $offer = Discount::find($id);
        return view('dashboard.discount.edit',compact('offer_category','offer'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //

        $offer = Discount::find($id);
        $offer->update([
            'name' => $request->name,
            'name_ar' => $request->name_ar,
            'offer_type' => $request->offer_type,
            'price' => $request->price,
            'offer_category_id' => $request->offer_category,
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

        return redirect()->route('discount.index')->with('success', 'Employee created successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $offer = Discount::find($id);
        $offer->delete();
        return redirect()->route('offer.index')->with('success', 'Employee deleted successfully');
    }

    public function getServiceById($id)
    {
        //
        $discount = Discount::find($id);
        return view('home.discounts',compact('discount'));
    }
}
