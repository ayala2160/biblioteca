<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Computadora extends Model
{
    protected $table = 'computadoras';
    public $timestamps = false;
    protected $fillable = ['marca', 'modelo'];
}
