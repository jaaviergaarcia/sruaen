<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrabajosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('trabajos', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('profesor_id')->unsigned();
			$table->foreign('profesor_id')->references('id')->on('profesors');
			$table->integer('fecha_pub');
			$table->string('tipo_trab');
			$table->string('autor');
			$table->string('titulo_trab');
			$table->string('lugar_evento');
			$table->string('entidad_evento');
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
		Schema::drop('trabajos');
	}

}
