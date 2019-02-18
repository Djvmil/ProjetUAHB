<?php

use Illuminate\Http\Request;
use App\Facture;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|


public function ListeFactures()
{
    $facture = Facture::all();
    header("Access-Control-Allow-Origin: *");
    return response()->json($facture);
}
*/
Route::post('/data/{id}',function(){
  $id= request('id');
  $item = Facture::find(1);
  header("Access-Control-Allow-Origin: *");
  return response()->json($item);

});

Route::get('/data',function(){

  $items = Facture::all()->toJson();
//  header("Access-Control-Allow-Origin: *");
//!!	return response($items,200);
 return response($items,200)->header('Content-Type', 'application/json');
});

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
