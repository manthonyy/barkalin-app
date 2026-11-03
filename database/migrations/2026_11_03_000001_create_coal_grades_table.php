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
        Schema::create('coal_grades', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('category')->default('COAL GRADES');
            $table->string('subtitle');
            $table->string('calorific_value');
            $table->text('description');
            $table->string('image');
            $table->boolean('active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('coal_grades');
    }
};
