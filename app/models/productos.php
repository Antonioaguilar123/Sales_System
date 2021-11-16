<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class productos extends Model
{
    public function productos(){
    return $this->hasMany(productos::class);
  //tiene muchos
    }
}
