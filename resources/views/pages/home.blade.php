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
</style>
@endsection

@section('content')
    <div class="banner">
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                @foreach($banners as $key => $banner)
                <div class="carousel-item active">
                    <a href="{{ $banner?->link ?? '#' }}">
                        <img class="d-block w-100" src="{{ $banner?->image ? get_uploaded_file_name($banner->image) : '' }}" alt="{{ $banner->title }}"  />
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
                    <h1 style="font-size: 24px; text-transform: uppercase; font-weight: 600; margin-bottom: 20px;">Pionir Tangki Air Berkualitas Sejak 1969</h1>
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
                    <img src="{{asset('assets/web/img/placeholder/excel-sejak-tahun-1969.jpg')}}" alt="Foto Excel sejak tahun 1969">
                </div>
            </div>
        </div>
    </section>
    <section class="home-product">
        <div class="container">
            <div class="row">
                
                <div class="col-xl-4 col-lg-4 col-sm-6 mb--40 mb-md--30">
                    <div class="airi-product">
                        <div class="product-inner">
                            <figure class="product-image">
                                <div class="product-image--holder">
                                    <a href="{{url('/category/tangki-air-crema-stone')}}">
                                        <img src="{{asset('assets/web/img/Tangki-Air-Crystal-Series.webp')}}" alt="Tangki Air Crystal Series" class="single-image">
                                    </a>
                                </div>
                            </figure>
                            <div class="product-info">
                                <h3 class="product-title">
                                        <a href="{{url('/category/tangki-air-crema-stone')}}">Tangki Air EXCEL - Crystal Series | Roto</a>
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
                                    <a href="{{url('#')}}">
                                        <img src="{{asset('assets/web/img/Tangki-Air-Pop-Series.webp')}}" alt="Tangki Air Pop Series" class="single-image">
                                    </a>
                                </div>
                            </figure>
                            <div class="product-info">
                                <h3 class="product-title">
                                        <a href="{{url('#')}}">Tangki Air EXCEL - Pop Series | Roto</a>
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
                                    <a href="{{url('/category/tangki-air-kimia')}}">
                                        <img src="{{asset('assets/web/img/Tangki-Air-Classic-Series.webp')}}" alt="Tangki Air dan Kimia Excel" class="single-image">
                                    </a>
                                </div>
                            </figure>
                            <div class="product-info">
                                <h3 class="product-title">
                                    <a href="{{url('/category/tangki-air-kimia')}}">Tangki Air EXCEL - Classic Series | Roto</a>
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
                                    <a href="{{url('/category/tangki-total-kuras')}}">
                                        <img src="{{asset('assets/web/img/Tangki-Air-Total-Drain.webp')}}" alt="Tangki Total Kuras Total Drain" class="single-image">
                                    </a>
                                </div>
                            </figure>
                            <div class="product-info">
                                <h3 class="product-title">
                                        <a href="{{url('/category/tangki-total-kuras')}}">Tangki Total Kuras, Total Drain | Roto</a>
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
                                    <a href="{{url('/product/tangki-air-sehat-minum')}}">
                                        <img src="{{asset('assets/web/img/Tangki-Air-Blow.webp')}}" alt="Tangki Air Blow" class="single-image">
                                    </a>
                                </div>
                            </figure>
                            <div class="product-info">
                                <h3 class="product-title">
                                        <a href="{{url('/product/tangki-air-sehat-minum')}}">Tangki Air Sehat | Blow Series</a>
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
                                    <a href="{{url('/product/tangki-bioseptic')}}">
                                        <img src="{{asset('assets/web/img/Tangki-Air-Bioseptik-Tank.webp')}}" alt="Tangki Bioseptik" class="single-image">
                                    </a>
                                </div>
                            </figure>
                            <div class="product-info">
                                <h3 class="product-title">
                                        <a href="{{url('/product/tangki-bioseptic')}}">Tangki EXCEL Bioseptik | Blow Series</a>
                                </h3>
                                <span class="product-price-wrapper">
                                    <p>Satu-satunya di Indonesia dan di Dunia - <i>Septic tank</i> dengan teknologi <i>blow moulding</i>, menjadikan tangki 2x lebih kuat dan 5 tahap filtrasi untuk mengurai lebih maksimal. Hasilnya penguraian maksimal dan kekuatan optimal. Kapasitas 1000 liter dan 1500 liter</p>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="more-btn m-auto" style="padding-bottom: 100px">
                    <a href="{{url('/products')}}" class="btn btn-outline-dark">LIHAT LEBIH BANYAK</a>
                </div>
                <?php /*
                <div class="col-xl-4 col-lg-4 col-sm-6 mb--40 mb-md--30">
                    <div class="airi-product">
                        <div class="product-inner">
                            <figure class="product-image">
                                <div class="product-image--holder">
                                    <a href="JavaScript:Void(0);">
                                        <img src="{{asset('assets/web/img/new/soon.jpg')}}" alt="Product Image" class="single-image">
                                    </a>
                                </div>
                            </figure>
                            <div class="product-info">
                                <h3 class="product-title">
                                    <a href="JavaScript:Void(0);">SEGERA HADIR</a>
                                </h3>
                                <span class="product-price-wrapper">
                                    <p>Nantikan produk terbaru Graha Excel</p>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                */ ?>

                

            </div>
        </div>
    </section>

    <section class="home-info" style="background: #f9f9f9;">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <h3>News &amp; Events</h3>
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
                                <h4 class="post-title">
                                            <a href="{{url('/articles') .'/'. $newscategory->url_title}}">{{$newscategory->title}}</a>
                                        </h4>
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
                    <h3><a href='https://www.grahaexcel.com/articles/tips'>Tips Toren Air dan Atap uPVC</a></h3>
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
                                <h4 class="post-title">
                                            <a href="{{url('/articles') .'/'. $currentCategory->url_title.'/'.$article->url_title}}">{{$article->title}}</a>
                                        </h4>
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
<!-- script -->
@endsection