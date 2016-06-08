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
//<editor-fold defaultstate="collapsed" desc="dashboard">
Route::any('/dashboard', ['as' => 'dashboard','uses' => 'HomeController@dashboard']);
Route::any('/logout', ['as' => 'logout','uses' => 'UsersController@logout']);
//</editor-fold>
//<editor-fold defaultstate="collapsed" desc="users">
Route::any('/', ['as' => 'login','uses' => 'UsersController@index']);
Route::any('/users', ['as' => 'users','uses' => 'UsersController@users']);
Route::any('/adduser', ['as' => 'adduser','uses' => 'UsersController@adduser']);
Route::any('/edituser/{id?}', ['as' => 'edituser','uses' => 'UsersController@edituser']);
Route::any('/deleteuser/{id?}', ['as' => 'deleteuser','uses' => 'UsersController@deleteuser']);
//</editor-fold>
//<editor-fold defaultstate="collapsed" desc="printcheques">
Route::any('/printcheques', ['as' => 'printcheques','uses' => 'HomeController@printcheques']);
Route::any('/chequerequest', ['as' => 'chequerequest','uses' => 'HomeController@chequerequest']);
//</editor-fold>
//<editor-fold defaultstate="collapsed" desc="currencies">
Route::get('/currencies', ['as' => 'currencies','uses' => 'HomeController@currencies']);
Route::any('/addcurrency', ['as' => 'addcurrency','uses' => 'HomeController@addcurrency']);
Route::any('/editcurrency/{id?}', ['as' => 'editcurrency','uses' => 'HomeController@editcurrency']);
Route::any('/deletecurrency/{id?}', ['as' => 'deletecurrency','uses' => 'HomeController@deletecurrency']);
//</editor-fold>
//<editor-fold defaultstate="collapsed" desc="branches">
Route::get('/branches', ['as' => 'branches','uses' => 'HomeController@branches']);
Route::any('/addbranch', ['as' => 'addbranch','uses' => 'HomeController@addbranch']);
Route::any('/editbranch/{id?}', ['as' => 'editbranch','uses' => 'HomeController@editbranch']);
Route::any('/deletebranch/{id?}', ['as' => 'deletebranch','uses' => 'HomeController@deletebranch']);
//</editor-fold>