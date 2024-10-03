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
        Schema::create('metadatas', function (Blueprint $table) {
            $table->id();  // Creates 'id' as the primary key
            $table->unsignedBigInteger('id_allegato');
            $table->string('codice_reperto');
            $table->string('titolo');
            $table->string('autore')->nullable();
            $table->string('sogetto')->nullable();
            $table->text('descrizione')->nullable();
            $table->string('editore')->nullable();
            $table->string('autore_di_contributo')->nullable();
            $table->date('data')->nullable();
            $table->string('tipo')->nullable();
            $table->string('formato')->nullable();
            $table->string('identificatore')->nullable();
            $table->string('fonte')->nullable();
            $table->string('lingua')->nullable();
            $table->text('relazione')->nullable();
            $table->string('copertura')->nullable();
            $table->string('gestione_dei_diritti')->nullable();
            $table->timestamps();  // Creates 'created_at' and 'updated_at'

            // Foreign key relationship with the 'attached' table
            $table->foreign('id_allegato')->references('id')->on('attachments')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('metadatas');
    }
};
