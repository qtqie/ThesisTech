<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\experts;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class ExpertController extends Controller
{
    public function addExpert()
    {
        return view('ManageExpertProfile.addExpert');
    }

    public function searchExpert(Request $request)
    {
    $query = $request->input('query');

    $experts = experts::where('E_Name', 'like', "%$query%")
        ->orWhere('E_University', 'like', "%$query%")
        ->orWhere('E_Gender', 'like', "%$query%")
        ->orWhere('E_Address', 'like', "%$query%")
        ->get();

    return view('ManageExpertProfile/searchExpert', compact('experts', 'query'));
    }


    public function store(Request $request)
    {
        $data = $request->validate([
            'E_Name' => 'required',
            'E_Email' => 'required|email',
            'E_PhoneNum' => 'required',
            'E_Gender' => 'required',
            'E_University' => 'required',
            'E_Address' => 'required'
        ]);

        $newExpert = experts::create($data);

        return redirect()->route('storeExpert')->with('success', 'Expert Registered Successfully');
    }

    public function editExpert($id)
    {
        $data = experts::where('id','=', $id)->first();
        return view('ManageExpertProfile.editExpert', compact('data'));
    }

    public function UpdateExpert(Request $request)
    {
        $request->validate([
            'E_Name' => 'required',
            'E_Email' => 'required|email',
            'E_PhoneNum' => 'required',
            'E_Gender' => 'required',
            'E_University' => 'required',
            'E_Address' => 'required'

        ]);

        $id = $request->id;
        $E_Name = $request->E_Name;
        $E_Email = $request->E_Email;
        $E_PhoneNum = $request->E_PhoneNum;
        $E_Gender = $request->E_Gender;
        $E_University = $request->E_University;
        $E_Address = $request->E_Address;

        experts::where('id', '=', $id)->update([
            'E_Name'=>$E_Name,
            'E_Email'=>$E_Email,
            'E_PhoneNum'=>$E_PhoneNum,
            'E_Gender'=>$E_Gender,
            'E_University'=>$E_University,
            'E_Address'=>$E_Address,
        ]);   

        return redirect()->back()->with('success', 'Expert Updated Successfully');

    }

    public function deleteExpert($id)
    {
        experts::where('id', '=', $id)->delete();
        return redirect()->back()->with('success', 'Expert Deleted Successfully');

    }


    public function viewExpert()
    {
        $data = experts::all();
        return view('ManageExpertProfile.viewExpert', compact('data'));
    }


}


    
