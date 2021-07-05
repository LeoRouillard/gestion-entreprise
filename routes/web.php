<?php

use Illuminate\Support\Facades\Route;

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

Route::resource('organisations', '\App\Http\Controllers\OrganisationController', [
    'names' => [
        'index' => 'organisations',
    ]
]);

Route::resource('missions', '\App\Http\Controllers\MissionController', [
    'names' => [
        'index' => 'missions',
    ]
]);

Route::resource('transactions', '\App\Http\Controllers\TransactionController', [
    'names' => [
        'index' => 'transactions',
    ]
]);

Route::resource('missionLines', '\App\Http\Controllers\MissionLineController', [
    'names' => [
        'index' => 'missionLines',
    ]
]);

Route::resource('contributions', '\App\Http\Controllers\ContributionController', [
    'names' => [
        'index' => 'contributions',
    ]
]);

Route::get('/google', [SocialiteController::class, 'loginRegister'])->name('google');

Route::get("redirect/{provider}", "SocialiteController@redirect")->name('socialite.redirect');
Route::get('/redirect/{provider}', [SocialiteController::class, 'redirect'])->name('socialite.redirect');
Route::get('/callback/{provider}', [SocialiteController::class, 'callback'])->name('socialite.callback');
