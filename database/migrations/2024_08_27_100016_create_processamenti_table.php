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
        Schema::create('processamenti', function (Blueprint $table) {
            $table->id();  // This creates the 'id' column as the primary key
            $table->unsignedBigInteger('id_paradati');  // Foreign key column for paradata
            $table->string('responsabile');
            $table->string('operatore');
            $table->string('strumentazione');
            $table->date('data_inizio');
            $table->date('data_fine');
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
        Schema::dropIfExists('processamenti');
    }
};
