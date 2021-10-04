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

//Route::get('/', ['as'=>'home','uses'=>'PageController@home']);

Route::get('reset', function (){
    Artisan::call('route:clear');
    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('config:cache');
});

Route::get('/stock', [App\Http\Controllers\PageController::class, 'stock'])->name('stock');




/*Route::get('/about', [App\Http\Controllers\PageController::class, 'about'])->name('about');
Route::get('/gallery', [App\Http\Controllers\PageController::class, 'gallery'])->name('gallery');
Route::get('/gallerydetails/{id}', [App\Http\Controllers\PageController::class, 'gallerydetails'])->name('gallerydetails');
Route::get('/contact', [App\Http\Controllers\PageController::class, 'contact'])->name('contact');
Route::post('/postcontact', [App\Http\Controllers\PageController::class, 'postcontact'])->name('postcontact');*/
Route::get('/home', [App\Http\Controllers\PageController::class, 'index'])->name('home');

//Auth::routes();
Auth::routes(['verify' => true]);


Route::get('register-user', [App\Http\Controllers\PageController::class, 'getregisteruser'])->name('register-user');
Route::get('addusers', [App\Http\Controllers\PageController::class, 'addusers'])->name('addusers');
Route::post('formaddusers', ['as'=>'formaddusers','uses'=>'App\Http\Controllers\PageController@formaddusers']);
Route::get('login-user', [App\Http\Controllers\PageController::class, 'getloginuser'])->name('login-user');

Route::get('list-user', [App\Http\Controllers\PageController::class, 'listuser'])->name('listuser');

Route::get('inplay/{id}', [App\Http\Controllers\PageController::class, 'inplay'])->name('inplay');
Route::get('details/{id}', [App\Http\Controllers\PageController::class, 'details'])->name('details');


Route::post('registeruser', ['as'=>'registeruser','uses'=>'App\Http\Controllers\PageController@registeruser']);
Route::post('loginuser', ['as'=>'loginuser','uses'=>'App\Http\Controllers\PageController@loginuser']);
Route::post('logout-user', ['as'=>'logout-user','uses'=>'App\Http\Controllers\PageController@logoutuser']);


//gp
Route::post('submitgp', ['as'=>'submitgp','uses'=>'App\Http\Controllers\PageController@submitgp']);
Route::post('submitdeposite', ['as'=>'submitdeposite','uses'=>'App\Http\Controllers\PageController@submitdeposite']);
Route::post('submitwithdraw', ['as'=>'submitwithdraw','uses'=>'App\Http\Controllers\PageController@submitwithdraw']);
Route::post('submitminmaxOdds', ['as'=>'submitminmaxOdds','uses'=>'App\Http\Controllers\PageController@submitminmaxOdds']);
Route::post('submitexposureLimit', ['as'=>'submitexposureLimit','uses'=>'App\Http\Controllers\PageController@submitexposureLimit']);
Route::post('submitcreditReference', ['as'=>'submitcreditReference','uses'=>'App\Http\Controllers\PageController@submitcreditReference']);
Route::post('submituserpassword', ['as'=>'submituserpassword','uses'=>'App\Http\Controllers\PageController@submituserpassword']);
Route::post('submitchangeStatus', ['as'=>'submitchangeStatus','uses'=>'App\Http\Controllers\PageController@submitchangeStatus']);
Route::post('submitSuperMasterAccess', ['as'=>'submitSuperMasterAccess','uses'=>'App\Http\Controllers\PageController@submitSuperMasterAccess']);

Route::post('submitbitpopup', ['as'=>'submitbitpopup','uses'=>'App\Http\Controllers\PageController@submitbitpopup']);

//Route::get('/home', [App\Http\Controllers\PageController::class, 'home'])->name('home')->middleware('verified');
/*

Route::post('updatestatus', ['as'=>'updatestatus','uses'=>'App\Http\Controllers\AdminController@updatestatus']);
Route::post('deletemember', ['as'=>'deletemember','uses'=>'App\Http\Controllers\AdminController@deletemember']);

Route::get('/add-user', [App\Http\Controllers\PageController::class, 'adduser'])->name('add-user')->middleware('verified');
Route::post('/postadduser', [App\Http\Controllers\PageController::class, 'postadduser'])->name('postadduser');

Route::get('/my-users', [App\Http\Controllers\PageController::class, 'myusers'])->name('my-users')->middleware('verified');

Route::get('/edit-user/{id}', [App\Http\Controllers\PageController::class, 'edituser'])->name('edit-user')->middleware('verified');
Route::post('/postedituser', [App\Http\Controllers\PageController::class, 'postedituser'])->name('postedituser');

Route::get('admin/login', 'App\Http\Controllers\AdminLoginController@getAdminLogin')->name('adminlogin');
Route::post('admin/login', ['as'=>'admin.auth','uses'=>'App\Http\Controllers\AdminLoginController@adminAuth']);
Route::get('/admin', function () {
    return redirect('admin/login');
})->name('admin');


Route::group(array('prefix'=>'admin','middleware' => ['admin','preventBackHistory']), function (){   
    
   
    Route::get('userlisting', ['as'=>'users','uses'=>'App\Http\Controllers\AdminController@userlisting']);
    Route::get('ajaxuserlisting', ['as'=>'userslist','uses'=>'App\Http\Controllers\AdminController@ajaxuserlisting']);
    
    Route::get('memberlisting', ['as'=>'members','uses'=>'App\Http\Controllers\AdminController@memberlisting']);
    
    Route::get('tempmemberlisting', ['as'=>'tempmemberlisting','uses'=>'App\Http\Controllers\AdminController@tempmemberlisting']);
    
    Route::get('ajaxmemberlisting', ['as'=>'ajaxmemberlisting','uses'=>'App\Http\Controllers\AdminController@ajaxmemberlisting']);

    Route::get('gallerylisting', ['as'=>'gallerylisting','uses'=>'App\Http\Controllers\AdminController@gallerylisting']);
    Route::get('ajaxgallerylisting', ['as'=>'ajaxgallerylisting','uses'=>'App\Http\Controllers\AdminController@ajaxgallerylisting']);
    
    Route::get('addgallery', 'App\Http\Controllers\AdminController@addgallery')->name('addgallery');
    Route::post('postaddgallery', 'App\Http\Controllers\AdminController@postaddgallery')->name('postaddgallery');
    
    Route::get('editgallery/{id}', 'App\Http\Controllers\AdminController@editgallery')->name('editgallery');
    Route::post('posteditgallery', 'App\Http\Controllers\AdminController@posteditgallery')->name('posteditgallery');


    Route::get('viewmember/{id}', 'App\Http\Controllers\AdminController@edit_user_details')->name('viewmember');
    
   
    Route::get('logout', array('as' => 'adminlogout', 'uses' => 'App\Http\Controllers\AdminController@adminlogout'));
    Route::get('dashboard', ['as'=>'admindashboard','uses'=>'App\Http\Controllers\AdminController@dashboard']);
    Route::get('dashboard2', ['as'=>'admindashboard2','uses'=>'App\Http\Controllers\AdminController@dashboard2']);
    

    
});*/
