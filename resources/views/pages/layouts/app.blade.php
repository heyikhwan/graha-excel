<!doctype html>
<html class="no-js" lang="id">
<head>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-WVWGRL9');</script>
    <!-- End Google Tag Manager -->
    
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="google-site-verification" content="kGPwhydgHLKRqvdOhiNo6ZTup5A-AQVXyvqvzXOd950" />
    <meta name="description" content="<?php echo strip_tags($metaDescription); ?>">
    @yield('meta_tag')
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}" type="image/x-icon">
    <title>{{$pageTitle}}</title>
    <link rel="stylesheet" href="{{asset('assets/css/header-combined.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/plugins/smart-whatsapp-box/smart-whatsapp-box.css')}}">
    <script src="{{asset('assets/plugins/modernizr/modernizr-2.8.3.min.js')}}"></script>
    @if (isset($canonical))
    <link rel="canonical" href="{{$canonical}}" />
    @else
    <link rel="canonical" href="{{Request::url()}}" />
    @endif


    @yield('style')
    <style>
        .header-graha img {
            display: block;
            max-height: 100px;
            margin: 0 auto;
        }
        .header-graha p {
            color: #262626;
            background:#fff;
            margin-top: -15px;
            position: relative;
            z-index: 99;
        }
        .header-graha {
            padding: 20px 0 0;
        }
        .header-inner{
            padding-top:1.75rem;
        }
        p {
            text-align:justify;
        }
        .product-image img {
            object-position: 50% 15%;
        }
        h2.mm-text {
            line-height: 1.5;
            display: inline-block;
            font-size: 1.4rem;
            font-weight: 400;
        }
        .content-img p {
            font-size: 13px;
            margin: 15px 0;
            text-transform: uppercase;
        }
        @media (max-width: 768px) {
            .header-fullwidth {
                display:none;
            }
        }
    </style>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-51787088-1', 'auto');
  ga('send', 'pageview');

</script>
    <!--[if lt IE 9]>
    <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WVWGRL9"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    
    <div class="ai-preloader active">
        <div class="ai-preloader-inner h-100 d-flex align-items-center justify-content-center">
            <div class="ai-child ai-bounce1"></div>
            <div class="ai-child ai-bounce2"></div>
            <div class="ai-child ai-bounce3"></div>
        </div>
    </div>

    <div class="wrapper">
        <header class="header header-fullwidth header-style-4">
            <div class="header-graha text-center">
                <a href="{{url('')}}">
                    <img src="{{ $_logo_url }}" alt="Logo" />
                    <p style="text-align: center; margin-bottom: 0;">PT GRAHAEXCEL PLASTINDO</p>
                </a>
            </div>
            <div class="header-inner fixed-header">
                <div class="container-fluid">
                    <div class="row align-items-center with-border">
                        <div class="col-lg-1 col-md-3 col-4 order-1">
                            <div class="header-left d-flex">
                                {{-- <ul class="header-toolbar">
                                    <li class="header-toolbar__item d-none d-lg-block">
                                        <a href="#">SHOP</a>
                                    </li>
                                </ul> --}}
                            </div>
                        </div>

                        <div class="col-lg-10 order-3 order-lg-2">
                            <nav class="main-navigation">
                                <ul class="mainmenu mainmenu--centered">
                                    <li class="mainmenu__item">
                                        <a href="{{url('')}}" class="mainmenu__link">
                                            <p class="mm-text">Home</p>
                                        </a>
                                    </li>
                                    <li class="mainmenu__item">
                                        <a href="{{url('/products')}}" class="mainmenu__link">
                                            <p class="mm-text">Produk</p>
                                        </a>
                                    </li>
                                    <li class="mainmenu__item">
                                        <a href="{{url('/page/kenapa-memilih-excel')}}" class="mainmenu__link">
                                            <p class="mm-text">Tentang Kami</p>
                                        </a>
                                    </li>
                                    
                                    
                                    <li class="mainmenu__item">
                                        <a href="{{url('/page/kenapa-memilih-excel')}}#contact-us" class="mainmenu__link">
                                            <p class="mm-text">Hubungi Kami</p>
                                        </a>
                                    </li>
                                    <li class="mainmenu__item">
                                        <a href="{{url('/page/kalkulator-biaya-atap')}}" class="mainmenu__link">
                                            <p class="mm-text">Kalkulator Biaya Atap</p>
                                        </a>
                                    </li>
                                    <li class="mainmenu__item">
                                        <a href="{{url('/page/kenapa-memilih-excel')}}#career" class="mainmenu__link">
                                            <p class="mm-text">Karir</p>
                                        </a>
                                    </li>
                                    <li class="mainmenu__item">
                                        <a href="{{url('/articles')}}" class="mainmenu__link">
                                            <p class="mm-text">Blog</p>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>

                        <div class="col-lg-1 col-md-9 col-8 order-2 order-lg-3">
                            <ul class="header-toolbar text-right">
                                <li class="header-toolbar__item">
                                    <a href="#searchForm" class="search-btn toolbar-btn">
                                        <i class="dl-icon-search1"></i>
                                    </a>
                                </li>
                                <li class="header-toolbar__item d-lg-none">
                                    <a href="#" class="menu-btn"></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        
        <header class="header-mobile">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-4">
                        <a href="/" class="logo-box">
                            <figure class="logo--normal">
                                <img src="{{asset('assets/web/img/placeholder/logo-b.png')}}" alt="Logo">
                            </figure>
                        </a>
                    </div>
                    <div class="col-8">
                        <ul class="header-toolbar text-right">
                            <li class="header-toolbar__item">
                                <a href="#searchForm" class="search-btn toolbar-btn">
                                    <i class="dl-icon-search1"></i>
                                </a>
                            </li>
                            <li class="header-toolbar__item d-lg-none">
                                <a href="#" class="menu-btn"></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="mobile-navigation dl-menuwrapper" id="dl-menu">
                            <button class="dl-trigger">Open Menu</button>
                            <ul class="dl-menu">
                                <li>
                                    <a href="{{url('')}}"><p>Home</p></a>
                                </li>
                                <li>
                                    <a href="{{url('/products')}}"><p>Produk</p></a>
                                </li>
                                <li>
                                    <a href="{{url('/page/kenapa-memilih-excel')}}"><p>Tentang Kami</p></a>
                                </li>
                                <li>
                                    <a href="{{url('/page/kenapa-memilih-excel')}}"><p>Hubungi Kami</p></a>
                                </li>
                                 <li>
                                    <a href="{{url('/page/kalkulator-biaya-atap')}}"><p>Kalkulator Biaya Atap</p></a>
                                </li>
                                <li>
                                    <a href="{{url('/page/kenapa-memilih-excel')}}#career"><p>Karir</p></a>
                                </li>
                                <li>
                                    <a href="{{url('/articles')}}"><p>Blog</p></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        
        <div id="content" class="main-content-wrapper">
            @yield('content')
        </div>
        
        <footer>
            <div class="default-content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="content-img">
                                <a href="{{url('/page/kenapa-memilih-excel')}}">
                                    <img src="{{asset('assets/web/img/KENAPA-MEMILIH-TANGKI-EXCEL.webp')}}" alt="Kenapa Memilih Tangki Excel">
                                    <p>Kenapa Memilih Excel</p>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="content-img">
                                <a href="{{url('/page/teknologi-tangki-air')}}">
                                    <img src="{{asset('assets/web/img/TEKNOLOGI-GRAHAEXCEL.webp')}}" alt="Teknologi Tangki Air">
                                    <p>Teknologi Tangki Air</p>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="content-img">
                                <a href="{{url('/page/memilih-ukuran-yang-tepat')}}">
                                    <img src="{{asset('assets/web/img/TIPS-MEMILIH-UKURAN-TANGKI-AIR-YANG-TEPAT.webp')}}" alt="Tips Mengukur Tangki Air">
                                    <p>Tips Mengukur Tangki Air</p>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="content-img">
                                <a href="{{url('/page/harga-dan-kualitas-tangki-air')}}">
                                    <img src="{{asset('assets/web/img/FAQ.webp')}}" alt="Harga dan Kualitas Tangki Air">
                                    <p>Harga dan Kualitas Tangki Air</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer footer-1 bg--dark pt--40">
                <div class="footer-top pb--40 pb-md--30">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-3 mb-sm--30">
                                <div class="footer-widget">
                                    <p class="widget-title">PT. GRAHAEXCEL PLASTINDO</p>
                                    <ul class="widget-menu">
                                        <li><a href="{{url('/page/kenapa-memilih-excel')}}">Tentang Kami</a></li>
                                        <li><a href="{{url('/page/kenapa-memilih-excel')}}#awards">Award & Sertifikasi</a></li>
                                        <li><a href="{{url('/page/kenapa-memilih-excel')}}#visi">Visi & Misi</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-3 mb-sm--30">
                                <div class="footer-widget">
                                    <p class="widget-title">Informasi</p>
                                    <ul class="widget-menu">
                                        <li><a href="{{url('/page/waspada-penipuan')}}">Waspada Penipuan</a></li>
                                        <li><a href="{{url('/articles')}}">News & Announcement</a></li>
                                        <li><a href="{{url('/articles/tips')}}">Artikel & Tips</a></li>
                                        <li><a href="{{url('/page/harga-dan-kualitas-tangki-air')}}#faq">FAQ</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-3 mb-sm--30">
                                <div class="footer-widget">
                                    <p class="widget-title">Mengenal Lebih Dalam Produk Excel</p>
                                    <ul class="widget-menu">
                                        <li><a href="{{url('/articles/tips-atap-upvc/apa-itu-atap-upvc-dan-keuntungannya')}}">Atap uPVC dan Keuntungannya</a></li>
                                        <!--<li><a href="{{url('/articles/tips-toren-air/ukuran-toren-air-excel-dan-spesifikasinya')}}">Ukuran Toren Air Excel dan Spesifikasinya</a></li>-->
                                        <li><a href="{{url('/articles/tips-toren-air/ukuran-toren-air-dan-spesifikasinya')}}">Ukuran Toren Air Excel dan Spesifikasinya</a></li>
                                        <li><a href="{{url('/articles/tips-atap-upvc')}}">Tips Mengenai Atap uPVC</a></li>
                                        <li><a href="{{url('/articles/tips-toren-air')}}">Tips Tentang Toren Air</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-3 mb-sm--30">
                                <div class="footer-widget">
                                    <p class="widget-title">Connect</p>
                                    <ul class="widget-menu">
                                        <li><a href="{{url('/page/kenapa-memilih-excel')}}#contact-us">Hubungi</a></li>
                                        <li><a href="{{url('/page/kenapa-memilih-excel')}}#career">Karir</a></li>
                                    </ul>
                                    <br/>
                                    <ul class="social">
                                        <li class="social__item">
                                            <a href="https://www.facebook.com/grahaexcelid" target="_blank" rel="nofollow" class="social__link color--white">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                        </li>
                                        <li class="social__item">
                                            <a href="https://www.instagram.com/grahaexcel" target="_blank" rel="nofollow" class="social__link color--white">
                                                <i class="fa fa-instagram"></i>
                                            </a>
                                        </li>
                                        <li class="social__item">
                                            <a href="https://www.youtube.com/c/TangkiAirTangkiKimiaEXCEL" target="_blank" rel="nofollow" class="social__link color--white">
                                                <i class="fa fa-youtube"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-bottom bg--white">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 text-center">
                                <p class="copyright-text">© PT. Grahaexcel Plastindo 2020. All Right Reserved</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        <div class="searchform__popup" id="searchForm">
            <a href="#" class="btn-close"><i class="dl-icon-close"></i></a>
            <div class="searchform__body">
                <p>Start typing and press Enter to search</p>
                <form class="searchform" method="get" action="{{url('/products')}}">
                    <input type="text" name="query" id="search" class="searchform__input" placeholder="Search Entire Store...">
                    <button type="submit" class="searchform__submit"><i class="dl-icon-search10"></i></button>
                </form>
            </div>
        </div>
        <div class="ai-global-overlay"></div>
    </div>
    
    <!-- Modal Contact WhatsApp -->
    <!-- <div class="modal fade" id="contactWhatsappModal" tabindex="-1" role="dialog" aria-labelledby="contactWhatsappModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-body p-0">
            <a href="https://api.whatsapp.com/send?phone=6281399808057&text=Hallo%2C%20saya%20ingin%20mengetahui%20lebih%20lanjut%20tentang%20produk%20GrahaExcel" target="_blank">
                <img src="{{ asset('storage/files/1/banner-topup-total-drain-blow.webp') }}" alt="Banner Popup Whatsapp" />
            </a>
          </div>
        </div>
      </div>
    </div> -->
    <!-- /.Modal Contact WhatsApp -->
    
    <!-- Floating WhatsApp Button -->
    <div class="smart-wa-button">
        <a href="https://api.whatsapp.com/send?phone=6281399808057&text=Hallo%2C%20saya%20ingin%20mengatahui%20lebih%20lanjut%20tentang%20produk%20GrahaExcel" target="_blank" class="smart-wa-btn"></a>
    </div>
    <!-- /.Floating WhatsApp Button -->

    <script src="{{asset('assets/js/footer-combined.js')}}"></script>
    @yield('script')
    
    <!-- Modal Contact WhatsApp Script -->
    <!-- <script>
        $(document).ready(function(){
            if (window.location.pathname == "/") {
                $("#contactWhatsappModal").modal("show");
            }
        })
    </script> -->
    <!-- /.Modal Contact WhatsApp Script -->
</body>
</html>