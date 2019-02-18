<?php
use App\Facture;
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
    return view('welcome');
});

Route::resource('compteur', 'CompteurController');
Route::resource('abonnement', 'abonnementController');
Route::resource('facture', 'factureController');

Route::get('getfacture/{id}', function () {
  $id = request('id');
  $item = Facture::find($id);
  //$item = Facture::all();
  header("Access-Control-Allow-Origin: *");
  return response()->json($item);
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
