<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Productos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('productos', function (Blueprint $table) {

            //InnoDB permite borrar en cascada
            $table->engine="InnoDB";

            $table->bigIncrements('id');
            $table->string('pro_Codigo');
            $table->string('pro_Nombre');
            $table->string('pro_Descripcion')->nullable();
            $table->string('pro_Peso')->nullable();
            $table->float('pro_PrecioCompra',4,2);
            $table->date('pro_FechaElaboracion')->nullable();
            $table->date('pro_FechaExpiracion')->nullable();
            $table->decimal('pro_Stock',4,0)->nullable();
            $table->boolean('pro_Descontinuado')->nullable();
            $table->decimal('pro_Vendido',4,0)->nullable();
            $table->dateTime('updated_at');
            $table->dateTime('created_at');

            //Tabla en blanco para relacion con la foreingn key
            $table->bigInteger('categoria_ID')->unsigned();
            //Creacion de relacion entre tablas
            $table->foreign('categoria_ID')->references('id')->on('categorias')->onDelete("cascade");
            //Tabla en blanco para relacion con la foreingn key
            $table->bigInteger('proveedor_ID')->unsigned();
            //Creacion de relacion entre tablas
            $table->foreign('proveedor_ID')->references('id')->on('proveedores')->onDelete("cascade");
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
