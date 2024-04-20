<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Thing extends Model
{
    protected $fillable=["nom","description","nature","date","lieu"];
    use HasFactory;
}
