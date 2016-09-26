<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticuloProfesorsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('articulo_profesors', function(Blueprint $table)
		{
			
            $table->increments('id');
			$table->integer('profesor_id')->unsigned();
			$table->foreign('profesor_id')->references('id')->on('profesors');

			$table->integer('articulo_id')->unsigned();
			$table->foreign('articulo_id')->references('id')->on('articulos');
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
		Schema::drop('articulo_profesors');
	}

}
