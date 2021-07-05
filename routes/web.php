<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\OrganisationController;
use \App\Http\Controllers\MissionController;
use \App\Http\Controllers\TransactionController;
use \App\Http\Controllers\MissionLineController;
use \App\Http\Controllers\ContributionController;
use \App\Http\Controllers\SocialiteController;

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
})->name('home');

Route::resource('organisations', OrganisationController::class);

Route::resource('missions', MissionController::class);

Route::resource('transactions', TransactionController::class);

Route::resource('missionLines', MissionLineController::class);

Route::resource('contributions', ContributionController::class);

Route::get('/google', [SocialiteController::class, 'loginRegister']);

Route::get("redirect/{provider}", "SocialiteController@redirect")->name('socialite.redirect');
Route::get('/redirect/{provider}', [SocialiteController::class, 'redirect'])->name('socialite.redirect');
Route::get('/callback/{provider}', [SocialiteController::class, 'callback'])->name('socialite.callback');
