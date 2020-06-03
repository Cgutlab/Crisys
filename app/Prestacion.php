<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prestacion extends Model
{
  protected $table = 'prestacions';
  protected $fillable = [
     'image',	'titulo_es',	'orden'
  ];

  public function maquina()
  {
      return $this->belongsToMany('App\Maquina', 'maquinas_prestaciones', 'prestacion_id', 'maquina_id');
  }
}
