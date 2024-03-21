<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\testController;
use App\Http\Controllers\Tables1Controller;
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

Route::get('/login', [AuthController::class, 'login'])->name('auth.login');
Route::delete('/logout', [AuthController::class, 'logout'])->name('auth.logout');
Route::post('/login', [AuthController::class, 'doLogin']);

Route::prefix('/blog')->name('blog.')->group(function () {
    Route::get('/', [TestController::class, 'index'])->name('index'); // get all the data
    Route::get('create/{test}-{id}', [TestController::class, 'show'])->name('showTest'); // get specific data using URL 'test-id'
    Route::get('new', [TestController::class, 'create'])->name('create');
    Route::post('/new', [TestController::class, 'store']);
});

Route::get("/", function () {
    return ("welcome");
});


Route::get('/create-records', [Tables1Controller::class, 'createRecords']);
