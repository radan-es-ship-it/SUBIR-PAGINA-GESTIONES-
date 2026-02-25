<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contacto extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'email',
        'telefono',
        'empresa',
        'asunto',
        'servicio_id',
        'mensaje',
        'leido'
    ];

    protected $casts = [
        'leido' => 'boolean'
    ];

    public function scopeNoLeido($query)
    {
        return $query->where('leido', false);
    }
}
