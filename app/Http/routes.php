<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/


Route::group(['middleware' => 'web'], function () {




	    Route::auth();

	    Route::get('/home', 'HomeController@index');

	Route::group(['middleware' => 'auth'], function () {
	    
	    Route::match(['get','post'],'/index/admin', function(){
	    	return view('admin_profile.index');
	    }); 

  		   Route::match(['get','post'],'/admin_create', function(){
	    	return view('admin_profile.create');
	    }); 

	   		 Route::post('/admin_create','UserController@create');  

	   Route::get('/admin_read','UserController@index');
	   
	   Route::delete('/admin_index/{user}', 'UserController@destroy');

		Route::get('/admin_pdf', 'PdfController@invoice');
	    Route::get('/admin_update/{user}', 'UserController@edit');
	    Route::post('/admin_update/{user}', 'UserController@update');


	    
    });



	Route::get('users', function () {
//		return response()->json(App\User::all());
		return response()->json(\App\User::all('name','last_name','second_last_name'));


	});

	Route::post('users2', function () {
		$data = request()->all();


		$user = new User;
		$user->name = $data['name'];
		$user->last_name = $data['last_name'];
		$user->second_last_name = $data['second_last_name'];
		$user->save();

	});




//	Route::match(['get','post'],'users', function($id){
//	});
});


	
	