<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    //
    protected $fillable = ['nombre','apellido','dui','nit','direccion','telefono','celular','notas'];
    
}
