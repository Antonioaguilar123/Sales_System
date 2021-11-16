<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{

    protected $fillable = ['nombre','slug','email','telefono','direccion'];
    public function getRouteKeyName(){
    return 'slug';
    }

    

    public function Cliente()
    {
        
        return $this->belonsTo(Cliente::class, 'id');
    }
}
