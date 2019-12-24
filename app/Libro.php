<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Libro extends Model
{
    use SoftDeletes;
    protected $fillable = ['user_id', 'titulo', 'autor', 'estatus'];

    public function estudiantes()
    {
        return $this->belongsToMany(Estudiante::class);
    }
    public function archivos()
    {
        return $this->morphMany(Archivo::class, 'modelo');
    }
}
