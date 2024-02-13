<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $table = 'employee';
    use HasFactory;
    protected $fillable=[
        'id',
        'EmpID',
        'Name',
      'LastName',
        'GCompany',
       'Company',
        'GDepartment',
       'Department',
        'Division',
        'Section',
        'PosSub',
        'PosMain1',
        'PosMain2',
       'SLName',
        'Email',
       'Priority',
       'TypeEmpName',
        'TypeEmpCode',
        'BORNDATE',
       'LineToken',
       'PathEmLn'
    ];
}