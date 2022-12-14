<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pet extends Model {
    use HasFactory;

    protected $fillable = ['name', 'breed'];
    protected $hidden = ['created_at', 'updated_at'];
}
