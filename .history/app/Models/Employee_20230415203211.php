<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    use Has


    protected $fillable = [
    'id',
    'user_id',
    'company_id',
        'department_id',
        'area_id',
    ];
   
}
