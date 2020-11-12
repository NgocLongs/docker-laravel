<?php

use Illuminate\Support\Facades\Route;
use Scss\Scss\CompileScss;

// use Longhn\Tools;
// use TrongTD\Datetime;
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

CompileScss::run_compile();
Route::get('/', function () {
    // $cv = new Datetime();
    // $cv->myFormat();
    $a = new TrongTD\Datetime\Datetime();
    $a->myFormat();

    $b = new LongHN\Convert\Convert();
    $str = 'Xin chào mọi người haha !';
    $c = $b->convertLatin($str);
    // dd($c);
    return view('welcome');
});
