<?php

use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/home', 'MainController@home');

Route::get('/about','MainController@about');

Route::get('/contact', 'MainController@contact');

Route::get('/cat', 'MainController@cat');

Route::get('/review', 'MainController@review')->name('review');

Route::post('/review/check', 'MainController@review_check');

Route::get('/user/{id}', 'UserController@see');

// user auth

Route::name('user.')->group(function(){
  Route::view('/privete', 'privete')->middleware('auth')->name('privete');
//   get
    Route::get('/login', function () {
        if (Auth::check()) {
            return redirect(route('user.private'));
        }
        return view('login');
      })->name('login');
// post
    // Route::post('/login', []);
    // Route::post('/logout', [])->name('logout');
    Route::get('/registration', function(){
            if(Auth::check()){
                return redirect(route('user.private'));
            }

        return view('registration');
    })->name('registration');

    Route::post('/registration', [RegisterController::class, 'save']);
         
});