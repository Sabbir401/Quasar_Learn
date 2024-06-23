<?php

namespace App\Http\Controllers;

use App\Models\blood_group;
use Illuminate\Http\Request;

class BloodGroupController extends Controller
{
    public function index()
    {
        $blood = blood_group::get();
        return response()->json($blood);
    }

    
}
