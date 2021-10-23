<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patner extends Model
{
    use HasFactory;

    

    public function framework()
    {
        //One to one
        return $this->belongsTo('App\Models\Framework');
    }
}
