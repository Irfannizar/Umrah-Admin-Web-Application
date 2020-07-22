<?php

use Illuminate\Support\Facades\Route;

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

// ---------------------------- Page -----------------------------------
//Route::get('/login', 'PageController@loginForm')->name('login.form');
Route::get("/search",'PageController@search')->name('search');
Route::get("/search1",'PageController@search1')->name('search1');
Route::get("/navbar",'PageController@nav')->name('navbar');
Route::get("/package1",'PageController@package1')->name('package1');
Route::post('/check-availibility', 'PageController@checkAvailibility')->name('products.store');



Route::get("/main",'PageController@main')->name('main');
//Route::get('/gile', function () 
  //  {
    //return view('cust.Main_index'); 
    //})->name('main');

Route::get('/start', function () {
    return view('eJawlah');
});
// ---------------------------- Post -----------------------------------
Route::resource('posts','PostsController');


// ---------------------------- Auth -----------------------------------
Auth::routes();

// ---------------------------- Admin Umrah -----------------------------------

Route::get('/dashboard', 'UmrahController@dashboard')->name('dashboard')->Middleware('auth');


Route::get('/home', 'AdminController@home')->name('home');
Route::get("/index",'AdminController@index')->name('umrah.index');
Route::get('/admin-show-umrah/{id}', 'AdminController@admin_show')->name('admin.show.umrah');

Route::get('/create-umrah', 'AdminController@umrah_create')->name('admin.create.umrah');
Route::post("/create",'UmrahController@store')->name('create.umrah');


Route::get("/create",'UmrahController@create')->name('create');


Route::post('/search-umrah', 'UmrahController@search')->name('umrah.search');
Route::get('/admin', 'UmrahController@admin')->name('admin.main');


Route::post('/admin-update-umrah/{id}', 'UmrahController@umrah_update')->name('admin.update.umrah');
//Route::post('/admin-delete-umrah/{umrah}', 'UmrahController@umrah_delete')->name('admin.delete.umrah');



Route::get('/admin-main', 'AdminController@admin_main')->name('admin.main');
Route::get('/list-umrah', 'AdminController@admin_list_umrah')->name('admin.list.umrah');
Route::get('/list-user', 'AdminController@admin_list_admin')->name('admin.list.admin');
Route::get('/list-cust', 'AdminController@admin_list_cust')->name('admin.list.cust');
Route::get('/list-order', 'AdminController@admin_list_order')->name('admin.list.order');

Route::post('/admin-delete-umrah/{umrah}', 'AdminController@umrah_delete')->name('delete.umrah');
Route::post('/admin-delete-order/{order}', 'AdminController@order_delete')->name('delete.order');
Route::post('/admin-delete-cust/{cust}', 'AdminController@cust_delete')->name('delete.cust');

Route::get('/admin-edit-umrah/{id}', 'AdminController@umrah_edit')->name('admin.edit.umrah');
Route::post('/update-umrah/{id}', 'AdminController@umrah_update')->name('update.umrah');

Route::get('/admin-edit-admin/{id}', 'AdminController@admin_edit')->name('admin.edit.admin');
Route::post('/update-admin/{id}', 'AdminController@admin_update')->name('update.admin');







// ---------------------------- Customer Umrah -----------------------------------

Route::get("/cust-index",'UmrahController@cust_index')->name('cust.index.umrah');
Route::get('/cust-search-umrah', 'UmrahController@cust_search')->name('cust.search.umrah');

Route::post('/payment/{id}', 'UmrahController@payment')->name('cust.payment');
Route::post('/receipt/{id}', 'UmrahController@cust_receipt')->name('cust.receipt');
Route::get('/umrah-index', 'UmrahController@umrah_list')->name('umrah.list');
Route::get('/cust-show-umrah/{id}', 'UmrahController@cust_show')->name('cust.show.umrah');

Route::get('/umrah/{id}', 'UmrahController@umrah_show')->name('show.umrah');
Route::get('/umrahs', function () {
    return view('umrah.umrah_show');
});

//----General----//
Route::get('/userlogin', 'UmrahController@login')->name('user.login');
//Route::get('/register', 'UmrahController@signup')->name('user.signup');


Route::get('/user', 'UmrahController@user')->name('user.form');
Route::get('/dynamic_pdf/pdf', 'UmrahController@pdf');

Route::get('/invoice/{$id}', function (){
    //return view('umrah.invoice');
    $umrah = \App\Umrah ::find($id);
    $pdf = PDF::loadView('umrah.umrah_receipt', $umrah);
    return $pdf->download('invoice.pdf');
   
})->name('cust.print');;


Route::get("/contact",'UmrahController@contact')->name('contact');

Route::get('laravel-send-email','AdminController@sendEmail');




