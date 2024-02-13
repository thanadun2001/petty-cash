<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Segment extends Model
{

    protected $table = 'segment';
    use HasFactory;
    protected $fillable=[
        'ACCOUNT_NO',
        'ACCOUNT_NAME'
    ];
}

