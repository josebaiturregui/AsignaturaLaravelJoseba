<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function scopeBuscar($query, $buscar){
        if($buscar){
            $query->where("titulo", "like", "%{$buscar}%");
        }
    }

    public function prestamos () {

        return $this->hasMany(Prestamo::class);
    }

}

