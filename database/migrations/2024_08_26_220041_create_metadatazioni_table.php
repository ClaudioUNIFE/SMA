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
        Schema::create('metadatazioni', function (Blueprint $table) {
            $table->id();  // Creates an 'id' column as the primary key
            $table->unsignedBigInteger('id_paradati');  // Foreign key to the 'paradata' table
            $table->string('responsabile');
            $table->string('operatore');
            $table->date('data_inizio');
            $table->date('data_fine')->nullable();
            $table->timestamps();  // Adds 'created_at' and 'updated_at' columns

            // Define foreign key constraint
            $table->foreign('id_paradati')->references('id')->on('paradata')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('metadatazioni');
    }
};
