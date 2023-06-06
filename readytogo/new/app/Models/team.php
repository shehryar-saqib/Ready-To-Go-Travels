<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class team extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'team';
    protected $fillable = ['image', 'name','role'];
}
