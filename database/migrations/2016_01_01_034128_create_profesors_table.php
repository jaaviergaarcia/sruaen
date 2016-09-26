<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfesorsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('profesors', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('nombre_prof');
			$table->string('lastname');
			$table->string('email')->unique();
			$table->string('pass');
			$table->char('tipo');
			$table->string('gpo_lab');
			$table->string('rel_lab');
			$table->string('categoria');
			$table->string('tipo_prof');
			$table->string('grad_acad');
			$table->string('est_acad');
			$table->string('cuerpo_acad');
			$table->string('lgac');
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
		Schema::drop('profesors');
	}

}
