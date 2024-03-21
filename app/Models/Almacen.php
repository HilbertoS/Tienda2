<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Almacen extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'stock',
    ];

    public function Provedor():HasMany
    {
        return $this->hasMany(Proveedor::class);
    } 

    public function Stock():HasMany
    {
        return $this->hasMany(Stock::class);
    }
}
