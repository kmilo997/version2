<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
   protected $fillable = [
        'id','nombre', 'minimo','precio_compra','precio_venta'  ];
}
