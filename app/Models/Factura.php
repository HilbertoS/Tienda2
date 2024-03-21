<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Factura extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'fecha',
        'iva',
        'descuento',
        'total',
    ];

    public function user():BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function linea():HasMany
    {
        return $this->hasMany(LineaFactura::class);
    }

    public function historial():HasOne
    {
        return $this->hasOne(Historial::class);
    }

}