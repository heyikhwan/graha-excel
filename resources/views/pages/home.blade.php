@extends('pages.layouts.app')
@section('title', 'PROJECT NAME')

@section('style')
<style>
    .carousel-caption {
        position: absolute;
        right: 0;
        top: 20%;
        left: 5%;
        z-index: 10;
        padding-top: 20px;
        padding-bottom: 20px;
        color: #fff;
        text-align: start;
    }
    .btn {
        padding: 0 5rem;
        min-height: 5rem;
        line-height: 5rem;
    }
    .btn-outline-light {
        color: #f8f9fa!important;
        background-color: transparent!important;
        background-image: none;
        border-color: #f8f9fa;
    }
    .btn-outline-dark {
        color: #343a40!important;
        background-color: transparent!important;
        background-image: none;
        border-color: #343a40;
    }
    .home-info h2 {
        font-size: 26px;
        font-weight: 700;
        margin-bottom: 20px;
    }
    .home-info h3 {
        font-size: 16px;
        font-weight: 600;
        margin-top: 10px;
        margin-bottom: 5px;
    }
    #content .banner h2{
        line-height: 1.2!important;
    }
    .about-1 h2 {
        line-height: 1.2!important;
    }
    .small-img {
        display: none;
    }
    @media only screen and (max-width: 320px) {
        .carousel-caption {
            padding-top: 10px!important;
        }
    }
    @media only screen and (max-width: 600px) {
        .small-img {
            display: block;
        }
        .large-img {
            display: none!important;
        }
        .about-1 {
            padding: 0!important;
        }
        #content .banner img{
            height: 300px;
            filter: brightness(0.5);
            object-fit: cover!important;
        }
        #content .banner {
            margin-top: 0%;
        }
        #content .banner h1{
            font-size: 16px!important;
        }
        #content .banner h2{
            font-size: 22px!important;
        }
        #content .banner a.btn{
            padding: 0 3rem!important;
            min-height: 3rem!important;
            line-height: 3rem!important;
            font-size:12px!important
        }
        #content .banner .carousel-caption {
            left: 15%!important;
            right: 15%!important;
            text-align: center!important;
        }
    }

    @media only screen and (max-width: 768px) {
        #content .banner {
            margin-top: 0%;
        }
    }

    @media only screen and (max-width: 992px) {
        #content .banner {
            margin-top: 0%;
        }
    }
</style>
@endsection

@section('content')
    <div class="banner">
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                @foreach($banners as $key => $banner)
                <div class="carousel-item active">
                    <a href="{{ $banner?->link ?? '#' }}" class="w-100">
                        <img class="large-img d-block w-100" src="{{ $banner?->image ? get_uploaded_file_name($banner->image) : '' }}" alt="{{ $banner->title }}"  />
                        <img class="small-img w-100" src="{{ $banner?->mobile_image ? get_uploaded_file_name($banner->mobile_image) : '' }}" alt="{{ $banner->title }}"  />
                    </a>
                    <div class="carousel-caption">
                        {!! $banner->content !!}
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <section class="about-1">
        <div class="container">
            <div class="row">
                <div class="col-md-6 m-auto p-5">
                    <h2 style="font-size: 24px; text-transform: uppercase; font-weight: 600; margin-bottom: 20px;">Pionir Tangki Air Berkualitas Sejak 1969</h2>
                    <p class="justifys">Sejak 1969, GRAHAEXCEL PLASTINDO menjadi pelopor industri plastik di Indonesia dengan inovasi Triple Construction System untuk tangki air. Kami terus berkomitmen menghadirkan produk penampungan air dan kimia berkualitas, didukung oleh tim Research & Development serta teknologi terbaru. Produk EXCEL diproduksi dengan standar SNI, JIS, dan FDA, melalui pengawasan ketat untuk menjaga kualitas.</p>
                    <div class="row">
                        <div class="col-6 p-3">
                            <img src="{{asset('assets/web/img/checked.png')}}">
                            <span class="ml-3">TEKNOLOGI TERDEPAN</span>
                        </div>
                        <div class="col-6 p-3">
                            <img src="{{asset('assets/web/img/checked.png')}}">
                            <span class="ml-3">BAHAN BERKUALITAS</span>
                        </div>
                        <div class="col-6 p-3">
                            <img src="{{asset('assets/web/img/checked.png')}}">
                            <span class="ml-3">STANDAR KUALITAS</span>
                        </div>
                        <div class="col-6 p-3">
                            <img src="{{asset('assets/web/img/checked.png')}}">
                            <span class="ml-3">BERORIENTASI PELANGGAN</span>
                        </div>
                    </div>
                    <div class="more-btn mt-5">
                        <a href="{{url('/page/kenapa-memilih-excel')}}" class="btn btn-outline-dark">LIHAT LEBIH LANJUT</a>
                    </div>
                </div>
                <div class="col-md-6 p-0">
                    <br/>
                    <img src="{{asset('storage/files/1/TangkidiPabrik.jpg')}}" alt="Tangki Excel di Pabrik Grahaexcel">
                </div>
            </div>
        </div>
    </section>
    <section class="home-product">
        <div class="container">
            <h2 class="text-center" style="font-size: 24px; text-transform: uppercase; font-weight: 600; margin-bottom: 20px;">Produk Tangki Air</h2>
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
                                    <a href="https://www.grahaexcel.com/category/tangki-air-stainless">TANGKI STAINLESS</a>
                                </h3>
                                <span class="product-price-wrapper">
                                    <p>Tandon air Stainless Steel Excel dibuat dari bahan dasar stainless steel dengan grade terbaik yaitu AISI 304 (8% Nickel). Memiliki ketahanan korosi paling tinggi dibanding tangki air stainless merek lain di Indonesia. Tangki air khusus untuk penyimpanan air bersih (PAM) dan minyak.</p>
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
                                    <a href="https://www.grahaexcel.com/category/hidran-umum">
                                        <img src="https://www.grahaexcel.com/assets/web/img/TANGKI-HIDRAN-UMUM-EXCEL-1.webp" alt="Tangki Hidran Umum Excel" class="single-image">
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
                

                

                

            </div>
        </div>
    </section>

    <section class="home-info" style="background: #f9f9f9;">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <h2>News &amp; Events</h2>
                    <p>Memproduksi merek-merek terbaik di industri bahan bangunan. Kami telah menghadirkan lebih dari 20 brand yang turut andil dalam membangun Indonesia. 
                    Jutaan manusia telah menggunakan produk kami setiap harinya. Berikut adalah reviu tentang beberapa produk GRAHAEXCEL serta editorial tentang produk kami.</p>
                </div>
                <div class="col-md-7">
                    <div class="row">
                        @foreach($newscategories as $newscategory)
                        <div class="col-md-4">
                            <div>
                                <?php
                                                if ($newscategory->image) {
                                                    echo "<a href='".url('/articles') .'/'. $newscategory->url_title."'><img src='". get_uploaded_file_name($newscategory->image) ."' alt='".$newscategory->title."'  /></a>";
                                                } else {
                                                    // echo "<img src='{{asset('assets/web/img/c6.jpg')}}' class='img-square-2' />";
                                                }
                                            ?>
                                <h3 class="post-title">
                                            <a href="{{url('/articles') .'/'. $newscategory->url_title}}">{{$newscategory->title}}</a>
                                        </h3>
                                <p class="m-10">{{substr(strip_tags($newscategory->description), 0, 60)}}..</p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="home-info">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <h2><a href='https://www.grahaexcel.com/articles/tips'>Tips Toren Air dan Atap uPVC</a></h2>
                    <p>Tips, cara pasang dan cara pemeliharaan produk-produk Excel.</p>
                </div>
                <div class="col-md-7">
                    <div class="row">
                        @foreach($articles as $article)
                        <div class="col-md-4">
                            <div>
                                <?php
                                $currentCategory = App\Models\Newscategory::where('id', $article->category)->first();
                                
                                                if ($article->image) {
                                                    echo "<a href='".url('/articles') .'/'. $currentCategory->url_title.'/'.$article->url_title."'><img src='". get_uploaded_file_name($article->image) ."' alt='".$article->title."'  /></a>";
                                                } else {
                                                    // echo "<img src='{{asset('assets/web/img/c6.jpg')}}' class='img-square-2' />";
                                                }
                                            ?>
                                <h3 class="post-title">
                                            <a href="{{url('/articles') .'/'. $currentCategory->url_title.'/'.$article->url_title}}">{{$article->title}}</a>
                                        </h3>
                                <p class="m-10">{{substr(strip_tags($article->description), 0, 60)}}..</p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('script')
<script type="application/ld+json">
    {
        "@context": "https://schema.org/",
        "@type": "Organization",
        "url": "https://www.grahaexcel.com/",
        "logo": {
        "@type": "ImageObject",
        "url": "https://www.grahaexcel.com/assets/images/logo.png"
        },
        "name": "EXCEL"
    }
</script> 
<script type="application/ld+json">
    {
    "@context": "https://schema.org/",
    "@type": "WebSite",
    "name": "GRAHA EXCEL",
    "url": "https://www.grahaexcel.com/",
    "sameAs": "https://www.grahaexcel.com/",
    "description": "Distributor Toren air EXCEL, Tangki Kimia dan Atap uPVC",
    "image": {
        "@type": "ImageObject",
        "url": "https://www.grahaexcel.com/assets/images/logo.png"
    },
    "identifier": "Distributor Toren air EXCEL, Tangki Kimia dan Atap uPVC"
    }
</script>
@endsection