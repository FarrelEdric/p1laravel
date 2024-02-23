<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/hello', function () {
    return 'Hello World';
});
Route::get('/world', function () {
    return 'World';
});
// Route::get('/user/{FarrelEdric}', function ($Farrel) {
//     return 'Nama saya ' . $Farrel = 'FarrelEdric';
// });

Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) {
    return 'Pos ke-' . $postId = '2' . " Komentar ke-: " . $commentId = '1';
});

Route::get('/user/{name?}', function ($name = null) {
    return 'Nama saya ' . $name = 'Farrel';
});

// Route::get('/user/{name?}', function ($name = 'John') {
//     return 'Nama saya ' . $name = 'John';
// });

Route::get('/user/profile', function () {
    //
})->name('profile');

Route::middleware(['first', 'second'])->group(function () {
    Route::get('/', function () {
        // Uses first & second middleware...
    });
    Route::get('/user/profile', function () {
        // Uses first & second middleware...
    });
});
Route::domain('{account}.example.com')->group(function () {
    Route::get('user/{id}', function ($account, $id) {
        //
    });
});
// Route::middleware('auth')->group(function () {
// Route::get('/user', [UserController::class, 'index']);
// // Route::get('/post', [PostController::class, 'index']);
// // Route::get('/event', [EventController::class, 'index']);
// });

Route::get('/hello', [WelcomeController::class, 'hello']);

Route::get('/greeting', function () {
    return view('blog.hello', ['name' => 'Andi']);
});
