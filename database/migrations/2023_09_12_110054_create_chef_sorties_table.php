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
        Schema::create('chef_sorties', function (Blueprint $table) {
            $table->id();
            $table->string('name_chef');
            $table->string('first_name_chef');
            $table->string('email_chef')->unique();
            $table->string('password_chef');
            $table->string('registration_number_chef');
            $table->string('phone_chef');
            $table->string('named_project_manager');
            $table->date('date_of_birth_chef');
            $table->string('image_chef');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('chef_sorties');
    }
};
