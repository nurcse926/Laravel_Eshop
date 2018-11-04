<?php
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// Route::get('/', function () {
//     return view('welcome');
// });
//frontend of all controller list*********************************
Route::get('/','HomeController@index');
//product_by_category route
Route::get('/product_by_category/{category_id}','HomeController@show_product_by_category');
Route::get('/product_by_manufacture/{manufacture_id}','HomeController@show_product_by_manufacture');
Route::get('/view_product/{product_id}','HomeController@product_details_by_id');

//backend all controller list*************************************
Route::get('/logout','SuperAdminController@logout');
Route::get('/admin','adminController@index');
Route::get('/dashboard','SuperadminController@index');
Route::post('/admin-dashboard','adminController@nurdash');
//Category Related all Route
Route::get('/add-category','CategoryController@index');
Route::get('/all-category','CategoryController@all_category');
Route::post('/save_category','CategoryController@save_category');
Route::get('/edit-category/{category_id}','CategoryController@edit_category');
Route::get('/unactive_category/{category_id}','CategoryController@unactive_category');
Route::post('/update_category/{category_id}','CategoryController@update_category');
Route::get('/active_category/{category_id}','CategoryController@active_category');
Route::get('/delete-category/{category_id}','CategoryController@delete_category');

//All manufacture related controller here
Route::get('/add_manufacture','manufactureController@index');
Route::get('/all_manufacture','manufactureController@all_manufacture');
Route::post('/save_manufacture','manufactureController@save_manufacture');
Route::get('/edit_manufacture/{manufacture_id}','manufactureController@edit_manufacture');
Route::get('/active_manufacture/{manufacture_id}','manufactureController@active_manufacture');
Route::get('/unactive_manufacture/{manufacture_id}','manufactureController@unactive_manufacture');
Route::post('/update_manufacture/{manufacture_id}','manufactureController@update_manufacture');
Route::get('/delete_manufacture/{manufacture_id}','manufactureController@delete_manufacture');

//All products related controller here
Route::get('/add_product','ProductController@index');
Route::post('/save_product','ProductController@save_product');
Route::get('/all-product','ProductController@all_product');
Route::get('/active_product/{product_id}','ProductController@active_product');
Route::get('/unactive_product/{product_id}','ProductController@unactive_product');
Route::get('/delete_product/{product_id}','ProductController@delete_product');
Route::get('/edit-product/{product_id}','ProductController@edit_product');
Route::post('/update_product/{product_id}','ProductController@update_product');

//Slider Route Here
Route::get('/add_slider','SliderController@index');
Route::post('/save_slider','SliderController@save_slider');
Route::get('/all_slider','SliderController@all_slider');
Route::get('/active_slider/{slider_id}','SliderController@active_slider');
Route::get('/unactive_slider/{slider_id}','SliderController@unactive_slider');
Route::get('/delete_slider/{slider_id}','SliderController@delete_slider');

//Cart Controller here
Route::post('/add-to-cart','CartController@add_to_cart');
Route::get('/show-cart','CartController@show_cart');
Route::get('/delete-to-cart/{rowId}','CartController@delete_to_cart');
Route::post('/update-cart','CartController@update_cart');

//Checkout Controller Here
Route::get('/login-check','CheckoutController@login_check');
Route::post('/customer-registration','CheckoutController@customer_registration');
Route::get('/checkout','CheckoutController@checkout');
Route::post('/save-shipping-details','CheckoutController@save_shipping_details');
Route::post('/customer-login','CheckoutController@customer_login');
Route::get('/customer-logout','CheckoutController@customer_logout');
Route::get('/payment','CheckoutController@payment');
Route::post('/order-place','CheckoutController@order_place');

//Payment Controller Here
Route::get('/nur-blog','PaymentController@blog');
Route::get('/error-page','PaymentController@error');
Route::get('/contact-us','PaymentController@contact_us');

// Order Table controller here
Route::get('/order-manage','OrderController@order_manage');
Route::get('/order-details','OrderController@order_details');
Route::get('/search','OrderController@search_page');
Route::get('/delete-order/{order_id}','OrderController@delete_order');















