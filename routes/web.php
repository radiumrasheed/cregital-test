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

use App\Member;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
	return view('welcome');
})->name('welcome');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/member/preview/{member}', 'MemberController@preview')->middleware('auth')->name('member.preview');
Route::get('/member', 'MemberController@index')->middleware('auth')->name('member.index');

Route::get('/cardenrollment', 'CardEnrollmentsController@index')->middleware('auth')->name('cardenrollment.index');

Route::get('/member/register', 'MemberController@create')->name('member.create');
Route::get('/cardenrollment/register', 'CardEnrollmentsController@create')->name('cardenrollment.create');

Route::post('/member', 'MemberController@store')->name('member.store');
Route::post('/cardenrollment', 'CardEnrollmentsController@store')->name('cardenrollment.store');


// todo Add more routes