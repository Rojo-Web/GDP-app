<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tarea extends Model
{
    use HasFactory;
    protected $table = 'tareas'; //indicamos la tabla de referencia
    protected $primaryKey = 'id'; //indicamos la columna de la llave primaria
    public $timestamps = false; //quitar columnas de fecha y registro created_at y updated_at.
    public function users(){
        return $this->belongsTo(User::class,'responsable');
    }
    public function proyectos(){
        return $this->belongsTo(Proyecto::class,'proyecto_id');
    }

}
