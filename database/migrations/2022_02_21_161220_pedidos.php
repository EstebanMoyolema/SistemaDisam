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

            $table->bigIncrements('ped_ID');
            $table->date('ped_FechaPedido');
            $table->float('ped_SubTotal',4,2);
            $table->float('ped_Total',4,2);
            $table->dateTime('updated_at');
            $table->dateTime('created_at');

            //Tabla en blanco para relacion con la foreingn key
            $table->bigInteger('cliente_ID')->unsigned();
            //Creacion de relacion entre tablas
            $table->foreign('cliente_ID')->references('cli_ID')->on('clientes')->onDelete("cascade");
            //Tabla en blanco para relacion con la foreingn key
            $table->bigInteger('producto_ID')->unsigned();
            //Creacion de relacion entre tablas
            $table->foreign('producto_ID')->references('pro_ID')->on('productos')->onDelete("cascade");
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
