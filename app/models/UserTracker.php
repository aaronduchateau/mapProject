<?php


class UserTracker extends Eloquent {
	public static $rules = array(
		'firstname'=>'required|alpha|min:2',
		'lastname'=>'required|alpha|min:2',
		'email'=>'required|email|unique:users',
		'ipaddress'=>'required|alpha_num'
	);
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'userTracker';
	
	
}