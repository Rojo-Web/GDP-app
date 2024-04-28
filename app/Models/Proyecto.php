<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proyecto extends Model
{
    use HasFactory;

    public function users(){
        return $this->belongsToMany(User::class,'user_proyecto');
    }
    public function tareas(){
        return $this->hasMany(tarea::class,'id');
    }

}
