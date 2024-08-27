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
        Schema::create('attachments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_reperto');
            $table->string('link');
            $table->string('tipo_acquisizione');
            $table->timestamps();  // Creates 'created_at' and 'updated_at' columns

            // Define foreign key constraints if necessary
            $table->foreign('id_reperto')->references('id')->on('finds')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('attachments');
    }
};
