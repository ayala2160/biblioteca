<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{
    protected $fillable = ['titulo', 'autor', 'categoria', 'isbn'];

    public function estudiantes()
    {
        return $this->belongsToMany(Estudiante::class);
    }
}
