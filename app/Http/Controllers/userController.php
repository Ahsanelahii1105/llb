<?php

namespace App\Http\Controllers;

use App\Models\contact;
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

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|numeric',
            'message' => 'required|string',
        ]);

        $appointment = new appointment();
        $appointment->appointment_name = $request->name;
        $appointment->appointment_email = $request->email;
        $appointment->appointment_phone = $request->phone;
        $appointment->appointment_message = $request->message;
        $appointment->status = 'pending';  // Set the status to pending

        $appointment->save();

        return redirect('/appointment')->with('success', 'Your request is pending. Please wait for your appointment date.');
    }


    public function clientdetails()
    {
        $appointments = appointment::all();
        return view('lawyers.client', compact('appointments'));
    }

    public function contactcreate()
    {
        return view('contact');
    }

    public function contactstore(Request $request)
    {
        $contact = new contact();
        $contact->contact_name = $request->name;
        $contact->contact_email = $request->email;
        $contact->contact_case = $request->case;
        $contact->contact_message = $request->message;

        $contact->save();
        return redirect()->back()->with('success', 'Sended Successfully!');
    }

    public function contactIndexdetails()
    {
        $contacts = contact::all();
        return view('admin.contactdetail', compact('contacts'));
    }
}
