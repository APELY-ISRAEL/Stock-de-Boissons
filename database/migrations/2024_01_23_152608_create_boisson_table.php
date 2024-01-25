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
        Schema::create('boisson', function (Blueprint $table) {
            $table->id();
            $table->string('libelle');
            $table->string('prix');
            $table->string('typeboisson');
            $table->string('image')->nullable();
            $table->foreignId('categorie_id')->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('boisson');
    }
};
