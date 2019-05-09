<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Template extends Model
{
    protected $fillable = ['name','price','remarks'];

    public function getItemCountAttribute() {
        return count($this->items);
    }

    public function items() {
        return $this->hasMany('App\TemplateItem', 'template_id');
    }

    public function getNextOrderAttribute() {
        $items = $this->items;
        $highestOrder = 0;
        foreach($items as $item) {
            if($highestOrder<$item->order) $highestOrder = $item->order;
        }

        return $highestOrder + 1;
    }

    public function getOrderedItemsAttribute() {
        return \App\TemplateItem::where('template_id', $this->id)
                ->orderByRaw('`order`, name')->get();
    }
}
