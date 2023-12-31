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
        Schema::create('detail_mobil', function (Blueprint $table) {
            $table->id();
            $table->string('merek_mobil');
            $table->string('model_mobil');
            $table->string('no_plat')->unique();
            $table->string('price_mobil');
            $table->string('photo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_mobil');
    }
};
