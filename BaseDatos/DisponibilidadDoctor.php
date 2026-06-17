<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DisponibilidadDoctor extends Model
{
    protected $table = 'disponibilidad_doctor';

    protected $primaryKey = 'id_disponibilidad';

    protected $fillable = [
        'id_doctor',
        'tipo',
        'dia_semana',
        'fecha_especifica',
        'hora_inicio',
        'hora_fin',
        'recurrente',
        'motivo_bloqueo',
        'activo',
        'creado_por',
        'fecha_creacion'
    ];

    public function doctor()
    {
        return $this->belongsTo(Doctor::class, 'id_doctor', 'id_doctor');
    }

    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'creado_por', 'id_usuario');
    }
}