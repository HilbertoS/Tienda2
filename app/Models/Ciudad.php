<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Ciudad extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'codigoPostal',
        'provincia_id'
    ];

    public function Provincia():BelongsTo
    {
        return $this->belongsTo(Provincia::class, 'provincia_id', 'id');
    }

    public function Users():HasMany
    {
        return $this->hasMany(User::class, 'ciudad_id', 'id');
    }
}
