<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chermet extends Model
{
    protected $fillable = ['price','category', 'description'];
    use HasFactory;
}
