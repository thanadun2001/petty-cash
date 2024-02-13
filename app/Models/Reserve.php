<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reserve extends Model
{
    protected $table = 'reserve';
    use HasFactory;
    protected $fillable=[
        'COMP_NO',
        'COMP_NAME'
    ];
}
