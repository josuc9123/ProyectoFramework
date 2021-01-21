<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transacciones extends Model
{
    protected $fillable = [
        'exelente', 'bueno', 'normal','puede_mejorar','malo'
    ];
    use HasFactory;
}
