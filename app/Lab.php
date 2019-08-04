<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lab extends Model
{
    protected $fillable = ['patient_id', 'med_tech', 'name', 'date', 'physician', 'pathologist', 'remarks', 'price'];
    protected $dates = ['date','created_at','updated_at'];

    public function bloodChemistries() {
        return $this->hasMany('App\BloodChemistry');
    }

    public function patient() {
        return $this->belongsTo('App\Patient');
    }

    public function medicalTechnologist() {
        return $this->belongsTo('App\User', 'med_tech');
    }
}
