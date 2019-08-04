<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Patient;
use App\DengueDuo;
use App\Lab;
use PDF;

class DengueDuoController extends Controller
{
    public function create(Patient $patient) {
        return view('labs.dengue-duo.create', compact('patient'));
    }

    public function store(Request $request, Patient $patient) {
        $this->validate($request, ['price'=>'required|numeric']);

        $lab = Lab::create([
            'patient_id' => $patient->id,
            'med_tech' => auth()->user()->id,
            'name' => 'Dengue Duo',
            'date' => date('Y-m-d'),
            'physician' => $request['physician'],
            'pathologist' => $request['pathologist'],
            'remarks' => $request['remarks'],
            'price' => $request['price']
        ]);

        $dd = new DengueDuo;
        $dd->lab_id = $lab->id;
        $dd->ns1 = $request['ns1'];
        $dd->igm = $request['igm'];
        $dd->igg = $request['igg'];
        $dd->save();

        $lab->slug = "/labs/dengue-duo/$dd->id";
        $lab->save();

        return redirect($lab->slug);
    }

    public function view(DengueDuo $dengueDuo) {
        return view('labs.dengue-duo.view', compact('dengueDuo'));
    }

    public function result(DengueDuo $dengueDuo) {
        $pdf = PDF::loadView('labs.dengue-duo.result', compact('dengueDuo'));
        return $pdf->stream();
    }
}
