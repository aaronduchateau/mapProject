<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	//CHECKOUT 
	//http://laravel.com/docs/4.2/schema
	public function up()
	{   
		Schema::create('users', function(Blueprint $table) {
			$table->increments('id');
    		$table->string('firstname', 20);
    		$table->string('lastname', 20);
    		$table->string('phone', 30);
   			$table->string('email', 100)->unique();
    		$table->string('password', 64);
    		$table->string('hasSeenContract', 10)->default('no');
    		$table->string('remember_token', 100);

    		$table->string('accountType', 100)->default('standard');
    		$table->string('accountStrategy', 100)->default('individual');
    		$table->boolean('active')->default(true);
    		$table->string('status')->default('current');
   			$table->double('balanceDue', 15, 2)->default(0.00);
    		$table->dateTime('nextBillingDate');
    		$table->integer('company')->unsigned()->default(1);
    		$table->string('permissions')->default('standard');

    		
    		//$table->enum('accountType', array('standard', 'timber', 'expiriment1', 'expiriment2', 'expiriment3'));
    		
    		//$table->enum('accountStrategy', array('individual', 'company'));
    		
    		//$table->enum('status', array('current', 'past_due'));

    		//in future for company use
    		//$table->foreign('user_id')->references('id')->on('users'); to create a constraint
    		//$table->enum('permissions', array('standard', 'full', 'limited'));
    		


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
