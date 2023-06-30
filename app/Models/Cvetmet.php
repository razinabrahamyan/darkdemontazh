<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cvetmet extends Model
{
    protected $fillable = ['price','category'];
    use HasFactory;
}
