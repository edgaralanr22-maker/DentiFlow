<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tratamiento extends Model
{
    protected $table = 'tratamientos';

    protected $primaryKey = 'id_tratamiento';

    protected $fillable = [
        'id_paciente',
        'id_doctor',
        'id_cita',
        'id_servicio',
        'nombre_tratamiento',
        'descripcion',
        'costo',
        'fecha_realizado',
        'estado',
        'notas'
    ];

    public function paciente()
    {
        return $this->belongsTo(Paciente::class, 'id_paciente', 'id_paciente');
    }

    public function doctor()
    {
        return $this->belongsTo(Doctor::class, 'id_doctor', 'id_doctor');
    }

    public function cita()
    {
        return $this->belongsTo(Cita::class, 'id_cita', 'id_cita');
    }

    public function servicio()
    {
        return $this->belongsTo(Servicio::class, 'id_servicio', 'id_servicio');
    }

    public function pagos()
    {
        return $this->hasMany(Pago::class, 'id_tratamiento', 'id_tratamiento');
    }
}