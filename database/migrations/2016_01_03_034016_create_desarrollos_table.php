<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDesarrollosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('desarrollos', function(Blueprint $table)
		{
			$table->increments('id'); //PK
			$table->integer('profesor_id')->unsigned();
			$table->foreign('profesor_id')->references('id')->on('profesors');
			$table->integer('fecha_pub');
			$table->string('tipo_des');
			$table->string('autor');
			$table->string('nombre_des');
			$table->string('tipo');
			$table->string('sector');
			$table->string('pais');
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
		Schema::drop('desarrollos');
	}

}
