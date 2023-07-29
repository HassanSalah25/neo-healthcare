<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use App\Models\Offer;
use App\Models\OfferCategory;
use App\Models\Patient;
use App\Models\RegisterOffer;
use Illuminate\Http\Request;

class PageConttroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function about_us()
    {
        //
        return view('home.about-us');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function offers()
    {
        //
        return view('home.offer');
    }

    public function offers_show($id)
    {
        //
        $offer_category = OfferCategory::find($id);
        return view('home.offer-list',compact('offer_category'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store_offer(Request $request)
    {
        //
        $patient_data = [
            'name' =>$request->name,
            'email' =>$request->phone,
            'phone' =>$request->email,
        ];
        $patient = Patient::create($patient_data);
        $data = [
            'patient_id' =>$patient->id,
            'service_id' =>$request->offer_id,
            'scheduled_at'=>$request->attendance_date,
            'time'=>$request->available_time == 1 ? 'morning':'night',
        ];
        RegisterOffer::create($data);
        return view('home.confirm');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function create_offer($id)
    {
        //
        $offers = Offer::all();
        $offer = Offer::find($id);
        return view('home.offer-register',compact('offers', 'offer'));
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
