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
        Schema::create('savings', function (Blueprint $table) {
            $table->integer('id');
            $table->string('age' , 3)->nullable();
            $table->string('sex' , 8)->nullable();
            $table->string('residence' , 12)->nullable();
            $table->boolean('is_marrige')->nullable();
            $table->string('annual_income' , 32)->nullable();
            $table->string('assets' , 32)->nullable();
            $table->string('etc_income' , 32)->nullable();
            $table->string('debt' , 32)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('savings');
    }
};
