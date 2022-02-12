<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estados extends Model
{
    use HasFactory;
    protected $table='estados';
    protected $fillable=['id_pais','nombre','status'];
    public function pais(){
       return $this->belongsTo('App\Models\Pais','id_pais','id'); 
    }
}
