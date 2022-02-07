<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;
use App\Models\BlogPost;

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
    $competencies = DB::select('select * from competencies', []);
    $competencies = array_map(fn($e) => (array)$e, $competencies);

    return view("home", [
        'competencies' => $competencies
    ]);
});

Route::get('/blog', function() {
    return view('blog', [
        "posts" => BlogPost::all(),
    ]);
});

// Route::get('/write', function () {
//     return view("writeBlogPost");
// });