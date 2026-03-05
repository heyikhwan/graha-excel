@extends('pages.layouts.app')

@section('meta_tag')
    <!-- SEO Meta Tags -->
    <meta name="keywords" content="toren air, tangki air, tandon air, water tank, SNI, FDA, JIS, grahaexcel, toren air berkualitas, tangki air rumah tangga, tangki air bisnis">
    <meta name="author" content="Grahaexcel">
    <meta name="robots" content="index, follow">
    
    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="Tangki Kimia EXCEL - Solusi Tangki Kimia Industri">
    <meta property="og:description" content="Kami menyediakan tangki kimia custom sesuai jenis bahan kimia, kapasitas, HDPE dengan ketebalan khusus, standard K3L, SNI, Regulasi Interantional">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ Request::url() }}">
    <meta property="og:site_name" content="Grahaexcel">
    <meta property="og:locale" content="id_ID">
    
    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Tangki Kimia EXCEL - Solusi Tangki Kimia Industri">
    <meta name="twitter:description" content="Kami menyediakan tangki kimia custom sesuai jenis bahan kimia, kapasitas, HDPE dengan ketebalan khusus, standard K3L, SNI, Regulasi Interantional">
    
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
      "@id": "https://www.grahaexcel.com/tangki-kimia",
      "url": "https://www.grahaexcel.com/tangki-kimia",
      "name": "Tangki Kimia EXCEL – Solusi Penyimpanan Bahan Kimia untuk Industri & Komersial",
      "inLanguage": "id",
      "description": "Tangki Kimia EXCEL untuk industri & komersial: tahan berbagai bahan kimia, aman & higienis. Didukung konsultasi teknis, layanan custom, dan standar SNI/JIS/FDA.",
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
          { "@type": "ListItem", "position": 2, "name": "Kategori Produk", "item": "https://www.grahaexcel.com/products" },
          { "@type": "ListItem", "position": 3, "name": "Tangki Kimia", "item": "https://www.grahaexcel.com/tangki-kimia" }
        ]
      },
      "mainEntity": {
        "@type": "ItemList",
        "name": "Rekomendasi Produk Tangki Kimia EXCEL",
        "itemListOrder": "https://schema.org/ItemListOrderAscending",
        "numberOfItems": 8,
        "itemListElement": [
          { "@type": "ListItem", "position": 1, "name": "Tangki Kimia EXCEL – Classic Series | Roto", "url": "https://www.grahaexcel.com/product/tangki-air-classic-series-roto" },
          { "@type": "ListItem", "position": 2, "name": "Tangki Total Kuras / Total Drain | Roto", "url": "https://www.grahaexcel.com/product/tangki-air-total-drain" },
          { "@type": "ListItem", "position": 3, "name": "Tangki Tanam / Pendam | Roto", "url": "https://www.grahaexcel.com/product/tangki-air-bawah-tanah-tanam-pendam" },
          { "@type": "ListItem", "position": 4, "name": "Tangki Horizontal Industri | Roto", "url": "https://www.grahaexcel.com/product/tangki-industri-horizontal" },
          { "@type": "ListItem", "position": 5, "name": "Tangki Persegi Empat Industri | Roto", "url": "https://www.grahaexcel.com/product/tangki-industri-kotak" },
          { "@type": "ListItem", "position": 6, "name": "Tangki Stainless Steel", "url": "https://www.grahaexcel.com/category/tangki-air-stainless" },
          { "@type": "ListItem", "position": 7, "name": "Tangki EXCEL Bioseptik | Blow Series", "url": "https://www.grahaexcel.com/product/tangki-bioseptic" },
          { "@type": "ListItem", "position": 8, "name": "Bak Bulat Rata (Industri)", "url": "https://www.grahaexcel.com/product/bak-bulat-rata" }
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
        max-width:70%;
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
                            <img class="large-img d-block w-100" src="http://grahaexcel.com/storage/files/1/tangki-kimia.jpg" alt="Banner 1" style="width: 100%; height: 100%; object-fit: cover; display: block;">
                            <img class="small-img w-100" src="http://grahaexcel.com/storage/files/1/tangki-kimia-small.jpg" alt="Banner 1" style="width: 100%; height: 100%; object-fit: cover; display: none;">
                        </a>
                        <!-- Black overlay for better text readability -->
                        <div class="overlay" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.2); z-index: 2;"></div>
                        <div class="caption" style="position: absolute; top: 50%; left: 5%; transform: translateY(-50%); z-index: 3; text-align: left; color: white;max-width: 60%;">
                            <h1 style=""><span style="color: rgb(255, 255, 255);"> <strong>Tangki Kimia EXCEL - <br/>Solusi Penyimpanan Bahan Kimia untuk Industri & Komersial</strong>
</span></h1>
                            <h2 style="font-weight:700; font-size: 18px; margin-bottom: 20px;"><!-- Bootstrap list-unstyled to remove default bullets -->
    <ul class="list-unstyled" style="color: #FFF;font-weight:400;">
        <li class="d-flex align-items-start ">
            {{-- <i class="bi bi-check-circle-fill text-success" style=" margin-top: 0.5em; margin-right: 0.5rem;"></i> --}}
            <span style="">Bersertifikasi <strong>SNI, FDA & JIS.</strong></span>
        </li>
        <li class="d-flex align-items-start ">
            {{-- <i class="bi bi-check-circle-fill text-success" style="margin-top: 0.5em; margin-right: 0.5rem;"></i> --}}
            <span style=""><strong>Tahan Berbagai Bahan Kimia, Aman, Higienis, & Terpercaya</strong> untuk kebutuhan industri maupun komersial Anda.</span>
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
                     <h2 class="text-uppercase font-weight-semibold mb-3" style="font-size: 24px;">
                      Grahaexcel Menyediakan Tangki Kimia Terbaik untuk Industri &amp; Kebutuhan Komersial
                    </h2>

              </div>
              <div class="col-md-6 m-auto p-5"  style="margin-bottom: 0px !important;    padding-bottom: 0px !important;">
              </div>
            </div>
            <div class="row">
                <div class="col-md-6 m-auto p-5 order-2 order-md-1"  style="margin-top: 0px !important;    padding-top: 10px !important;">

                            <p class="mb-3">
                              Penyimpanan cairan kimia memerlukan <strong>standar keamanan yang ketat</strong>. Menyimpan bahan kimia bukanlah hal sepele. Banyak perusahaan masih menggunakan tangki air/ tangki penampungan biasa untuk menyimpan cairan kimia. Tentunya akan terjadi kebocoran akibat material tandon yang tidak kompatibel dengan jenis kimia tertentu. Akibatnya, bisa menyebabkan pencemaran lingkungan, kerusakan fasilitas, dampak kesehatan bagi pekerja bahkan sanksi hukum.
                            </p>

                            <h3 class="h5 font-weight-bold mt-4">
                              Risiko Menggunakan Tangki Biasa untuk Bahan Kimia
                            </h3>

                            <ul class="my-2" style="list-style-type: ; padding-left: 1.5rem; margin-bottom: 0;">
                              <li class="d-flex align-items-start mb-3">
                                <i class="bi bi-check2-circle" style="font-size: 1em; font-weight: bold;  margin-right: 0.5rem;color:black"></i>
                                <span> <strong>Kebocoran &amp; reaksi berbahaya </strong>akibat material tidak kompatibel dengan jenis kimia.</span>
                              </li>
                              <li class="d-flex align-items-start mb-3">
                                <i class="bi bi-check2-circle" style="font-size: 1em; font-weight: bold;  margin-right: 0.5rem;color:black"></i>
                                <span> <strong>Korosi, retak, dan cepat rusak</strong> (degradasi material) akibat paparan zat agresif.</span>
                              </li>
                              <li class="d-flex align-items-start mb-3">
                                <i class="bi bi-check2-circle" style="font-size: 1em; font-weight: bold;  margin-right: 0.5rem;color:black"></i>
                                <span>
                                <strong> Tidak memenuhi standar K3L </strong> (Keselamatan dan kesehatan kerja serta lingkungan), <strong> SNI</strong>, maupun <strong> regulasi internasional</strong>, sehingga berisiko hukum sekaligus merugikan perusahaan.
                                </span>
                              </li>
                            </ul>

                            <p class="mt-3">
                              Risiko-risiko tersebut bukan hanya mengancam keselamatan pekerja, tetapi juga berpotensi menyebabkan pencemaran lingkungan dan kerugian finansial besar.
                            </p>

                </div>
                <div class="col-md-6 p-0 order-1 order-md-2">
                    <img src="http://grahaexcel.com/storage/files/1/tangki-kimia-graha-excel-horizontal.jpg" alt="Tangki Excel di Pabrik Grahaexcel">
                </div>
            </div>
        </div>
    </section>
    <section class="about-2">
        <div class="container">
            <div class="row">
                <div class="col-md-6 p-0">
                    <br>
                    <img src="http://grahaexcel.com/storage/files/1/tangki-kimia-graha-excel.jpg" alt="Mengapa Tangki Grahaexcel">
                </div>
                <div class="col-md-6 m-auto p-5">
                      <!-- Section Title -->
      <h2 class="h5 mt-5 font-weight-bold">
        Kenapa Banyak Industri Memilih Tangki Kimia EXCEL?
      </h2>

      <!-- Intro Paragraph -->
      <p class="mt-3">
       <strong> Setiap bahan kimia karakteristik berbeda</strong> — ada yang sangat korosif, sensitif terhadap suhu, mudah menguap, atau butuh sistem keamanan ekstra. </strong> 
        Tangki Kimia EXCEL  bukan sekedar Tangki Kimia biasa, tetapi juga karena <strong> layanan konsultasi, pengalaman, dan teknologi yang kami berikan.</strong>
      </p>

      <!-- Numbered Features -->
      <ul class="list-unstyled mt-4">
        <li class="d-flex align-items-start mb-3">
          <i class="bi bi-check2-circle" style="font-size: 1em; font-weight: bold;  margin-right: 0.5rem;color:black"></i>
          <span>
            <strong>Layanan Custom Sesuai Kebutuhan</strong> – Grahaexcel memahami bahwa setiap perusahaan punya kebutuhan berbeda. 
            Kami menyediakan <strong> tangki kimia custom sesuai jenis bahan kimia, kapasitas, material </strong>(HDPE dengan ketebalan khusus) hingga <strong> fitur tambahan 
           </strong> seperti  (tidak ada sambungan dan ekstra lubang). Dengan layanan ini, Anda lebih yakin dan bisa berkonsultasi sebelum membeli.
          </span>
        </li>

        <li class="d-flex align-items-start mb-3">
          <i class="bi bi-check2-circle" style="font-size: 1em; font-weight: bold;  margin-right: 0.5rem;color:black"></i>
          <span>
            <strong>Konsultasi Teknis Sebelum Membeli</strong> – Sebelum membeli, Anda bisa berkonsultasi langsung dengan tim teknis kami. 
            Kami membantu memilih material yang paling tepat, memberi rekomendasi desain yang efisien, serta memastikan tangki Anda memenuhi standar <strong>K3L, SNI, dan regulasi internasional.</strong>
          </span>
        </li>

        <li class="d-flex align-items-start mb-3">
          <i class="bi bi-check2-circle" style="font-size: 1em; font-weight: bold;  margin-right: 0.5rem;color:black"></i>
          <span>
            <strong>Pengalaman &amp; Teknologi Teruji</strong> – Dengan pengalaman bertahun-tahun melayani berbagai sektor industri, 
            Grahaexcel telah mengembangkan teknologi tangki kimia yang teruji di lapangan. Setiap produk melewati kontrol kualitas ketat sehingga 
            terjamin aman, tahan lama, dan handal digunakan dalam jangka panjang.
          </span>
        </li>
      </ul>

      <!-- Closing Paragraph -->
      <p class="mt-4">
        Inilah alasan kenapa banyak industri kimia, farmasi, makanan &amp; minuman, air bersih, hingga pengolahan limbah memilih Tangki Kimia EXCEL: 
        karena kami menawarkan lebih dari sekadar tangki — kami memberikan <strong> pengalaman, teknologi teruji, layanan custom, konsultasi ahli, 
        dan standar kualitas internasional</strong>.
      </p>
                    
                </div>
                
            </div>
        </div>
    </section>
    <section class="home-product">
        <div class="container">
            <h2 class="text-center" style="font-size: 24px; text-transform: uppercase; font-weight: 600; margin-bottom: 20px;">Rekomendasi Produk Tangki Kimia EXCEL - Solusi Penyimpanan Aman untuk Bahan Kimia
</h2>
            <div class="row">
  <!-- TANGKI KIMIA CLASSIC SERIES -->
  <div class="col-xl-4 col-lg-4 col-sm-6 mb--40 mb-md--30">
    <div class="airi-product">
      <div class="product-inner">
        <figure class="product-image">
          <div class="product-image--holder">
            <a href="https://www.grahaexcel.com/product/tangki-air-crystal-series-roto">
              <img src="https://www.grahaexcel.com/storage/files/1/Tangki-Kimia-Classic-Series.jpg" alt="Tangki Kimia Classic Series" class="single-image">
            </a>
          </div>
        </figure>
        <div class="product-info">
          <h3 class="product-title">
            <a href="https://www.grahaexcel.com/product/tangki-air-crystal-series-roto">Tangki Air EXCEL - Classic Series | Roto</a>
          </h3>
          <span class="product-price-wrapper">
            <p>Toren air EXCEL dengan warna klasik yang identik dengan warna oranye dan biru. 
Sekarang dengan teknologi bebas lumut, garansi 20 tahun, dan tentunya aman untuk 
kesehatan. Tersedia juga tangki untuk kebutuhan penampungan kimia dengan garansi 
terbatas. Kapasitas 250 liter – 22.500 liter. 
</p>
          </span>
        </div>
      </div>
    </div>
  </div>

  <!-- TANGKI TOTAL DRAIN -->
  <div class="col-xl-4 col-lg-4 col-sm-6 mb--40 mb-md--30">
    <div class="airi-product">
      <div class="product-inner">
        <figure class="product-image">
          <div class="product-image--holder">
            <a href="https://www.grahaexcel.com/product/tangki-air-total-drain">
              <img src="https://www.grahaexcel.com/storage/files/1/Tangki-Total-Drain.jpg" alt="Tangki Total Drain / Total Kuras" class="single-image">
            </a>
          </div>
        </figure>
        <div class="product-info">
          <h3 class="product-title">
            <a href="https://www.grahaexcel.com/product/tangki-air-total-drain">Tangki Total Kuras, Total Drain | Roto</a>
          </h3>
          <span class="product-price-wrapper">
            <p>Solusi menguras endapan kotoran lebih maksimal dengan desain khusus di bawah 
permukaan toren dan tentunya menjadikan perawatan tangki lebih mudah. Tentunya 
dengan garansi 20 tahun, bebas lumut, dan aman untuk kesehatan. Kapasitas 550 liter – 
2100 liter 
</p>
          </span>
        </div>
      </div>
    </div>
  </div>

  <!-- TANGKI TANAM / PENDAM -->
  <div class="col-xl-4 col-lg-4 col-sm-6 mb--40 mb-md--30">
    <div class="airi-product">
      <div class="product-inner">
        <figure class="product-image">
          <div class="product-image--holder">
            <a href="https://www.grahaexcel.com/product/tangki-air-bawah-tanah-tanam-pendam">
              <img src="https://www.grahaexcel.com/storage/files/1/Tangki-Pendam-Roto.jpg" alt="Tangki Tanam / Pendam" class="single-image">
            </a>
          </div>
        </figure>
        <div class="product-info">
          <h3 class="product-title">
            <a href="https://www.grahaexcel.com/product/tangki-air-bawah-tanah-tanam-pendam">Tangki Tanam / Pendam | Roto </a>
          </h3>
          <span class="product-price-wrapper">
            <p>Tangki EXCEL hadir dengan desain khusus untuk pemasangan bawah tanah. Dilengkapi 
teknologi bebas lumut, aman untuk kesehatan, dan dapat digunakan untuk menampung 
air maupun bahan kimia. Tersedia tipe langsung tanam atau perlu cor beton, dengan 
kapasitas 550 liter – 2.500 liter</p>
          </span>
        </div>
      </div>
    </div>
  </div>

  <!-- TANGKI HORIZONTAL INDUSTRI -->
  <div class="col-xl-4 col-lg-4 col-sm-6 mb--40 mb-md--30">
    <div class="airi-product">
      <div class="product-inner">
        <figure class="product-image">
          <div class="product-image--holder">
            <a href="https://www.grahaexcel.com/product/tangki-industri-horizontal">
              <img src="https://www.grahaexcel.com/storage/files/1/Tangki-Air-Horizontal-Industri-Roto.jpg" alt="Tangki Horizontal Industri" class="single-image">
            </a>
          </div>
        </figure>
        <div class="product-info">
          <h3 class="product-title">
            <a href="https://www.grahaexcel.com/product/tangki-industri-horizontal">Tangki Horizontal Industri | Roto</a>
          </h3>
          <span class="product-price-wrapper">
            <p>Tangki EXCEL dengan desain horizontal dan dilengkapi 5 kaki penopang kokoh yang 
menyatu dengan badan tangki. Bebas lumut, aman untuk kesehatan, dan cocok untuk air 
maupun bahan kimia. Kapasitas 5.000 liter. 
</p>
          </span>
        </div>
      </div>
    </div>
  </div>

  <!-- TANGKI PERSEGI EMPAT INDUSTRI -->
  <div class="col-xl-4 col-lg-4 col-sm-6 mb--40 mb-md--30">
    <div class="airi-product">
      <div class="product-inner">
        <figure class="product-image">
          <div class="product-image--holder">
            <a href="https://www.grahaexcel.com/product/tangki-industri-kotak">
              <img src="https://www.grahaexcel.com/storage/files/1/Tangki-Air-Persegi-Empat-Industri-Roto.jpg" alt="Tangki Persegi Empat Industri" class="single-image">
            </a>
          </div>
        </figure>
        <div class="product-info">
          <h3 class="product-title">
            <a href="https://www.grahaexcel.com/product/tangki-industri-kotak">Tangki Persegi Empat Industri | Roto</a>
          </h3>
          <span class="product-price-wrapper">
            <p>Tangki EXCEL dengan desain persegi empat minimalis, kuat dengan tulangan kaki, 
bebas lumut, aman untuk kesehatan, dan mudah diangkut dengan tali. Cocok untuk air 
maupun bahan kimia. Kapasitas 1.000 liter. 
</p>
          </span>
        </div>
      </div>
    </div>
  </div>

  <!-- TANGKI STAINLESS STEEL -->
  <div class="col-xl-4 col-lg-4 col-sm-6 mb--40 mb-md--30">
    <div class="airi-product">
      <div class="product-inner">
        <figure class="product-image">
          <div class="product-image--holder">
            <a href="https://www.grahaexcel.com/category/tangki-air-stainless">
              <img src="https://www.grahaexcel.com/storage/files/1/Tangki-Stainless-Steel.jpg" alt="Tangki Air Stainless Steel Excel" class="single-image">
            </a>
          </div>
        </figure>
        <div class="product-info">
          <h3 class="product-title">
            <a href="https://www.grahaexcel.com/category/tangki-air-stainless">Tangki Stainless Steel</a>
          </h3>
          <span class="product-price-wrapper">
            <p>Tandon air Stainless Steel Excel dibuat dari bahan dasar stainless steel dengan grade 
terbaik yaitu AISI 304 (8% Nickel). Memiliki ketahanan korosi paling tinggi dibanding 
tangki air stainless merek lain di Indonesia. Tangki air khusus untuk penyimpanan air 
bersih (PAM) dan minyak. 
</p>
          </span>
        </div>
      </div>
    </div>
  </div>

  <!-- BIOSEPTIK TANK (BLOW SERIES) -->
  <div class="col-xl-4 col-lg-4 col-sm-6 mb--40 mb-md--30">
    <div class="airi-product">
      <div class="product-inner">
        <figure class="product-image">
          <div class="product-image--holder">
            <a href="https://www.grahaexcel.com/product/tangki-bioseptic">
              <img src="https://www.grahaexcel.com/storage/files/1/Tangki-Air-Bioseptik-Tank-2.jpg" alt="Tangki EXCEL Bioseptik Blow Series" class="single-image">
            </a>
          </div>
        </figure>
        <div class="product-info">
          <h3 class="product-title">
            <a href="https://www.grahaexcel.com/product/tangki-bioseptic">Tangki EXCEL Bioseptik | Blow Series</a>
          </h3>
          <span class="product-price-wrapper">
            <p>Satu-satunya di Indonesia dan di Dunia – Septic tank dengan teknologi blow moulding, 
menjadikan tangki 2x lebih kuat dan 5 tahap filtrasi untuk mengurai lebih maksimal. 
Hasilnya penguraian maksimal dan kekuatan optimal. Kapasitas 1000 liter dan 1500 liter. 
</p>
          </span>
        </div>
      </div>
    </div>
  </div>

  <!-- BAK BULAT RATA -->
  <div class="col-xl-4 col-lg-4 col-sm-6 mb--40 mb-md--30">
    <div class="airi-product">
      <div class="product-inner">
        <figure class="product-image">
          <div class="product-image--holder">
            <a href="https://www.grahaexcel.com/product/bak-bulat-rata">
              <img src="https://www.grahaexcel.com/storage/files/1/Bak-Bulat-Rata-2.jpg" alt="Bak Bulat Rata" class="single-image">
            </a>
          </div>
        </figure>
        <div class="product-info">
          <h3 class="product-title">
            <a href="https://www.grahaexcel.com/product/bak-bulat-rata">Bak Bulat Rata</a>
          </h3>
          <span class="product-price-wrapper">
            <p>Bak bulat rata multifungsi untuk kebutuhan industri. Menggunakan teknologi bebas 
lumut dan aman untuk kesehatan. Dapat digunakan untuk menampung air maupun bahan 
kimia. Cocok juga dipakai sebagai wadah adukan skala industri. Kapasitas 3.100 liter - 
20.000 liter </p>
          </span>
        </div>
      </div>
    </div>
  </div>

  <!-- CEK KETAHANAN TANGKI KIMIA -->
  <div class="col-xl-4 col-lg-4 col-sm-6 mb--40 mb-md--30">
    <div class="airi-product">
      <div class="product-inner">
        <figure class="product-image">
          <div class="product-image--holder">
            <a href="https://www.grahaexcel.com/storage/files/1/tabel-ketahanan-terhadap-bahan-kimia.jpg" target="_blank">
              <img src="https://www.grahaexcel.com/storage/files/1/Cek-Ketahanan-Tangki-Kimia.jpg" alt="Cek Ketahanan Tangki Kimia" class="single-image">
            </a>
          </div>
        </figure>
        <div class="product-info">
          <h3 class="product-title">
            <a href="https://www.grahaexcel.com/storage/files/1/tabel-ketahanan-terhadap-bahan-kimia.jpg" target="_blank">Cek Ketahanan Tangki Kimia</a>
          </h3>
          <span class="product-price-wrapper">
            <p>Klik gambar di atas untuk melihat ketahanan tangki terhadap berbagai jenis bahan kimia. </p>
          </span>
        </div>
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
          <h3 style="font-size:1.8em;">Sertifikasi dan Standard Mutu Tangki Kimie EXCEL </h3>
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
Produk-produk unggulan Tangki Kimia dilengkapi dengan <strong> masa garansi hingga 20 tahun</strong> yang mencakup kerusakan akibat cacat produksi maupun material.</p>
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
        <h2 class="h4  fw-bold  mb-4">FAQ - Tangki Kimia EXCEL</h2>
       <div class="accordion" id="faqChemAccordion">
    <!-- Q1 -->
    <div class="card rounded mb-3">
      <div class="card-header" id="chemHeadingOne">
        <h2 class="mb-0">
          <button class="btn btn-link btn-block text-left collapsed font-weight-bold text-dark"
                  type="button" data-toggle="collapse" data-target="#chemCollapseOne"
                  aria-expanded="false" aria-controls="chemCollapseOne">
            Mengapa penyimpanan bahan kimia membutuhkan tangki khusus?
          </button>
        </h2>
      </div>
      <div id="chemCollapseOne" class="collapse" aria-labelledby="chemHeadingOne" data-parent="#faqChemAccordion">
        <div class="card-body">
          <p class="mb-2">
            <strong> Bahan kimia memiliki sifat yang berbeda </strong> —ada yang sangat korosif, mudah menguap, atau bahkan reaktif jika terkena udara. 
            Jika disimpan di tangki biasa, material tangki bisa cepat rusak, retak, atau bocor. Kondisi ini bukan hanya <strong> menimbulkan 
            kerugian finansial </strong>, tapi juga bisa  menyebabkan <strong>pencemaran lingkungan dan membahayakan pekerja.</strong>
          </p>
          <p class="mb-0">
            👉 Karena itu, tangki kimia dirancang dengan material khusus yang tahan terhadap <strong> zat agresif, suhu ekstrem, 
            serta dilengkapi fitur keselamatan tambahan</strong>.
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
            Apa saja risiko jika salah memilih tangki untuk bahan kimia?
          </button>
        </h2>
      </div>
      <div id="chemCollapseTwo" class="collapse" aria-labelledby="chemHeadingTwo" data-parent="#faqChemAccordion">
        <div class="card-body">
          <p class="mb-2">Risikonya meliputi:</p>
          <ul class="mb-3">
            <li>Kebocoran dan tumpahan berbahaya → merusak fasilitas, mencemari lingkungan, melukai pekerja.</li>
            <li>Reaksi kimia tak terkendali → material tangki bisa bereaksi dengan isi di dalamnya.</li>
            <li>Korosi dan keretakan dini → umur pakai lebih singkat, biaya perawatan membengkak.</li>
            <li>Masalah hukum &amp; regulasi → melanggar standar K3L, SNI, ISO, hingga menimbulkan risiko hukum.</li>
          </ul>
          <p class="mb-0">
            👉 Salah memilih tangki bukan sekadar masalah teknis, tapi bisa berimbas pada keselamatan, reputasi, dan kelangsungan bisnis.
          </p>
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
           Bagaimana cara menentukan material tangki kimia yang tepat?
          </button>
        </h2>
      </div>
      <div id="chemCollapseThree" class="collapse" aria-labelledby="chemHeadingThree" data-parent="#faqChemAccordion">
        <div class="card-body">
          <p class="mb-2">Pemilihan material tergantung pada jenis bahan kimia yang disimpan:</p>
          <ul class="mb-3">
            <li>HDPE (High Density Polyethylene) → tahan korosi, cocok untuk cairan kimia umum.</li>
            <li>FRP (Fiberglass Reinforced Plastic) → tahan asam kuat, basa, bahan kimia agresif.</li>
            <li>Stainless Steel (SS316L) → cocok untuk pelarut, farmasi, hingga makanan &amp; minuman.</li>
          </ul>
          <p class="mb-0">👉 Karena itu, konsultasi sebelum membeli sangat penting untuk memastikan material sesuai kebutuhan.</p>
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
            Apakah Tangki Kimia EXCEL bisa custom?
          </button>
        </h2>
      </div>
      <div id="chemCollapseFour" class="collapse" aria-labelledby="chemHeadingFour" data-parent="#faqChemAccordion">
        <div class="card-body">
          <p class="mb-0">
            Ya. Grahaexcel menyediakan layanan custom sesuai kebutuhan industri: kapasitas, material, bentuk. 
            Ditambah lagi, konsultasi teknis gratis memastikan tangki benar-benar cocok dengan bahan kimia Anda.
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
          <p class="mb-0">Dengan penggunaan tepat dan perawatan berkala, tangki kimia bisa bertahan 10–20 tahun atau lebih.</p>
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
            Apakah Tangki Kimia EXCEL sesuai standar internasional?
          </button>
        </h2>
      </div>
      <div id="chemCollapseSix" class="collapse" aria-labelledby="chemHeadingSix" data-parent="#faqChemAccordion">
        <div class="card-body">
          <p class="mb-0">
            Ya. Semua produk diproduksi dengan standar kualitas tinggi, mengacu pada SNI, JIS, dan regulasi K3L. 
            Setiap tangki melalui uji ketahanan untuk menjamin keamanan, daya tahan, dan keandalan jangka panjang.
          </p>
        </div>
      </div>
    </div>

    <!-- Q7 -->
    <div class="card rounded mb-3">
      <div class="card-header" id="chemHeadingSeven">
        <h2 class="mb-0">
          <button class="btn btn-link btn-block text-left collapsed font-weight-bold text-dark"
                  type="button" data-toggle="collapse" data-target="#chemCollapseSeven"
                  aria-expanded="false" aria-controls="chemCollapseSeven">
            Mengapa industri kimia membutuhkan tangki khusus?
          </button>
        </h2>
      </div>
      <div id="chemCollapseSeven" class="collapse" aria-labelledby="chemHeadingSeven" data-parent="#faqChemAccordion">
        <div class="card-body">
          <p class="mb-0">
            Industri kimia menggunakan bahan sangat agresif seperti asam kuat, basa, atau pelarut organik. 
            Tangki biasa tidak mampu menahan sifat ini.
          </p>
        </div>
      </div>
    </div>

    <!-- Q8 -->
    <div class="card rounded mb-3">
      <div class="card-header" id="chemHeadingEight">
        <h2 class="mb-0">
          <button class="btn btn-link btn-block text-left collapsed font-weight-bold text-dark"
                  type="button" data-toggle="collapse" data-target="#chemCollapseEight"
                  aria-expanded="false" aria-controls="chemCollapseEight">
            Apakah tangki kimia aman untuk farmasi?
          </button>
        </h2>
      </div>
      <div id="chemCollapseEight" class="collapse" aria-labelledby="chemHeadingEight" data-parent="#faqChemAccordion">
        <div class="card-body">
          <p class="mb-0">
            Ya. Farmasi butuh standar higienis tinggi. Tangki kimia untuk farmasi biasanya dari Stainless Steel 316L atau HDPE.
          </p>
        </div>
      </div>
    </div>

    <!-- Q9 -->
    <div class="card rounded mb-3">
      <div class="card-header" id="chemHeadingNine">
        <h2 class="mb-0">
          <button class="btn btn-link btn-block text-left collapsed font-weight-bold text-dark"
                  type="button" data-toggle="collapse" data-target="#chemCollapseNine"
                  aria-expanded="false" aria-controls="chemCollapseNine">
           Apakah tangki kimia bisa untuk cairan makanan?
          </button>
        </h2>
      </div>
      <div id="chemCollapseNine" class="collapse" aria-labelledby="chemHeadingNine" data-parent="#faqChemAccordion">
        <div class="card-body">
          <p class="mb-2">
            Bisa, asalkan materialnya food grade. Umumnya digunakan HDPE food grade atau Stainless Steel.
          </p>
          <p class="mb-0">👉 Tangki Excel memastikan tangki untuk makanan/minuman sesuai standar keamanan pangan internasional.</p>
        </div>
      </div>
    </div>

    <!-- Q10 -->
    <div class="card rounded mb-3">
      <div class="card-header" id="chemHeadingTen">
        <h2 class="mb-0">
          <button class="btn btn-link btn-block text-left collapsed font-weight-bold text-dark"
                  type="button" data-toggle="collapse" data-target="#chemCollapseTen"
                  aria-expanded="false" aria-controls="chemCollapseTen">
             Kenapa tangki kimia penting untuk pengolahan limbah?
          </button>
        </h2>
      </div>
      <div id="chemCollapseTen" class="collapse" aria-labelledby="chemHeadingTen" data-parent="#faqChemAccordion">
        <div class="card-body">
          <p class="mb-0">
            Bahan seperti kaporit, asam, dan basa dipakai untuk netralisasi air/limbah. Jika pakai tangki biasa, cepat rusak &amp; mencemari lingkungan.
          </p>
        </div>
      </div>
    </div>

    <!-- Q11 -->
    <div class="card rounded mb-3">
      <div class="card-header" id="chemHeadingEleven">
        <h2 class="mb-0">
          <button class="btn btn-link btn-block text-left collapsed font-weight-bold text-dark"
                  type="button" data-toggle="collapse" data-target="#chemCollapseEleven"
                  aria-expanded="false" aria-controls="chemCollapseEleven">
           Apa peran tangki kimia di sektor energi/manufaktur?
          </button>
        </h2>
      </div>
      <div id="chemCollapseEleven" class="collapse" aria-labelledby="chemHeadingEleven" data-parent="#faqChemAccordion">
        <div class="card-body">
          <p class="mb-0">
            Di sektor ini, bahan kimia dipakai untuk pendingin, pelarut, atau proses industri. Penyimpanan yang salah bisa mengganggu produksi.
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
          <h3 style="text-align: left;font-size: 25px;">Solusi Penyimpanan Cairan Kimia Lebih Aman = Tangki Kimia Excel</h3>

<p>Dapatkan <strong> penawaran spesial sekarang - Konsultasi gratis </strong> dengan tim teknis berpengalaman, <strong> pengiriman cepat </strong> ke seluruh Indonesia, <strong> garansi resmi & layanan purna jual!</strong></p>
        
                </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
    


        </div>
@endsection