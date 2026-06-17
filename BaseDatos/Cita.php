<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cita extends Model
{
    protected $table = 'citas';
    protected $primaryKey = 'id_cita';

    protected $fillable = [
        'id_paciente',
        'id_doctor',
        'id_servicio',
        'fecha',
        'hora_inicio',
        'hora_fin',
        'duracion_min',
        'motivo',
        'notas',
        'estado',
        'confirmada_paciente',
        'qr_check_in',
        'recordatorio_enviado',
        'creada_por'
    ];

    public function paciente()
    {
        return $this->belongsTo(Paciente::class, 'id_paciente', 'id_paciente');
    }

    public function doctor()
    {
        return $this->belongsTo(Doctor::class, 'id_doctor', 'id_doctor');
    }

    public function servicio()
    {
        return $this->belongsTo(Servicio::class, 'id_servicio', 'id_servicio');
    }

    public function cancelacion()
    {
        return $this->hasOne(Cancelacion::class, 'id_cita', 'id_cita');
    }

    public function pagos()
    {
        return $this->hasMany(Pago::class, 'id_cita', 'id_cita');
    }
}