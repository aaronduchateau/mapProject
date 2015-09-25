<?php

return array(

	/*
	|--------------------------------------------------------------------------
	| Database Connections
	|--------------------------------------------------------------------------
	|
	| Here are each of the database connections setup for your application.
	| Of course, examples of configuring each database platform that is
	| supported by Laravel is shown below to make development simple.
	|
	|
	| All database work in Laravel is done through the PHP PDO facilities
	| so make sure you have the driver for your particular database of
	| choice installed on your machine before you begin development.
	|
	*/

	'connections' => array(

		//this guy is used
		'mysql' => array(
			'driver'    => $_ENV['aaron_driver'],
			'host'      => $_ENV['aaron_host'],
			'database'  => $_ENV['aaron_database'],
			'username'  => $_ENV['aaron_username'],
			'password'  => $_ENV['aaron_password'],
			'charset'   => $_ENV['aaron_charset'],
			'collation' => $_ENV['aaron_collation'],
			'prefix'    => $_ENV['aaron_prefix'],
		),

		//saved before env change
		//'mysql' => array(
		//	'driver'    => 'mysql',
		//	'host'      => 'localhost',
		//	'database'  => 'homesteadtwo',
		//	'username'  => 'homestead',
		//	'password'  => 'secret',
		//	'charset'   => 'utf8',
		//	'collation' => 'utf8_unicode_ci',
		//	'prefix'    => '',
		//),

		'pgsql' => array(
			'driver'   => 'pgsql',
			'host'     => 'localhost',
			'database' => 'homestead',
			'username' => 'homestead',
			'password' => 'secret',
			'charset'  => 'utf8',
			'prefix'   => '',
			'schema'   => 'public',
		),

	),

);
