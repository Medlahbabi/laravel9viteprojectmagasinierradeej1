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
        Schema::create('preparation_de_paniers', function (Blueprint $table) {
            $table->id();
            $table->string('name_art_pretpa');
            $table->string('qte_pretpa');
            $table->date('date_pretpa');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('preparation_de_paniers');
    }
};
