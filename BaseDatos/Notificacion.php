<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Notificacion extends Model
{
    protected $table = 'notificaciones';

    protected $primaryKey = 'id_notificacion';

    protected $fillable = [
        'id_cita',
        'id_paciente',
        'tipo',
        'canal',
        'mensaje',
        'fecha_programada',
        'enviada',
        'fecha_envio',
        'respuesta_paciente'
    ];

    public function cita()
    {
        return $this->belongsTo(Cita::class, 'id_cita', 'id_cita');
    }

    public function paciente()
    {
        return $this->belongsTo(Paciente::class, 'id_paciente', 'id_paciente');
    }
}