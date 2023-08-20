<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = [
        'title',
    ];
        
    public function users()
    {
    return $this->belongsToMany(User::class);
    }
}
