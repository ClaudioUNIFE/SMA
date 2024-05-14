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
            $table->foreignId('id_museo')->constrained();
            $table->string('id_vecchio');
            $table->text('descrizione')->nullable();
            $table->text('note')->nullable();
            $table->boolean('esposto')->default(false);
            $table->boolean('digitalizzato')->default(false);
            $table->boolean('catalogato')->default(false);
            $table->boolean('restaurato')->default(false);
            $table->foreignId('id_catalogo')->constrained();
            $table->foreignId('id_deposito')->constrained();
            $table->foreignId('id_collezione')->constrained();
            $table->boolean('validato')->default(false);
            $table->string('tipo_entita')->nullable();
            $table->string('categoria')->nullable();
            $table->boolean('gigapixel_flag')->default(false);
            $table->boolean('render_flag')->default(false);
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
