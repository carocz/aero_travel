<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tipo_usuarios extends Model
{
   use HasFactory;
    protected $table='tipo_usuarios';
    protected $fillable=['nombre','status'];
}
 