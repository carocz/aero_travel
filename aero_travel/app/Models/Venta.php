<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    use HasFactory;
    protected $table='venta';
    protected $fillable=['id_cliente','fecha','nombre_beneficiario','id_banco','tipo_tarjeta','mes_vencimiento','cvv','subtotal','iva','total','status'];
    public function cliente(){
       return $this->belongsTo('App\Models\Usuarios','id_cliente','id'); 
    }
    public function banco(){
       return $this->belongsTo('App\Models\Bancos','id_banco','id'); 
    }

}
