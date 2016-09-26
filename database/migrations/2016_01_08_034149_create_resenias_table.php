<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReseniasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('resenias', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('fecha_pub');
			$table->string('resenias');
			$table->string('autor_res');
			$table->string('tit_res');
			$table->string('tit_obra');
			$table->string('pais');
			$table->string('autor_princ');
			$table->string('varios_aut');
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
		Schema::drop('resenias');
	}

}
