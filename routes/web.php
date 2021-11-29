<?php

use Illuminate\Support\Facades\Route;
header('Access-Control-Allow-Origin:  *');
header('Access-Control-Allow-Methods:  POST, GET, OPTIONS, PUT, DELETE');
header('Access-Control-Allow-Headers:  Content-Type, X-Auth-Token, Origin, Authorization');

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

Route::get( '/authentication', function(){
    return view( 'welcome' );
} )->where('authentication', '.*');

Route::get( '/registration', function(){
    return view( 'welcome' );
} )->where('registration', '.*');

Route::get( '/contactus', function(){
    return view( 'welcome' );
} )->where('contactus', '.*');

Route::get( '/about', function(){
    return view( 'welcome' );
} )->where('about', '.*');

Route::get( '/services', function(){
    return view( 'welcome' );
} )->where('services', '.*');

