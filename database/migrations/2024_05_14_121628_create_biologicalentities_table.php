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
        Schema::create('biologicalentities', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_reperto')->constrained('finds')->onDelete('cascade');
            $table->boolean('olotipo')->default(false);
            $table->string('riferimento_tassonomico');
            $table->string('nome_comune');
            $table->string('taxon_group');
            $table->string('riferimento_cronologico');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('biologicalentities');
    }
};
