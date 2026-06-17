<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pago extends Model
{
    protected $table = 'pagos';

    protected $primaryKey = 'id_pago';

    protected $fillable = [
        'id_paciente',
        'id_cita',
        'id_tratamiento',
        'id_servicio',
        'concepto',
        'monto',
        'metodo_pago',
        'estado_pago',
        'monto_pagado',
        'fecha_pago',
        'registrado_por',
        'notas'
    ];

    public function paciente()
    {
        return $this->belongsTo(Paciente::class, 'id_paciente', 'id_paciente');
    }

    public function cita()
    {
        return $this->belongsTo(Cita::class, 'id_cita', 'id_cita');
    }

    public function servicio()
    {
        return $this->belongsTo(Servicio::class, 'id_servicio', 'id_servicio');
    }

    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'registrado_por', 'id_usuario');
    }
}