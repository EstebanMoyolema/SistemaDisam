<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Proveedores extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('proveedores', function (Blueprint $table) {

            //InnoDB permite borrar en cascada
            $table->engine="InnoDB";

            $table->bigIncrements('prov_ID');
            $table->string('prov_Nombre');
            $table->string('prov_NombreRepresentante');
            $table->string('prov_Direccion')->nullable();
            $table->string('prov_Email')->nullable();
            $table->string('prov_Telefono')->nullable();
            $table->string('prov_Telefono2')->nullable();
            $table->string('prov_Telefono3')->nullable();
            $table->string('prov_RUC');
            $table->string('prov_Observacion')->nullable();
            $table->boolean('prov_Activo');
            $table->dateTime('updated_at');
            $table->dateTime('created_at');
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
