<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create('news_translations', static function (Blueprint $table) {
            $table->id();
            $table->foreignId('news_id')
                ->references('id')
                ->on('news')
                ->cascadeOnDelete();
            $table->foreignId('language_id')
                ->references('id')
                ->on('languages')
                ->cascadeOnDelete();
            $table->unique(["news_id", "language_id"]);
            $table->string('title');
            $table->string('content');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('news_translations');
    }
};
