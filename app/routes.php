<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('hello');
});


Route::controller('users', 'UsersController');


Route::pattern('id', '[0-9]+');
Route::get('listCounties/{id}', function($id)
{
    $counties = DB::table('counties')->where('stateId', '=', $id)->get();
    
    return json_encode($counties);
});


Route::pattern('u', '[0-9]+');
Route::pattern('c', '[0-9]+');
Route::get('listSavedTaxlots/{u}/{c}', function($u, $c)
{   
    $saved = DB::table('savedTaxLots')
    	->where('userKey', '=', $u)
    	->where('countyKey', '=', $c)
    	->where('active', '=', 1)
    	->get();
    
    return json_encode($saved);
});


Route::post('saveCountySpecificRecord',array('before'=>'csrf','uses'=>function(){
    $data = Input::all();
    if(Request::ajax())
    {
        $s = new SavedTaxLots;
        $s->countyKey = $data['countyKey'];
        $s->userKey = $data['userKey'];
        $s->ownerName = $data['ownerName'];
        $s->lat = $data['lat'];
        $s->lng = $data['lng'];
        $s->totalValue = $data['totalValue'];
        $s->active = true;
        //if success
        if($s->save()){
            return Response::json(array('success' => true, 'last_insert_id' => $s->id), 200);
        }
        //if not success
        else{
            return 0;
        }

    }

}));

Route::post('unsetSavedLeft',array('before'=>'csrf','uses'=>function(){
    $data = Input::all();
    if(Request::ajax())
    {	
    	$savedTaxLots = SavedTaxLots::find($data['unsetId']);

		$savedTaxLots->active = 'false';
		//if success
        if($savedTaxLots->save()){
            return Response::json(array('success' => true), 200);
        }
        //if not success
        else{
            return 0;
        }
    }

}));




