<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;

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
    Log::debug('Test home page');
    return view('welcome');
});

Route::post('/gateway', function (Request $request) {
    Log::debug('Centra Webhook POST data: ');
    Log::debug($request->all());
    //Log::debug($request->header());
    $signature = $request->header('x-centra-signature');
    //Todo: Verity the signature
    echo "Success";
});