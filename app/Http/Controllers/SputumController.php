<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sputum;
use App\Lab;
use App\Patient;
use PDF;

class SputumController extends Controller
{
    public function create(Patient $patient) {
        return view('labs/sputum/create', compact('patient'));
    }

    public function store(Patient $patient, Request $request) {
        $this->validate($request, ['price'=>'required|numeric']);

        $lab = Lab::create([
            'patient_id' => $patient->id,
            'med_tech' => auth()->user()->id,
            'name' => 'Sputum',
            'date' => date('Y-m-d'),
            'physician' => $request['physician'],
            'pathologist' => $request['pathologist'],
            'remarks' => $request['remarks'],
            'price' => $request['price']
        ]);

        $sp = new Sputum;
        $sp->lab_id = $lab->id;
        $sp->save();

        $lab->slug = "/labs/sputum/$sp->id";
        $lab->save();

        return redirect($lab->slug);
    }

    public function view(Sputum $sputum) {
        return view('labs.sputum.view', compact('sputum'));
    }

    public function result(Sputum $sputum) {
        $pdf = PDF::loadView('labs.sputum.result', compact('sputum'));
        return $pdf->stream();
    }
}
