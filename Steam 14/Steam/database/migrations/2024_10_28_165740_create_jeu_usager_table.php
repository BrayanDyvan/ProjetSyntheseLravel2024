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
        Schema::create('jeu_usager', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('usager_id')->constrained();
            $table->foreignId('jeu_id')->constrained('jeux');
            $table->text('commentaire')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jeu_usager');
    }
};
