<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle__ventas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_Venta');
            $table->unsignedBigInteger('id_Inventario');

            $table->foreign('id_Venta')->references('id')->on('ventas');
            $table->foreign('id_Inventario')->references('id')->on('inventarios');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detalle__ventas');
    }
};
