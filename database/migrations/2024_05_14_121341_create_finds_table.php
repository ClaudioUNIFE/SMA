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
        Schema::create('finds', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_museo')->unsigned();
            $table->foreign('id_museo')
              ->references('id')
              ->on('museums')  // Ensure this matches the actual table name
              ->onDelete('cascade');
            $table->string('id_vecchio');
            $table->text('descrizione')->nullable();
            $table->text('note')->nullable();
            $table->boolean('esposto')->default(false);
            $table->boolean('digitalizzato')->default(false);
            $table->boolean('catalogato')->default(false);
            $table->boolean('restaurato')->default(false);
            $table->foreignId('id_deposito')->constrained('deposits');
            $table->foreignId('id_collezione')->constrained('collections');
            $table->boolean('validato')->default(false);
            $table->string('categoria')->nullable();
            $table->string('cartellino_storico');
            $table->string('cartellino_attuale');
            $table->string('foto_principale');
            $table->string('didascalia')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('finds');
    }
};
