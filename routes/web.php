<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\TestController;

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

Route::get('lesson1', [TestController::class, 'lesson1']);
Route::get('lesson2', [TestController::class, 'lesson2']);
Route::get('lesson3', [TestController::class, 'lesson3']);
Route::get('lesson4', [TestController::class, 'lesson4']);
Route::get('lesson5', [TestController::class, 'lesson5']);
Route::get('lesson6', [TestController::class, 'lesson6']);


Route::get('template', [TestController::class, 'lessonTemplateOne']);
Route::get('template2/{organization}', [TestController::class, 'lessonTemplate2']);
Route::get('template3/{name}', [TestController::class, 'lessonTemplate3']);
Route::get('template4', [TestController::class, 'lessonTemplate4']);
Route::get('template5', [TestController::class, 'lessonTemplate5']);
Route::get('template6', [TestController::class, 'lessonTemplate6']);


//1
Route::get('/my-name', function () {
    return "Муниров Андрей Анатольевич";
});
//2
Route::get('/my-friend', function () {
    return "Воронков Владимир Александрович";
});
//3
Route::get('/my-friend/{name}', function ($name) {
    return "Воронков Владимир Александрович - $name";
});
//4
Route::get('/my-city/{city}', function ($city) {
    return "$city";
});
//5
Route::get('/level/{lvl}', function ($lvl) {
    if ($lvl <=25){
        return "$lvl - Новичок";
    }
    if (($lvl <=50) && ($lvl > 25)){
        return "$lvl - Специалист";
    }
    if (($lvl <=75) && ($lvl > 50)){
        return "$lvl - Босс";
    }
    if (($lvl <=98) && ($lvl > 75)){
        return "$lvl - Старик";
    }
    if ($lvl == 99){
        return "$lvl - Король";
    }
});
//6
Route::get('/working/{name}/{date}', function ($name, $date){
    return "$name - $date";
});
//7
Route::get('/power/{name}', function ($name){
    return $name;
});
//8
Route::prefix('/admin')->group(function (){
    Route::get('/login', function(){
        return \route('login');
    })->name('login');
    Route::get('/logout', function(){
        return \route('logout');
    })->name('logout');

    Route::get('/info', function(){
        return \route('info');
    })->name('info');

    Route::get('/color', function(){
        return \route('color');
    })->name('color');
});
//9
Route::redirect('/admin/web' , '/admin/color');
//10
Route::get('/color/{hex}', function ($hex){
    return "Цвет: #$hex";
})->where(['hex'=>'[0-9A-F]{0,6}']);
