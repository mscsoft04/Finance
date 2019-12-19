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
$pdf = App::make('dompdf.wrapper');
$pdf->loadHTML('<h1>Test</h1>');
return $pdf->stream();
});

Auth::routes();

/* Route::get('/home', 'HomeController@index')->name('home');
Route::get('/branch', 'BranchController@index');
Route::get('branch/getdata', 'BranchController@getdata')->name('branch.getdata');
Route::get('branch/add', 'BranchController@create')->name('branch.create');
 */
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('branch/getdata', 'BranchController@getdata')->name('branch.getdata');
    Route::get('subscriber/getdata', 'SubscriberController@getdata')->name('subscriber.getdata');
    Route::get('collection-area/getdata', 'CollectionAreaController@getdata')->name('collection.getdata');
    Route::get('scheme/getdata', 'SchemeController@getdata')->name('scheme.getdata');
    Route::get('bank/getdata', 'BankController@getdata')->name('bank.getdata');
    Route::get('group/getdata', 'GroupController@getdata')->name('group.getdata');
    Route::get('group/{group}/auction/getdata', 'AuctionController@getdata')->name('auction.getdata');
 Route::group( ['middleware' => ['auth']], function() {
    Route::resource('users', 'UserController');
    Route::resource('roles', 'RoleController');
    Route::resource('posts', 'PostController');
    Route::resource('branch', 'BranchController');
    Route::resource('subscriber', 'SubscriberController');
    Route::resource('collection-area', 'CollectionAreaController');
    Route::resource('scheme', 'SchemeController');
    Route::resource('bank', 'BankController');
    Route::resource('group', 'GroupController');
    Route::resource('ledger', 'LedgerController');
    Route::resource('groupAssign', 'GroupAssignController');
    Route::resource('group.auction', 'AuctionController');
    Route::resource('creditpayment', 'CreditPaymentAuctionController');


    
    
});
Route::post('/autocomplete/fetch', 'LedgerController@fetch')->name('autocomplete.fetch');
Route::post('/auctiondata/list', 'LedgerController@auctiondata')->name('auctiondata.list');
Route::post('/payment/add', 'LedgerController@addPayment')->name('payment.add');
Route::post('group/{group}/auction/fetch', 'AuctionController@fetch')->name('auction.fetch');



