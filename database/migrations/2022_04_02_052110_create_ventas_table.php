<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVentasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ventas', function (Blueprint $table) {
            $table->id();
            $table->date('Fecha')->comment('Fecha');
            $table->timestamps();

            $table->unsignedBigInteger('Usuario_Id');
            $table->foreign('Usuario_Id')->references('id')->on('users');

            $table->unsignedBigInteger('SubServicio_Id');
            $table->foreign('SubServicio_Id')->references('id')->on('sub_servicios');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ventas');
    }
}
