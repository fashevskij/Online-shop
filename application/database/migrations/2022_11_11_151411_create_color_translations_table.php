<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create('color_translations', static function (Blueprint $table) {
            $table->id();
            $table->foreignId('color_id')
                ->references('id')
                ->on('colors')
                ->cascadeOnDelete();
            $table->foreignId('language_id')
                ->references('id')
                ->on('languages')
                ->cascadeOnDelete();
            $table->unique(["color_id", "language_id"]);
            $table->string('name');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('color_translations');
    }
};