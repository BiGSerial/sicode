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
        id')->primary();
            $table->string('name');
            $table->string('fullname')->nullable();
            $table->string('andress')->nullable();
            $table->string('city')->nullable();
            $table->string('uf')->nullable();
            $table->string('telephone')->nullable();
            $table->timestamps();
    ]; 
}
