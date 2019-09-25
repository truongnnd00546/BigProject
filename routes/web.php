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
//Route::get('detail', function () {
//    return view('customer/detail');
//});
//Route::get('/search',function (){
//    return view('client.search');
//});
Route::get('/demo/master-layout', function () {
    return view('layout.master');
});
Route::get('/', function () {
    return view('welcome');
});
Route::get('/demo/form', function () {
    return view('example.form');
});

Route::get('/demo/list', function () {
    return view('example.list');
});
Route::get('/404', function () {
    return view('error.404');
});

// admin

//Route::middleware('admin')->group(function () {
Route::resource('admin/category', 'CategoryController');
Route::resource('admin/collection', 'CollectionController');
Route::resource('admin/product', 'ProductController');
// Order Manager
Route::get('/admin/order', 'OrderController@index');
Route::get('/admin/order/change-status', 'OrderController@changeStatus');
//
Route::get('/api-get-chart-data', 'OrderController@getChartDataApi');
Route::get('/api-get-chart-pie-data', 'OrderController@getChartPieDataApi');
// Order Manager
Route::get('/admin/order/', 'OrderController@index');
Route::get('/admin/order/change-status', 'OrderController@changeStatus');

Route::get('/admin/dashboard', 'OrderController@getData');

//});

// Client

//Route::get('detail', function () {
//    return view('customer/detail');
//});
//Route::get('/search',function (){
//    return view('client.search');
//});
Route::get('/search', 'Client\ProductController@getSearch');

Route::get('/bo-suu-tap-san-pham', 'Client\ProductController@getListColleciton');
Route::get('/danh-sach-san-pham', 'Client\ProductController@getListProduct');
Route::get('/them-gio-hang', 'Client\ShoppingCartController@addToCart');
Route::post('/api-them-gio-hang', 'Client\ShoppingCartController@addToCartApi');
Route::get('/xem-gio-hang', 'Client\ShoppingCartController@showCart');
Route::get('/xoa-gio-hang', 'Client\ShoppingCartController@destroyCart');
Route::put('/sua-gio-hang', 'Client\ShoppingCartController@updateCart');
Route::post('/gui-don-hang', 'Client\ShoppingCartController@checkoutCart');


Route::get('/test', 'Client\ShoppingCartController@demoTransaction');

Route::get('/home', 'Client\ProductController@index');

Route::get('/detail', 'Client\ProductController@show');


//Route::get('detail', function () {
//    return view('client/detailProduct');
//});

//Route::get('/login', ['as' => 'login', 'uses' => 'Client\ProductController@getSignIn']);
//
//Route::get('/register', ['as' => 'register', 'uses' => 'Client\ProductController@getSignUp']);
//
//Route::post('/login', ['as' => 'login', 'uses' => 'Client\ProductController@postSignIn']);
//
//Route::post('/register', ['as' => 'register', 'uses' => 'Client\ProductController@postSignUp']);
//
//Route::get('/logout', ['as' => 'logout', 'uses' => 'Client\ProductController@getLogOut']);

Route::get('about', function () {
    return view('client/about');
});
Route::get('error', function () {
    return view('client/error');
});
//Auth::routes();

//Route::get('/admin', 'HomeController@index')->name('admin');
Route::get('/xoa-san-pham', 'Client\ShoppingCartController@removeFromCart');
//LOGIN//
Route::get('login', [ 'as' => 'login', 'uses' => 'Auth\LoginController@getLogin']);
Route::post('login', [ 'as' => 'login', 'uses' => 'Auth\LoginController@postLogin']);
//ĐĂNG XUẤT//
Route::get('logout', [ 'as' => 'logout', 'uses' => 'Auth\LogoutController@getLogout']);
//PAYPAL//
Route::resource('payment','PaymentController');

//TÌM KIẾM//
Route::get('/timkiem', 'ProductController@timkiem');



