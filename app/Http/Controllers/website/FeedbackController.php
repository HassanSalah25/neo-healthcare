<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use App\Models\Feedback;
use App\Models\Patient;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //

        return view('components.feedback-create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $patient = Patient::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone
        ]);
        $data = [
            'patient_id' => $patient->id,
            'service_id' => $request->service,
            'doctor_id' => $request->doctor_id,
            'rate1'=>$request->rate1,
            'rate2' => $request->rate2,
            'third' => $request->rate3 ,
            'fourth' => $request->rate4,
            'fifth' => $request->rate5,
            'sixth' => $request->rate6,
            'seventh' => $request->rate7,
            'eighth' => $request->rate8
        ];
        Feedback::create($data);
        return view('home.confirm');
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
