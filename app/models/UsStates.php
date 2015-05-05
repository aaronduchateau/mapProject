<?php


class UsStates extends Eloquent {
	public static $rules = array(
		'name'=>'required|alpha|min:2',
		'code'=>'required|alpha|min:2'
	);
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'usStates';
	
	
}