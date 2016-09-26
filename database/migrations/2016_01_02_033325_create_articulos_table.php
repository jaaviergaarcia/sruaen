<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticulosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('articulos', function(Blueprint $table)
		{
			$table->increments('id'); //PK
			
			$table->integer('fecha_pub');
		    $table->string('tipo_art');
		    $table->string('autor');
		    $table->string('titulo_art');
		    $table->string('revista');
		    $table->string('principal');
		    $table->string('autores');
		    $table->integer('pos_autor');
		    $table->string('lista_autor');
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
		Schema::drop('articulos');
	}

}
