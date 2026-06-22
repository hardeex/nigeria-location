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
        Schema::create('lgas', function (Blueprint $table) {
            $table->id(); // Auto-incrementing ID
            $table->string('name'); // Name of the LGA
            $table->string('state_name'); // Name of the state to link to the LGA

            // Composite unique constraint to ensure unique 'state_name' and 'name' combinations
            $table->unique(['state_name', 'name']);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lgas');
    }
};
