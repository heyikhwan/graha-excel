<?php

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\Web\MainController::class, 'index'])->name('home');
Route::get('/product/penghalang-jalan-road-barrier', function() {
    return redirect('/product/road-barrier-penghalang-jalan', 301);
});
// product
Route::get('/category/{urlTitle}', [App\Http\Controllers\Web\MainController::class, 'listProductByCategory']);
Route::get('/products', [App\Http\Controllers\Web\MainController::class, 'listProduct']);

Route::get('/product/{id}', [App\Http\Controllers\Web\MainController::class, 'detailProductNew']);
Route::get('/product/{id}/{urlTitle}', [App\Http\Controllers\Web\MainController::class, 'detailProductNew']);

Route::get('/product_new/{id}', [App\Http\Controllers\Web\MainController::class, 'detailProduct']);
Route::get('/product_new/{id}/{urlTitle}', [App\Http\Controllers\Web\MainController::class, 'detailProduct']);

// page
Route::get('/page/kenapa-memilih-excel', [App\Http\Controllers\Web\MainController::class, 'pageKenapaMemilihExcel']);
Route::get('/page/excel-hightech', [App\Http\Controllers\Web\MainController::class, 'pageExcelHighTech']);
Route::get('/page/excel-hightech', function () {
    return redirect('/page/teknologi-tangki-air', 301);
});
Route::get('/page/teknologi-tangki-air', [App\Http\Controllers\Web\MainController::class, 'pageExcelHighTech']);
Route::get('/page/memilih-ukuran-yang-tepat', [App\Http\Controllers\Web\MainController::class, 'pageMemilihUkuranYangTepat']);
Route::get('/page/radical-transparency', function () {
    return redirect('/page/harga-dan-kualitas-tangki-air', 301);
});
Route::get('/page/harga-dan-kualitas-tangki-air', [App\Http\Controllers\Web\MainController::class, 'pageRadicalTransparency']);
Route::get('/page/waspada-penipuan', [App\Http\Controllers\Web\MainController::class, 'pageWaspada']);

// news
Route::get('/articles', [App\Http\Controllers\Web\MainController::class, 'articles']);
Route::get('/articles/{categoryUrlTitle}', [App\Http\Controllers\Web\MainController::class, 'articlesCategory']);
Route::get('/articles/{categoryUrlTitle}/{urlTitle}', [App\Http\Controllers\Web\MainController::class, 'articlesDetail']);
Route::get('/articles/{categoryUrlTitle}/{urlTitle}/{type}', [App\Http\Controllers\Web\MainController::class, 'articlesDetail']);

Route::get('/atap-upvc', [App\Http\Controllers\Web\MainController::class, 'atapUpvc']);

Route::get('/sitemap.xml', [App\Http\Controllers\Web\MainController::class, 'sitemap']);

Route::get('/images/files/{hashcode}/{filename}', [App\Http\Controllers\Web\MainController::class, 'showImage']);
Route::get('/page/kalkulator-biaya-atap', [App\Http\Controllers\Web\MainController::class, 'kalkulatorAtap']);
    

//Clear Cache facade value:
Route::get('/clear-cache', function() {
    $exitCode = Artisan::call('cache:clear');
    return '<h1>Cache facade value cleared</h1>';
});

//Reoptimized class loader:
Route::get('/optimize', function() {
    $exitCode = Artisan::call('optimize');
    return '<h1>Reoptimized class loader</h1>';
});

//Route cache:
Route::get('/route-cache', function() {
    $exitCode = Artisan::call('route:cache');
    return '<h1>Routes cached</h1>';
});

//Clear Route cache:
Route::get('/route-clear', function() {
    $exitCode = Artisan::call('route:clear');
    return '<h1>Route cache cleared</h1>';
});

//Clear View cache:
Route::get('/view-clear', function() {
    $exitCode = Artisan::call('view:clear');
    return '<h1>View cache cleared</h1>';
});

//Clear Config cache:
Route::get('/config-cache', function() {
    $exitCode = Artisan::call('config:cache');
    return '<h1>Clear Config cleared</h1>';
});
