<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lab;
use App\Patient;
use PDF;

class OccultBloodController extends Controller
{
    public function create(Patient $patient) {
        return view('labs/occult-blood/create', compact('patient'));
    }

    public function store(Request $request, Patient $patient) {
        $this->validate($request, ['price'=>'required|numeric']);
        $lab = Lab::create([
            'patient_id' => $patient->id,
            'med_tech' => auth()->user()->id,
            'name' => 'Faecal Occult Blood Test',
            'date' => date('Y-m-d'),
            'physician' => $request['physician'],
            'pathologist' => $request['pathologist'],
            'remarks' => $request['remarks'],
            'price' => $request['price'],
        ]);

        $lab->slug = 'labs/occult-blood/' . $lab->id;
        $lab->save();

        return redirect($lab->slug);
    }

    public function view(Lab $lab) {
        return view('labs/occult-blood/view', compact('lab'));
    }

    public function result(Lab $lab) {
        $pdf = PDF::loadView('/labs/occult-blood/result', compact('lab'));
        return $pdf->stream();
    }
}
