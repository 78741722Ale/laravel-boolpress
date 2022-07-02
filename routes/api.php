<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Post;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});



/* Aggiungo la prima rotta */
/* Tutti i post con response json customizzabile */

/*
Versione nelle slide
Route::get('posts', function() {
    $posts = Post::all();

    return response()->json([
        Chiave - Valore
        'status_code' => 200,
        'posts' => $posts
    ]);
});
*/

/* Alternativa non customizzabile */

/*
Route::get('posts', function() {
    $posts = Post::all();
    return $posts;
});
*/

/* Alternativa customizzabile con numero di records */
/* Route::get('posts', function() {
    $posts = Post::paginate(10); // Numero di records per pagina
    return $posts;
}); */


/* scorciatoia con relazione (nome dei metodi nelle tabelle pivot) */
Route::get('posts', 'API\PostController@index');
Route::get('categories', 'API\CategoryController@index');
Route::get('tags', 'API\TagController@index');
