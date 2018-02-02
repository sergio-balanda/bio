<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProyectorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proyectors', function (Blueprint $table) {
            $table->increments('id');
            $table->string('lumenes');
            $table->string('lente');
            $table->string('duracion')->nullable();
            $table->string('conectividad')->nullable();
            $table->text('descripcion');
            $table->boolean('3d');           
			$table->string('contraste')->nullable();			
            
            $table->integer('producto_id')->unsigned();
            $table->foreign('producto_id')->references('id')->on('productos');
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
        Schema::dropIfExists('proyectors');
    }
}
