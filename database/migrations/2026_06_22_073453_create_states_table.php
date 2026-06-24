<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('states', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->string('slug')->unique();
            $table->string('capital')->nullable();
            $table->string('geo_zone')->nullable();           // NW, NE, NC, SW, SE, SS
            $table->string('geo_zone_full')->nullable();      // North West, South East, etc.
            $table->decimal('lat', 10, 7)->nullable();
            $table->decimal('lng', 10, 7)->nullable();
            $table->string('postal_prefix', 10)->nullable();  // e.g. 450, 640, 100
            $table->string('country_code', 5)->default('NG');
            $table->string('iso_code')->nullable();           // e.g. NG-LA, NG-AB
            $table->unsignedInteger('lga_count')->default(0);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('states');
    }
};
