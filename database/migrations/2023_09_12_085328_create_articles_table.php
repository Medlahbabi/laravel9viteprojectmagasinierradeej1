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
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->string('ref_art');
            $table->string('name_art');
            $table->string('gender_art');
            $table->text('description_art');
            $table->decimal('price_art');
            $table->string('stock_quantity_art');
            $table->string('quantity_output_art');
            $table->string('minimum_quantity_art');
            $table->string('image_art');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('articles');
    }
};
