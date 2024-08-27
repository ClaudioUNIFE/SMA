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
        Schema::create('paradatas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_allegato');
            $table->string('stato_corrente');
            $table->string('responsabile_scelta_reperto')->nullable();
            $table->boolean('scheda_validata')->default(false);
            $table->string('validatore_scheda')->nullable();
            $table->text('note')->nullable();
            $table->string('responsabile_acquisizione')->nullable();
            $table->string('operatore')->nullable();
            $table->string('tipo_superfice')->nullable();
            $table->text('descrizione_complessita')->nullable();
            $table->string('fotocamera')->nullable();
            $table->string('impostazioni')->nullable();
            $table->string('obiettivo')->nullable();
            $table->string('illuminazione')->nullable();
            $table->boolean('light_box')->default(false);
            $table->string('tipo_supporto')->nullable();
            $table->integer('numero_scatti')->nullable();
            $table->string('software')->nullable();
            $table->string('output')->nullable();
            $table->string('strumentazione')->nullable();
            $table->string('risoluzione')->nullable();
            $table->string('modalita_scansione')->nullable();
            $table->string('ingrandimento')->nullable();
            $table->string('luminosita')->nullable();
            $table->boolean('fibra_ottica')->default(false);
            $table->boolean('tiling')->default(false);
            $table->string('scala')->nullable();
            $table->string('formato')->nullable();
            $table->date('data_inizio')->nullable();
            $table->date('data_fine')->nullable();
            $table->string('tempo_totale')->nullable();
            $table->string('luogo_acquisizione')->nullable();
            $table->float('temperatura')->nullable();
            $table->text('condizioni_iniziali_conservazione')->nullable();
            $table->text('condizioni_finali_conservazione')->nullable();
            $table->timestamps();

            // Foreign key constraint
            $table->foreign('id_allegato')->references('id')->on('attached')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('paradatas');
    }
};
