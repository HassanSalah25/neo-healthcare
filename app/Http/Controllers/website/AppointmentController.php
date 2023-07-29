<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use App\Models\Appointment;
use App\Models\Country;
use App\Models\Doctor;
use App\Models\Patient;
use App\Models\User;
use Illuminate\Http\Request;
use PhpParser\Comment\Doc;

class AppointmentController extends Controller
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
    public function create($id = null)
    {
        //
        $cities = Country::all();
        return view('home.book-appointment',compact('cities'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function createByDoctor($id)
    {
        //
        $doctor = Doctor::find($id);
        $cities = Country::all();
        return view('home.book-appointment',compact('doctor','cities'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $patient = Patient::create([
            "name" => $request->name,
            "phone" => $request->phone,
            "email" => $request->email,
        ]);
        $data = [
          "service_id" => $request->service,
          "patient_id" => $patient->id,
          "doctor_id" => $request->doctor_id,
          "scheduled_at" => $request->attendance_date,
            "time" => $request->available_time == 1 ? 'morning':'night'
        ];
        Appointment::create($data);
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
