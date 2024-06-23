<?php

namespace App\Http\Controllers;

use App\Models\religion;
use Illuminate\Http\Request;

class ReligionController extends Controller
{
    
    public function index()
    {
        $religion = religion::get();
        return response()->json($religion);
    }

}
