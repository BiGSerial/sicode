<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('securities', function (Blueprint $table) {
            $table->id();
            $table->uuid('user_id');
            $table->boolean('super')->default(0);
            $table->boolean('admin')->default(0);
            $table->boolean('operator')->default(0);
            $table->boolean('user')->default(0);
            $table->boolean('viewer')->default(0);
            $table->boolean('robot')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('securities');
    }
};
