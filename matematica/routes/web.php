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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/Joao', function () {
    echo "Meu é João Pedro e estou estudando laravel";
});

Route::get('/tabuada/{num}', function ($num) {
    echo "<h1>Tabuada do número $num </h1>";
    for ($i = 0; $i <= 10; $i++){
        echo "<h3>$i X $num = ".$i*$num."</h3>";
    }
});

Route::get('/usuario/{nome}/{sobrenome}', function ($nome, $sobrenome) {
    echo "<h1>Olá $nome $sobrenome !</h1>";
});