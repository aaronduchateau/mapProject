<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSavedTaxlots extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('savedTaxLots', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->bigInteger('userKey');
			$table->bigInteger('countyKey');
			$table->string('ownerName', 300);
			$table->string('lat', 20);
    		$table->string('lng', 300);
    		$table->string('totalValue', 200);
    		$table->boolean('active');
    	});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('savedTaxLots');
	}

}
