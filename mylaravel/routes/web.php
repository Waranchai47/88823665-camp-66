    <?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserController;

Route::get('/login',
[LoginController::class,'index']);

Route::get('/home',
[HomeController::class,'index']);

Route::get('/register',
[RegisterController::class,'index']);

Route::get('/',
[HomeController::class,'index']);

Route::post('/register',
[RegisterController::class,'create']);

Route::get('/mycontroller/{id?}',
    [MyController::class,'myfunction']);

Route::post('/mycontroller/{id?}',
    [MyController::class,'myfunction']);

Route::get('/', function () {
    return view('home');
});

Route::get('/users', [UserController::class, 'index'])
->name('users.index');

Route::get('/users', [UserController::class, 'index']);

Route::get('/hello/{id?}', function ($val="") {
    return "<h1>Hello The Universe!! $val</h1>";
});

Route::get('/users', [UserController::class, 'index'])->name('users.index');
Route::post('/users', [UserController::class, 'store'])->name('users.store');
Route::put('/users/{id}', [UserController::class, 'update'])->name('users.update');
Route::delete('/users/{id}', [UserController::class, 'destroy'])->name('users.destroy');

Route::post('/register',
[RegisterController::class,'create']);
