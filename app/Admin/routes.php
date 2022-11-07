<?php

use Illuminate\Routing\Router;

Admin::routes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
    'as'            => config('admin.route.prefix') . '.',
], function (Router $router) {

    $router->get('/', 'HomeController@index')->name('home');
    $router->resource('facility-activity', FAController::class);
    $router->resource('trans_fa', trans_faController::class);
    $router->resource('mt_bagian', mt_bagianController::class);
    $router->resource('produk_layanan', produk_layananController::class);
    $router->resource('aktivitas', aktivitasController::class);

});
