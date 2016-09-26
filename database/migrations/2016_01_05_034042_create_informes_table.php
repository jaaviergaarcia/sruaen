<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInformesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('informes', function(Blueprint $table)
		{
		   $table->increments('id');  //PK
			$table->integer('fecha_pub');
			$table->string('autor');
			$table->string('titulo_info');
			$table->string('institucion');
			$table->string('autor_princ');
			$table->string('varios_autores');
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
		Schema::drop('informes');
	}

}
