<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CrewRosterController;

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

/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::group([
    'namespace' => 'App\Http\Controllers',
    'controller'  => 'CrewRosterController',
], function () {
    Route::get('/', 'getCrewRosterList')->name('crewrosterslist');
    Route::get('/crew-rosters-list', 'getCrewRosterList')->name('crewrosterslist');
    Route::get('/import-crew-roster', 'importCrewRoster')->name('importcrewrosters');
    Route::post('/upload-crew-roster', 'uploadCrewRoster')->name('uploadcrewrosters');
});