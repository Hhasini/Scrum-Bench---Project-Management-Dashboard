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

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::resource('search', 'SearchController');




Route::resource('projects', 'ProjectController');




Route::resource('hide', 'HideController');


Route::resource('teams', 'TeamController');


Route::resource('assign', 'AssignController');


Route::resource('assign_teams', 'AssignTeamsController');

Route::resource('assign_lead', 'LeadController');

Route::resource('test_case', 'TestCaseController');

Route::resource('release_backlog', 'ReleaseBacklogController');





Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

