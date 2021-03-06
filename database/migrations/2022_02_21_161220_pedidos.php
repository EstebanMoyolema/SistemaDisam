<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Pedidos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('pedidos', function (Blueprint $table) {

            //InnoDB permite borrar en cascada
            $table->engine="InnoDB";

            $table->bigIncrements('id');
            $table->date('ped_FechaPedido');
            $table->dateTime('updated_at');
            $table->dateTime('created_at');

            //Tabla en blanco para relacion con la foreingn key
            $table->bigInteger('cliente_ID')->unsigned();
            //Creacion de relacion entre tablas
            $table->foreign('cliente_ID')->references('id')->on('clientes')->onDelete("cascade");

            //Tabla en blanco para relacion con la foreingn key
            $table->bigInteger('vendedor_ID')->unsigned();
            //Creacion de relacion entre tablas
            $table->foreign('vendedor_ID')->references('id')->on('vendedores')->onDelete("cascade");

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
