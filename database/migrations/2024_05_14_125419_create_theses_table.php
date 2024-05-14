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
        Schema::create('theses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_museo')->constrained();
            $table->foreignId('id_deposito')->constrained();
            $table->string('autore');
            $table->string('titolo');
            $table->string('anno_accademico');
            $table->string('disciplina');
            $table->string('relatore');
            $table->string('correlatore')->nullable();
            $table->string('controrelatore')->nullable();
            $table->string('percorso_file');
            $table->text('note')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('theses');
    }
};
