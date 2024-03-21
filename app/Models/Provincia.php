<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Provincia extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre', 
    ];

    public function Ciudad():HasMany
    {
        return $this->hasMany(Ciudad::class, 'provincia_id', 'id');
    }
}
