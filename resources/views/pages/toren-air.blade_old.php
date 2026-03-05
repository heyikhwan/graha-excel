@extends('pages.layouts.app')

@section('meta_tag')
    <!-- SEO Meta Tags -->
    <meta name="keywords" content="toren air, tangki air, tandon air, water tank, SNI, FDA, JIS, grahaexcel, toren air berkualitas, tangki air rumah tangga, tangki air bisnis">
    <meta name="author" content="Grahaexcel">
    <meta name="robots" content="index, follow">
    
    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="Toren Air Graha Excel - Solusi Tangki / Tandon Air Rumah & Bisnis">
    <meta property="og:description" content="Toren air Graha Excel Original, tersedia berbagai ukuran, food grade, anti-lumut, garansi resmi. Solusi Tandon Air / Tangki Air bersih rumah & bisnis.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ Request::url() }}">
    <meta property="og:site_name" content="Grahaexcel">
    <meta property="og:locale" content="id_ID">
    
    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Toren Air Graha Excel - Solusi Tangki / Tandon Air Rumah & Bisnis">
    <meta name="twitter:description" content="Toren air Graha Excel Original, tersedia berbagai ukuran, food grade, anti-lumut, garansi resmi. Solusi Tandon Air / Tangki Air bersih rumah & bisnis.">
    
    <!-- Additional SEO Tags -->
    <meta name="geo.region" content="ID">
    <meta name="geo.country" content="Indonesia">
    <meta name="language" content="Indonesian">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

   <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": ["WebPage", "CollectionPage"],
      "@id": "https://www.grahaexcel.com/toren-air",
      "url": "https://www.grahaexcel.com/toren-air",
      "name": "Toren Air Grahaexcel - Solusi Tandon / Tangki Air",
      "inLanguage": "id",
      "description": "Toren air EXCEL untuk rumah & bisnis di Indonesia: Non-BPA, bersertifikat SNI, FDA, JIS; 2x lebih kuat & higienis; pilihan seri ROTO, BLOW, dan Stainless.",
      "about": {
        "@type": "Thing",
        "name": "Toren Air EXCEL"
      },
      "publisher": {
        "@type": "Organization",
        "name": "PT. Grahaexcel Plastindo",
        "url": "https://www.grahaexcel.com",
        "logo": {
          "@type": "ImageObject",
          "url": "https://www.grahaexcel.com/favicon.ico"
        },
        "sameAs": [
          "https://www.facebook.com/grahaexcelid",
          "https://www.instagram.com/grahaexcel",
          "https://www.youtube.com/c/TangkiAirTangkiKimiaEXCEL"
        ],
        "contactPoint": [
          {
            "@type": "ContactPoint",
            "contactType": "customer service",
            "telephone": "+62-813-9980-8057",
            "areaServed": "ID",
            "availableLanguage": ["id", "en"]
          }
        ]
      },
      "breadcrumb": {
        "@type": "BreadcrumbList",
        "itemListElement": [
          { "@type": "ListItem", "position": 1, "name": "Home", "item": "https://www.grahaexcel.com/" },
          { "@type": "ListItem", "position": 2, "name": "Kategori Produk", "item": "https://www.grahaexcel.com/product" },
          { "@type": "ListItem", "position": 3, "name": "Toren Air", "item": "https://www.grahaexcel.com/toren-air" }
        ]
      },
      "mainEntity": {
        "@type": "ItemList",
        "name": "Rekomendasi Produk Toren Air EXCEL",
        "itemListOrder": "https://schema.org/ItemListOrderAscending",
        "numberOfItems": 6,
        "itemListElement": [
          { "@type": "ListItem", "position": 1, "name": "Tangki Air EXCEL - Crystal Series | Roto", "url": "https://www.grahaexcel.com/product/tangki-air-crystal-series-roto" },
          { "@type": "ListItem", "position": 2, "name": "Tangki Air EXCEL - Pop Series | Roto", "url": "https://www.grahaexcel.com/product/tangki-air-pop-series-roto" },
          { "@type": "ListItem", "position": 3, "name": "Tangki Air EXCEL - Classic Series | Roto", "url": "https://www.grahaexcel.com/product/tangki-air-classic-series-roto" },
          { "@type": "ListItem", "position": 4, "name": "Tangki Total Kuras / Total Drain | Roto", "url": "https://www.grahaexcel.com/product/tangki-total-kuras-total-drain-roto" },
          { "@type": "ListItem", "position": 5, "name": "Tangki Air Sehat | Blow Series", "url": "https://www.grahaexcel.com/product/tangki-air-sehat-blow" },
          { "@type": "ListItem", "position": 6, "name": "TANGKI STAINLESS", "url": "https://www.grahaexcel.com/product/tangki-stainless" }
        ]
      }
    }
  ]
}
</script>
<style>
    .Hero h1{
margin-bottom: 25px !important;
    }
.Hero li{
  font-size: 12px; /* Default for mobile */
  line-height: 18px;
  margin-bottom: 25px !important;
}

@media (min-width: 992px) { /* Bootstrap "lg" breakpoint — desktop */
.Hero h1{
        max-width:60%;
        margin-bottom: 35px !important;
        font-size: 32px;
}
  .Hero li{
    font-size: 20px;
    line-height: 24px;
    margin-bottom:35px !important;
  }
  .Hero h2{
    max-width: 65%;
  }
}
</style> 

@endsection

@section('content')
<div id="content" class="main-content-wrapper">
                <div class="banner" style="position: relative; overflow: hidden;">
                    <div class="Hero" style="position: relative; width: 100%; height: 500px;">
                        <a href="https://www.grahaexcel.com/products" class="w-100" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; z-index: 1;">
                            <img class="large-img d-block w-100" src="https://www.grahaexcel.com/storage/files/1/toren-air-excel.jpg" alt="Banner 1" style="width: 100%; height: 100%; object-fit: cover; display: block;">
                            <img class="small-img w-100" src="https://www.grahaexcel.com/storage/files/1/toren-air-excel-mobile.jpg" alt="Banner 1" style="width: 100%; height: 100%; object-fit: cover; display: none;">
                        </a>
                        <!-- Black overlay for better text readability -->
                        <div class="overlay" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.2); z-index: 2;"></div>
                        <div class="caption" style="position: absolute; top: 50%; left: 5%; transform: translateY(-50%); z-index: 3; text-align: left; color: white;max-width: 60%;">
                            <h1 ><span style="color: rgb(255, 255, 255); "><strong>Toren Air EXCEL  - <br/>Solusi Tandon Air & Tangki Air Sehat untuk Rumah & Bisnis dengan Standard SNI, FDA,dan JIS</strong></span></h1>
                            <h2 style="font-weight:700; font-size: 18px; margin-bottom: 20px;"><!-- Bootstrap list-unstyled to remove default bullets -->
                               
    <ul class="list-unstyled " style="color: #FFF;font-weight:400;">
        <li class="d-flex align-items-start mb-3">
           
            <span > Bersertifikasi <strong>SNI, FDA & JIS.</strong></span>
        </li>
        <li class="d-flex align-items-start mb-3">
            
            <span><strong>2X Lebih Kuat, 2X Lebih Sehat, Lebih Aman, Higienis, & Terpercaya</strong> untuk kebutuhan air bersih rumah tangga maupun usaha Anda</span>
        </li>
    </ul></h2>
                            
                        </div>
                    </div>
                </div>

                <style>
                   @media (max-width: 768px) {
                        .large-img {
                            display: none !important;
                        }
                        .small-img {
                            display: block !important;
                        }
                        .caption {
                          position:relative !important;
                            left: 50% !important;
                            transform: translate(-50%, -50%) !important;
                           
                            max-width: 90% !important;
                        }
                        .caption h1 {
                            font-size: 18px !important;
                        }
                        .caption h2 {
                            font-size: 24px !important;
                        }
                        .Hero {
                           
                        }
                    }
                    
                    @media (min-width: 769px) {
                        .large-img {
                            display: block !important;
                        }
                        .small-img {
                            display: none !important;
                        }
                    }
                </style>
    <section class="about-1" style="padding-bottom:0px;">
        <div class="container">
            <div class="row">
              <div class="col-md-6 m-auto p-5" style="margin-bottom: 0px !important;    padding-bottom: 0px !important;">
                      <h2 style="font-size: 24px; text-transform: uppercase; font-weight: 600; margin-bottom: 20px;">GRAHAEXCEL Menghadirkan Tangki Air Excel - Pilihan Terbaik Untuk Rumah Tangga dan Industri di Indonesia</h2>
                 

              </div>
              <div class="col-md-6 m-auto p-5"  style="margin-bottom: 0px !important;    padding-bottom: 0px !important;">
              </div>
            </div>
            <div class="row">
                <div class="col-md-6 m-auto p-5 order-2 order-md-1"  style="margin-top: 0px !important;    padding-top: 10px !important;">
                    
   <p>Masalah yang sering terjadi pada toren air biasa adalah <strong>air tercemar, berlumut, mudah bocor, atau rusak</strong> karena menggunakan bahan daur ulang yang tidak tahan panas dan hujan. Banyak tangki juga <strong>tidak memenuhi standar kesehatan</strong>, sehingga kualitas air tidak aman untuk dipakai.</p>
   <p><strong>Toren Air EXCEL hadir sebagai solusi.</strong><br/>Dengan <strong>Sertifikasi SNI, FDA, dan JIS</strong>, serta material <strong>Non-BPA</strong> yang aman untuk kesehatan, EXCEL menjaga air tetap higienis, sehat, dan berkualitas. Dibuat dari material pilihan yang tahan cuaca, EXCEL terbukti <strong>2x lebih kuat, 2x lebih higienis, anti bocor, dan awet digunakan dalam jangka panjang.</strong></p>
   <p>Cocok untuk kebutuhan <strong> rumah tangga maupun bisnis</strong>, Tangki Air EXCEL memastikan Anda selalu memiliki penampungan air bersih yang aman dan terpercaya, tanpa khawatir akan risiko kesehatan.</p>
    <ul class="list-unstyled mt-4">
        <li class="d-flex align-items-start mb-2">
           
            <span><strong>Tangki Air EXCEL = Non-BPA, 2x lebih kuat, 2x lebih sehat, aman untuk keluarga!</strong></span>
        </li>
    </ul>

                </div>
                <div class="col-md-6 p-0 order-1 order-md-2">
                    
                    <img src="https://www.grahaexcel.com/storage/files/1/tandon-air-excel.jpg" alt="Tangki Excel di Pabrik Grahaexcel">
                </div>
            </div>
        </div>
    </section>
    <section class="about-2">
        <div class="container">
            <div class="row">
                <div class="col-md-6 p-0">
                    <br>
                    <img src="https://www.grahaexcel.com/assets/web/img/KENAPA-MEMILIH-TANGKI-EXCEL.webp" alt="Mengapa Tangki Grahaexcel">
                </div>
                <div class="col-md-6 m-auto p-5">
                     <h2 class="h5 mt-5 fw-bold ">Rahasia Kenapa Toren Air Excel Jadi Pilihan #1 Ribuan Rumah & Bisnis Di Indonesia</h2>
    <ul class="list-unstyled mt-4">
        <li class="d-flex align-items-start mb-3">
            <i class="bi bi-check2-circle " style="font-size: 1em; font-weight: bold; margin-right: 0.5rem; color:black"></i>
            <span><strong>Aman untuk kesehatan</strong> – Terbuat dari material premium <strong>Non-BPA</strong> dan bersertifikat <strong>SNI, FDA, & JIS</strong>, menjamin air tetap higienis, sehat, dan bebas kontaminasi.</span>
        </li>
        <li class="d-flex align-items-start mb-3">
            <i class="bi bi-check2-circle " style="font-size: 1em; font-weight: bold;  margin-right: 0.5rem;color:black"></i>
            <span><strong>Kuat & tahan lama</strong> – Dirancang dengan teknologi modern, <strong>bebas bocor, bebas retak, dan tahan segala cuaca</strong>, serta didukung <strong>garansi service hingga 20 tahun.</strong></span>
        </li>
        <li class="d-flex align-items-start mb-3">
            <i class="bi bi-check2-circle " style="font-size: 1em; font-weight: bold;  margin-right: 0.5rem;color:black"></i>
            <span><strong>Stylish & trendy</strong> – Tersedia dengan desain modern dan <strong>varian warna menarik</strong>, untuk menambah estetika desain dan arsitektur rumah maupun bangunan Anda.</span>
        </li>
        <li class="d-flex align-items-start mb-3">
            <i class="bi bi-check2-circle" style="font-size: 1em; font-weight: bold;  margin-right: 0.5rem;color:black"></i>
            <span><strong>Fleksibilitas & varian ukuran lengkap</strong> – Cocok untuk kebutuhan <strong>rumah tangga, restoran, hotel, pabrik, hingga proyek industri besar</strong>, semua bisa diandalkan.</span>
        </li>
    </ul>

    <h3 class="h6 mt-5 fw-bold " style="font-size: 18px;font-weight:bold;">Tiga Pilihan Tangki Air EXCEL :</h3>
    <ul class="list-unstyled mt-4">
        
        <li class="d-flex align-items-start mb-3">

            <i class="bi bi-check2-circle" style="font-size: 1em; font-weight: bold;  margin-right: 0.5rem;color:black"></i>
           <span> <strong >BLOW Series</strong> -Didesain dengan teknologi terbaru, <strong>2x lebih kuat & 2x lebih sehat</strong>, tahan lama, anti bocor, dan lebih higienis. Pilihan tepat bagi yang mengutamakan <strong>kualitas premium.</strong></span>
        </li>
        
        <li class="d-flex align-items-start mb-3">
            <i class="bi bi-check2-circle" style="font-size: 1em; font-weight: bold;  margin-right: 0.5rem;color:black"></i>
            <span><strong >ROTO Series</strong>  - Hadir dengan beragam <strong>pilihan warna stylish</strong>, higienis dan tahan lama. Variasi kapasitas hingga 22.500 liter, Cocok untuk<strong> kapasitas besar dengan fleksibilitas gaya </strong>sesuai selera.</span>
        </li>
        <li class="d-flex align-items-start mb-3">
            <i class="bi bi-check2-circle" style="font-size: 1em; font-weight: bold;  margin-right: 0.5rem;color:black"></i>
            <span><strong >STAINLESS STEEL Series</strong>- Terbuat dari bahan <strong> premium food grade AISI 304</strong>, anti karat & anti lumut, lebih higienis, dan aman untuk menyimpan air PAM maupun minyak. Tersedia pilihan <strong>dengan kaki penyangga atau tanpa kaki</strong>, sesuai kebutuhan Anda.</span>
        </li>
    </ul>
                    
                </div>
                
            </div>
        </div>
    </section>
    <section class="home-product">
        <div class="container">
            <h2 class="text-center" style="font-size: 24px; text-transform: uppercase; font-weight: 600; margin-bottom: 20px;">Rekomendasi Produk Toren Air Terbaik EXCEL - Lebih Sehat, Kuat, dan Bebas BPA</h2>
            <div class="row">
                
                <div class="col-xl-4 col-lg-4 col-sm-6 mb--40 mb-md--30">
                    <div class="airi-product">
                        <div class="product-inner">
                            <figure class="product-image">
                                <div class="product-image--holder">
                                    <a href="https://www.grahaexcel.com/product/tangki-air-crystal-series-roto">
                                        <img src="https://www.grahaexcel.com/assets/web/img/Tangki-Air-Crystal-Series.webp" alt="Tangki Air Crystal Series" class="single-image">
                                    </a>
                                </div>
                            </figure>
                            <div class="product-info">
                                <h3 class="product-title">
                                        <a href="https://www.grahaexcel.com/product/tangki-air-crystal-series-roto">Tangki Air EXCEL - Crystal Series | Roto</a>
                                </h3>
                                <span class="product-price-wrapper">
                                    <p>Solusi penampungan air bersih yang lebih higienis dan sehat. Tersedia 5 warna pilihan dengan corak kristal dan batu alam. Tentunya dengan garansi 20 tahun, bebas lumut, aman untuk kesehatan, dan cocok untuk konsep rumah jenis apapun. Kapasitas 250 liter - 2000 liter.</p>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-xl-4 col-lg-4 col-sm-6 mb--40 mb-md--30">
                    <div class="airi-product">
                        <div class="product-inner">
                            <figure class="product-image">
                                <div class="product-image--holder">
                                    <a href="https://www.grahaexcel.com/product/tangki-air-pop-series-roto">
                                        <img src="https://www.grahaexcel.com/assets/web/img/Tangki-Air-Pop-Series.webp" alt="Tangki Air Pop Series" class="single-image">
                                    </a>
                                </div>
                            </figure>
                            <div class="product-info">
                                <h3 class="product-title">
                                        <a href="https://www.grahaexcel.com/product/tangki-air-pop-series-roto">Tangki Air EXCEL - Pop Series | Roto</a>
                                </h3>
                                <span class="product-price-wrapper">
                                    <p>Tandon air/ toren air Pop Series tersedia dengan 6 warna pilihan populer yang tentunya trendy dan cocok untuk konsep hunian modern. Tentunya dengan garansi 20 tahun, bebas lumut, dan aman untuk kesehatan. Kapasitas 250 liter - 2000 liter.</p>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-xl-4 col-lg-4 col-sm-6 mb--40 mb-md--30">
                    <div class="airi-product">
                        <div class="product-inner">
                            <figure class="product-image">
                                <div class="product-image--holder">
                                    <a href="https://www.grahaexcel.com/product/tangki-air-kimia-silinder-roto">
                                        <img src="https://www.grahaexcel.com/assets/web/img/Tangki-Air-Classic-Series.webp" alt="Tangki Air dan Kimia Excel" class="single-image">
                                    </a>
                                </div>
                            </figure>
                            <div class="product-info">
                                <h3 class="product-title">
                                    <a href="https://www.grahaexcel.com/product/tangki-air-kimia-silinder-roto">Tangki Air EXCEL - Classic Series | Roto</a>
                                </h3>
                                <span class="product-price-wrapper">
                                    <p>Toren air EXCEL dengan warna klasik yang identik dengan warna oranye dan biru. Sekarang dengan teknologi bebas lumut, garansi 20 tahun, dan tentunya aman untuk kesehatan. Tersedia juga tangki untuk kebutuhan penampungan kimia dengan garansi terbatas. Kapasitas 250 liter - 22.500 liter. </p>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                
                
                <div class="col-xl-4 col-lg-4 col-sm-6 mb--40 mb-md--30">
                    <div class="airi-product">
                        <div class="product-inner">
                            <figure class="product-image">
                                <div class="product-image--holder">
                                    <a href="https://www.grahaexcel.com/product/tangki-air-total-drain">
                                        <img src="https://www.grahaexcel.com/assets/web/img/Tangki-Air-Total-Drain.webp" alt="Tangki Total Kuras Total Drain" class="single-image">
                                    </a>
                                </div>
                            </figure>
                            <div class="product-info">
                                <h3 class="product-title">
                                        <a href="https://www.grahaexcel.com/product/tangki-air-total-drain">Tangki Total Kuras, Total Drain | Roto</a>
                                </h3>
                                <span class="product-price-wrapper">
                                    <p>Solusi menguras endapan kotoran lebih maksimal dengan desain khusus di bawah permukaan toren dan tentunya menjadikan perawatan tangki lebih mudah. Tentunya dengan garansi 20 tahun, bebas lumut, dan aman untuk kesehatan. Kapasitas 550 liter - 2100 liter.  </p>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-xl-4 col-lg-4 col-sm-6 mb--40 mb-md--30">
                    <div class="airi-product">
                        <div class="product-inner">
                            <figure class="product-image">
                                <div class="product-image--holder">
                                    <a href="https://www.grahaexcel.com/product/tangki-air-sehat-minum">
                                        <img src="https://www.grahaexcel.com/assets/web/img/Tangki-Air-Blow.webp" alt="Tangki Air Blow" class="single-image">
                                    </a>
                                </div>
                            </figure>
                            <div class="product-info">
                                <h3 class="product-title">
                                        <a href="https://www.grahaexcel.com/product/tangki-air-sehat-minum">Tangki Air Sehat | Blow Series</a>
                                </h3>
                                <span class="product-price-wrapper">
                                    <p>2x lebih kuat, 2x lebih sehat = awet untuk waktu yang lebih lama. Tangki air Sehat dari EXCEL yang menggunakan teknologi <i>blow moulding</i>. Satu-satunya di Indonesia dengan standard SNI. Kini tersedia di 3 warna pilihan dan kapasitas 250 liter- 3000 liter.</p>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                
              <!-- 10-->
                <div class="col-xl-4 col-lg-4 col-sm-6 mb--40 mb-md--30">
                    <div class="airi-product">
                        <div class="product-inner">
                            <figure class="product-image">
                                <div class="product-image--holder">
                                    <a href="https://www.grahaexcel.com/product/tangki-air-bawah-tanah-tanam-pendam">
                                        <img src="https://www.grahaexcel.com/storage/files/1/tangki-air-tanam.jpg"" alt="Tangki Air Stainless Steel Excel" class="single-image">
                                    </a>
                                </div>
                            </figure>
                            <div class="product-info">
                                <h3 class="product-title">
                                    <a href="https://www.grahaexcel.com/product/tangki-air-bawah-tanah-tanam-pendam">Tangki Tanam / Pendam | Roto</a>
                                </h3>
                                <span class="product-price-wrapper">
                                    <p>Tangki EXCEL hadir dengan desain khusus untuk pemasangan bawah tanah. Dilengkapi teknologi bebas lumut, aman untuk kesehatan, dan dapat digunakan untuk menampung air maupun bahan kimia. Tersedia tipe langsung tanam atau perlu cor beton, dengan kapasitas 550 liter – 2.500 liter.</p>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- 10-->
                <div class="col-xl-4 col-lg-4 col-sm-6 mb--40 mb-md--30">
                    <div class="airi-product">
                        <div class="product-inner">
                            <figure class="product-image">
                                <div class="product-image--holder">
                                    <a href="https://www.grahaexcel.com/category/hidran-umum">
                                        <img src="https://www.grahaexcel.com/storage/files/1/tangki-air-hidran-umum.jpg" alt="Tangki Hidran Umum Excel" class="single-image">
                                    </a>
                                </div>
                            </figure>
                            <div class="product-info">
                                <h3 class="product-title">
                                    <a href="https://www.grahaexcel.com/category/hidran-umum">Tangki Hidran Umum | Roto</a>
                                </h3>
                                <span class="product-price-wrapper">
                                    <p>Hidran umum merupakan tangki air (program pemerintah) untuk menyediakan air bersih ke korban bencana dan pelosok desa. Tangki air ini bisa disusun (stack) untuk mempermudah pada saat pengiriman/ transportasi.</p>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- 11-->
                <div class="col-xl-4 col-lg-4 col-sm-6 mb--40 mb-md--30">
                    <div class="airi-product">
                        <div class="product-inner">
                            <figure class="product-image">
                                <div class="product-image--holder">
                                   <a href="https://www.grahaexcel.com/category/tangki-air-stainless">
                                        <img src="https://www.grahaexcel.com/assets/web/img/TANGKI-AIR-STAINLESS-STEEL.webp" alt="Tangki Air Stainless Steel Excel" class="single-image">
                                    </a>
                                </div>
                            </figure>
                            <div class="product-info">
                                <h3 class="product-title">
                                    <a href="https://www.grahaexcel.com/category/tangki-air-stainless">Tangki Stainless</a>
                                </h3>
                                <span class="product-price-wrapper">
                                    <p>Tandon air Stainless Steel Excel dibuat dari bahan dasar stainless steel dengan grade terbaik yaitu AISI 304 (8% Nickel). Memiliki ketahanan korosi paling tinggi dibanding tangki air stainless merek lain di Indonesia. Tangki air khusus untuk penyimpanan air bersih (PAM) dan minyak.</p>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- 12-->
                <div class="col-xl-4 col-lg-4 col-sm-6 mb--40 mb-md--30">
                    <div class="airi-product">
                        <div class="product-inner">
                            <figure class="product-image">
                                <div class="product-image--holder">
                                    <a href="http://grahaexcel.com/product/tangki-bioseptic">
                                        <img src="https://www.grahaexcel.com/storage/files/1/tangki-air-bioseptik-grahaexcel.jpg" alt="Tangki Hidran Umum Excel" class="single-image">
                                    </a>
                                </div>
                            </figure>
                            <div class="product-info">
                                <h3 class="product-title">
                                    <a href="http://grahaexcel.com/product/tangki-bioseptic">Tangki Excel Bioseptik | Blow Series</a>
                                </h3>
                                <span class="product-price-wrapper">
                                    <p>Satu-satunya di Indonesia dan di Dunia - Septic tank dengan teknologi blow moulding, menjadikan tangki 2x lebih kuat dan 5 tahap filtrasi untuk mengurai lebih maksimal. Hasilnya penguraian maksimal dan kekuatan optimal. Kapasitas 1000 liter dan 1500 liter.</p>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                    
                

                

                

            </div>
        </div>
    </section>

<style>
#FAQ ul {
    list-style-type: disc;
    padding-left: 20px;
}

#FAQ li {
    margin-bottom: 15px;
}

ul.feature-list{
    margin-top: 10px;
}

ul.feature-list li {
    margin-bottom: 18px;
}

/* Allow FAQ button text to wrap across lines */
#FAQ .btn{
    background-color: #fff !important;
    white-space: normal !important; /* override Bootstrap btn white-space: nowrap */
    word-wrap: break-word;           /* legacy support */
    overflow-wrap: anywhere;         /* modern wrapping for long words */
    text-align: left;
    line-height: 1.5em;
}
</style>


    
<section class="py-5" style="background: #F0F0F0;">
  <div class="container">
    <div class="row">
      <!-- Column 1 -->
      <div class="col-6 col-md-6 col-12 mb-4 mb-md-0">
        <div class="p-4 h-100 bg-white rounded shadow-sm">
          <!-- Place your content here -->
          <h3 style="font-size:1.8em;">Sertifikasi dan Standard Mutu Tangki Air Grahaexcel </h3>
           <ul class="feature-list">
        <li>
            <strong>SNI (Standar Nasional Indonesia):</strong> 
            Memastikan produk memenuhi persyaratan nasional terkait mutu dan keamanan.
        </li>
        <li>
            <strong>JIS (Japanese Industrial Standard):</strong>
            Standar industri dari Jepang yang menegaskan kualitas manufaktur dan keandalan produk.
        </li>
        <li>
            <strong>FDA-USA (Food and Drug Association - USA):</strong>
            Sertifikasi dari Amerika Serikat yang menjamin keamanan serta higienitas produk, khususnya untuk tangki air dan kimia.
        </li>
    </ul>
    <img src="https://www.grahaexcel.com/storage/files/1/logo_sertifikasi.svg" alt="logo_sertifikasi_toren_air" class="img-fluid">
        </div>
      </div>
       <!-- Column 2 -->
      <div class="col-6 col-md-6 col-12 mb-4 mb-md-0">
        <div class="p-4 h-100 bg-white rounded shadow-sm">
          <!-- Place your content here -->
                 
<h3 style="text-align: left;font-size: 25px;">Garansi dan Layanan Pelanggan</h3>
<p><strong>Garansi Produk:</strong><br>
Produk-produk unggulan Tangki Air dilengkapi dengan <strong> masa garansi hingga 20 tahun</strong> yang mencakup kerusakan akibat cacat produksi maupun material.</p>
<p><strong>Layanan Purna Jual Produk:</strong><br>Grahaexcel menyediakan layanan purna jual untuk konsultasi teknis, klaim garansi, serta bantuan instalasi dan perawatan produk, sehingga pelanggan mendapatkan dukungan maksimal setelah pembelian.</p>
        <p class="mb-0"><strong>Hubungi Customer Care untuk Keterangan Lebih Lanjut</strong>
            </p><ul style="text-align: left;list-style-type:none;padding-left: 0px;">
    <li style="margin-bottom: 0px !important;"><a href="tel:+62216393394">+62 21 – 6393394</a> (hotline).</li>
    <li style="margin-bottom: 0px !important;">+62 21 – 6393396 (fax).</li>
    <li style="margin-bottom: 0px !important;"><a href="mailto:info@grahaexcel.com">info@grahaexcel.com</a></li>
    <li style="margin-bottom: 0px !important;">Monday – Friday 8 AM – 4.30 PM (WIB), Saturday 8 AM – 2 PM (WIB)</li>
  </ul>
        <p></p>  
       <p class="mb-0">WhatsApp Customer Service: <a href="https://wa.me/6281399808057">0813-9980-8057</a>
       </p>                 
           </div>
      </div>
   
      </div>
    </div>
  </div>
</section>
<section id="FAQ">
    <div class="container my-5">
        <div class="row g-5 align-items-stretch">
            <!-- Left Column: Accordion -->
         <!-- FAQ Section -->
    <div class="mt-5 col-md-7"">
        <h2 class="h4 fw-bold mb-4">FAQ - Toren Air EXCEL</h2>
        <div class="accordion" id="faqExcelAccordion">

            <!-- Q1 -->
            <div class="card rounded-3 mb-3">
                <div class="card-header" id="headingOne">
                    <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left collapsed fw-bold text-dark" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                            Kenapa Toren Air EXCEL dipercaya banyak rumah dan bisnis?
                        </button>
                    </h2>
                </div>
                <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#faqExcelAccordion">
                    <div class="card-body">
                        <p>Karena Non-BPA, bersertifikat SNI, FDA, JIS, higienis, kuat, dan bergaransi hingga 20 tahun.</p>
                    </div>
                </div>
            </div>

            <!-- Q2 -->
            <div class="card rounded-3 mb-3">
                <div class="card-header" id="headingTwo">
                    <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left collapsed fw-bold text-dark" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Bagaimana cara menentukan kapasitas Tandon Air EXCEL yang tepat?
                        </button>
                    </h2>
                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#faqExcelAccordion">
                    <div class="card-body">
                        <p>Rumah tangga kecil biasanya cukup 300–500 liter, keluarga besar 1.000 liter ke atas, sedangkan bisnis & industri bisa sampai 10.000 liter.</p>
                    </div>
                </div>
            </div>

            <!-- Q3 -->
            <div class="card rounded-3 mb-3">
                <div class="card-header" id="headingThree">
                    <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left collapsed fw-bold text-dark" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Apakah Tandon Air EXCEL aman untuk air minum?
                        </button>
                    </h2>
                </div>
                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#faqExcelAccordion">
                    <div class="card-body">
                        <p>Ya. Semua Tangki Air EXCEL dibuat dari material premium Non-BPA food grade, sehingga air tetap sehat, higienis, dan layak konsumsi.</p>
                    </div>
                </div>
            </div>

            <!-- Q4 -->
            <div class="card rounded-3 mb-3">
                <div class="card-header" id="headingFour">
                    <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left collapsed fw-bold text-dark" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            Apakah benar dulu warna gelap lebih baik untuk tangki air?
                        </button>
                    </h2>
                </div>
                <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#faqExcelAccordion">
                    <div class="card-body">
                        <p>Dulu iya. Tapi sekarang semua Tandon Air EXCEL sudah dilengkapi teknologi Deluxe Bright Tech untuk mencegah cahaya masuk dan melindungi air dari lumut, tanpa harus terbatas pada warna gelap.</p>
                    </div>
                </div>
            </div>

            <!-- Q5 -->
            <div class="card rounded-3 mb-3">
                <div class="card-header" id="headingFive">
                    <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left collapsed fw-bold text-dark" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                            Apa yang membuat Tandon Air EXCEL lebih awet?
                        </button>
                    </h2>
                </div>
                <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#faqExcelAccordion">
                    <div class="card-body">
                        <p>Material premium, dinding tebal, teknologi produksi modern, serta mudah dirawat. EXCEL dirancang agar tahan cuaca, anti bocor, dan awet puluhan tahun.</p>
                    </div>
                </div>
            </div>
            
            <!-- Q6 -->
            <div class="card rounded-3 mb-3">
                <div class="card-header" id="headingSix">
                    <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left collapsed fw-bold text-dark" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                            Apa keuntungan memilih Tandon Air EXCEL dengan garansi panjang?
                        </button>
                    </h2>
                </div>
                <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#faqExcelAccordion">
                    <div class="card-body">
                        <p>Garansi resmi hingga 20 tahun menunjukkan kualitas tinggi, plus didukung layanan purna jual EXCEL yang terpercaya.</p>
                    </div>
                </div>
            </div>

            <!-- Q7 -->
            <div class="card rounded-3 mb-3">
                <div class="card-header" id="headingSeven">
                    <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left collapsed fw-bold text-dark" type="button" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                            Bagaimana cara merawat Tandon Air EXCEL agar awet?
                        </button>
                    </h2>
                </div>
                <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#faqExcelAccordion">
                    <div class="card-body">
                        <p>Cukup bersihkan minimal 2 kali setahun, pasang di tempat yang rata & kokoh, dan gunakan penutup rapat agar bebas dari debu & serangga.</p>
                    </div>
                </div>
            </div>

            <!-- Q8 -->
            <div class="card rounded-3 mb-3">
                <div class="card-header" id="headingEight">
                    <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left collapsed fw-bold text-dark" type="button" data-toggle="collapse" data-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                            Apa saja jenis-jenis bahan dalam pembuatan Toren Air EXCEL?
                        </button>
                    </h2>
                </div>
                <div id="collapseEight" class="collapse" aria-labelledby="headingEight" data-parent="#faqExcelAccordion">
                    <div class="card-body">
                        <ul>
                            <li><strong>ROTO Series EXCEL</strong> →  Menggunakan plastik Polyethylene (PE)</li>
                            <li><strong>BLOW Series EXCEL</strong> →  Menggunakan plastik HMW-High Density Polyethylene (HDPE)</li>
                            <li><strong>Stainless Steel Series EXCEL</strong> →  Menggunakan stainless steel AISI 304</li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <!-- Q9 -->
            <div class="card rounded-3 mb-3">
                <div class="card-header" id="headingNine">
                    <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left collapsed fw-bold text-dark" type="button" data-toggle="collapse" data-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                            Apa bedanya Tandon Air EXCEL ROTO Series dan BLOW Series?
                        </button>
                    </h2>
                </div>
                <div id="collapseNine" class="collapse" aria-labelledby="headingNine" data-parent="#faqExcelAccordion">
                    <div class="card-body">
                        <ul>
                            <li><strong>BLOW Series EXCEL</strong> →  Premium, 2x lebih kuat & 2x lebih sehat, lebih higienis.</li>
                            <li><strong>ROTO Series EXCEL</strong> →  Tetap kuat & higienis, dengan varian warna dan kapasitas beragam.</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Q10 -->
            <div class="card rounded-3 mb-3">
                <div class="card-header" id="headingTen">
                    <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left collapsed fw-bold text-dark" type="button" data-toggle="collapse" data-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                            Mengapa harus memilih Tandon Air EXCEL dibanding merek lain?
                        </button>
                    </h2>
                </div>
                <div id="collapseTen" class="collapse" aria-labelledby="headingTen" data-parent="#faqExcelAccordion">
                    <div class="card-body">
                        <p>Karena EXCEL menggabungkan keamanan (Non-BPA & bersertifikasi internasional), kekuatan (2x lebih kuat), higienitas (2x lebih sehat), desain stylish, varian lengkap, serta garansi 20 tahun—solusi praktis dan terpercaya.</p>
                    </div>
                </div>
            </div>

        </div>
    </div>

            <!-- Right Column: Decorative Image -->
            <div class="col-md-5">
                <div class="right-col h-100 d-flex flex-column justify-content-center align-items-center">
                    <div class="text-center">
                        <img src="https://www.grahaexcel.com/assets/web/img/new/hubungi-excel.jpg" alt="Hubungi Excel" class="img-fluid">
                        <div class="mt-4">
                          <div class="p-4 h-100 bg-white rounded shadow-sm">
          <!-- Place your content here -->
          <h3 style="font-size: 22px;">Solusi Air Bersih di Rumah & Bisnis Anda!</h3>

<p>Dapatkan <strong>informasi lengkap & penawaran spesial</strong> untuk <strong>Toren Air EXCEL</strong> – bebas BPA, higienis, bergaransi resmi hingga 20 tahun, dengan <strong>  konsultasi gratis & pengiriman cepat.</strong></p>
                     </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
        </div>
@endsection