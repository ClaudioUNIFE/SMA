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
        Schema::create('restaurations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_reperto')->constrained('finds')->onDelete('cascade');
            $table->date('data_valutazione');
            $table->boolean('necessita_di_restauro')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('restaurations');
    }
};
