<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class venta extends Model
{

    protected $fillable = ['fecha','slug','total'];
    public function getRouteKeyName(){
    return 'slug';
    }



    public function venta(){
        return $this->belonsTo(venta::class, 'id');
    }

      //belongs pertenece
}
