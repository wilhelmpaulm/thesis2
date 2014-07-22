<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCaseTypesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('case_types', function(Blueprint $table) {
			$table->increments('id');
			$table->string('type');
			$table->integer('difficulty')->nullable();
			$table->integer('time')->nullable();
			$table->integer('manpower')->nullable();
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
		Schema::drop('case_types');
	}

}
