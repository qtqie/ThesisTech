<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        //
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
