<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Patient;
use App\Lab;
use App\BloodChemistry;
use PDF;

class BloodChemistryController extends Controller
{
    public function create(Patient $patient) {
        return view('labs/blood-chem/create', compact('patient'));
    }

    public function store(Request $request) {
        $this->validate($request, [
            'patient_id'=>'required',
            'price' => 'required|numeric'
        ]);

        $lab = Lab::create([
            'patient_id' => $request['patient_id'],
            'med_tech' => auth()->user()->id,
            'name' => 'Blood Chemistry',
            'date' => date('Y-m-d'),
            'physician' => $request['physician'],
            'pathologist' => $request['pathologist'],
            'remarks' => $request['remarks'],
            'price' => $request['price']
        ]);

        $bloodChem = BloodChemistry::create([
            'lab_id' => $lab->id,
            'fbs' => $request['fbs'],
            'rbs_cbs' => $request['rbs_cbs'],
            'hprbs' => $request['hprbs'],
            'creatinine' => $request['creatinine'],
            'uric_acid' => $request['uric_acid'],
            'total_cholesterol' => $request['total_cholesterol'],
            'triglycerides' => $request['triglycerides'],
            'hdl_c' => $request['hdl_c'],
            'ldl_c' => $request['ldl_c'],
            'vldl' => $request['vldl'],
            'sgot' => $request['sgot'],
            'sgpt' => $request['sgpt'],
            'sodium' => $request['sodium'],
            'potassium' => $request['potassium'],
            'bun' => $request['bun'],
        ]);

        $lab->slug = "/labs/blood-chem/$bloodChem->id";
        $lab->save();

        return redirect("/labs/blood-chem/$bloodChem->id");
    }

    public function view(BloodChemistry $bloodChemistry) {
        
        return view('labs/blood-chem/view', compact('bloodChemistry'));
        
    }

    public function result(BloodChemistry $bloodChemistry) {
        $pdf = PDF::loadView('labs/blood-chem/result', compact('bloodChemistry'));
        return $pdf->stream();  
    }
}
