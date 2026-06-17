<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SesionActiva extends Model
{
    protected $table = 'sesiones_activas';

    protected $primaryKey = 'id_sesion';

    protected $fillable = [
        'id_usuario',
        'refresh_token_hash',
        'dispositivo',
        'plataforma',
        'ip_address',
        'fecha_inicio',
        'fecha_expiracion',
        'ultimo_uso',
        'activa',
        'fecha_revocacion',
        'motivo_revocacion'
    ];

    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'id_usuario', 'id_usuario');
    }
}