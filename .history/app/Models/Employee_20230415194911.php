<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;


    protected $fillable = [
       'id')->primary();
       'user_id')->nullable();
       'company_id')->nullable();
        'department_id')->nullable();
        'area_id')->nullable();
    ];
   
}
