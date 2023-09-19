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
        Schema::create('demande_de_sorties', function (Blueprint $table) {
            $table->id();
            $table->string('ref_art');
            $table->string('ref_sort');
            $table->string('qte_sort');
            $table->date('date_demande');
            $table->date('date_sort');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('demande_de_sorties');
    }
};
