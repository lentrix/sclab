<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Patient;
use App\Template;
use App\Lab;
use App\LabTestItem;

class PatientController extends Controller
{
    public function index(Request $request)
    {

        if ($request['filter']) {
            $patients = Patient::where('lname', 'like', "%{$request['filter']}%")
                ->orWhere('fname', 'like', "%{$request['filter']}%")
                ->orWhere('address', 'like', "%{$request['filter']}%")
                ->orderByRaw('updated_at DESC, lname, fname')
                ->get();
        } else {
            $patients = Patient::orderByRaw('lname, fname')->limit(10)->get();
        }

        return view('patients.index', ['patients' => $patients, 'filter' => $request['filter']]);
    }

    public function create()
    {
        return view('patients.create', ['patient' => new Patient]);
    }

    public function store(Request $request)
    {
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

    public function view(Patient $patient)
    {
        return view('patients.view', compact('patient'));
    }

    public function edit(Patient $patient)
    {
        return view('patients.edit', compact('patient'));
    }

    public function update(Request $request, Patient $patient)
    {
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

    public function selectLab(Patient $patient)
    {

        return view('patients/select-lab', ['patient' => $patient]);
    }

    public function createLab(Patient $patient, Template $template)
    {
        $labTest = LabTest::create([
            'template_id' => $template->id,
            'patient_id' => $patient->id,
            'created_by' => auth()->user()->id
        ]);

        foreach ($template->items as $item) {
            LabTestItem::create([
                'lab_test_id' => $labTest->id,
                'template_item_id' => $item->id,
            ]);
        }

        return redirect("/labs/$labTest->id/entry");
    }

    public function today()
    {
        $patients = Patient::whereHas('labs', function ($query) {
            $query->where(['date' => date('Y-m-d')]);
        })->orderByRaw('lname, fname')->get();

        return view('patients.today', compact('patients'));
    }
}
