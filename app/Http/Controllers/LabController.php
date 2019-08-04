<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lab;

class LabController extends Controller
{
    public function index() {
        $labs = Lab::orderBy('created_at', 'DESC')->limit(10)->get();
        return view('/labs/index', compact('labs'));
    }

}
