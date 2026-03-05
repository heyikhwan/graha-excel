@extends('pages.layouts.app')

@section('meta_tag')
    <!-- SEO Meta Tags -->
    <meta name="keywords" content="atap upvc">
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
      "@type": "WebPage",
      "@id": "https://www.grahaexcel.com/atap-upvc#webpage",
      "name": "Atap UPVC GrahaExcel – Solusi Atap Kuat & Tahan Lama",
      "url": "https://www.grahaexcel.com/atap-upvc",
      "description": "Atap UPVC berkualitas, sejuk & tahan lama. Tersedia tipe Skydeck, Exceltech, EliteRoof untuk rumah, pabrik & ruko. Bergaransi hingga 15 tahun.",
      "inLanguage": "id-ID",
      "publisher": {
        "@id": "https://www.grahaexcel.com#organization"
      },
      "mainContentOfPage": {
        "@id": "https://www.grahaexcel.com/atap-upvc#productlist"
      }
    },
    {
      "@type": "Organization",
      "@id": "https://www.grahaexcel.com#organization",
      "name": "PT GRAHAEXCEL PLASTINDO",
      "url": "https://www.grahaexcel.com",
      "contactPoint": {
        "@type": "ContactPoint",
        "telephone": "+6281399808057",
        "contactType": "Sales and Customer Service"
      }
    },
    {
      "@type": "ItemList",
      "@id": "https://www.grahaexcel.com/atap-upvc#productlist",
      "name": "Rekomendasi Produk GrahaExcel untuk Hunian dan Komersial",
      "description": "Daftar berbagai jenis produk GrahaExcel, termasuk Atap UPVC Skydeck, Exceltech, EliteRoof, dan produk pendukung lainnya.",
      "itemListElement": [
        {
          "@type": "ListItem",
          "position": 1,
          "name": "Atap uPVC Double Layer SKYDECK"
        },
        {
          "@type": "ListItem",
          "position": 2,
          "name": "Atap uPVC Semitransparan SKYDECK"
        },
        {
          "@type": "ListItem",
          "position": 3,
          "name": "Atap uPVC Rumah EliteRoof"
        },
        {
          "@type": "ListItem",
          "position": 4,
          "name": "Atap uPVC Single Layer ExcelTech"
        },
        {
          "@type": "ListItem",
          "position": 5,
          "name": "Atap Transparan ExcelTech"
        },
        {
          "@type": "ListItem",
          "position": 6,
          "name": "Atap Gelombang EXCEL B"
        },
        {
          "@type": "ListItem",
          "position": 7,
          "name": "Atap Gelombang EXCELROOF"
        },
        {
          "@type": "ListItem",
          "position": 8,
          "name": "Atap Gelombang GLASSROOF"
        },
        {
          "@type": "ListItem",
          "position": 9,
          "name": "Lembaran Penutup Pagar – PP"
        }
      ]
    },
    {
      "@type": "BreadcrumbList",
      "@id": "https://www.grahaexcel.com/atap-upvc#breadcrumb",
      "itemListElement": [
        {"@type": "ListItem", "position": 1, "name": "Beranda", "item": "https://www.grahaexcel.com"},
        {"@type": "ListItem", "position": 2, "name": "Semua Produk", "item": "https://www.grahaexcel.com/products"},
        {"@type": "ListItem", "position": 3, "name": "Atap UPVC", "item": "https://www.grahaexcel.com/atap-upvc"}
      ]
    },
    {
      "@type": "FAQPage",
      "@id": "https://www.grahaexcel.com/page/harga-dan-kualitas-tangki-air#faqpage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "Apa Itu Atap UPVC?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Atap UPVC (Unplasticized Polyvinyl Chloride) adalah material atap modern yang memiliki keunggulan isolasi panas dan peredam suara yang efektif, serta tahan terhadap karat, cuaca ekstrem, dan perubahan suhu."
          }
        },
        {
          "@type": "Question",
          "name": "Apa Keunggulan Utama Atap UPVC SKYDECK Dibanding Atap Konvensional?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Keunggulan utama termasuk isolasi panas yang bisa menurunkan suhu ruangan hingga 6°C, peredam suara hujan hingga 27%, tahan lama, anti karat, dan bebas bahan berbahaya (aman untuk kesehatan)."
          }
        },
        {
          "@type": "Question",
          "name": "Apakah Atap UPVC SKYDECK Tahan Panas Dan Sinar UV?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Ya, atap UPVC SKYDECK dibuat dari material kualitas tinggi dan dilengkapi lapisan pelindung UV yang membuatnya tahan terhadap panas dan sinar UV."
          }
        },
        {
          "@type": "Question",
          "name": "Apakah Atap Ini Bisa Meredam Suara Hujan?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Ya, teknologi double layer pada Atap UPVC Skydeck dapat meredam suara hujan dan kebisingan lingkungan sekitar hingga 27%."
          }
        }
      ]
    }
  ]
}

</script>

<style>
.Hero .caption h1{
  font-size: 22px; /* Default for mobile */
  line-height: 22px;
  margin-bottom: 5px;
}
.Hero .caption h2 {
  font-size: 12px !important; /* Default for mobile */
  line-height: 14px;
  margin-bottom: 5px;
  padding-top:10px;
}
.Hero{
  height: 270px;
}
@media (min-width: 992px) { /* Bootstrap "lg" breakpoint — desktop */

 .Hero .caption h1{
  font-size: 32px; /* Default for mobile */
  line-height: 50px;
    margin-bottom:75px;
    max-width: 70%;
}
.Hero .caption h2 {
  font-size: 20px!important; /* Default for mobile */
  line-height: 22px;
  margin-bottom: 5px;
  padding-top:0px;
  max-width: 75%;
}
  .Hero{
    height: 500px;
  }

}
</style> 
@endsection

@section('content')
<div id="content" class="main-content-wrapper">
                <div class="banner" style="position: relative; overflow: hidden;">
                    <div class="Hero" style="position: relative; width: 100%; ">
                        <a href="https://www.grahaexcel.com/products" class="w-100" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; z-index: 1;">
                            <img class="large-img d-block w-100" src="https://grahaexcel.com/storage/files/1/atap-upvc-excel.jpeg" alt="Banner 1" style="width: 100%; height: 100%; object-fit: cover; display: block;">
                            <img class="small-img w-100" src="https://grahaexcel.com/storage/files/1/atap-upvc-excel-mobile.jpg" alt="Banner 1" style="width: 100%; height: 100%; object-fit: cover; display: none;">
                        </a>
                        <!-- Black overlay for better text readability -->
                        <div class="overlay" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.2); z-index: 2;"></div>
                        <div class="caption" style="position: absolute; top: 50%; left: 5%; transform: translateY(-50%); z-index: 3; text-align: left; color: white; max-width: 60%;">
                            <h1 style=";"><span style="color: rgb(255, 255, 255); font-weight: normal;"><strong>Atap UPVC EXCEL - Pilihan Tepat untuk Atap Rumah yang Kuat, Sejuk, dan Tahan Lama</strong> 

</span></h1>
                            <h2 style="color:#fff"><!-- Bootstrap list-unstyled to remove default bullets -->
    <strong> Solusi atap rumah modern yang kuat, sejuk, dan tahan lama </strong>, memberikan perlindungan optimal untuk hunian Anda.
</h2>
                            
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
    <section class="about-1"  style="padding-bottom:0px;">
        <div class="container">
          <div class="row">
              <div class="col-md-6 m-auto p-5" style="margin-bottom: 0px !important;    padding-bottom: 10px !important;">
                     <h2 class="text-uppercase font-weight-semibold mb-3" style="font-size: 22px;">
    ATAP UPVC EXCEL – PILIHAN TEPAT UNTUK HUNIAN DAN BANGUNAN KOMERSIAL


      </h2>

              </div>
              <div class="col-md-6 m-auto p-5"  style="margin-bottom: 0px !important;    padding-bottom: 0px !important;">
              </div>
            </div>
            <div class="row">
                <div class="col-md-6 m-auto p-5 order-2 order-md-1"  style="margin-top: 0px !important;    padding-top: 0px !important;">
                     

      <p class="mb-3">
Grahaexcel menghadirkan atap UPVC premium merek skydeck, exceltech, dan eliteroof yang dirancang untuk memberikan kenyamanan maksimal dan perlindungan tahan lama. Cocok untuk berbagai kebutuhan rumah tinggal, ruko, pabrik, gudang, hingga area komersial.
      </p>

      <h3 class="h5 font-weight-bold mt-4">
       Permasalahan akibat pemilihan atap yang kurang tepat:
      </h3>

      <ul class="my-2" style="list-style-type: none; padding-left: 1.5rem; margin-bottom: 0;">
        <li class="d-flex align-items-start mb-3">
          <i class="bi bi-check2-circle" style="font-size: 1em; font-weight: bold;  margin-right: 0.5rem;color:black"></i>
          <span>
          Sirkulasi udara kurang baik, membuat ruangan terasa panas dan pengap.</span>

        </li>
        <li class="d-flex align-items-start mb-3">
          <i class="bi bi-check2-circle" style="font-size: 1em; font-weight: bold;  margin-right: 0.5rem;color:black"></i>
          <span>
          Suara hujan dan bising luar tidak teredam dengan baik.</span>
        </li>
        <li class="d-flex align-items-start mb-3">
          <i class="bi bi-check2-circle" style="font-size: 1em; font-weight: bold;  margin-right: 0.5rem;color:black"></i>
          <span>
          Atap cepat rusak, bocor, berkarat, apalagi saat cuaca ekstrem/ kesalahan pemasangan.</span>
        </li>
        <li class="d-flex align-items-start mb-3">
          <i class="bi bi-check2-circle" style="font-size: 1em; font-weight: bold;  margin-right: 0.5rem;color:black"></i>
          <span>
          Atap konvensional sulit dirawat atau mengandung kandungan berbahaya seperti asbestosis yang berbahaya untuk kesehatan.</span>
        </li>
      </ul>

  

                </div>
                <div  class="col-md-6 p-0 order-1 order-md-2">
                   
                    <img src="http://grahaexcel.com/storage/files/1/atap-upvc-pabrik.jpg" alt="Atap UPVC Excel untuk Pabrik">
                </div>
            </div>
        </div>
    </section>
    <section class="about-2">
        <div class="container">
            <div class="row">
                <div class="col-md-6 p-0">
                    <br>
                    <img src="http://grahaexcel.com/storage/files/1/atap-upvc-pabrik-excel.jpg" alt="Mengapa Atap UPVC Grahaexcel">
                </div>
                <div class="col-md-6 m-auto p-5">
                      <!-- Section Title -->
      <h2 class="h5 mt-5 font-weight-bold ">
        MENGAPA BERALIH KE ATAP UPVC?
      </h2>

      <!-- Intro Paragraph -->


     <!-- Numbered Features -->
<ul class="list-unstyled mt-4">
  <li class="d-flex align-items-start mb-3">
     <i class="bi bi-check2-circle" style="font-size: 1em; font-weight: bold;  margin-right: 0.5rem;color:black"></i>
    <span>
      <strong>Isolasi Panas Efektif</strong> – Rongga udara di atap uPVC bisa menurunkan suhu ruangan hingga 6°C, menjaga rumah dan bangunan tetap sejuk.
    </span>
  </li>

  <li class="d-flex align-items-start mb-3">
     <i class="bi bi-check2-circle" style="font-size: 1em; font-weight: bold;  margin-right: 0.5rem;color:black"></i>
    <span>
      <strong>Peredam Suara Hujan hingga 27%</strong> – Teknologi double layer pada atap UPVC skydeck dapat meredam suara hujan dan kebisingan dari lingkungan sekitar untuk kenyamanan maksimal.
    </span>
  </li>

  <li class="d-flex align-items-start mb-3">
     <i class="bi bi-check2-circle" style="font-size: 1em; font-weight: bold;  margin-right: 0.5rem;color:black"></i>
    <span>
      <strong>Material kualitas tinggi, Tahan Lama &amp; Anti Karat</strong> – Dibuat dari bahan UPVC murni berkualitas tinggi tanpa campuran daur ulang, dilengkapi lapisan pelindung UV yang membuat atap tahan terhadap karat, cuaca ekstrem, dan perubahan suhu.
    </span>
  </li>

  <li class="d-flex align-items-start mb-3">
     <i class="bi bi-check2-circle" style="font-size: 1em; font-weight: bold;  margin-right: 0.5rem;color:black"></i>
    <span>
      <strong>Aman untuk Kesehatan</strong> – Atap UPVC skydeck, exceltech, dan eliteroof bebas dari bahan berbahaya seperti BPA, asbes, dibuat dari material murni sehingga aman untuk kesehatan keluarga.
    </span>
  </li>

  <li class="d-flex align-items-start mb-3">
     <i class="bi bi-check2-circle" style="font-size: 1em; font-weight: bold;  margin-right: 0.5rem;color:black"></i>
    <span>
      <strong>Garansi Resmi hingga 15 Tahun</strong> – Dengan dukungan garansi resmi dari Grahaexcel menjamin daya tahan dan kualitas produk jangka panjang, memberikan rasa aman dan kepercayaan ekstra bagi para pengguna.
    </span>
  </li>
  
</ul>




                    
                </div>
                
            </div>
        </div>
    </section>
    <section class="home-product">
        <div class="container">
            <h2 class="text-center" style="font-size: 24px; text-transform: uppercase; font-weight: 600; margin-bottom: 50px;">REKOMENDASI PRODUK ATAP UPVC EXCEL - PILIHAN TEPAT UNTUK HUNIAN</h2>
            <div class="row">
  <!-- 1 ATAP UPVC DOUBLE LAYER SKYDECK -->
<div class="col-xl-4 col-lg-4 col-sm-6 mb--40 mb-md--30">
  <div class="airi-product">
    <div class="product-inner">
      <figure class="product-image">
        <div class="product-image--holder">
          <a href="https://www.grahaexcel.com/product/atap-upvc-dingin-double-layer-skydeck">
                    <img src="https://www.grahaexcel.com/storage/files/1/atap-upvc-skydeck.jpg" alt="Atap uPVC Double Layer SKYDECK" class="single-image" style="height: 350px;">
           </a>
        </div>
      </figure>
      <div class="product-info">
        <h3 class="product-title">
          <a href="https://www.grahaexcel.com/product/atap-upvc-dingin-double-layer-skydeck">
          Atap uPVC Double Layer SKYDECK
          </a>
        </h3>
        <span class="product-price-wrapper">
            <p>Atap uPVC <strong> layer dengan teknologi peredam panas yang efektif</strong>, membuat suhu ruangan lebih dingin dan nyaman. Bebas BPA, awet, serta cocok untuk hunian modern maupun bangunan komersial.</p>
        </span>
      </div>
    </div>
  </div>
</div>

<!-- 2 ATAP UPVC SEMITRANSPARAN SKYDECK -->
<div class="col-xl-4 col-lg-4 col-sm-6 mb--40 mb-md--30">
  <div class="airi-product">
    <div class="product-inner">
      <figure class="product-image">
        <div class="product-image--holder">
           <a href="https://www.grahaexcel.com/product/atap-upvc-double-layer-semitransparan-skydeck">
          <img src="https://www.grahaexcel.com/storage/files/1/atap-upvc-semitransparan.jpg" alt="Atap uPVC Semitransparan SKYDECK" class="single-image" style="height: 350px;">
           </a>
        </div>
      </figure>
      <div class="product-info">
        <h3 class="product-title"><a href="https://www.grahaexcel.com/product/atap-upvc-double-layer-semitransparan-skydeck">Atap uPVC Semitransparan SKYDECK
</a>

        </h3>
        <span class="product-price-wrapper">
<p>Varian semi transparan dari atap uPVC SKYDECK double layer yang mampu <strong> meneruskan cahaya alami hingga 20%. </strong> Memberikan penerangan optimal di siang hari, tetap sejuk, bebas BPA, dan cocok untuk hunian maupun bangunan komersial modern.</p>        </span>
      </div>
    </div>
  </div>
</div>

<!-- 3 ATAP UPVC RUMAH ELITEROOF -->
<div class="col-xl-4 col-lg-4 col-sm-6 mb--40 mb-md--30">
  <div class="airi-product">
    <div class="product-inner">
      <figure class="product-image">
        <div class="product-image--holder">
          <a href="https://www.grahaexcel.com/product/atap-upvc-dingin-rumah-eliteroof">
          
          <img src="https://www.grahaexcel.com/storage/files/1/atap-upvc-eliteroof.jpg" alt="Atap uPVC Rumah EliteRoof" class="single-image" style="height: 350px;">
          </a>
        </div>
      </figure>
      <div class="product-info">
        <h3 class="product-title"><a href="https://www.grahaexcel.com/product/atap-upvc-dingin-rumah-eliteroof">
          Atap uPVC Rumah EliteRoof</a>
        </h3>
        <span class="product-price-wrapper">
          <p>Atap uPVC dengan <strong> menyerupai genteng tanah liat klasik </strong>. Memberikan tampilan elegan tradisional dengan keunggulan modern: Bebas BPA (aman untuk kesehatan), lebih kuat, tahan lama, dan menjaga ruangan tetap sejuk.</p>
        </span>
      </div>
    </div>
  </div>
</div>

<!-- 4. ATAP UPVC SINGLE LAYER EXCELTECH -->
<div class="col-xl-4 col-lg-4 col-sm-6 mb--40 mb-md--30">
  <div class="airi-product">
    <div class="product-inner">
      <figure class="product-image">
        <div class="product-image--holder">
          <a href="https://www.grahaexcel.com/product/atap-dingin-upvc-single-layer-exceltech">
          <img src="https://www.grahaexcel.com/storage/files/1/atap-upvc-exceltech.jpg" alt="Atap uPVC Single Layer ExcelTech" class="single-image"  style="height: 350px;">
       
          </a>
        </div>
      </figure>
      <div class="product-info">
        <h3 class="product-title"><a href="https://www.grahaexcel.com/product/atap-dingin-upvc-single-layer-exceltech">
          Atap uPVC Single Layer ExcelTech</a>
        </h3>
        <span class="product-price-wrapper">
          <p>Atap uPVC <strong> layer yang kokoh dan lebih ringan</strong>. Bebas BPA, lebih efisien, dapat dipadukan dengan Atap Exceltech (PC) untuk kebutuhan pencahayaan.</p>
        </span>
      </div>
    </div>
  </div>
</div>

<!-- 5 ATAP TRANSPARAN EXCELTECH -->
<div class="col-xl-4 col-lg-4 col-sm-6 mb--40 mb-md--30">
  <div class="airi-product">
    <div class="product-inner">
      <figure class="product-image">
        <div class="product-image--holder">
          <a href="https://www.grahaexcel.com/product/atap-transparan-pc-exceltech">
          <img src="https://www.grahaexcel.com/storage/files/1/atap-transparan-exceltech.jpg" alt="Atap Transparan ExcelTech" class="single-image" style="height: 350px;">
          </a>
        </div>
      </figure>
      <div class="product-info">
        <h3 class="product-title"><a href="https://www.grahaexcel.com/product/atap-transparan-pc-exceltech">
          Atap Transparan ExcelTech</a>
        </h3>
        <span class="product-price-wrapper">
          <p><strong> Atap transparan berbahan Polycarbonate (PC) yang ringan, sangat kuat, dan tahan cuaca ekstrem </strong>. Cocok digunakan sebagai sumber cahaya alami atau dikombinasikan dengan Atap Exceltech uPVC untuk hasil optimal.
          </p>
        </span>
      </div>
    </div>
  </div>
</div>

<!-- 6 ATAP GELOMBANG EXCEL B -->
<div class="col-xl-4 col-lg-4 col-sm-6 mb--40 mb-md--30">
  <div class="airi-product">
    <div class="product-inner">
      <figure class="product-image">
        <div class="product-image--holder">
          <a href="https://www.grahaexcel.com/product/seng-plastik-bening-pet">
          <img src="https://www.grahaexcel.com/storage/files/1/atap-gelombang-excelb.jpg" alt="Atap Gelombang EXCEL B" class="single-image"  style="height: 350px;">
          </a>
        </div>
      </figure>
      <div class="product-info">
        <h3 class="product-title"> <a href="https://www.grahaexcel.com/product/seng-plastik-bening-pet">
          Atap Gelombang EXCEL B</a>
        </h3>
        <span class="product-price-wrapper">
          <p><strong>Atap bergelombang transparan berbahan Polyethylene Terephthalate (PET) dengan transmisi cahaya hingga 98%</strong>. Memberikan pencahayaan alami maksimal, ideal untuk jemuran, dapur, gudang, maupun area yang membutuhkan penerangan penuh.
</p>
        </span>
      </div>
    </div>
  </div>
</div>

<!-- 7 ATAP GELOMBANG EXCELROOF -->
<div class="col-xl-4 col-lg-4 col-sm-6 mb--40 mb-md--30">
  <div class="airi-product">
    <div class="product-inner">
      <figure class="product-image">
        <div class="product-image--holder">
           <a href="https://www.grahaexcel.com/product/seng-plastik-gelombang-bening-pp">
          <img src="https://www.grahaexcel.com/storage/files/1/atap-gelombang-excelroof.jpg" alt="Atap Gelombang EXCELROOF" class="single-image"  style="height: 350px;">
                  </a>
        </div>
      </figure>
      <div class="product-info">
        <h3 class="product-title"> <a href="https://www.grahaexcel.com/product/seng-plastik-gelombang-bening-pp">
          Atap Gelombang EXCELROOF</a>
        </h3>
        <span class="product-price-wrapper">
          <p><strong>Atap bergelombang transparan berbahan Polypropylene (PP) dengan transmisi cahaya 78%</strong>. Memberikan cahaya alami cukup tanpa panas berlebih, cocok untuk dapur, jemuran, atau gudang.
</p>
        </span>
      </div>
    </div>
  </div>
</div>

<!-- 8 ATAP GELOMBANG GLASSROOF -->
<div class="col-xl-4 col-lg-4 col-sm-6 mb--40 mb-md--30">
  <div class="airi-product">
    <div class="product-inner">
      <figure class="product-image">
        <div class="product-image--holder">
           <a href="https://www.grahaexcel.com/product/seng-plastik-gelombang-bening-pp">
          <img src="https://www.grahaexcel.com/storage/files/1/atap-gelombang-glassroof.jpg" alt="Atap Gelombang GLASSROOF" class="single-image"  style="height: 350px;">
           </a>
        </div>
      </figure>
      <div class="product-info">
        <h3 class="product-title"> <a href="https://www.grahaexcel.com/product/seng-plastik-gelombang-bening-pp">
          Atap Gelombang GLASSROOF</a>
        </h3>
        <span class="product-price-wrapper">
          <p><strong>Atap bergelombang transparan berbahan Polypropylene (PP) dengan transmisi cahaya 78%</strong>. Memberikan cahaya alami cukup tanpa panas berlebih, cocok untuk dapur, jemuran, atau gudang.
</p><!-- <p>Bak bulat rata multifungsi untuk kebutuhan industri. Menggunakan teknologi bebas lumut dan aman untuk kesehatan. Dapat digunakan untuk menampung air maupun bahan kimia. Cocok juga untuk wadah adukan skala industri. Kapasitas 3.100 – 20.000 liter.</p> -->
        </span>
      </div>
    </div>
  </div>
</div>

<!-- LEMBARAN PENUTUP PAGAR PP -->
<div class="col-xl-4 col-lg-4 col-sm-6 mb--40 mb-md--30">
  <div class="airi-product">
    <div class="product-inner">
      <figure class="product-image">
        <div class="product-image--holder">
          <a href="https://www.grahaexcel.com/product/penutup-pagar-seng-roll-pp-3d">
     
          <img src="https://www.grahaexcel.com/storage/files/1/lembaran-penutup-pagar-pp.jpg" alt="Lembaran Penutup Pagar – PP" class="single-image" style="height: 350px;">
          </a>
        </div>
      </figure>
      <div class="product-info">
        <h3 class="product-title"> <a href="https://www.grahaexcel.com/product/penutup-pagar-seng-roll-pp-3d">
          Lembaran Penutup Pagar – PP Desain 3D</a>
        </h3>
        <span class="product-price-wrapper">
          <p>Penutup pagar berbentuk gulungan,  terbuat dari <strong> Polypropylene (PP)</strong> sebagai pengganti fiber. <strong> Desain 3 dimensi memberikan perlindungan privasi lebih maksimal </strong> serta tampilan yang lebih <strong> dinamis dan elegan </strong> pada era hunian.
          </p>
        </span>
      </div>
    </div>
  </div>
</div>

        </div>
    </section>

<style type="text/css">
#FAQ ul {
    list-style-type: disc;
    padding-left: 20px;
}

#FAQ li {
    margin-bottom: 15px;
}

    ul.feature-list{
        margin-top: 10px;;
    }
   ul.feature-list li {
            margin-bottom: 18px;
        }
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
Produk-produk unggulan Atap UPVC dilengkapi dengan <strong> masa garansi hingga 15 tahun</strong> yang mencakup kerusakan akibat cacat produksi maupun material.</p>
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
           <h2 class="h4 fw-bold mb-4" style="text-align: center;width:100%"><strong>FAQ Atap uPVC EXCEL: SKYDECK, EXCELTECH, ELITEROOF </strong></h2>
            <!-- Left Column: Accordion -->
         <!-- FAQ Section -->
    <div class="mt-5 col-md-7"">
       
       <div class="accordion" id="faqChemAccordion">
    <!-- Q1 -->
    <div class="card rounded mb-3">
      <div class="card-header" id="chemHeadingOne">
        <h2 class="mb-0">
          <button class="btn btn-link btn-block text-left collapsed font-weight-bold text-dark"
                  type="button" data-toggle="collapse" data-target="#chemCollapseOne"
                  aria-expanded="false" aria-controls="chemCollapseOne">
Apa itu atap uPVC?          </button>
        </h2>
      </div>
      <div id="chemCollapseOne" class="collapse" aria-labelledby="chemHeadingOne" data-parent="#faqChemAccordion">
        <div class="card-body">
          <p class="mb-2">
Atap uPVC SKYDECK dari GrahaExcel adalah <strong> atap modern berbahan unplasticized PVC yang kokoh, tahan cuaca, dan ramah lingkungan </strong>. Dirancang dengan teknologi rongga hingga 12mm dan lapisan pelindung UV, atap ini menjaga ruangan tetap sejuk, tenang, dan bebas bocor.
          </p>

        </div>
      </div>
    </div>

    <!-- Q2 -->
    <div class="card rounded mb-3">
      <div class="card-header" id="chemHeadingTwo">
        <h2 class="mb-0">
          <button class="btn btn-link btn-block text-left collapsed font-weight-bold text-dark"
                  type="button" data-toggle="collapse" data-target="#chemCollapseTwo"
                  aria-expanded="false" aria-controls="chemCollapseTwo">
Apa keunggulan utama atap uPVC SKYDECK dibanding atap konvensional?          </button>
        </h2>
      </div>
      <div id="chemCollapseTwo" class="collapse" aria-labelledby="chemHeadingTwo" data-parent="#faqChemAccordion">
        <div class="card-body">
          <p class="mb-2">Risikonya meliputi:</p>
          <ul class="mb-3">
            <li>Menurunkan suhu ruangan hingga 6°C.</li>


<li>Meredam suara hujan hingga 27%.</li>


<li>Tahan terhadap karat, korosi, dan cuaca ekstrem.</li>


<li>Ringan namun kuat, mudah dipasang, dan perawatan minim.</li>


<li>Bebas bahan kimia berbahaya.</li>

          </ul>
        
        </div>
      </div>
    </div>

    <!-- Q3 -->
    <div class="card rounded mb-3">
      <div class="card-header" id="chemHeadingThree">
        <h2 class="mb-0">
          <button class="btn btn-link btn-block text-left collapsed font-weight-bold text-dark"
                  type="button" data-toggle="collapse" data-target="#chemCollapseThree"
                  aria-expanded="false" aria-controls="chemCollapseThree">
           Apakah atap uPVC SKYDECK tahan panas dan sinar UV?

          </button>
        </h2>
      </div>
      <div id="chemCollapseThree" class="collapse" aria-labelledby="chemHeadingThree" data-parent="#faqChemAccordion">
        <div class="card-body">
          <p class="mb-2">
Ya. Atap uPVC produksi Grahaexcel dilengkapi lapisan pelindung UV khusus yang <strong>mampu memantulkan panas dan mencegah pemudaran warna.</strong>
 Hasilnya, interior bangunan tetap sejuk dan awet meski terpapar sinar matahari langsung setiap hari.

          </p>
        </div>
      </div>
    </div>

    <!-- Q4 -->
    <div class="card rounded mb-3">
      <div class="card-header" id="chemHeadingFour">
        <h2 class="mb-0">
          <button class="btn btn-link btn-block text-left collapsed font-weight-bold text-dark"
                  type="button" data-toggle="collapse" data-target="#chemCollapseFour"
                  aria-expanded="false" aria-controls="chemCollapseFour">
Apakah atap ini bisa meredam suara hujan?          </button>
        </h2>
      </div>
      <div id="chemCollapseFour" class="collapse" aria-labelledby="chemHeadingFour" data-parent="#faqChemAccordion">
        <div class="card-body">
          <p class="mb-0">
          Bisa! <strong>Teknologi double layer pada SKYDECK efektif meredam kebisingan hingga 27%</strong>, membuat suasana dalam ruangan lebih tenang dan nyaman saat hujan deras.

          </p>
        </div>
      </div>
    </div>

    <!-- Q5 -->
    <div class="card rounded mb-3">
      <div class="card-header" id="chemHeadingFive">
        <h2 class="mb-0">
          <button class="btn btn-link btn-block text-left collapsed font-weight-bold text-dark"
                  type="button" data-toggle="collapse" data-target="#chemCollapseFive"
                  aria-expanded="false" aria-controls="chemCollapseFive">
            Berapa umur pakai tangki kimia?
          </button>
        </h2>
      </div>
      <div id="chemCollapseFive" class="collapse" aria-labelledby="chemHeadingFive" data-parent="#faqChemAccordion">
        <div class="card-body">
          <p class="mb-0">Grahaexcel memberikan <strong>garansi resmi hingga 15 tahun</strong>, menjamin daya tahan, kekuatan, dan kualitas produk jangka panjang.
 Kami berkomitmen memberikan rasa aman dan kepercayaan bagi setiap pengguna SKYDECK.</p>
        </div>
      </div>
    </div>

    <!-- Q6 -->
    <div class="card rounded mb-3">
      <div class="card-header" id="chemHeadingSix">
        <h2 class="mb-0">
          <button class="btn btn-link btn-block text-left collapsed font-weight-bold text-dark"
                  type="button" data-toggle="collapse" data-target="#chemCollapseSix"
                  aria-expanded="false" aria-controls="chemCollapseSix">
Apakah aman untuk kesehatan dan lingkungan?
          </button>
        </h2>
      </div>
      <div id="chemCollapseSix" class="collapse" aria-labelledby="chemHeadingSix" data-parent="#faqChemAccordion">
        <div class="card-body">
          <p class="mb-0">
           Tentu. SKYDECK <strong>bebas dari bahan kimia berbahaya seperti BPA, asbes, dan tidak mengandung logam berat.</strong>
 Tentunya aman untuk kesehatan dan ramah lingkungan.

          </p>
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
          <h3 style="text-align: left">Solusi Atap Bangunan yang Lebih Aman dan Tahan Lama = Atap UPVC Excel
</h3>

<p>Dapatkan <strong>penawaran spesial sekarang - Konsultasi gratis </strong>dengan tim teknis berpengalaman, <strong>pengiriman cepat</strong> ke seluruh Indonesia, serta <strong> garansi resmi & layanan purna jual!</strong></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
    

        </div>
@endsection