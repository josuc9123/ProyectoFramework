<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Productos;
class Revision extends Productos
{   
    protected $table = "productos";
    protected static function booted(){
        static::addGlobalScope('concesionado',function (Builder $builder){
            $builder->whereNull('concesionado');
        });
    }

}
