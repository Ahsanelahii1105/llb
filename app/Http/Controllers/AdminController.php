<?php

namespace App\Http\Controllers;
use App\Models\cases;
use App\Models\lawyers;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function regtable(){
        $reg = User::all();
        return view('admin/regtable', compact(['reg']));
    }


    public function casecreate(){
        return view('admin.caseinsert');
    }

    public function casestore(Request $request){
        $case = new cases();
        $case->case_title = $request->title;
        $case->case_shortdesc = $request->desc;
        $case->case_details = $request->details;

        $case->save();
        return redirect()->back()->with('success', 'Succesfully Insert');
    }

    public function casedetails()
    {
        $case = cases::all();
        return view('case', compact('case'));
    }

    public function caseIndexdetails()
    {
        $case = cases::paginate(4)->all();
        $lawyers = lawyers::paginate(4)->all();
        return view('/index', compact(("case"),("lawyers")),);
    }
}
