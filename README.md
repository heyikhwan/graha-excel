# Laravel 11 Template With Stisla

Template menggunakan [stisla admin dashboard ](https://github.com/stisla/stisla)

## Fitur dan komponen

-   Login social media (github, facebook, google, dan twitter) menggunakan library [socialite](https://laravel.com/docs/11.x/socialite)
-   Google captcha
-   Dashboard (widget, log aktivitas terbaru)
-   Profil
    -   Perbarui profil
    -   Perbarui email
    -   Perbarui password
-   Contoh Modul CRUD (Create, Read, Update, Delete) dan Import Excel serta Export (PDF, JSON, Excel)
    -   CRUD
    -   Export
    -   Import
    -   Server side data table
    -   Ajax Method
-   Beberapa contoh menu (tampilan)
-   Log
    -   Log Aktivitas
    -   Laravel Log Viewer
-   User dan role
    -   Manjemen Role dan permission menggunakan [spatie](https://spatie.be/docs/laravel-permission/v6/introduction)
        -   CRUD
        -   Export
        -   Import
    -   Manajemen user
        -   CRUD
        -   Export
        -   Import
        -   Force Login
    -   Manajemen Group Permission
        -   CRUD
        -   Export
        -   Import
    -   Manajemen Permission
        -   CRUD
        -   Export
        -   Import
-   Notifikasi
-   Ubuntu
-   Manajemen file menggunakan [Unisharp](https://unisharp.github.io/laravel-filemanager/)
-   Pengaturan
    -   Umum
    -   Meta
    -   Tampilan
    -   Email
    -   SSO Login dan Register
    -   Lainnya
        -   Google captcha
        -   Setting page
-   Backup database
-   Dropbox
-   Manajemen Menu
    -   Menu (CRUD)
    -   Grup Menu (CRUD)
-   CRUD Generator (menu nya tersembunyi akses via url saja)
-   Server side export file
-   Service dan repository pattern
-   Log Request

## How to install and run

-   `composer install`
-   setup your DB in `.env`
-   `php artisan jwt:secret`
-   `php artisan migrate --seed`
-   `php artisan storage:link`
-   [optional] setup google captcha, google login, facebook login, github login, twitter login in `.env`

## Libraries dan Link Penting

-   https://demo.getstisla.com/
-   https://spatie.be/docs/laravel-permission/v6/introduction
-   https://laravel.com/docs/11.x/socialite
-   https://unisharp.github.io/laravel-filemanager/
-   https://laravel-excel.com/
-   https://github.com/barryvdh/laravel-dompdf
-   https://datatables.net/
-   https://packagist.org/packages/buzz/laravel-google-captcha
-   https://www.google.com/recaptcha/about
-   https://github.com/thinhbuzz/laravel-google-captcha
-   https://github.com/cloudinary-devs/cloudinary-laravel
-   https://github.com/rap2hpoutre/laravel-log-viewer
-   https://github.com/yajra/laravel-datatables
-   https://github.com/tymondesigns/jwt-auth
-   https://github.com/milon/barcode
