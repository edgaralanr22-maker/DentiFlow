<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Servicio extends Model
{
    protected $table = 'servicios';

    protected $primaryKey = 'id_servicio';

    protected $fillable = [
        'nombre',
        'descripcion',
        'categoria',
        'duracion_min',
        'precio_base',
        'requiere_doctor',
        'color_agenda',
        'activo',
        'fecha_creacion'
    ];

    public function citas()
    {
        return $this->hasMany(Cita::class, 'id_servicio', 'id_servicio');
    }

    public function pagos()
    {
        return $this->hasMany(Pago::class, 'id_servicio', 'id_servicio');
    }
}