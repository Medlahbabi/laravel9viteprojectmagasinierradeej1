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
        Schema::create('magasiniers', function (Blueprint $table) {
            $table->id();
            $table->string('name_magasinier');
            $table->string('first_name_magasinier');
            $table->string('email_magasinier')->unique();
            $table->string('password_magasinier');
            $table->string('registration_number_magasinier');
            $table->string('phone_magasinier');
            $table->date('date_of_birth_magasinier');
            $table->string('ordered_quantity_magasinier');
            $table->string('image_magasinier');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('magasiniers');
    }
};
