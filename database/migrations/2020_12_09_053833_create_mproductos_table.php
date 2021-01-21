<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMproductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mproductos', function (Blueprint $table) {
            $table->id();
            $table->string('Nom_Producto')->unique();
            $table->string('cantidad');
            $table->float('precioU');
            $table->string('tipo_producto');
            $table->binary('imagen');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mproductos');
    }
}
