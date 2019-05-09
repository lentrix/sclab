<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PatientController extends Controller
{
    public function index(Request $request) {

        if($request['filter']) {
            $patients = \App\Patient::where('lname','like',"%{$request['filter']}%")
                ->orWhere('fname','like',"%{$request['filter']}%")
                ->orWhere('address','like', "%{$request['filter']}%")
                ->orderByRaw('updated_at DESC, lname, fname')
                ->get();
        }else {
            $patients = \App\Patient::orderByRaw('lname, fname')->limit(10)->get();
        }

        return view('patients.index', ['patients'=>$patients, 'filter'=>$request['filter']]);
    }

    public function create() {
        return view('patients.create', ['patient'=>new \App\Patient]);
    }

    public function store(Request $request) {
        $this->validate($request, [
            'lname' => 'required',
            'fname' => 'required',
            'gender' => 'required',
            'bdate' => 'required|date',
            'address' => 'required',
            'phone' => 'required'
        ]);

        $patient = \App\Patient::create($request->all());

        return redirect("/patient/$patient->id");
    }

    public function view(\App\Patient $patient) {
        return view('patients.view', compact('patient'));
    }

    public function edit(\App\Patient $patient) {
        return view('patients.edit', compact('patient'));
    }

    public function update(Request $request, \App\Patient $patient) {
        $this->validate($request, [
            'lname' => 'required',
            'fname' => 'required',
            'gender' => 'required',
            'bdate' => 'required|date',
            'address' => 'required',
            'phone' => 'required'
        ]);

        $patient->update($request->all());

        return redirect("/patients/$patient->id");
    }

    public function createLab(\App\Patient $patient) {
        return view('patients/create-lab', compact('patient'));
    }
}
