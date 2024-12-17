@extends('pages.layouts.app-without-article')
@section('title', 'PROJECT NAME')

@section('style')
<!-- script -->
<style>
    .prouduct-categories li ul li {
        line-height: 1;
        list-style: none;
        margin-left: 15px;
    }
    .prouduct-categories li ul li a {
        font-size: 12px;
    }
    .product-image img {
        object-position: 50%!important;
    }
</style>
@endsection

@section('content')
    <div id="content" class="main-content-wrapper">
        <div class="page-content-inner enable-page-sidebar">
            <div class="container-fluid">
                <div class="row shop-sidebar pt--45 pt-md--35 pt-sm--20 pb--60-old pb-md--50 pb-sm--40">
                    <div class="col-lg-9 order-1 order-lg-2" id="main-content">
                        <h1 class="text-center" style="margin: 20px 0;">PRODUK GRAHAEXCEL</h1>
                        <div class="shop-products"> 
                            @if(Request::Input('cat'))
                            <?php
                                $getCatId = DB::table('categories')->where('id', Request::Input('cat'))->first();
                                if ($getCatId->image) {
                                    echo "<img src='". get_uploaded_file_name($getCatId->image) ."' alt='".$getCatId->name."' />";
                                }
                            ?>
                            @endif
                            <br/>
                            <br/>
                            <div class="row grid-space-20 xxl-block-grid-4">
                                @foreach($getProduct as $setProduct)
                                <div class="col-lg-4 col-sm-6 mb--40 mb-md--30">
                                    <div class="airi-product">
                                        <div class="product-inner">
                                            <figure class="product-image">
                                                <div class="product-image--holder">
                                                    <a href="{{url('product') .'/'. $setProduct->url_title}}">
                                                        <?php
                                                            if ($setProduct->image) {
                                                                echo "<img src='". get_uploaded_file_name($setProduct->image) ."' alt='".$setProduct->title."' class='single-image' />";
                                                            }
                                                        ?>
                                                    </a>
                                                </div>
                                            </figure>
                                            <div class="product-info">
                                                <h2 class="product-title">
                                                    <a href="{{url('product') .'/'. $setProduct->url_title}}">{{$setProduct->title}}</a>
                                                </h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <nav class="pagination-wrap">
                            {{ $getProduct->links('vendor.pagination.web') }}
                        </nav>
                    </div>
                    <div class="col-lg-3 order-3 order-lg-1 mt-md--40" id="primary-sidebar">
                        <div class="sidebar-widget">
                            <div class="product-widget categroy-widget mb--35 mb-md--30">
                                @include('pages.components.productCategorySidebar')
                            </div>
                        </div>
                    </div>
                    <div class="col-12 order-2 order-lg-3 mt-md--40">
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
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
<!-- script -->
@endsection