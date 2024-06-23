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

        Schema::create('permutations', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->foreignId('ville_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('formateur_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->boolean('valide');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('permutations');
    }
};
