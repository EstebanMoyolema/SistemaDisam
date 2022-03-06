<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Detalle extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('detalle', function (Blueprint $table) {

            //InnoDB permite borrar en cascada
            $table->engine="InnoDB";

            $table->bigIncrements('id');
            $table->decimal('det_Cantidad');
            $table->float('det_Precio',4,2);

            //Tabla en blanco para relacion con la foreingn key
            $table->bigInteger('pedido_ID')->unsigned();
            //Creacion de relacion entre tablas
            $table->foreign('pedido_ID')->references('id')->on('pedidos')->onDelete("cascade");
            
            //Tabla en blanco para relacion con la foreingn key
            $table->bigInteger('producto_ID')->unsigned();
            //Creacion de relacion entre tablas
            $table->foreign('producto_ID')->references('id')->on('productos')->onDelete("cascade");

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
