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

Route::get('/', function () {
    return view('auth/login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::middleware(['auth'])->group(function () {
   //Bimestres
    Route::get('bimestreuno', 'BimestreController@bimuno')->name('bimestreuno.bimuno')
        ->middleware('permission:bimestreuno.bimuno');
    Route::get('bimestredos', 'BimestreController@bimdos')->name('bimestredos.bimdos')
        ->middleware('permission:bimestredos.bimdos');
    Route::get('bimestretres', 'BimestreController@bimtres')->name('bimestretres.bimtres')
        ->middleware('permission:bimestretres.bimtres');
    Route::get('bimestrecuatro', 'BimestreController@bimcuatro')->name('bimestrecuatro.bimcuatro')
        ->middleware('permission:bimestrecuatro.bimcuatro');

    //roles
    Route::post('roles/store', 'RoleController@store')->name('roles.store')
        ->middleware('permission:roles.create');
    Route::get('/roles', 'RoleController@index')->name('roles.index')
        ->middleware('permission:roles.index');
    Route::get('/roles/create', 'RoleController@create')->name('roles.create')
        ->middleware('permission:roles.create');
    Route::put('/roles/{role}', 'RoleController@update')->name('roles.update')
        ->middleware('permission:roles.edit');
    Route::get('/roles/{role}', 'RoleController@show')->name('roles.show')
        ->middleware('permission:roles.show');
    Route::delete('/roles/{role}', 'RoleController@destroy')->name('roles.destroy')
        ->middleware('permission:roles.destroy');
    Route::get('/roles/{role}/edit', 'RoleController@edit')->name('roles.edit')
        ->middleware('permission:roles.edit');

    //  *********************USERS ***************************************
    Route::get('users', 'UserController@index')->name('users.index')
        ->middleware('permission:users.index');
    Route::put('users/{user}', 'UserController@update')->name('users.update')
        ->middleware('permission:users.edit');
    Route::get('users/{user}', 'UserController@show')->name('users.show')
        ->middleware('permission:users.show');
    Route::delete('users/{user}', 'UserController@destroy')->name('users.destroy')
        ->middleware('permission:users.destroy');
    Route::get('users/{user}/edit', 'UserController@edit')->name('users.edit')
        ->middleware('permission:users.edit');
});
