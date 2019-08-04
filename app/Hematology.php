<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hematology extends Model
{
    public function lab() {
        return $this->belongsTo('App\Lab');
    }
}
