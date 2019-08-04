<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Patient;
use App\Lab;
use App\BloodTyping;
use PDF;

class BloodTypingController extends Controller
{
    public function create(Patient $patient) {
        return view('labs/blood-typing/create', compact('patient'));
    }

    public function store(Request $request, Patient $patient) {
        $this->validate($request, ['price'=>'required|numeric']);

        $lab = Lab::create([
            'patient_id' => $patient->id,
            'med_tech' => auth()->user()->id,
            'name' => 'Blood Typing',
            'date' => date('Y-m-d'),
            'physician' => $request['physician'],
            'pathologist' => $request['pathologist'],
            'remarks' => $request['remarks'],
            'price' => $request['price']
        ]);

        $bt = new BloodTyping;
        $bt->lab_id = $lab->id;
        $bt->blood_type = $request['blood_type'];
        $bt->save();

        $lab->slug = "/labs/blood-typing/$bt->id";
        $lab->save();

        return redirect($lab->slug);
    }

    public function view(BloodTyping $bloodTyping) {
        return view('labs/blood-typing/view', compact('bloodTyping'));
    }

    public function result(BloodTyping $bloodTyping) {
        $pdf = PDF::loadView("labs/blood-typing/result", compact('bloodTyping'));
        return $pdf->stream();  
    }
}
