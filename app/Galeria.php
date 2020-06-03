<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Galeria extends Model
{
  protected $table = 'galerias';
  protected $fillable = [
      'image','order','maquina_id'
  ];

  public function maquina()
  {
      return $this->belongsTo('App\Maquina', 'maquina_id');
  }
}
