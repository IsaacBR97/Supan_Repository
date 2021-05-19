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
            $table->bigIncrements('id_product'); 
            $table->string('nombre');
            $table->text('imagen');
            $table->string('precio');
            $table->string('descripcion');
            $table->text('motivo')->nullable();
            $table->unsignedBigInteger('id');
            $table->unsignedBigInteger('id_revision')->nullable();
            $table->unsignedBigInteger('id_categoria');
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
