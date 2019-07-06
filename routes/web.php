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
Route::get('/user', function () {
    return "Hello word!";
});
Route::get('/siswa/{id}', function($id) {
    return "Hello word!". $id;
});
route::get('/kariawan/{id?}', function($id=null) {
    return "Hello kariawan".$id;
});
Route::Get('/siswa', function(){
    return view("siswa");
});
Route::Get('/Guru', function (){
    return View('Guru');
});
route::get('/admin', function(){
    return view('admin');
});
route::git('/admin/{id}', function ($id) {
    return "Hello admin".$id;
});