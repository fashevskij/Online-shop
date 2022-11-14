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
        Schema::create('sub_category_translations', static function (Blueprint $table) {
            $table->id();
            $table->foreignId('sub_category_id')
                ->references('id')
                ->on('sub_categories')
                ->cascadeOnDelete();
            $table->foreignId('language_id')
                ->references('id')
                ->on('languages')
                ->cascadeOnDelete();
            $table->unique(["sub_category_id", "language_id"]);
            $table->string('name');
            $table->string('seo_title');
            $table->string('seo_description');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('sub_category_translations');
    }
};
