<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Producto extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'imagen',
        'descripcion',
        'categoria_id',
        'precio',
        'descuento',
        'estado',
    ];

    public function categoria():BelongsTo
    {
        return $this->belongsTo(Categoria::class);
    }

    public function stock():HasOne
    {
        return $this->hasOne(Stock::class);
    }

    public function proveedor():BelongsToMany
    {
        return $this->belongsToMany(Proveedor::class);
    }

    public function carrito():BelongsToMany
    {
        return $this->belongsToMany(Carrito::class);
    }


}
