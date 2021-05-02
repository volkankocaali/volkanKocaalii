<?php

use App\Http\Controllers\DeveloperWorkController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('developer-work',[DeveloperWorkController::class,'index'])->name('dev.index');
/*
Route::middleware('auth:api')->group(function(){
    Route::get('developer-work',[DeveloperWorkController::class,'index']);
});

*/
