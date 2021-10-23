<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Framework extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'nombre',
        'descripcion',
        'categoria_id'
    ];

     //One to one
     public function categoria()
     {
         return $this->belongsTo('App\Models\Categoria');
     }
 
     //One to Many
     public function socios()
     {
         return $this->hasMany('App\Models\Socio');
     }
}
