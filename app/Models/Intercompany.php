<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Intercompany extends Model
{
    protected $table = 'intercompany';
    use HasFactory;
    protected $fillable=[
        'COMP_NO',
        'COMP_NAME'
    ];
}
