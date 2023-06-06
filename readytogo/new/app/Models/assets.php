<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class assets extends Model
{

    public $timestamps = false;
    use HasFactory;
    protected $casts = [
    ];

  
    protected $table = 'assets';

    protected $fillable = ['dest','image'];
}
