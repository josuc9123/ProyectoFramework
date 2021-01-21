<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorias extends Model
{
    public function parent(){
        return $this->belongsTo('App\Models\Categorias');
        }
        
         public function subCategoria(){
        return $this->hasMany('App\Models\categorias','parent_id');
        }

    use HasFactory;
}
