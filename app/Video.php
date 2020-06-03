<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
  protected $table = 'videos';
  protected $fillable = [
     'enlace',	'titulo_es',	'orden'
  ];

  public function maquina()
  {
      return $this->belongsToMany('App\Maquina', 'maquinas_videos', 'video_id', 'maquina_id');
  }
}
