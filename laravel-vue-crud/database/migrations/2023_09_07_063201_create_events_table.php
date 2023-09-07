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
        Schema::create('events', function (Blueprint $table) {
            $table->id(); // Colonne d'ID automatiquement incrémentée
            $table->string('title'); // Colonne pour le titre de l'événement
            $table->text('description'); // Colonne pour la description de l'événement
            // Ajoutez d'autres colonnes si nécessaire
            $table->timestamps(); // Colonnes pour les horodatages de création et de mise à jour
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
