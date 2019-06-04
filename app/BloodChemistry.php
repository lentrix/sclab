<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BloodChemistry extends Model
{
    protected $fillable = [
        'lab_id', 'fbs', 'rbs_cbs', 'hprbs', 'creatinine', 'uric_acid', 'total_cholesterol', 'triglycerides', 'hdl_c',
        'ldl_c', 'vldl', 'sgot', 'sgpt', 'sodium', 'potassium', 'bun'
    ];

    public const NORMALS = [
        'fbs' => '75-115 mg/dL',
        'rbs_cbs' => 'less than 140 mg/dL',
        'hprbs' => 'mg/dL',
        'creatinine' => 'M=0.50-1.20 mg/dL, F=0.50-0.90 mg/dL',
        'uric_acid' => 'M=3.6-8.3 mg/dL, F=2.3-6.1 mg/dL',
        'total_cholesterol' => 'less than 200 mg/dL',
        'triglycerides' => 'up to 200 mg/dL',
        'hdl_c' => 'M=33-55 mg/dL, F=46-65 mg/dL',
        'ldl_c' => '0-150 mg/dL',
        'vldl' => '0-140 mg/dL',
        'sgot' => 'M=up to 42 U/L, F=up to 32 U/L',
        'sgpt' => 'M=up to 41 U/L, F=up to 31 U/L',
        'sodium' => '135-145 mmol/L',
        'potassium' => '3.60-5.40 mmol/L',
        'bun' => '4.0-23.0 mg/dL'
    ];

    public function lab() {
        return $this->belongsTo('App\Lab');
    }

}
