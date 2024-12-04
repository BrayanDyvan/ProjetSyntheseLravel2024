<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Validation\Rules\Unique;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('usagers', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nom', 100);
            $table->string('prenom', 100);
            $table->string('matricule', 100)->unique();
            $table->string('password', 255);
            $table->string('email', 100)->unique();
            $table->string('avatar', 1024);
            $table->foreignId('equipe_id')->constrained('equipes');
            $table->foreignId('professeur_id')->constrained('professeurs');
     
            $table->rememberToken();
        });

        Schema::table('usagers', function (Blueprint $table) {

            $table->enum('role', ['professeur', 'etudiant', 'etudiantInfo'])->default('etudiant');

        });
    }





    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usagers');
    }
};
