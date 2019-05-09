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
}
