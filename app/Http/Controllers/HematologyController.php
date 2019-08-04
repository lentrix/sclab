<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Patient;
use App\Hematology;
use App\Lab;
use PDF;

class HematologyController extends Controller
{
    public function create(Patient $patient) {
        return view('/labs/hematology/create', compact('patient'));
    }

    public function store(Request $request, Patient $patient) {
        $this->validate($request, ['price'=>'required|numeric']);

        $lab = Lab::create([
            'patient_id' => $patient->id,
            'med_tech' => auth()->user()->id,
            'name' => 'Hematology',
            'date' => date('Y-m-d'),
            'physician' => $request['physician'],
            'pathologist' => $request['pathologist'],
            'remarks' => $request['remarks'],
            'price' => $request['price']
        ]);

        $hem = new Hematology;
        $hem->lab_id = $lab->id;
        $hem->wbc = $request['wbc'];
        $hem->rbc = $request['rbc'];
        $hem->hemoglobin = $request['hemoglobin'];
        $hem->hematocrit = $request['hematocrit'];
        $hem->platelet = $request['platelet'];
        $hem->retic_count = $request['retic_count'];
        $hem->esr = $request['esr'];
        $hem->stabs = $request['stabs'];
        $hem->segmenters = $request['segmenters'];
        $hem->lymphocytes = $request['lymphocytes'];
        $hem->monocytes = $request['monocytes'];
        $hem->eosinophils = $request['eosinophils'];
        $hem->basophils = $request['basophils'];
        $hem->clotting_time = $request['clotting_time'];
        $hem->bleeding_time = $request['bleeding_time'];
        $hem->clot_observation_time = $request['clot_observation_time'];
        $hem->blood_type = $request['blood_type'];
        $hem->save();

        $lab->slug = "/labs/hematology/$hem->id";
        $lab->save();

        return redirect($lab->slug);
    }

    public function view(Hematology $hematology) {
        return view('/labs/hematology/view', compact('hematology'));
    }

    public function result(Hematology $hematology) {
        $pdf = PDF::loadView("labs/hematology/result", compact('hematology'));
        return $pdf->stream();
    }
}
