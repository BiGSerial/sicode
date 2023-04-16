<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $keyType = 'string';
    protected $primaryKey = 'id';
    public $incrementing = false;

    protected $fillable = [
        'id',
            $'name');
            $'fullname')->nullable();
            $'andress')->nullable();
            $'city')->nullable();
            $'uf')->nullable();
            $'telephone')->nullable();
            $table->timestamps();
    ]; 
}
