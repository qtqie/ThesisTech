<?php


namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
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

    $expert = experts::create([
        'E_Name' => $request->E_Name,
        'E_Email' => $request->E_Email,
        'E_PhoneNum' => $request->E_PhoneNum,
        'E_Gender' => $request->E_Gender,
        'E_University'=> $request->E_University,
        'E_Address' => $request->E_Address,
        'E_Publication' => $request->E_Publication,
        'E_Paper' => $request->E_Paper,
        'E_Topic'=> $request->E_Topic,
    
    ]);


    experts::create($data);

    return redirect()->route('storeExpert')->with('success', 'Expert Registered Successfully');
}


public function EditExpert($id)
{
    $experts = experts::where('id','=', $id)->first();
    return view('ManageExpertProfile.editExpert', compact('experts'));
}

    public function updateExpert(Request $request, experts $experts): RedirectResponse
    {
        $request->validate([
            'E_Name' => 'required',
            'E_Email' => 'required|email',
            'E_PhoneNum' => 'required',
            'E_Gender' => 'required',
            'E_University' => 'required',
            'E_Address' => 'required'

        ]);

        
    $expert = update([
        'E_Name' => $request->E_Name,
        'E_Email' => $request->E_Email,
        'E_PhoneNum' => $request->E_PhoneNum,
        'E_Gender' => $request->E_Gender,
        'E_University'=> $request->E_University,
        'E_Address' => $request->E_Address,
        'E_Publication' => $request->E_Publication,
        'E_Paper' => $request->E_Paper,
        'E_Topic'=> $request->E_Topic,
    
    ]);

        $experts = experts::find($experts);
        $experts->update($request->all());

        return redirect()->back()->with('success', 'Expert Updated Successfully');
    }

    public function deleteExpert(experts $experts): RedirectResponse
    {
        $experts->delete();
        return redirect(route('listexpert'))->with('success', 'Expert Information deleted successfully.');
    }
    


    public function viewExpert()
    {
        $data = experts::all();
        return view('ManageExpertProfile.viewExpert', compact('data'));
    }

    public function listView()
    {
        $data = experts::all();
        return view('ManageExpertProfile.viewlistExpert', compact('data'));
    }

    public function create()
    {
        return view('ManageExpertProfile.addExpert');
    }


}


    
