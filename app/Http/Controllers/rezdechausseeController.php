<?php

namespace App\Http\Controllers;

use App\Models\rezdechaussee;
use Illuminate\Http\Request;

class rezdechausseeController extends Controller
{
    public function index()
    {
        return view('planchaussee');
    }
}
