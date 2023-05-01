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
        Schema::create('edicionco_tamaño', function (Blueprint $table) {
            $table->id();
            $table->integer('cantidad');

            $table->unsignedBigInteger('edicionco_id');
            $table->foreign('edicionco_id')->references('id')->on('edicioncos');

            $table->unsignedBigInteger('tamaño_id');
            $table->foreign('tamaño_id')->references('id')->on('tamaños');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('edicionco_tamaño');
    }
};
