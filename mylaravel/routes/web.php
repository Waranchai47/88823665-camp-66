    <?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;
use App\Http\Controllers\RegisterController;

Route::get('/login',
[LoginController::class,'index']);

Route::get('/home',
[HomeController::class,'index']);

Route::get('/legister',
[RegisterController::class,'index']);

Route::get('/',
[HomeController::class,'index']);

Route::get('/mycontroller/{id?}',
    [MyController::class,'myfunction']);

Route::post('/mycontroller/{id?}',
    [MyController::class,'myfunction']);

Route::get('/', function () {
    return view('home');
});

Route::get('/hello/{id?}', function ($val="") {
    return "<h1>Hello The Universe!! $val</h1>";
});
