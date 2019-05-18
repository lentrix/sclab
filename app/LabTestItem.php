<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LabTestItem extends Model
{
    protected $fillable = ['lab_test_id','template_item_id'];

    public function templateItem() {
        return $this->belongsTo('App\TemplateItem');
    }
}
