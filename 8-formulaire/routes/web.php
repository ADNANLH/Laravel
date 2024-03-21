<?php
use App\Http\Controllers\testController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
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


// Route::prefix('/blog')->name('blog.')->group(function () {

//     Route::get('/', [testController::class,'index'])->name('index');  // get all the data 
//     // Route::get('/{test}-{id}',[testController::class,'show'])->name('index'); // get specific data useing url 'name-id'

// });
Route::prefix('/blog')->name('blog.')->group(function () {
    Route::get('/', [TestController::class, 'index'])->name('index'); // get all the data
    Route::get('create/{test}-{id}', [TestController::class, 'show'])->name('showTest'); // get specific data using URL 'test-id'
    Route::get('new', [TestController::class, 'create'])->name('create');
    Route::post('/new', [TestController::class, 'store']);
});

Route::get("/", function () {
    return ("welcome");
});

// Route::get('/blog/{id}-{slug} , testController@show', function (string $slug, string $id ) {
//     return [
//         "slug" => $slug,
//         "id" => $id,
//        "name" => "Tanger",
// ];
// })->name('blog.show');
// Route::get('/blog/{id}-{slug}', 'testController@show')->name('blog.show');Route::get('/blog/{id}-{slug}', 'BlogController@show')->name('blog.show');


Route::get('/create-records', [Tables1Controller::class, 'createRecords']);
