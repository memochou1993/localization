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

Route::get('/{locale}', function ($locale) {
    Session::put('locale', $locale);

    dump([
        $locale,
        Session::get('locale'),
    ]);
});

Route::get('/', function () {
    echo __('localization.localization');

    dump([
        App::getLocale(),
        \Carbon\Carbon::now(),
        \Carbon\Carbon::now()->diffForHumans(),
    ]);
});
