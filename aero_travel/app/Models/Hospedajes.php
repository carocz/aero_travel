<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hospedajes extends Model
{
    use HasFactory;
    protected $table='hospedajes';
    protected $fillable=['id_hotel','id_ciudad','fecha_llegada','fecha_salida','todo_incluido_status','precio_compra','precio_venta','capacidad','descripcion','status'];
    public function hotel(){
       return $this->belongsTo('App\Models\Hoteles','id_hotel','id'); 
    }
    public function ciudades(){
       return $this->belongsTo('App\Models\Ciudades','id_ciudad','id'); 
    }
}
