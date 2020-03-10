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
Route::get('/', function() {
    return view('auth');
});
Route::post('/login','Authentification@connect');
Route::get('/login', function(){
    header('Location: http://epoka.local/');
    exit();
});
Route::get('/disconnect', function(){
    session_start();
    unset($_SESSION['login']);
    header('Location: /');
    exit();
});
Route::get('/test',function (){
    return 'test OK :D';
});
Route::get('/missions','Missions@index');
Route::get('/missions/valider/{id}','Missions@valider');
Route::get('/paiement-frais','Missions@paiement_index');
Route::get('/paiement-frais/payer/{id}','Missions@valider_paiement');
Route::get('/settings', function (){
    return view('settings');
});
Route::get('/settings/distances', function (){
    return view('settings-distances');
});
Route::get('/settings/prix', 'Settings@prixKilometre');
Route::post('/settings/prix/modify', 'Settings@modify');
?>
