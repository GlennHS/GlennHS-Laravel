<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;

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
    // $path = storage_path()."/json/competencies.json";
    // $json = json_decode(file_get_contents($path), true);
    // Log::debug($json);

    $competencies = DB::select('select * from tbCompetencies', []);
    $competencies = array_map(fn($e) => (array)$e, $competencies);

    return view("home", ['competencies'=>$competencies]);
});

// Route::get('/write', function () {
//     return view("writeBlogPost");
// });