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
    public function up()
    {
        if (!Schema::hasTable('product_categories'))
            Schema::create('product_categories', function (Blueprint $table) {
                $table->id();
                $table->string('name');
                $table->timestamps();
            });

        if (!Schema::hasTable('products'))
            Schema::create('products', function (Blueprint $table) {
                $table->id();
                $table->string('name');
                $table->decimal('price');
                $table->enum('type', ['physical', 'digital']);
                $table->timestamps();
            });

        if (!Schema::hasTable('product_variants'))
            Schema::create('product_variants', function (Blueprint $table) {
                $table->id();
                $table->foreignId('product_id')->constrained()->onDelete('cascade');
                $table->foreignId('product_category_id')->constrained()->onDelete('cascade');
                $table->string('size');
                $table->integer('stock');
                $table->string('sku');
                $table->timestamps();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_variants');
        Schema::dropIfExists('products');
        Schema::dropIfExists('product_categories');
    }
};
