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

    public function generatereport()
    {
        return view('ManageExpertProfile.generatereport');
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
        'E_Address' => 'required',
        'E_Publication' => 'required',
        'E_Paper' => 'required',
        'E_Topic' => 'required',
       
    ]);

    experts::create($data);

    return redirect()->route('storeExpert')->with('success', 'Expert Registered Successfully');
}


    public function editExpert($id)
    {
        $expert = experts::find($id);
        return view('experts.editExpert', compact('experts'));
    }

    public function updateExpert(Request $request)
    {
        $request->validate([
            'E_Name' => 'required',
            'E_Email' => 'required|email',
            'E_PhoneNum' => 'required',
            'E_Gender' => 'required',
            'E_University' => 'required',
            'E_Address' => 'required'

        ]);

        $expert = experts::find($id);
        $expert->update($request->all());

        return redirect()->back()->with('success', 'Expert Updated Successfully');
    }


    public function deleteExpert($id)
    {
        experts::where($id)->delete();
        return redirect()->back()->with('success', 'Expert Deleted Successfully');

    }


    public function viewExpert()
    {
        $data = experts::all();
        return view('ManageExpertProfile.viewExpert', compact('data'));
    }

    public function create()
    {
        return view('ManageExpertProfile.addExpert');
    }


}


    
