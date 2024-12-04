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
        Schema::create('categorie_jeu', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('jeu_id')->constrained('jeux');
            $table->foreignId('categorie_id')->constrained();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categorie_jeu');
    }
};
