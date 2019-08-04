<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Patient;
use App\Fecalysis;
use App\Lab;
use PDF;

class FecalysisController extends Controller
{
    public function create(Patient $patient) {
        return view('/labs/fecalysis/create', compact('patient'));
    }

    public function store(Request $request, Patient $patient) {
        $this->validate($request, ['price'=>'required|numeric']);
        
        $lab = Lab::create([
            'patient_id' => $patient->id,
            'med_tech' => auth()->user()->id,
            'name' => 'Fecalysis',
            'date' => date('Y-m-d'),
            'physician' => $request['physician'],
            'pathologist' => $request['pathologist'],
            'remarks' => $request['remarks'],
            'price' => $request['price']
        ]);

        $fec = new Fecalysis;
        $fec->lab_id = $lab->id;
        $fec->color = $request['color'];
        $fec->consistency = $request['consistency'];
        $fec->blood = $request['blood'];
        $fec->mucos = $request['mucos'];
        $fec->ova = $request['ova'];
        $fec->ascaris = $request['ascaris'];
        $fec->trichuris = $request['trichuris'];
        $fec->hookworm = $request['hookworm'];
        $fec->others = $request['others'];
        $fec->entamoeba = $request['entamoeba'];
        $fec->tropozoites = $request['tropozoites'];
        $fec->cysts = $request['cysts'];
        $fec->trichomonas = $request['trichomonas'];
        $fec->yeast_cells = $request['yeast_cells'];
        $fec->pus_cells = $request['pus_cells'];
        $fec->rbc = $request['rbc'];
        $fec->bacteria = $request['bacteria'];
        $fec->fat_globules = $request['fat_globules'];
        $fec->tfob = $request['tfob'];
        $fec->save();

        $lab->slug = "/labs/fecalysis/$fec->id";
        $lab->save();

        return redirect($lab->slug);
    }

    public function view(Fecalysis $fecalysis) {
        return view('labs/fecalysis/view', compact('fecalysis'));
    }

    public function result(Fecalysis $fecalysis) {
        $pdf = PDF::loadView("labs/fecalysis/result", compact('fecalysis'));
        return $pdf->stream();  
    }
}
