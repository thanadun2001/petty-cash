<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Combination extends Model
{
    protected $table = 'combination';
    use HasFactory;
    protected $fillable=[
       'COMP_ID',
       'GEN_ID_IT',
       'SEGMENT1',
       'SEGMENT2',
       'SEGMENT3',
       'SEGMENT4',
       'SEGMENT5',
       'SEGMENT6',
       'SEGMENT7',
       'SEGMENT8',
       'SEGMENT9',
       'FLAG',
       'ENDDATE'
    ];
}
