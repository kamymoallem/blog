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

Route::get('admin/cat', 'AdminController@insert_category_form')->name('insert_category_form');
Route::post('admin/cat', 'AdminController@insert_category')->name('insert_category');

Route::get('admin/subcat', 'AdminController@insert_sub_category_form')->name('insert_sub_category_form');
Route::post('admin/subcat', 'AdminController@insert_sub_category')->name('insert_sub_category');

Route::get('admin/con', 'AdminController@insert_content_form')->name('insert_content_form');
Route::post('admin/con', 'AdminController@insert_content')->name('insert_content');

Route::get('admin/contentlist', 'AdminController@contentlist')->name('contentlist');
Route::get('admin/del/content/{id}', 'AdminController@delete_content')->name('delete_content');

Route::get('show', 'Show@index')->name('show');
