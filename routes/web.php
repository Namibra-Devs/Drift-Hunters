<?php

use Illuminate\Support\Facades\Route;
use App\Permalink;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
  return view('frontend.index');
});

/*=======================================================
******************** Admin Routes **********************
=======================================================*/

Route::group(['prefix' => 'admin', 'middleware' => 'guest:admin'], function () {
  Route::post('/login', 'Admin\LoginController@authenticate')->name('admin.auth');

  Route::get('/mail-form', 'Admin\ForgetController@mailForm')->name('admin.forget.form');
  Route::post('/sendmail', 'Admin\ForgetController@sendmail')->name('admin.forget.mail');
});



Route::group(['prefix' => 'admin', 'middleware' => ['auth:admin', 'checkstatus', 'setLfmPath']], function () {

  // Admin logout Route
  Route::get('/logout', 'Admin\LoginController@logout')->name('admin.logout');

  Route::group(['middleware' => 'checkpermission:Dashboard'], function () {
    // Admin Dashboard Routes
    Route::get('/dashboard', 'Admin\DashboardController@dashboard')->name('admin.dashboard');
  });
});


if (!app()->runningInConsole()) {
  // Dynamic Routes
  Route::group([], function () {

    $wdPermalinks = Permalink::where('details', 0)->get();
    foreach ($wdPermalinks as $pl) {
      $type = $pl->type;
      $permalink = $pl->permalink;

      if ($type == 'admin_login') {
        $action = 'Admin\LoginController@login';
        $routeName = 'admin.login';
        Route::get("$permalink", "$action")->name("$routeName")->middleware('guest:admin');
        continue;
      }
    }
  });
}
