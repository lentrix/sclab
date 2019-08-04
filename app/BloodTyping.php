<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BloodTyping extends Model
{
    public function lab() {
        return $this->belongsTo('App\Lab');
    }
}
