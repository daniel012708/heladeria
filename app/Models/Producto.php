<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $fillable = ['nombre', 'precio', 'tipo', 'stock'];

    public function ventas()
    {
        return $this->hasMany(Venta::class);
    }
}
