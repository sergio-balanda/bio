<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNotebooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notebooks', function (Blueprint $table) {
            $table->increments('id');
            $table->string('procesador');
            $table->string('disco_rigido');
            $table->string('ram');
            $table->text('descripcion');
    		$table->string('descripcionB')->nullable();
            $table->string('video');
            $table->string('resolucion');
    		$table->double('peso', 2, 1);
            $table->string('bateria');
            $table->string('conectividad');
    		$table->string('so');
            $table->string('color');
            
            $table->integer('producto_id')->unsigned();
            $table->foreign('producto_id')->references('id')->on('productos');
            
            $table->integer('pulgada_id')->unsigned();
            $table->foreign('pulgada_id')->references('id')->on('pulgadas_notebooks');
            
            $table->integer('processor_id')->unsigned();
            $table->foreign('processor_id')->references('id')->on('processors');
            
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
        Schema::dropIfExists('notebooks');
    }
}
