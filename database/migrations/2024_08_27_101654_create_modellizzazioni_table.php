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
        Schema::create('modellizzazioni', function (Blueprint $table) {
            $table->id();  // Primary key 'id'
            $table->unsignedBigInteger('id_paradati');
            $table->string('responsabile');
            $table->string('operatore');
            $table->string('strumentazione');
            $table->date('data_inizio');
            $table->date('data_fine');
            $table->timestamps();  // Adds 'created_at' and 'updated_at'

            // Define foreign key constraints if necessary
            $table->foreign('id_paradati')->references('id')->on('paradata')->onDelete('cascade');
        
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('modellizzazioni');
    }
};
