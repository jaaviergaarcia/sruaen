<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLibrosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('libros', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('fecha_pub');
			$table->string('tipo_libro');
			$table->string('autor');
			$table->string('titulo_libro');
			$table->string('editorial');
			$table->integer('total_autores');
			$table->integer('pos_autor');
			$table->string('lista');
			$table->integer('isbn');
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
		Schema::drop('libros');
	}

}
