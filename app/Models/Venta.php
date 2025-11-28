<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    protected $fillable = ['producto_id', 'cantidad', 'total', 'fecha'];

    public function producto()
    {
        return $this->belongsTo(Producto::class);
    }
}

