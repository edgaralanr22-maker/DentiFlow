<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HistorialClinico extends Model
{
    protected $table = 'historial_clinico';

    protected $primaryKey = 'id_historial';

    protected $fillable = [
        'id_paciente',
        'alergias',
        'enfermedades',
        'antecedentes_dentales',
        'habitos',
        'medicamentos_actuales',
        'observaciones',
        'fecha_creacion',
        'fecha_actualizacion'
    ];

    public function paciente()
    {
        return $this->belongsTo(Paciente::class, 'id_paciente', 'id_paciente');
    }
}