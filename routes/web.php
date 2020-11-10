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

Route::get('/gallery', function () {
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

Route::get('/press_release', function () {
    return view('press_release');
});

Route::get('/korba_prudential', function () {
    return view('korba_prudential');
});

Route::get('/korbaprudential_faqs', function () {
    return view('korbaprudential_faqs');
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

Route::get('/korbacare_faqs', function () {
    return view('korbacare_faqs');
});

Route::get('/korbacare_about', function () {
    return view('korbacare_about');
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

// Route::get('/test', function () {
//     return view('testnew');
// });

Route::get('/chargeback', function () {
    return view('chargeback');
});

Route::get('/contactUs', function () {
    $config['center'] = '5.624143, -0.075986';
    $config['zoom'] = '17';
    $config['map_height'] = '500px';
    $config['scrollwheel'] = false;

    GMaps::initialize($config);
    $marker['position'] = '5.624143, -0.075986';
    $marker['infowindow_content'] = 'HALGES MAIN OFFICE';

    GMaps::add_marker($marker);

    $map = GMaps::create_map();

    return view('contactUs')->with('map',$map);
});

Route::post('/contactUs','ContactusController@postContact')->name('contact.store');

Route::get('/partners', function () {
    return view('partners');
});

Route::get('/terms', function () {
    return view('terms');
});

Route::get('/privacypolicy', function () {
    return view('privacypolicy');
});