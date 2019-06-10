<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Anuncios extends Model
{
    protected $table ="anuncio";
    protected $primaryKey = 'idanuncio'; 

    // //protected $fillable = [
     //campos que se van a poder modificar
    // ];

    //protected $guarded = [atributos que quiero proteger y que no se modifiquen];
}
