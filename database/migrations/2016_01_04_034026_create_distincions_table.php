<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDistincionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('distincions', function(Blueprint $table)
		{
			$table->increments('id'); //PK
			
			$table->integer('fecha');
			$table->string('nombre_prof');
			$table->string('distincion');
			$table->string('institucion');
			$table->string('pais');
			$table->string('descripcion');
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
		Schema::drop('distincions');
	}

}
