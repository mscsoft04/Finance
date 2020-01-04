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

    Route::get('state/getdata', 'StateController@getdata')->name('state.getdata');
    Route::get('city/getdata', 'CityController@getdata')->name('city.getdata');
    Route::get('taluk/getdata', 'TalukController@getdata')->name('taluk.getdata');
    Route::get('village/getdata', 'VillageController@getdata')->name('village.getdata');
    Route::get('documentType/getdata', 'DocumentTypeController@getdata')->name('documentType.getdata');
    Route::get('relationship/getdata', 'RelationshipController@getdata')->name('relationship.getdata');
    Route::get('sourceOfFunds/getdata', 'SourceOfFundsController@getdata')->name('sourceOfFunds.getdata');
    
    


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
    Route::resource('master', 'MasterController');
    Route::resource('state', 'StateController');
    Route::resource('city', 'CityController');
    Route::resource('taluk', 'TalukController');
    Route::resource('village', 'VillageController');
    Route::resource('documentType', 'DocumentTypeController');
    Route::resource('relationship', 'RelationshipController');
    Route::resource('sourceOfFunds', 'SourceOfFundsController');
    Route::resource('debitPayment.auction', 'DebitPaymentController');
    Route::resource('auctionDocument.auction', 'AuctionDocumentController');
    
    

    


    
    
});
Route::post('/autocomplete/fetch', 'LedgerController@fetch')->name('autocomplete.fetch');
Route::post('/groupdata/list', 'LedgerController@groupdata')->name('groupdata.list');
Route::post('/payment/add', 'LedgerController@addPayment')->name('payment.add');
Route::post('group/{group}/auction/fetch', 'AuctionController@fetch')->name('auction.fetch');
Route::post('/autciondata/list', 'LedgerController@autciondata')->name('autciondata.list');
Route::post('/creditpayment/list', 'LedgerController@creditpayment')->name('creditpayment.list');
Route::post('/billgenerate/generate', 'CreditPaymentAuctionController@bill_generate')->name('billgenerate.generate');

Route::get('/paymentData/add', 'LedgerController@paymentData')->name('paymentData.add');



