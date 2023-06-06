<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class packages extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'packages';
    protected $fillable = ['image','name', 'description','date','route'];
}