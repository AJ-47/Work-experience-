<?php

use Illuminate\Support\Facades\Route;
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
    return view('welcome');
});

Route::get('albums', function () {
    $pdo = DB::getPdo();

    $query  = "SELECT * FROM hippo where artist LIKE ?";
    $statement = $pdo->prepare($query);
    $success = $statement->execute(["%".request()->get('input')."%"]);
    
    $albums = $statement->fetchALL(PDO::FETCH_ASSOC);
    
    return view('albums', [
        'albums' => $albums,
    ]);
});

#####################################################################

Route::get('album-details/{id}', function ($id) {
    $pdo = DB::getPdo();

    $query  = "SELECT * FROM hippo WHERE id = ?";
    $statement = $pdo->prepare($query);
    $success = $statement->execute([$id]);

    $albums = $statement->fetchALL(PDO::FETCH_ASSOC);

    if (empty($albums)) {
        abort(404);
    }

    return view('album-details', [
        'album_details' => $albums,
    ]);
});


Route::get('albums/{id}', function ($id) {
    return $id;
});

####################################################################

Route::get('about-us', function() {
    return view('aboutus');
}
);
