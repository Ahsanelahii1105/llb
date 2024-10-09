<?php

namespace App\Http\Controllers;

use App\Models\lawyers;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

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
        $imagename = time().'.'.$image->getClientOriginalExtension();
        $path = 'images/subject/';
        $request->image->move( $path, $imagename);
        $lawyer->lawyer_image = $path.$imagename;


        $lawyer->save();
        return redirect()->back()->with('success', 'Succesfully Registered');
    }

    public function lawyerdetails()
    {
        $lawyers = lawyers::all();
        return view('lawyers', compact('lawyers'));
    }

}
