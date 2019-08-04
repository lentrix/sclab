<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fecalysis extends Model
{
    public function lab() {
        return $this->belongsTo('App\Lab');
    }
}
