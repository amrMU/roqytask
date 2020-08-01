<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



	Route::group(
	[
		'prefix' => LaravelLocalization::setLocale(),
	],
	function()
	{
		Route::get('/','Front\HomeController@index');
		

	Route::group(['middleware' => 'auth'], function () {
		Route::get('i/profile','Front\ProfileController@getProfile');
		Route::post('i/profile','Front\ProfileController@postProfile');
		Route::get('albums','Front\AlbumsController@index');
		Route::get('albums/create','Front\AlbumsController@create');
		Route::post('albums','Front\AlbumsController@store');
		Route::get('albums/{id}/delete','Front\AlbumsController@destroy');
		Route::get('albums/{id}/edit','Front\AlbumsController@edit');
		Route::post('albums/{id}','Front\AlbumsController@update');
		
		Route::group(['prefix' => '/admin','middleware'=>'admin'], function () {

			
			Route::get('home','Admin\HomeController@index')->name('dashboard_home');
			Route::get('albums','Admin\AlbumsController@index')->name('albums_list')->middleware('perms:albums_list');
			Route::get('albums/{id}/delete','Admin\AlbumsController@destroy')->name('albums_delete')->middleware('perms:albums_delete');
			
			Route::get('users/create','Admin\UsersController@create')->name('permissions_create_user')->middleware('perms:permissions_create_user');

			Route::post('users','Admin\UsersController@store')->name('permissions_create_user')->middleware('perms:permissions_create_user');
			
			Route::get('users/{id}/edit','Admin\UsersController@edit')->name('permissions_edit_user')->middleware('perms:permissions_edit_user');
			
			Route::PUT('users/{id}','Admin\UsersController@update')->name('permissions_edit_user')->middleware('perms:permissions_edit_user');
			
			Route::get('users/{id}/delete','Admin\UsersController@edit')->name('permissions_delete_user')->middleware('perms:permissions_delete_user');
			
			Route::get('users','Admin\UsersController@index')->name('permissions_user_list')->middleware('perms:permissions_user_list');
			
			Route::group(['prefix' => 'permissions_groups'], function () {

            // Groups
            Route::get('/', 'Admin\AdministrationController@group')->name('permissions_groups')->middleware('perms:permissions_groups');

            Route::get('create', 'Admin\AdministrationController@group_create')->name('permissions_groups_create')->middleware('perms:permissions_groups_create');

            Route::post('store', 'Admin\AdministrationController@group_store')->name('permissions_groups_store')->middleware('perms:permissions_groups_create');

            Route::get('edit/{id?}', 'Admin\AdministrationController@group_edit')->name('permissions_groups_edit')->middleware('perms:permissions_groups_edit');

            Route::post('update', 'Admin\AdministrationController@group_update')->name('permissions_groups_update')->middleware('perms:permissions_groups_edit');

            Route::get('delete/{id?}', 'Admin\AdministrationController@group_delete')->name('permissions_groups_delete')->middleware('perms:permissions_groups_delete');

            // Admins

         

        });
		});


		Route::get('logout','Auth\LoginController@logout');
	});
	});



Auth::routes();
Route::get('u/login','Auth\LoginController@ulogin');