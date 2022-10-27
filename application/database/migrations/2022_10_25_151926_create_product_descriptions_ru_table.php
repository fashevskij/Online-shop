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
        Schema::create('product_descriptions_ru', static function (Blueprint $table) {
            $table->id();
            $table->integer('product_id');
            $table->string('name');
            $table->string('short_description');
            $table->string('full_description');
            $table->string('seo_title');
            $table->string('seo_description');
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
        Schema::dropIfExists('product_descriptions_ru');
    }
};
