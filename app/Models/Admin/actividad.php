<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class actividad extends Model
{
    protected $table ='actividades';
    protected $fillable =['','rl',''];
    protected $guarded =['id'];
}
