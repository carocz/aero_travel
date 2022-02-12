<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuarios extends Model
{
   use HasFactory;
    protected $table='usuarios';
    protected $fillable=['id_tipo_usuario','nombre','apellido_paterno','apellido_materno','telefono','correo','password','status'];
    public function tipo_usuarios(){
       return $this->belongsTo('App\Models\tipo_usuarios','id_tipo_usuario','id'); 
    }
}
