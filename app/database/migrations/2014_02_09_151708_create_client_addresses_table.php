<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateClientAddressesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('client_addresses', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('client_id');
			$table->string('street')->nullable();
			$table->string('city')->nullable();
			$table->string('postal_code')->nullable();
			$table->string('province')->nullable();
			$table->string('barangay')->nullable();
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
		Schema::drop('client_addresses');
	}

}
