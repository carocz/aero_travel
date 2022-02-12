<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detalle_venta_hospedaje extends Model
{
    use HasFactory;
    protected $table='detalle_venta_hospedaje';
    protected $fillable=['id_venta','id_hospedaje','cantidad','precio_compra','precio_venta','status'];
    public function id_venta(){
       return $this->belongsTo('App\Models\Venta','id_venta','id'); 
    }
    public function id_hospedaje(){
       return $this->belongsTo('App\Models\Hospedajes','id_hospedaje','id'); 
    }
}
