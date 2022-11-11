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
        Schema::create('products', static function (Blueprint $table) {
            $table->id();
            $table->integer('barcode');
            $table->foreignId('sub_category_id')->references('id')->on('sub_categories');
            $table->foreignId('product_description_id')->references('id')->on('product_descriptions');
            $table->foreignId('color_id')->references('id')->on('product_colors');
            $table->foreignId('product_pack_id')->references('id')->on('product_packs');
            $table->integer('price');
            $table->integer('discount_price')->nullable();
            $table->enum('popular',['true','false']);
            $table->enum('status',['true','false']);
            $table->enum('show',['true','false']);
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
        Schema::dropIfExists('products');
    }
};
