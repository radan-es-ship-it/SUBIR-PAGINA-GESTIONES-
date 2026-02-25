<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servicio extends Model
{
    use HasFactory;

    protected $fillable = [
        'titulo',
        'descripcion',
        'descripcion_larga',
        'icono',
        'imagen',
        'activo',
        'orden'
    ];

    protected $casts = [
        'activo' => 'boolean'
    ];

    public function scopeActivo($query)
    {
        return $query->where('activo', true);
    }

    public function scopeOrdenado($query)
    {
        return $query->orderBy('orden', 'asc');
    }
}
