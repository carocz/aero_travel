<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aerolineas extends Model
{
    use HasFactory;
    protected $table='aerolineas';
    protected $fillable=['id_usuarios','rfc','nombre','razon_social','id_ciudad','direccion','colonia','codigo_postal','telefono','status'];
    public function usuario(){
       return $this->belongsTo('App\Models\Usuarios','id_usuarios','id'); 
    }
    public function ciudad(){
       return $this->belongsTo('App\Models\Ciudades','id_ciudad','id'); 
    }
}
