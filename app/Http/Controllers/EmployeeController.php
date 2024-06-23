<?php

namespace App\Http\Controllers;

use App\Models\employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index()
    {
        $employee = employee::with('company' ,'blood', 'religion')->get();
        return response()->json($employee);
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
        // dd($request);
        $request->validate([
        'emp_id' => 'required',
        'full_name' => 'required',
        'dob' => 'required']);

        $employee = employee::create([
            'Company_Id' => $request->input('company_id.id'),
            'Employee_Id' => $request->input('emp_id'),
            'Card_No' => $request->input('card_no'),
            'Full_Name' => $request->input('full_name'),
            'Father_Name' => $request->input('father_name'),
            'Mother_Name' => $request->input('mother_name'),
            'Spouse_Name' => $request->input('spouse_name'),
            'Marital_Status' => $request->input('marital'),
            'DOB' => $request->input('dob'),
            'Place_of_Birth' => $request->input('pob'),
            'Permanent_Address' => $request->input('permanent_address'),
            'Present_Address' => $request->input('present_address'),
            'Contact_No' => $request->input('official_contact'),
            'Emergency_Contact' => $request->input('emergency_contact'),
            'Gender' => $request->input('gender'),
            'Personal_Email' => $request->input('personal_email'),
            'Official_Email' => $request->input('official_email'),
            'Religion_Id' => $request->input('religion_id.id'),
            'Blood_Group_Id' => $request->input('blood_group_id.id'),
            'Nationality' => $request->input('nationality'),
            'NID' => $request->input('nid'),
        ]);

        return response()->json(['message' => 'Employee saved successfully!'], 201);

    }

    /**
     * Display the specified resource.
     */
    public function show(employee $employee)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(employee $employee)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, employee $employee)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(employee $employee)
    {
        //
    }
}
