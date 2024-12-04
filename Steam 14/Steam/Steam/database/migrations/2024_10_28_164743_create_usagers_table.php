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
        Schema::create('usagers', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nom',100);
            $table->string('matricule',100);
            $table->string('password',100);
            $table->string('email',100);
            $table->string('avatar',1024);
            $table->foreignId('equipe_id')->constrained();
            $table->foreignId('professeur_id')->constrained('professeurs');
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
