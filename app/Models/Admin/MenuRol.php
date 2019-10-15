<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class MenuRol extends Model
{
    protected $table ='menu_rol';
    protected $guarded =['id'];
    public $timestamp = false;
}
