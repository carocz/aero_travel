<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vuelos extends Model
{
    use HasFactory;
    protected $table='vuelos';
    protected $fillable=['id_aerolinea','id_ciudad_origen','id_ciudad_destino','fecha','hora_salida','hora_llegada','precio_compra','precio_venta','status'];
    public function aerolineas(){
       return $this->belongsTo('App\Models\Aerolineas','id_aerolinea','id'); 
    }
    public function ciudad_origen(){
       return $this->belongsTo('App\Models\Ciudades','id_ciudad_origen','id'); 
    }
    public function ciudad_destino(){
       return $this->belongsTo('App\Models\Ciudades','id_ciudad_destino','id'); 
    }
}
