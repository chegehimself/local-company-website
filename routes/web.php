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

// root page
Route::get('/', 'PagesController@index');

// about page
Route::get('/about', 'PagesController@about');

Route::get('/portfolio', 'PagesController@portfolio');

Route::get('/web-design', 'PagesController@webdesign');

Route::get('/drupalisation', 'PagesController@drupalisation');

Route::get('/web-maintenance', 'PagesController@webmaintenance');

Route::get('/real-estate-web-marketing-system', 'PagesController@realestate');

Route::get('/partner', 'PagesController@partner');

Route::get('/the-Icarus-start-up-partnership-program', 'PagesController@Icaruspartnership');

Route::get('/join-Icarus', 'PagesController@joinIcarus');

Route::get('/blog', 'PagesController@blog');

Route::get('/contact', 'PagesController@contact');

Route::get('/services', 'PagesController@services');

Route::get('/products', 'PagesController@products');
