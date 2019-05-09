<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Medicine;

class MedicineController extends Controller
{
    public function index(Request $request) {
        if($request['filter']) {
            $meds = Medicine::where('generic','like',"%{$request['filter']}%")
                    ->orWhere('brand','like',"%{$request['filter']}%")
                    ->orWhere('description','like',"%{$request['filter']}%")
                    ->orderByRaw('brand, description')
                    ->get();
        }else {
            $meds = Medicine::orderByRaw('updated_at DESC, brand, description')
            ->limit(10)->get();
        }

        return view('medicines.index', ['medicines'=>$meds,'filter'=>$request['filter']]);
    }

    public function create() {
        return view('medicines.create');
    }

    public function view(Medicine $medicine) {
        return view('medicines.view', compact('medicine'));
    }

    public function store(Request $request) {
        $this->validate($request, [
            'brand' => 'required',
            'description' => 'required',
            'qty_stock' => 'required | numeric',
            'price' => 'required | numeric',
        ]);

        $med = Medicine::create($request->all());

        return redirect("/medicines/$med->id");
    }

    public function edit(Medicine $medicine) {
        return view('medicines.edit', compact('medicine'));
    }

    public function update(Request $request, Medicine $medicine) {
        $this->validate($request, [
            'brand' => 'required',
            'description' => 'required',
            'qty_stock' => 'required | numeric',
            'price' => 'required | numeric',
        ]);

        $medicine->update($request->all());

        return redirect("/medicines/$medicine->id");
    }
}
