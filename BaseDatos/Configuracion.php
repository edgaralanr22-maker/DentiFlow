<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Configuracion extends Model
{
    protected $table = 'configuracion';

    protected $primaryKey = 'id_config';

    protected $fillable = [
        'nombre_clinica',
        'hora_apertura',
        'hora_cierre',
        'duracion_cita_min',
        'dias_laborales',
        'telefono_clinica',
        'correo_clinica',
        'recordatorio_horas',
        'fecha_actualizacion'
    ];
}