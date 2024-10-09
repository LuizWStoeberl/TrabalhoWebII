<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class contact extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',    // O campo 'name' pode ser preenchido
        'email',   // O campo 'email' pode ser preenchido
        'phone',
    ];
}
