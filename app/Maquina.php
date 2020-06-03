<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Maquina extends Model
{
    protected $table = 'maquinas';
    protected $fillable = [
       'titulo_es', 'descripcion_es', 'ficha', 'orden', 'keyword_es'
    ];

    public function galerias()
    {
        return $this->hasMany('App\Galeria', 'maquina_id');
    }

    public function esquemas()
    {
        return $this->belongsToMany('App\Esquema', 'maquinas_esquemas', 'maquina_id', 'esquema_id');
    }

    public function prestaciones()
    {
        return $this->belongsToMany('App\Prestacion', 'maquinas_prestaciones', 'maquina_id', 'prestacion_id');
    }

    public function videos()
    {
        return $this->belongsToMany('App\Video', 'maquinas_videos', 'maquina_id', 'video_id');
    }

    public function relacionados()
    {
        return $this->belongsToMany('App\Maquina', 'maquinas_relacionados', 'maquina_id', 'relacion_id');
    }
}
