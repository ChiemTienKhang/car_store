<?php

Route::group(['middleware' => ['web']], function () {

	// Home
	Route::get('/', [
		'uses' => 'CarController@indexFront', 
		'as' => 'customer'
	]);

	// Customer
	Route::get('customer', 'CarController@indexFront');

	// Seller
	Route::get('seller', 'SellerController@indexFront');

	// Manage garage
	Route::get('manager', 'ManagerController@indexFront');

});