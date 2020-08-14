<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contacto extends Model
{
    protected $table = 'contacto';
    protected $primarykey = 'id';
    public $timestamps = false;
    protected $fillable = ['id', 'nombre_apellido', '
    telefono', 'direccion', 'email', 'fecha_nato'];
}
