<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class empleado extends Model
{
    protected $table ='empleados';
    protected $fillable =['nombre_emp','nombre_s','apellido_emp','apellido_s','ci_emp','empleados_id_cargos'];
    protected $guarded =['id'];
    public $timestamps = false;
}
