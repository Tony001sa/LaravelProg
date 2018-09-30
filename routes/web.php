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

Route::get('cars', 'Mycontroller@index'); //Главная страница,на которой показаны все машины
Route::get('cars/{car}', 'Mycontroller@show'); //Выбранная машина
Route::get('create', 'MyController@create'); //Форма для добавления новой машины
Route::post('insert', 'MyController@insert'); //Контроллер для добавления после отправки формы
Route::get('success', 'Mycontroller@success'); //Успешное добавление машины
Route::get('delete/{car}', 'Mycontroller@delete'); //Удаление машины
