<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LabTest extends Model
{
    protected $fillable = ['template_id', 'patient_id', 'created_by'];

    public function template() {
        return $this->belongsTo('App\Template');
    }

    public function patient() {
        return $this->belongsTo('App\Patient');
    }

    public function orderedItems() {
        return TemplateItem::join('lab_test_items','template_items.id','=','lab_test_items.template_item_id')
            ->where('lab_test_items.lab_test_id',$this->id)
            ->orderBy('category')->get();
    }
}
