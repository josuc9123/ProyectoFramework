<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mproductos extends Model
{
    protected $fillable = [
        'Nom_Producto', 'cantidad', 'precio','tipo_producto','imagen'
    ];
    use HasFactory;
    public function getUrlPathAttribute()
    {
        return \Storage::url($this->imagen);
    }

}
