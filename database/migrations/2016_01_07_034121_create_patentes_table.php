<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatentesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('patentes', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('profesor_id')->unsigned();
			$table->foreign('profesor_id')->references('id')->on('profesors');
			$table->date('fecha_pub');
			$table->string('trabajos');
			$table->string('autor_pat');
			$table->string('tit_trabajo');
			$table->string('tipo_par');
			$table->string('tipo_pat');
			$table->string('edo_pat');
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
		Schema::drop('patentes');
	}

}
