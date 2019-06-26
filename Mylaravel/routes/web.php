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
Route::get('admin','PageController@getIndex');
// Route::any('index', function () {
//     return view('admin.layouts.master');
// });
Route::get('admin/tables/table','PageController@getTable');
Route::get('admin/tables/table-dynamic','PageController@getTableDynamic');
Route::get('admin/giaodich/tra-cuu-giao-dich','PageController@getlookUpTransaction');
