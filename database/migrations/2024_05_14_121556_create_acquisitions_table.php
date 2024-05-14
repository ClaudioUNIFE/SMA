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
        Schema::create('acquisitions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_reperto')->constrained()->onDelete('cascade');
            $table->string('modalita_acquisizione');
            $table->date('data_inventario');
            $table->date('data_acquisizione');
            $table->string('proprieta');
            $table->string('codice_patrimonio');
            $table->string('provenienza');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('acquisitions');
    }
};
