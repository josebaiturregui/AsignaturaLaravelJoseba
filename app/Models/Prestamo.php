<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

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

    public function scopeFilterByUser($query)
    {
        if (!Auth::user()->isAdmin()) {
            $query->where('user_id', Auth::id());
        }
    }
}
