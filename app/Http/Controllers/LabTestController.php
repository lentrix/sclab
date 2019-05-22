<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LabTest;
use App\LabTestItem;

use PDF;

class LabTestController extends Controller
{
    public function entry(LabTest $labTest) {
        return view('labs.entry', compact('labTest'));
    }

    public function saveEntry(Request $request, LabTest $labTest){
        $labTest->physician = $request['physician'];
        $labTest->med_tech = $request['med_tech'];
        $labTest->pathologist = $request['pathologist'];
        $labTest->remarks = $request['remarks'];
        $labTest->save();

        foreach($request['value'] as $index=>$value){
            $item = LabTestItem::find($index);
            $item->test_value = $value;
            $item->save();
        }
        return redirect("/labs/$labTest->id/");
    }

    public function view(LabTest $labTest) {
        return view('/labs/view', compact('labTest'));
    }

    public function print(LabTest $labTest) {
        // $pdf = PDF::loadView('/labs/view', compact('labTest'));
        $pdf = PDF::loadView('labs/result', compact('labTest'));
        return $pdf->stream();
    }
}
