<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
			$table->string('email')->unique();
			$table->string('password', 60);
			$table->char('tipo');
			$table->string('gpo_lab');
			$table->string('rel_lab');
			$table->string('categoria');
			$table->string('tipo_prof');
			$table->string('grad_acad');
			$table->string('est_acad');
			$table->string('cuerpo_acad');
			$table->string('lgac');
			$table->rememberToken();
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
		Schema::drop('users');
	}

}
