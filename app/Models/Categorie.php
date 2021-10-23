<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre',
    ];
     //One to Many
     public function frameworks()
     {
         return $this->hasMany('App\Models\Framework');
     }
}
