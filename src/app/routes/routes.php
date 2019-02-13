<?php
/**
 * Created by PhpStorm.
 * User: daniel
 * Date: 28/02/18
 * Time: 18:13
 */

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::namespace('\BasicStructeMod\Controllers')->middleware(['api','basic-middle'])->group(function () {

    Route::prefix('basic-route')->name('basic-route.')->group(function () {
        Route::get('/basic', 'BasicController@getBasic' )->name('get.basic');
    });
});