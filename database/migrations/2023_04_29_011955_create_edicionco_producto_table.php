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
        Schema::create('edicionco_producto', function (Blueprint $table) {
            $table->id();
            $table->integer('cantidad');
            
            $table->unsignedBigInteger('edicionco_id');
            $table->foreign('edicionco_id')->references('id')->on('edicioncos');

            $table->unsignedBigInteger('producto_id');
            $table->foreign('producto_id')->references('id')->on('productos');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('edicionco_producto');
    }
};
