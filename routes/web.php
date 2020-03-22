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

//Front-end
Route::get('/',[
	'uses'=>'WelcomeController@index',
	'as'=>'/'
]);

Route::get('/blog-details/{id}',[
	'uses'=>'WelcomeController@viewBlogDetails',
	'as'=>'blog-details'
]);

Route::get('/category-blog/{id}',[
	'uses'=>'WelcomeController@viewCategoryWiseBlog',
	'as'=>'category-blog'
]);

Route::get('/about-us',[
	'uses'=>'WelcomeController@aboutUs',
	'as'=>'about-us'
]);
Route::get('/contact',[
	'uses'=>'WelcomeController@contact',
	'as'=>'contact'
]);

























//header
 Route::get('/header',[
	'uses'=>'HeaderController@index',
	'as'=>'header-list'
]);
 Route::post('/header',[
	'uses'=>'HeaderController@saveHeader',
	'as'=>'header-save'
]);



 Route::get('/edit-header/{id}',[
	'uses'=>'HeaderController@editHeader',
	'as'=>'edit-header'
]);
 Route::post('/headerUpdate',[
	'uses'=>'HeaderController@headerUpdate',
	'as'=>'header-update'
]);

//Footer

 Route::get('/footer-list',[
	'uses'=>'FooterController@footerList',
	'as'=>'footer-list'
]);
Route::post('/footer-update',[
	'uses'=>'FooterController@footerUpdate',
	'as'=>'footer-update'
]);
//Category

Route::get('/categoryList',[
	'uses'=>'CategoryController@index',
	'as'=>'category-list'
]);

Route::post('/categorySave',[
	'uses'=>'CategoryController@categorySave',
	'as'=>'category-save'
]);

Route::get('/unpublished-category{id}',[
	'uses'=>'CategoryController@unpublishedcategory',
	'as'=>'unpublished-category'
]);

Route::get('/published-category{id}',[
	'uses'=>'CategoryController@publishedcategory',
	'as'=>'published-category'
]);

Route::post('/categoryUpdate',[
	'uses'=>'CategoryController@categoryUpdate',
	'as'=>'category-update'
]);

Route::get('/delete-category{id}',[
	'uses'=>'CategoryController@deleteCategory',
	'as'=>'delete-category'
]);


//Blog
Route::get('/blog-list',[
	'uses'=>'BlogController@index',
	'as'=>'blog-list'
]);
Route::post('/blog-save',[
	'uses'=>'BlogController@blogsave',
	'as'=>'blog-save'
]);

Route::get('/unpublished-blog/{id}',[
	'uses'=>'BlogController@blogUnpublished',
	'as'=>'unpublished-blog'
]);

Route::get('/published-blog/{id}',[
	'uses'=>'BlogController@blogPublished',
	'as'=>'published-blog'
]);

Route::post('/update-blog/',[
	'uses'=>'BlogController@blogUpdate',
	'as'=>'blog-update'
]);
Route::get('/delete-blog/{id}',[
	'uses'=>'BlogController@blogDelete',
	'as'=>'delete-blog'
]);

//slider
Route::get('/slider-list',[
	'uses'=>'SliderController@index',
	'as'=>'slider-list'
]);

Route::post('/slider-save',[
	'uses'=>'SliderController@sliderSave',
	'as'=>'slider-save'
]);

Route::get('/unpublished-slider/{id}',[
	'uses'=>'SliderController@sliderUnpublished',
	'as'=>'unpublished-slider'
]);

Route::get('/published-slider/{id}',[
	'uses'=>'SliderController@sliderPublished',
	'as'=>'published-slider'
]);

Route::post('/slider-update',[
	'uses'=>'SliderController@sliderUpdate',
	'as'=>'slider-update'
]);


Route::get('/delete-slider/{id}',[
	'uses'=>'SliderController@sliderDelete',
	'as'=>'delete-slider'
]);


//about us admin
Route::get('/about-list/',[
	'uses'=>'AboutController@index',
	'as'=>'about-list'
]);
Route::post('/about-save/',[
	'uses'=>'AboutController@aboutSave',
	'as'=>'about-save'
]);
Auth::routes();

Route::get('home', 'HomeController@index')->name('home');
