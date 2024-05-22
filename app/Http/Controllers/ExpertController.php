<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Expert; // Make sure this path is correct
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class ExpertController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function addExpert()
    {
        return view('ManageExpertProfile.addExpert');
    }

    public function viewExpert()
    {
        return view('ManageExpertProfile.viewExpert');
    }

    public function editExpert()
    {
        return view('ManageExpertProfile.editExpert');
    }

    public function searchExpert()
    {
        return view('ManageExpertProfile.searchExpert');
    }

    public function generateReport()
    {
        return view('ManageExpertProfile.generateReport');
    }

    public function viewlistExpert()
    {
        return view('ManageExpertProfile.viewlistExpert');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the request
        $validatedData = $request->validate([
            'fname' => 'required',
            'address' => 'required',
            'email' => 'required|email',
            'numphone' => 'required',
            'gender' => 'required',
            'university' => 'required',
            'file' => 'required|file', // Assuming you want a file upload
        ]);

        DB::beginTransaction();

        try {
            $expert = new Expert();
            $expert->E_Name = $validatedData['fname'];
            $expert->E_Address = $validatedData['address'];
            $expert->E_Email = $validatedData['email'];
            $expert->E_PhoneNum = $validatedData['numphone'];
            $expert->E_Gender = $validatedData['gender'];
            $expert->E_University = $validatedData['university'];
            
            // Assuming file is being uploaded and saved
            if ($request->hasFile('file')) {
                $filePath = $request->file('file')->store('experts', 'public');
                $expert->E_FilePath = $filePath;
            }

            $expert->save();

            DB::commit();

            return redirect()->back()->with('success', 'Expert added successfully!');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('error', 'Failed to add expert: ' . $e->getMessage());
        }
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
