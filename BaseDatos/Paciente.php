<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    protected $table = 'pacientes';

    protected $primaryKey = 'id_paciente';

    protected $fillable = [
        'nombre_completo',
        'telefono',
        'fecha_nacimiento',
        'sexo',
        'estado_residencia',
        'ciudad',
        'correo',
        'alergias_notas',
        'codigo_qr',
        'activo',
        'fecha_registro'
    ];
}
