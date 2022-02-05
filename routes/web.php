<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Log;

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
    $path = storage_path()."/json/competencies.json";
    $json = json_decode(file_get_contents($path), true);

    // Log::debug($json);

    $competencies = [
        [
        "name"=>'HTML5',
        "years"=>10,
        "stars"=>5,
        "imageLink"=>'./images/competencies/html.png'
        ]
    ];

    return view("home", ['competencies'=>$json]);
});