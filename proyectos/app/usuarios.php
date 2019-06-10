<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class usuarios extends Model
{
    protected $table ="usuario";
    protected $primaryKey = 'idusuario';
    public $timestamps = false;
}

