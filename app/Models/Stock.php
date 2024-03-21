<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Stock extends Model
{
    use HasFactory;

    protected $fillable = [
        'producto_id',	
        'stock_actual',
        'stock_minimo',
        'stock_maximo',
        'almacen_id',
        'fecha_actualizacion',
    ];

    public function producto():BelongsTo
    {
        return $this->belongsTo(Producto::class);
    }

    public function almacen():BelongsTo
    {
       return $this->belongsTo(Almacen::class);
    }
}
