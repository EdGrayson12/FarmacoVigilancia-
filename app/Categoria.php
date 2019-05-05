<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
   // protected $table = 'categorias';
    //protected $primaryKey = 'id';
      protected $fillable =['nombre','telefono','correo','edad','sexo','estatura','peso','medicamento','dosis','efecto_adverso','comentarios'];
}
