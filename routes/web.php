<?php

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

Route::get('/a', function () {
    $start = [1,2,3] ;
    dd($start);
});
Route::get('users', function () {
    dd(\App\User::all());
});
Route::get('users', 'UserController@index');//@เรียกอะไรขึ้นมา
Route::get('users', 'HomeController@index');//@เรียกอะไรขึ้นมา
Route::get('users-{num1}-{num2}', 'HomeController@cal');
Route::get('users/show/{id}','UserController@show');
Route::get('/', 'HomeController@index');
Route::get('/', 'HomeController@home');
Route::auth();

//{
   // dd(\App\User::all());
//});




//Route::get('/show-{id}', function ($id) {
//    return $id; //ส่งพารามิเตอร์
//});
Route::get('cal-{num1}-{num2}', function ($num1,$num2) {
    return $num1+$num2; //ส่งพารามิเตอร์ คำนวนผ่านROUTE
});Route::get('cal-{num1}-{num2}', function ($num1,$num2) {
    return $num1+$num2; //ส่งพารามิเตอร์ คำนวนผ่านROUTE
});
//Route::get('about', function () {
//    return "Hello form about page!";
//});
//Route::post('contact', function () {
//    return "Hello form about page!";
//});

Auth::routes();

Route::get('/home', 'HomeController@index');
