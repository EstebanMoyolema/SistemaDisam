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

            $table->foreignId('pedido_ID')->nullable()->constrained('pedidos')->cascadeOnUpdate()->nullOnDelete();

            $table->foreignId('producto_ID')->nullable()->constrained('productos')->cascadeOnUpdate()->nullOnDelete();
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
