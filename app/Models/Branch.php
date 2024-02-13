<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    protected $table = 'branch';
    use HasFactory;
    protected $fillable=[
        'COMP_NO',
        'COMP_NAME'
    ];
}
