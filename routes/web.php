<?php

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

// redirect 301 (SEO) - taruh di atas route lain supaya tidak tertangkap route wildcard
Route::permanentRedirect('/product/penghalang-jalan-road-barrier', '/product/road-barrier-penghalang-jalan');
Route::permanentRedirect('/page/excel-hightech', '/page/teknologi-tangki-air');
Route::permanentRedirect('/page/radical-transparency', '/page/harga-dan-kualitas-tangki-air');
Route::permanentRedirect('/articles/tips-fiber-penutup-pagar/harga-penutup-pagar-excel-series', '/articles/tips-fiber-penutup-pagar/panduan-lengkap-memilih-penutup-pagar');
Route::permanentRedirect('/articles/tips-atap-upvc/mengenal-atap-polycarbonate-dan-keunggulannya', '/articles/tips/apa-itu-polycarbonate');
Route::permanentRedirect('/articles/tips-atap-upvc/kenali-3-tipe-atap-upvc-sebelum-membeli', '/articles/tips-atap-upvc/apa-itu-atap-upvc-dan-keuntungannya');
Route::permanentRedirect('/articles/tips/apa-itu-upvc', '/articles/tips-atap-upvc/apa-itu-atap-upvc-dan-keuntungannya');

Route::get('/', [App\Http\Controllers\Web\MainController::class, 'index'])->name('home');
// product
Route::get('/category/{urlTitle}', [App\Http\Controllers\Web\MainController::class, 'listProductByCategory']);
Route::get('/products', [App\Http\Controllers\Web\MainController::class, 'listProduct']);

Route::get('/product/{id}', [App\Http\Controllers\Web\MainController::class, 'detailProductNew']);
Route::get('/product/{id}/{urlTitle}', [App\Http\Controllers\Web\MainController::class, 'detailProductNew']);

Route::get('/product_new/{id}', [App\Http\Controllers\Web\MainController::class, 'detailProduct']);
Route::get('/product_new/{id}/{urlTitle}', [App\Http\Controllers\Web\MainController::class, 'detailProduct']);

// page
Route::get('/page/kenapa-memilih-excel', [App\Http\Controllers\Web\MainController::class, 'pageKenapaMemilihExcel']);
Route::get('/page/teknologi-tangki-air', [App\Http\Controllers\Web\MainController::class, 'pageExcelHighTech']);
Route::get('/page/memilih-ukuran-yang-tepat', [App\Http\Controllers\Web\MainController::class, 'pageMemilihUkuranYangTepat']);
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

Route::get('/toren-air', function () {
    $data = [
        'pageTitle' => 'Tangki Air, Toren Air, Tandon Air, Tangki Bebas Lumut - EXCEL',
        'metaDescription' => 'Tangki air bersertifikasi standar SNI, FDA & JIS. Tangki bebas lumut tersedia ukuran 250, 500, 1000 liter hingga kapasitas lebih besar.'
    ];
    return view('pages.toren-air', $data);
});
Route::get('/tangki-kimia', function () {
    $data = [
        'pageTitle' => 'Tangki Kimia Graha Excel - Solusi Tangki Industri & Kebutuhan Komersial',
        'metaDescription' => 'Kami menyediakan tangki kimia custom sesuai jenis bahan kimia, kapasitas, HDPE dengan ketebalan khusus, standard K3L, SNI, Regulasi Interantional'
    ];
    return view('pages.tangki-kimia', $data);
});
Route::get('/atap-upvc', function () {
    $data = [
        'pageTitle' => 'Jual Atap uPVC Single Layer & Double Layer Harga Terbaik',
        'metaDescription' => 'Atap UPVC berkualitas,  sejuk & tahan lama. Tersedia tipe Skydeck, Exceltech, EliteRoof untuk rumah, pabrik & ruko. Bergaransi hingga 15 tahun.'
    ];
    return view('pages.atap-upvc', $data);
});
    

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
