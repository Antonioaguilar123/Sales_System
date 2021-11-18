<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $fillable = ['nombre','slug','ncamiseta','equipo','altura'];
    public function getRouteKeyName(){
    return 'slug';
}
}
