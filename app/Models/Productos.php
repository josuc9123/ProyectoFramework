<?php

namespace App\Models;
use App\Models\Categorias;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Productos extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'Nom_Producto', 'cantidad', 'precio','tipo_producto','imagen','concesionado'
    ];
    public function getUrlPathAttribute()
    {
        return \Storage::url($this->imagen);
    }

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    
    public function productos()
    {
        return $this-belongTo(Categorias::class);
    }
    //Query Scope

    public function scopeNom_Producto($query, $Nom_Producto)
    {
        if($Nom_Producto)
            return $query->where('Nom_Producto', 'LIKE', "%$Nom_Producto%");
    }

    public function scopecantidad($query, $cantidad)
    {
        if($cantidad)
            return $query->where('cantidad', 'LIKE', "%$cantidad%");
    }

    public function scopeprecio($query, $precioU)
    {
        if($precioU)
            return $query->where('precio', 'LIKE', "%$precioU%");
    }

}