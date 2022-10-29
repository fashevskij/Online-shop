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
        Schema::create('product_items', static function (Blueprint $table) {
            $table->id();
            $table->integer('barcode');
            $table->integer('product_id');
            $table->integer('color_id')->nullable();
            $table->integer('weight_id')->nullable();
            $table->integer('volume_id')->nullable();
            $table->string('type');
            $table->integer('price');
            $table->integer('discount_price');
            $table->boolean('popular');
            $table->boolean('status');
            $table->boolean('show');
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
