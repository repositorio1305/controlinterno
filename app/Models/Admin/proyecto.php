<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class proyecto extends Model
{
    protected $table ='proyectos';
    protected $fillable =['nombre_proyecto','fecha_inicio','fecha_fin','proyectos_id_lenguajes','estatus','descripcion'];
    protected $guarded =['id'];
    public $timestamps = false;

    public static function  getLenguajes(){
        $lenguajes=lenguaje::orderBy('id')->get();
        return $lenguajes;
    }



}
