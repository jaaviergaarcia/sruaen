<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLibroProfesorsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('libro_profesors', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('profesor_id')->unsigned();
			$table->foreign('profesor_id')->references('id')->on('profesors');
			
			$table->integer('libro_id')->unsigned();
			$table->foreign('libro_id')->references('id')->on('libros');
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
		Schema::drop('libro_profesors');
	}

}
