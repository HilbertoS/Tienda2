<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class LineaFactura extends Model
{
    use HasFactory;

    protected $fillable = [
        'factura_id',
        'producto_id',
        'cantidad',
        'iva',
        'precio',
        'descuento',
    ];

    public function producto():BelongsTo
    {
        return $this->belongsTo(Producto::class);
    }

    public function factura():BelongsToMany
    {
        return $this->belongsToMany(Factura::class);
    }
    
}
