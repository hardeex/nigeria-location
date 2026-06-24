<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('lgas', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug');
            $table->string('state_name');
            $table->string('state_slug')->nullable();
            $table->decimal('lat', 10, 7)->nullable();
            $table->decimal('lng', 10, 7)->nullable();
            $table->string('postal_code', 10)->nullable();
            $table->string('country_code', 5)->default('NG');

            $table->unique(['name', 'state_name']);
            $table->index('state_name');
            $table->index('state_slug');
            $table->index('postal_code');
            $table->index(['lat', 'lng']);

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('lgas');
    }
};
