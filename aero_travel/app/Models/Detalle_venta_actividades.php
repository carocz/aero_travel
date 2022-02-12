<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detalle_venta_actividades extends Model
{
    use HasFactory;
    protected $table='detalle_venta_actividades';
    protected $fillable=['id_venta','id_actividades','cantidad','precio_compra','precio_venta','status'];
    public function id_venta(){
       return $this->belongsTo('App\Models\Venta','id_venta','id'); 
    }
    public function id_actividades(){
       return $this->belongsTo('App\Models\Actividades','id_actividades','id'); 
    }
}
