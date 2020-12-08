<?php

namespace App\Models;
use App\Models\Usuario;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bitacora extends Model
{
    public $timestamp = false;
    protected $fillable = ['que'];
    use HasFactory, Notifiable;
}
