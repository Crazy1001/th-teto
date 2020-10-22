<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('pages.index');
// });

Route::get('/', 'PageController@index');

Route::get('/login', 'LoginController@index');
Route::post('/login', 'LoginController@store');
Route::post('/logout', 'LoginController@logout');

Route::get('/register', 'RegisterController@index');
Route::post('/register', 'RegisterController@store');

Route::group(['middleware' => 'user.auth'], function () {
    Route::get('/member', 'MemberController@index');
    Route::get('/member/personal', 'MemberController@personal');

    // Route::get('/game', 'GameController@index');
    // Route::post('/game/{id}', 'GameController@game');

    Route::get('/business', 'BusinessController@index');
    Route::post('/buyItem', 'BusinessController@buyItem');

    Route::post('/addCart', 'BusinessController@addCart');
    Route::post('/clearCart', 'BusinessController@clearCart');

    //選擇電子遊戲廠商頁面
    Route::get('/selectgame', 'EGameController@selectGame');

    // WG: 电子游戏页面
    Route::get('/wg_list', 'EGameController@wg_List');
    // WG: 进入游戏
    Route::post('/WGgame/{id}', 'EGameController@wg_Game');
    

    // VA: 电子游戏页面
    Route::get('/va_list', 'EGameController@va_List');
    // VA: 进入游戏
    Route::post('/VAgame/{id}', 'EGameController@va_Game');
});

