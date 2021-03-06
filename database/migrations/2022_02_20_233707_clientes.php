<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Clientes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('clientes', function (Blueprint $table) {

            //InnoDB permite borrar en cascada
            $table->engine="InnoDB";

            $table->bigIncrements('id');
            $table->string('cli_TipoDocumento');
            $table->string('cli_NoDocumento');
            $table->string('cli_Nombre');
            $table->string('cli_Apellido')->nullable();
            $table->string('cli_Telefono')->nullable();
            $table->string('cli_Direccion')->nullable();
            $table->string('cli_NombreComercial')->nullable();
            $table->string('cli_Email')->nullable();
            $table->dateTime('updated_at');
            $table->dateTime('created_at');
            //Tabla en blanco para relacion con la foreingn key
            $table->bigInteger('rutas_ID')->unsigned();
            //Creacion de relacion entre tablas
            $table->foreign('rutas_ID')->references('id')->on('rutas')->onDelete("cascade");
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
