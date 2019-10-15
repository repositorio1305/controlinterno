<?php

namespace App\Models\Seguridad;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Usuarios extends Authenticatable
{
    protected $table ='usuarios';
    protected $fillable = [
        'usuario','password',
    ];
    protected $guarded =['id'];
    protected $remember_token=false;
}
