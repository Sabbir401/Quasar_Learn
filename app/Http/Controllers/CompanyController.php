<?php

namespace App\Http\Controllers;

use App\Models\company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function index()
    {
        $company = company::get();
        return response()->json($company);
    }

   
}
