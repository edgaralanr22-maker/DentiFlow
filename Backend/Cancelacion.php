<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cancelacion extends Model
{
    protected $table = 'cancelaciones';

    protected $primaryKey = 'id_cancelacion';

    protected $fillable = [
        'id_cita',
        'motivo',
        'cancelada_por',
        'fecha_cancelacion'
    ];

    public function cita()
    {
        return $this->belongsTo(Cita::class, 'id_cita', 'id_cita');
    }

    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'cancelada_por', 'id_usuario');
    }
}
