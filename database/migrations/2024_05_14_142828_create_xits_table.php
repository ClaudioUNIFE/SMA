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
        Schema::create('xits', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_reperto')->constrained('finds')->OnDelete('cascade');
            $table->boolean('uscita_reperto')->default(false);
            $table->string('motivazione')->nullable();
            $table->string('sede_temporanea');
            $table->date('data_uscita');
            $table->date('data_rientro')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('xits');
    }
};
