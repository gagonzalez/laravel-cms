<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pais extends Model
{
    use HasFactory;


    public function Ejemplo(){

        return $this->hasManyThrough('App\Models\Ejemplo', 'App\Models\User','pais_id');
    }



}
