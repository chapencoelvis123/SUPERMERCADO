<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    use HasFactory;
    public function compras(){
        return $this->hasMany('App\Models\Compra');
            }
            public function contactos(){
                return $this->hasMany('App\Models\Contacto');
                    }
}
