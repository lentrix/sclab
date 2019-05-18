<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TemplateItem extends Model
{
    protected $fillable = ['template_id', 'name', 'category', 'normal', 'order'];

    public function template() {
        return $this->belongsTo('App\Template', 'template_id');
    }

    public function getPreviousItemAttribute() {
        return static::where('template_id', $this->template_id)
                ->where('category', $this->category)
                ->where('order','<',$this->order)
                ->orderBy('order','DESC')->first();
    }

    public function getNextItemAttribute() {
        return static::where('template_id', $this->template_id)
                ->where('category', $this->category)
                ->where('order','>',$this->order)
                ->orderBy('order','ASC')->first();
    }

    public function labTestItems() {
        return $this->hasMany('App\LabTestItem');
    }
}
