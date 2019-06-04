<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $fillable = ['lname', 'fname', 'address', 'gender', 'bdate','phone'];

    protected $dates = ['created_at', 'updated_at', 'bdate'];

    public function getFullnameAttribute() {
        return $this->lname . ", " . $this->fname;
    }

    public function labs() {
        return $this->hasMany('App\Lab');
    }

    public function labHistory() {
        return \App\Lab::where('patient_id', $this->id)
            ->orderBy('date', 'DESC')
            ->get();
    }
}
