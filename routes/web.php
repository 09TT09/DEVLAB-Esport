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

Route::view('/', 'welcome');

Route::get('/inscription', 'InscriptionController@formulaire');
Route::post('/inscription', 'InscriptionController@traitement');

Route::get('/connexion', 'ConnexionController@formulaire');
Route::post('/connexion', 'ConnexionController@traitement');

Route::get('/users', 'UsersController@liste');

Route::get('/compte','CompteController@accueil');
Route::get('/deconnexion', 'CompteController@deconnexion');

Route::get('/tournoi', 'TournoiController@tournoi');
Route::get('/tournoicreate', 'TournoiController@creer');
Route::get('/tournoijoin', 'TournoiController@rejoindre');


Route::post('/tournoicreate', 'TournoiController@creertraitement');
