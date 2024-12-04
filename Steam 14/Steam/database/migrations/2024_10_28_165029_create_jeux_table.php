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
        Schema::create('jeux', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nom',100);
            $table->integer('nbTelechargement');
            $table->date('dateDepot');
            $table->text('Resumer');
            $table->string('video',500);
            $table->string('image',500);
            $table->integer('nbVersion');
            $table->foreignId('professeur_id')->constrained('professeurs');
            $table->foreignId('equipe_id')->constrained('equipes');

        });
    }

    
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jeux');
    }
};
