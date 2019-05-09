<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Medicine extends Model
{
    protected $fillable = ['generic', 'brand', 'description', 'price', 'qty_stock'];
}
