<?php

Route::get('/','HomeController@index')->name('index');
Route::get('shops','Vendors\ShopController@list')->name('shop.list');
Route::get('referer/{slug?}','Auth\RegisterController@showRegistrationForm')->name('referer');
// Route::get('woocommerce/products','HomeController@woocommerce');

Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});

//ABOUT PAGES
Route::view('about','frontend.outside.general.about')->name('about');
Route::view('faq','frontend.outside.general.faq')->name('faq');
Route::view('contact','frontend.outside.general.contact')->name('contact');
Route::view('orphanages','frontend.outside.general.orphanages')->name('orphanages');
Route::view('charity-organizations','frontend.outside.general.charity')->name('charity');
Route::view('start-selling','frontend.outside.shop.intro')->name('sell');
Route::view('multilevel-network','frontend.outside.network')->name('network');

Route::get('blog','BlogController@list')->name('blogroll');
Route::get('blog/post/{post}','BlogController@post')->name('blogpost');
Route::post('blog/comment','BlogController@comment')->name('blogcomment');


Route::get('products','ProductThreadController@list')->name('products');
Route::get('products/category/{category}','ProductThreadController@listByCategory')->name('products.category');
Route::get('product/{product}','ProductThreadController@view')->name('product.view');
Route::post('product/add-to-cart','ProductThreadController@addtocart')->name('product.addtocart');
Route::post('product/remove-from-cart','ProductThreadController@removefromcart')->name('product.removefromcart');
Route::post('product/add-to-wish','ProductThreadController@addtowish')->name('product.addtowish');
Route::post('product/remove-from-wish','ProductThreadController@removefromwish')->name('product.removefromwish');
Route::post('product/sortFilter','ProductThreadController@sortFilter')->name('product.sortFilter');

Route::get('cart','SalesController@cart')->name('cart');
Route::get('wishlist','SalesController@wishlist')->name('wishlist');
Route::post('checkout','SalesController@checkout')->name('checkout');

Route::post('pay','PaymentController@pay')->name('pay');
Route::get('payment/verification','PaymentController@verification')->name('payment.verification');
Route::get('payment/status/{payment}','PaymentController@status')->name('payment.status');
Route::post('account_number_verification','PaymentController@accountNumberResolve')->name('account_number_verification');


Route::get('support','SupportThreadController@create')->name('support');
Route::post('support','SupportThreadController@save')->name('support');

    

//AUTH
Auth::routes();

Route::get('dashboards', 'HomeController@dashboards')->name('home');
Route::post('getCities','HomeController@getCities')->name('getCities');
Route::post('getStates','HomeController@getStates')->name('getStates');
Route::post('orphanage/charity/register','HomeController@orphanageCharity')->name('orphanage.charity');
 
//USER PAGES
Route::group(['as'=>'user.','middleware'=> 'role:user'], function () {
    Route::get('dashboard','UserController@index')->name('dashboard');
    Route::get('user/profile','UserController@profile')->name('profile');
    Route::post('user/profile','UserController@saveprofile')->name('profile');
    Route::get('user/addresses','UserController@address')->name('address');
    Route::post('user/addresses','UserController@manageAddress')->name('address');

    // Route::get('user/change-password','UserController@password')->name('password');
    Route::post('user/change-password','UserController@changePassword')->name('changePassword');
    
    Route::get('orders','SalesController@orders')->name('orders');
    Route::get('order/{order}/details','SalesController@orderDetails')->name('order.details');
    Route::post('order/{order}/status','SalesController@status')->name('order.status');
    Route::post('order/{order}/review','SalesController@review')->name('order.review');
    Route::get('wishlist','SalesController@wishlist')->name('wishlist');
    Route::get('transactions','PaymentController@transactions')->name('payment.transactions');
    Route::get('withdrawals','PaymentController@withdrawals')->name('payment.withdrawals');
    Route::post('withdrawals','PaymentController@withdrawalRequest')->name('payment.withdrawals');
    Route::get('user/network','NetworkController@dashboard')->name('network');

    Route::group(['prefix'=> 'messages','as'=> 'messages.'],function(){
        Route::get('/','MessageController@index')->name('list');
        Route::get('new','MessageController@new')->name('new');
        Route::post('send','MessageController@send')->name('send');
        Route::post('chat','MessageController@chat')->name('chat');
    });

    Route::view('apitest','api');
    
    
});

//VENDOR PAGES
include('shop.php');
include('admin.php');



