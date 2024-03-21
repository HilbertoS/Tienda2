<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Proveedor extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'direccion',
        'empresa',
        'contacto',
    ];

    public function Almacen():BelongsToMany
    {
        return $this->belongsToMany(Almacen::class);
    }
}
