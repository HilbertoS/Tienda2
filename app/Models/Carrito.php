<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Carrito extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'producto_id',
        'facturado',
    ];

    public function user():BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function producto():BelongsToMany
    {
        return $this->belongsToMany(Producto::class);
    }

}
