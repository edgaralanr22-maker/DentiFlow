<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
   protected $table = 'doctores';
    protected $primaryKey = 'id_doctor';

    protected $fillable = [
        'nombre',
        'especialidad',
        'telefono',
        'correo',
        'estado',
        'foto_url',
        'fecha_alta'
    ];

    public function usuario()
    {
        return $this->hasOne(Usuario::class, 'id_doctor', 'id_doctor');
    }

    public function citas()
    {
        return $this->hasMany(Cita::class, 'id_doctor', 'id_doctor');
    }

    public function disponibilidad()
    {
        return $this->hasMany(DisponibilidadDoctor::class, 'id_doctor', 'id_doctor');
    } //
}
