<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Esquema extends Model
{
  protected $table = 'esquemas';
  protected $fillable = [
     'image',	'titulo_es',	'orden'
  ];

  public function maquina()
  {
      return $this->belongsToMany('App\Maquina', 'maquinas_esquemas', 'esquema_id', 'maquina_id');
  }
}
