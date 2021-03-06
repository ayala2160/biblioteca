<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Computadora extends Model
{
    protected $table = 'computadoras';
    public $timestamps = false;
    protected $fillable = ['marca', 'modelo_pc'];

    public function estudiantes()
    {
      return $this->hasMany(Estudiante::class, 'computadora_id');
    }
}
