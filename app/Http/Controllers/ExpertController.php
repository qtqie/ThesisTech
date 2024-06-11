<?php


namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Models\experts;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class ExpertController extends Controller
{

    public function about()
    {
        return view('ManageExpertProfile.about');
    }

    public function addExpert()
    {
        return view('ManageExpertProfile.addExpert');
    }

    public function generatereport()
    {
        $data = experts::all();
        return view('ManageExpertProfile.generateReport', compact('data'));
    }

    public function view()
    {
        $data = experts::all();
        return view('ManageExpertProfile.view', compact('data'));
    }


    public function searchExpert(Request $request)
{
    $query = $request->input('query');
    $experts = experts::where('E_Name', 'like', "%$query%")
        ->orWhere('E_University', 'like', "%$query%")
        ->orWhere('E_Gender', 'like', "%$query%")
        ->orWhere('E_Address', 'like', "%$query%")
        ->orWhere('E_Publication', 'like', "%$query%") // Add this line for publication search
        ->get();

    return view('ManageExpertProfile.searchExpert', compact('experts', 'query'));
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

    return redirect()->route('addExpert')->with('success', 'Expert Registered Successfully');
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

        
<<<<<<< HEAD
    $experts->update([
=======
    $experts = update([
>>>>>>> b5e0cda05ecf9b9fb06fd45de37efa363d096cdc
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


    
