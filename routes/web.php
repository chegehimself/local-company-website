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

Route::get('/the-orangesoft-start-up-partnership-program', 'PagesController@orangesoftpartnership');

Route::get('/join-orangesoft', 'PagesController@joinorangesoft');

Route::get('/blog', 'PagesController@blog');

Route::get('/contact', 'PagesController@contact');

