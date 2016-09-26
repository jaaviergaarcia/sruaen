<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfesorReseniasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('profesor_resenias', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('profesor_id')->unsigned();
			$table->foreign('profesor_id')->references('id')->on('profesors');

			$table->integer('resenia_id')->unsigned();
			$table->foreign('resenia_id')->references('id')->on('resenias');
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
		Schema::drop('profesor_resenias');
	}

}
