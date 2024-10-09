<?php

namespace App\Http\Controllers;

use App\Models\appointment;
use Illuminate\Http\Request;

class userController extends Controller
{
    public function appointmentcreate()
    {
            return view('appointment');
    }

    public function appointmentstore(Request $request)
    {
        $appointment = new appointment();
        $appointment->appointment_name = $request->name;
        $appointment->appointment_email = $request->email;
        $appointment->appointment_phone = $request->phone;
        $appointment->appointment_message = $request->message;

        $appointment->save();
        return redirect()->back();
    }

    public function clientdetails()
    {
        $appointments = appointment::all();
        return view('lawyers.client', compact('appointments'));
    }
}
