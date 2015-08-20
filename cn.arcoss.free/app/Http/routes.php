<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
 */

Route::get('/', function () {
		return view('welcome');
	});

// Route::get('/admin', function () {
// 		return view('admin/login');
// 	});

Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => 'auth'], function () {
		Route::get('/index', 'AdminController@index');


		// Route::get('/reporting', ['uses'  => 'ReportController@index', 'as'  => 'Report']);
		// Route::post('/reporting', ['uses' => 'ReportController@post']);

		// Route::resource('order', 'OrdersController');
		// Route::resource('goods', 'GoodsController');

	});

// member
Route::group(['prefix'=>'admin/member', 'namespace'=>'Member', 'middleware'=>'auth'], function(){
        Route::get('/index', 'MemberController@index');

    }
);

// goods
Route::group(['prefix'=>'admin/goods', 'namespace'=>'Goods', 'middleware'=>'auth'], function(){
	Route::get('/index', 'GoodsController@index');
	Route::get('/store', 'GoodsController@store');
	Route::get('/create', 'GoodsController@create');
});

/**
 * auth
 */
Route::get('admin', 'Admin\AuthController@getLogin');
Route::post('admin', 'Admin\AuthController@postLogin');
Route::get('logout', 'Admin\AuthController@getLogout');

// Route::controllers([
// 		'auth'     => 'Auth\AuthController',
// 		'password' => 'Auth\PasswordController',
// 	]);

/**
 * captcha
 */

Route::any('captcha-test', function () {
		if (Request::getMethod() == 'POST') {
			$rules = ['captcha' => 'required|captcha'];
			// dd(Input::all());
			$validator = Validator::make(Input::all(), $rules);
			if ($validator->fails()) {
				echo '<p style="color: #ff0000;">Incorrect!</p>';
			} else {
				echo '<p style="color: #00ff30;">Matched :)</p>';
			}
		}

		$form = '<form method="post" action="captcha-test">';
		$form .= '<input type="hidden" name="_token" value="'.csrf_token().'">';
		$form .= '<p>'.captcha_img().'</p>';
		$form .= '<p><input type="text" name="captcha"></p>';
		$form .= '<p><button type="submit" name="check">Check</button></p>';
		$form .= '</form>';

		return $form;
	});