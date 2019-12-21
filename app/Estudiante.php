<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
    protected $fillable = ['nombre', 'correo', 'codigo', 'fecha_nacimiento'];
    protected $dates = ['fecha_nacimiento', 'created_at', 'updated_at'];

    public function equipos()
    {
      return $this->belongsTo(Computadora::class, 'computadora_id');
    }
}
