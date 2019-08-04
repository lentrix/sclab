<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Urinalysis;
use App\Patient;
use App\Lab;
use PDF;

class UrinalysisController extends Controller
{
    public function create(Patient $patient) {
        return view('labs/urinalysis/create', compact('patient'));
    }

    public function store(Patient $patient, Request $request) {
        $this->validate($request, ['price'=>'required|numeric']);

        $lab = Lab::create([
            'patient_id' => $patient->id,
            'med_tech' => auth()->user()->id,
            'name' => 'Urinalysis',
            'date' => date('Y-m-d'),
            'physician' => $request['physician'],
            'pathologist' => $request['pathologist'],
            'remarks' => $request['remarks'],
            'price' => $request['price']
        ]);

        $ua = new Urinalysis;
        $ua->lab_id = $lab->id;
        $ua->color = $request['color'];
        $ua->transparency = $request['transparency'];
        $ua->pus_cells = $request['pus_cells'];
        $ua->rbc = $request['rbc'];
        $ua->epithelial_cells = $request['epithelial_cells'];
        $ua->yeast_cells = $request['yeast_cells'];
        $ua->cylindroids = $request['cylindroids'];
        $ua->mucus_threads = $request['mucus_threads'];
        $ua->bacteria = $request['bacteria'];
        $ua->ph = $request['ph'];
        $ua->spec_gravity = $request['spec_gravity'];
        $ua->protein = $request['protein'];
        $ua->glucose = $request['glucose'];
        $ua->coarsely_granular = $request['coarsely_granular'];
        $ua->finely_granular = $request['finely_granular'];
        $ua->hyaline = $request['hyaline'];
        $ua->pus_cast = $request['pus_cast'];
        $ua->waxy_cast = $request['waxy_cast'];
        $ua->wbc_cast = $request['wbc_cast'];
        $ua->ammonium_biurates = $request['ammonium_biurates'];
        $ua->amorphus_urates = $request['amorphus_urates'];
        $ua->amorphus_phosphates = $request['amorphus_phosphates'];
        $ua->calcium_oxalates = $request['calcium_oxalates'];
        $ua->triple_phosphates = $request['triple_phosphates'];
        $ua->uric_acid = $request['uric_acid'];
        $ua->cholesterole = $request['cholesterole'];
        $ua->leucine_crystals = $request['leucine_crystals'];
        $ua->other_findings = $request['other_findings'];
        $ua->save();

        $lab->slug = "/labs/urinalysis/$ua->id";
        $lab->save();

        return redirect($lab->slug);
    }

    public function view(Urinalysis $urinalysis) {
        return view('/labs/urinalysis/view', compact('urinalysis'));
    }

    public function result(Urinalysis $urinalysis) {
        $pdf = PDF::loadView("labs/urinalysis/result", compact('urinalysis'));
        return $pdf->stream();  
    }
}
