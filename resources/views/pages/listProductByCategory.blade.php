@extends('pages.layouts.app')
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
                    <div class="col-lg-9 order-lg-2" id="main-content">
                        <div class="shop-products">
                            @if($url_title)
                            <?php
                                $getCatId = DB::table('categories')->where('url_title', $url_title)->first();
                                if ($getCatId->image) {
                                    echo "<img src='". get_uploaded_file_name($getCatId->image) ."' alt='Foto ".$getCatId->name."' />";
                                }
                            ?>
                            @endif
                            <h1 class="category_title">{{$curCat->name}}</h1>
                            @if($url_title)
                            <div class="category_description">{!! $curCat->description !!}</div>
                            @endif
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
                                                                echo "<img src='". get_uploaded_file_name($setProduct->image) ."' class='single-image' alt='Gambar ".$setProduct->title."' />";
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
                    <div class="col-lg-3 order-lg-1 mt-md--40" id="primary-sidebar">
                        <div class="sidebar-widget">
                            <div class="product-widget categroy-widget mb--35 mb-md--30">
                                @include('pages.components.productCategorySidebar')
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
