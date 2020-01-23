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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', 'PagesController@index');

Route::get('/about', 'PagesController@about');

Route::get('/info', 'PagesController@info');

Route::get('/name', 'PagesController@index');

Route::get('/challenge', 'PagesController@challenge');


Route::resource('/post', 'PostsController');
Route::resource('/works', 'WorkController');
Route::resource('comments', 'CommentController');
// Route::get('/info', 'PagesController@info');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::resource('/post2', 'Posts2Controller');
Route::resource('/category', 'CategoryController');
Route::resource('/tag', 'TagController');
Route::resource('/users', 'UsersController');
// // Route::get('/users/admin', 'UsersController@admin')->name('users.admin');
Route::get('/user', 'UsersController@index')->name('users');
Route::get('/users/admin/{id}', 'UsersController@admin')->name('users.admin');
Route::get('/users/notadmin/{id}', 'UsersController@notAdmin')->name('users.notAdmin');


Route::get('/settings', 'SettingsController@index')->name('settings');
Route::get('/settings/update', 'SettingsController@update')->name('settings.update');


Route::get('/', 'siteUIController@index')->name('index');

Route::get('/ui', 'siteUIController@showPost')->name('post.show');
Route::resource('/steps', 'StepController'); 


Route::get('/nada', function () {
    // return App\Category::find(2)->post2;
    // return App\Post2::find(3)->category ;
    // return App\Tag::find(2)->post2s;
    // return App\User::find(1)->profile;
    return App\Profile ::find(1)->user;
});

Route::get('/admin', 'HomeController@admin')->name('admin');
Route::get('/adminHome', 'HomeController@adminHome')->name('admin.home')->middleware('is_admin');


// return view ('tags.index')->with('tags',Tag::all());
// $tag=Tag::find($id);


// Route::get('/post2/create', 'Posts2Controller@create');
// Route::post('/post2', 'Posts2Controller@store');



// Route::group(['prefix'=>'admin'],function(){