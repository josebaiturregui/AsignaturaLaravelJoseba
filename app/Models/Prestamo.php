<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prestamo extends Model
{
    use HasFactory;
    
    protected $guarded = [];

    public function libro()
    {
        return $this->belongsTo(Libro::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
