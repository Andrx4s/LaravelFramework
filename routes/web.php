<?php

use Illuminate\Support\Facades\Route;

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
Route::prefix('admin')->group(function (){
    Route::get('{name}', function ($name){
        if  ($name == 'login'){
            return $name;
        }
        if  ($name == 'logout'){
            return $name;
        }
        if  ($name == 'info'){
            return $name;
        }
        if  ($name == 'color'){
            return $name;
        }
    });
});
//9
Route::redirect('/admin/web' , '/admin/color', 301);
//10
Route::get('/color/{hex}', function ($hex){
   return "Цвет: #$hex";
})->where(['hex'=>'[0-9A-F]{0,6}']);
