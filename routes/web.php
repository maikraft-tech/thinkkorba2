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
    return view('home');
});

Route::get('/access', function () {
    return view('accesspoint');
});

Route::get('/philosophy', function () {
    return view('philosophy');
});

Route::get('/bod', function () {
    return view('bod');
});

Route::get('/team', function () {
    return view('team');
});

Route::get('/whatkorba', function () {
    return view('whatkorba1');
});

Route::get('/whokorba', function () {
    return view('whokorba');
});

Route::get('/howkorba', function () {
    return view('howkorba');
});

Route::get('/subscribe', function () {
    return view('subscribe');
});

Route::get('/ebusiness', function () {
    return view('ebusiness');
});

Route::get('/ebanking', function () {
    return view('ebanking');
});

Route::get('/enterprise', function () {
    return view('enterprise');
});

Route::get('/whitelabel', function () {
    return view('whitelabel');
});

Route::get('/faq', function () {
    return view('faq');
});

Route::get('/compliance', function () {
    return view('compliance');
});

// Route::get('/refund', function () {
//     return view('refund');
// });

Route::get('/chargeback', function () {
    return view('chargeback');
});

Route::get('/contactUs', function () {
    return view('contactUs');
});

Route::get('/partners', function () {
    return view('partners');
});

Route::get('/terms', function () {
    return view('terms');
});

Route::get('/privacypolicy', function () {
    return view('privacypolicy');
});