<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->string('Nom_Producto')->unique();
            $table->string('cantidad');
            $table->float('precioU');
            $table->string('tipo_producto');
            $table->binary('imagen');
            $table->integer('concesionado')->nullable();
            $table->enum('recibido', ['recibido','no recibido'])->default('no recibido');
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
        Schema::dropIfExists('productos');
    }
}
