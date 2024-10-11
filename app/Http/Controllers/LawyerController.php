<?php

namespace App\Http\Controllers;

use App\Models\lawyers;
use App\Models\appointment;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use App\Mail\AppointmentConfirmedMail;

class LawyerController extends Controller
{
    public function lawyercreate()
    {
        return view('lawyers.lawyerInsert');
    }

    public function lawyerstore(Request $request)
    {
        $lawyer = new lawyers();
        $lawyer->lawyer_name = $request->name;
        $lawyer->lawyer_email = $request->email;
        $lawyer->lawyer_phone = $request->phone;
        $lawyer->lawyer_address = $request->address;
        $lawyer->lawyer_qualification = $request->qualification;
        $lawyer->lawyer_category = $request->category;


        $image = $request->image;
        $imagename = time() . '.' . $image->getClientOriginalExtension();
        $path = 'images/subject/';
        $request->image->move($path, $imagename);
        $lawyer->lawyer_image = $path . $imagename;


        $lawyer->save();
        return redirect()->back()->with('success', 'Succesfully Registered');
    }

    public function pendingAppointments()
    {
        $appointments = appointment::where('status', 'pending')->get();
        return view('lawyers.pending_appointments', compact('appointments'));
    }

    public function setAppointment(Request $request, $id)
    {
        $appointment = appointment::findOrFail($id);
        $appointment->appointment_date = $request->appointment_date;
        $appointment->appointment_time = $request->appointment_time;
        $appointment->status = 'confirmed';  // Mark as confirmed

        $appointment->save();

        // Send email notification to the user
        // \Mail::to($appointment->appointment_email)->send(new AppointmentConfirmedMail($appointment));

        return redirect()->back()->with('success', 'Appointment set successfully and email sent to the user.');
    }


    public function lawyerdetails()
    {
        $lawyers = lawyers::all();
        return view('lawyers', compact('lawyers'));
    }

}
