<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Historial extends Model
{
    use HasFactory;

    protected $fillable = [
        'factura_id',
        'fecha',
    ];

    public function factura():BelongsTo
    {
        return $this->belongsTo(Factura::class);
    }
}
