<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Costcenter extends Model
{
    protected $table = 'costcenter';
    use HasFactory;
    protected $fillable=[
        'COMP_NO',
        'COMP_NAME'
    ];
}
