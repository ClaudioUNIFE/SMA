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
        Schema::create('archiviazioni', function (Blueprint $table) {
            $table->id();  // Primary key
            $table->unsignedBigInteger('id_paradati');  // Foreign key to 'paradati' table
            $table->string('responsabile');
            $table->string('operatore');
            $table->date('data_ultimo_becup')->nullable();  // Nullable for optional data
            $table->date('data_inizio')->nullable();
            $table->date('data_fine')->nullable();
            $table->timestamps();  // Creates 'created_at' and 'updated_at' columns

            // Foreign key constraint
            $table->foreign('id_paradati')->references('id')->on('paradata')->onDelete('cascade');
        
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('archiviazioni');
    }
};
