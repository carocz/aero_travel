<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asientos_por_vuelo extends Model
{
    use HasFactory;
    protected $table='asientos_por_vuelo';
    protected $fillable=['id_vuelo','detalle','status'];
    public function vuelos(){
       return $this->belongsTo('App\Models\Vuelos','id_vuelo','id'); 
    }
}
