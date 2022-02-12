<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Actividades extends Model
{
    use HasFactory;
    protected $table='actividades';
    protected $fillable=['id_operador_turisitico','id_ciudad','capacidad','descripcion','todo_incluido_status','precio_compra','precio_venta','status'];
    public function operador_turistico(){
       return $this->belongsTo('App\Models\Operadores_turisticos','id_operador_turisitico','id'); 
    }
    public function ciudades(){
       return $this->belongsTo('App\Models\Ciudades','id_ciudad','id'); 
    }
}
