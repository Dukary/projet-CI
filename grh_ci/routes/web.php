<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    if(!Auth()->guest()){
        return redirect('/home');
    }
    return view('layouts.login');
});

//controlleur d'acces à la Home page
Route::get('/home', [\App\Http\Controllers\accountController::class, 'home'])
    ->middleware('App\Http\Middleware\Auth');
//enregistrement d'un personnel dans la BD
Route::get('/gest_identif', [\App\Http\Controllers\PersonnelController::class,'list_perso'])
    ->middleware('App\Http\Middleware\Auth');




//controlleur d'acces à la gest_users page
Route::get('/gest_users', [\App\Http\Controllers\accountController::class, 'gest_users'])
    ->middleware('App\Http\Middleware\Auth');

//controlleur d'acces à la upd_perso page
Route::get('/upd_perso', [\App\Http\Controllers\accountController::class, 'update_personnel'])
    ->middleware('App\Http\Middleware\Auth');
//controlleur d'acces à la profil page
Route::get('/profil', [\App\Http\Controllers\accountController::class, 'profil'])
    ->middleware('App\Http\Middleware\Auth');
//déconnexion d'un utilisateur
Route::get('/logout', [\App\Http\Controllers\accountController::class, 'logout'])
    ->middleware('App\Http\Middleware\Auth');
//recuperer les infos sur le personnels dans la BD et les affiches dans la home page
Route::get('/home', [\App\Http\Controllers\accountController::class,'homepage'])
    ->middleware('App\Http\Middleware\Auth');

//enregistrement d'un personnel dans la BD
Route::post('/enreg', [\App\Http\Controllers\PersonnelController::class,'enreg_perso'])
    ->middleware('App\Http\Middleware\Auth');
//modification d'un personnel dans la BD
Route::post('/upd_perso/{matri}', [\App\Http\Controllers\PersonnelController::class,'update_perso'])
    ->middleware('App\Http\Middleware\Auth');

//recuperer les personnels dans la BD
Route::get('/perso_mod', [\App\Http\Controllers\PersonnelController::class,'list_perso'])
    ->middleware('App\Http\Middleware\Auth');
//recuperer les grades dans la BD
Route::get('/enreg', [\App\Http\Controllers\PersonnelController::class,'list_grade'])
    ->middleware('App\Http\Middleware\Auth');
//recuperer les grades dans la BD
Route::get('/plannif', [\App\Http\Controllers\FormationController::class,'gest_form'])
    ->middleware('App\Http\Middleware\Auth');
//recuperer les grades dans la BD
Route::get('/upd_perso', [\App\Http\Controllers\PersonnelController::class,'list_grade'])
    ->middleware('App\Http\Middleware\Auth');
//recuperer les personnels dans la BD
Route::get('/gest_users', [\App\Http\Controllers\PersonnelController::class,'list_users'])
    ->middleware('App\Http\Middleware\Auth');
//connexion d'un utilisateur
Route::post('/', [\App\Http\Controllers\LoginController::class, 'login']);
//suppression d'un utilisateur
Route::get('/del/{matri}', [\App\Http\Controllers\PersonnelController::class, 'delete_personel'])
    ->middleware('App\Http\Middleware\Auth');
//modification d'un utilisateur
Route::get('/upd', [\App\Http\Controllers\accountController::class, 'upd'])
    ->middleware('App\Http\Middleware\Auth');
Route::post('/upd_perso', [\App\Http\Controllers\PersonnelController::class, 'update_perso'])
    ->middleware('App\Http\Middleware\Auth');

/********** Gest_Form **********/

//controlleur d'acces à l'affichage de suivi_form page
Route::get('/suivi_form', [\App\Http\Controllers\FormationController::class, 'gest_form'])
->middleware('App\Http\Middleware\Auth');

//controlleur d'acces à l'affichage plannification d'une formation page
Route::get('/plannif', [\App\Http\Controllers\FormationController::class, 'gest_form'])
    ->middleware('App\Http\Middleware\Auth');

//controlleur d'enregistrement d'une formation N°1
Route::post('/plannif1', [\App\Http\Controllers\FormationController::class, 'enreg_form1'])
    ->middleware('App\Http\Middleware\Auth');

//Controlleur d'enregistrement d'une formation N°2
Route::post('/plannif2', [\App\Http\Controllers\FormationController::class, 'enreg_form2'])
    ->middleware('App\Http\Middleware\Auth');

/********** End Gest_Form **********/

/********** Gest_Personnel **********/

/********** End Gest_Personnel **********/

/********** Gest_Spa **********/

//controlleur d'acces à la gest_spa page
Route::post('/fiche', [\App\Http\Controllers\accountController::class, 'gest_spa'])
    ->middleware('App\Http\Middleware\Auth');
//Controlleur d'acces à la page suivi_gest_spa
Route::get('/suivi', [\App\Http\Controllers\accountController::class, 'suivi'])
    ->middleware('App\Http\Middleware\Auth');
//Controlleur d'acces à la page fiche_gest_spa
Route::get('/fiche', [\App\Http\Controllers\accountController::class, 'gest_spa'])
    ->middleware('App\Http\Middleware\Auth');
//Controlleur permetant d'afficher la fiche de suivi des SPA
Route::get('/fiche_suivi', [\App\Http\Controllers\accountController::class, 'fiche_suivi_spa'])
    ->middleware('App\Http\Middleware\Auth');
//Enregistrement d'une SPA
Route::post('/enreg_spa', [\App\Http\Controllers\SpaController::class, 'enreg_spa'])
    ->middleware('App\Http\Middleware\Auth');

/********** End Gest_Spa **********/
Route::get('fich_perso',[App\Http\Controllers\PersonnelController::class, 'fiche_perso'])
    ->middleware('App\Http\Middleware\Auth');
Route::get('suivi_form1',[App\Http\Controllers\FormationController::class, 'suivi_form1'])
    ->middleware('App\Http\Middleware\Auth');
Route::get('suivi_form2',[App\Http\Controllers\FormationController::class, 'suivi_form2'])
    ->middleware('App\Http\Middleware\Auth');
