<?php
use Illuminate\Support\Facades\Route;
// use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Route;

// /*
// |--------------------------------------------------------------------------
// | API Routes
// |--------------------------------------------------------------------------
// |
// | Here is where you can register API routes for your application. These
// | routes are loaded by the RouteServiceProvider within a group which
// | is assigned the "api" middleware group. Enjoy building your API!
// |
// */

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

//Reset
//POST /reset
//200 ok
Route::post('/reset', 'ResetController@reset');

//get balance
//GET /balance?account_id=1234
// 404 0
Route::get('/balance', 'BalanceController@show');

//evet
Route::post('/event', 'EventController@store');
