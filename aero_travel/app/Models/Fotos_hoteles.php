<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fotos_hoteles extends Model
{
    use HasFactory;
    protected $table='fotos_hoteles';
    protected $fillable=['id_hotel','ruta','status'];
    public function hoteles(){
       return $this->belongsTo('App\Models\Hoteles','id_hotel','id'); 
    }
}
