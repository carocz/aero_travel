<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detalle_venta_vuelos extends Model
{
    use HasFactory;
    protected $table='detalle_venta_vuelos';
    protected $fillable=['id_venta','id_vuelo','cantidad','precio_compra','precio_venta','status'];
    public function id_venta(){
       return $this->belongsTo('App\Models\Venta','id_venta','id'); 
    }
    public function id_vuelo(){
       return $this->belongsTo('App\Models\Vuelos','id_vuelo','id'); 
    }
}
