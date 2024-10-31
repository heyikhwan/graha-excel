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
    .ms-dong .slick-slide img {
        height: 500px;
    }
    .product-gallery__thumb {
        display: block;
    }
    .product-gallery__thumb--single {
        float:left;
    }
    .product-gallery__thumb--single i {
        font-size: 24px;
        border: 1px solid #ccc;
        border-radius: 50%;
        height: 27px;
        width: 27px;
        margin: 5px 10px 0 0;
        line-height: 1;
        text-align: center;
        cursor: default;
    }
</style>
@endsection

@section('content')
    <?php
        if ($getProduct->image) {
            $findImage = DB::table('uploads')->where('id', $getProduct->image)->first();
            $img = asset('storage/files/1/' . rawurlencode(substr($findImage->path, strrpos($findImage->path, '/') + 1)));
        }
        else
        {
            $img = "";
        }
        echo '<script type="application/ld+json">
    {"@context": "https://schema.org/", "@type": "Product", 
      "name": "'.$getProduct->title.'",
      "image": "'.$img.'",
      "description": "'.strip_tags($getProduct->description).'",
      "brand": "Excel",
      "aggregateRating": {
        "@type": "AggregateRating",
        "ratingValue": "5",
        "ratingCount": "27"
      }
    }
    </script>';
    ?>
    
    
    <div class="page-content-inner enable-page-sidebar">
        <div class="container-fluid">
            <div class="row shop-sidebar pt--45 pt-md--35 pt-sm--20">
                    <div class="col-lg-9 order-lg-2" id="main-content">
                        <div class="row">
                            <div class="col-md-6 product-main-image">
                                <div class="product-image">
                                    <div class="product-gallery ms-dong">
                                        <div class="product-gallery__large-image mb--20">
                                            <div class="gallery-with-thumbs">
                                                <div class="product-gallery__wrapper">
                                                    <div class="main-slider product-gallery__full-image image-popup">
                                                        <figure class="product-gallery__image zoom">
                                                        <?php
                                                            if ($getProduct->image) {
                                                                $findImage = DB::table('uploads')->where('id', $getProduct->image)->first();
                                                                echo "<img src=". asset('storage/files/1/' . rawurlencode(substr($findImage->path, strrpos($findImage->path, '/') + 1))) ." alt='".$getProduct->title."' />";
                                                            }
                                                        ?>
                                                        </figure>
                                                    </div>
                                                    <div class="product-gallery__actions">
                                                        <button class="action-btn btn-zoom-popup"><i class="dl-icon-zoom-in"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 product-main-details ">
                                <div class="product-summary">
                                    <div class="clearfix"></div>
                                    <h1 class="product-title">{{$getProduct->title}}</h1>
                                    <p>{{$getProduct->name}}</p>
                                    <hr>
                                    <h4>Pilihan Warna</h4>
                                    <div class="product-gallery__thumb">
                                        <div class="product-gallery__thumb--image">
                                            <div>
                                                <?php
                                                    if ($getProduct->color) {
                                                        $setDecode = json_decode($getProduct->color);
                                                        foreach ($setDecode as $getColor) {
                                                            $findColor = DB::table('colors')->where('id', $getColor)->first();
                                                            if ($findColor) {
                                                                echo "<figure class='product-gallery__thumb--single'>";
                                                                echo "<i class='fa fa-circle' style='color:". $findColor->color ."'></i>";
                                                                echo "</figure>";
                                                            }
                                                        }
                                                    }
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div style="clear:both"></div>
                                    <hr>
                                    <h4>Pilihan Tipe</h4>
                                    <ul class="product-widget__list four two-column-list">
                                        <?php
                                        if ($getProduct->size) {
                                            $setDecode = json_decode($getProduct->size);
                                            foreach ($setDecode as $getSize) {
                                                $findSize = DB::table('sizes')->where('id', $getSize)->first();
                                                if ($findSize) {
                                                    echo "<li><a href='#'>". $findSize->size ."</a></li>";
                                                }
                                            }
                                        }
                                        ?>
                                    </ul>
                                    <div class="clearfix"></div>
                                    <?php
                                        if ($getProduct->dimention) {
                                            $findImage = DB::table('uploads')->where('id', $getProduct->dimention)->first();
                                            echo "<a href=". asset('storage/files/1/' . rawurlencode(substr($findImage->path, strrpos($findImage->path, '/') + 1))) ." class='btn btn-style-1 btn-medium btn-block add-to-cart popup-btn'>DIMENSI</a>";
                                        }
                                    ?>
                                    <a href="https://www.grahaexcel.com/page/kenapa-memilih-excel#contact-us"  class='btn btn-style-1 btn-medium btn-block add-to-cart' style="background: #cf987e; margin-top:10px;">HUBUNGI KAMI</a>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-cente pt--45 pt-lg--50 pt-md--55 pt-sm--35">
                            <div class="col-12">
                                <div class="product-data-tab tab-style-1">
                                    <div class="nav nav-tabs product-data-tab__head mb--40 mb-md--30" id="product-tab" role="tablist">
                                        <a class="product-data-tab__link nav-link active" id="nav-description-tab" data-toggle="tab" href="#nav-description" role="tab" aria-selected="true"> 
                                            <span>Detail</span>
                                        </a>
                                        @foreach($getAttr as $setAttr)
                                        <a class="product-data-tab__link nav-link" id="attr-tab-{{$setAttr->id}}" data-toggle="tab" href="#id-attr-{{$setAttr->id}}" role="tab" aria-selected="true">
                                            <span>{{$setAttr->title}}</span>
                                        </a>
                                        @endforeach
                                        {{-- <a class="product-data-tab__link nav-link" id="nav-reviews-tab" data-toggle="tab" href="#nav-reviews" role="tab" aria-selected="true">
                                            <span>Review</span>
                                        </a> --}}
                                    </div>
                                    <div class="tab-content product-data-tab__content" id="product-tabContent">
                                        <div class="tab-pane fade show active" id="nav-description" role="tabpanel" aria-labelledby="nav-description-tab">
                                            <div class="product-description">
                                                <div class="row">
                                                    <div class="col-md-9 offset-md-1">
                                                    {!!$getProduct->description!!}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @foreach($getAttr as $setAttr)
                                        <div class="tab-pane fade" id="id-attr-{{$setAttr->id}}" role="tabpanel" aria-labelledby="attr-tab-{{$setAttr->id}}">
                                            <div class="product-description">
                                                <?php
                                                    if ($setAttr->image) {
                                                        $findImage = DB::table('uploads')->where('id', $setAttr->image)->first();
                                                        echo "<img src=". asset('storage/files/1/' . rawurlencode(substr($findImage->path, strrpos($findImage->path, '/') + 1))) ." alt=\"Gambar ".$getProduct->title." ".intval(rand(0,10))."\" style='margin-top:-55px' />";
                                                        echo "<br/>";
                                                        echo "<br/>";
                                                    }
                                                ?>
                                                <div class="row">
                                                    <div class="col-md-9 offset-md-1">
                                                    {!!$setAttr->description!!}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                        <div class="tab-pane fade" id="nav-reviews" role="tabpanel" aria-labelledby="nav-reviews-tab">
                                            <div class="product-reviews">
                                                <!-- <h3 class="review__title">1 review for Waxed-effect pleated skirt</h3> -->
                                                <ul class="review__list">
                                                    @foreach($getReview as $setReview)
                                                    <li class="review__item">
                                                        <div class="review__container">
                                                            <!-- <img src="assets/img/others/comment-icon-2.png" alt="Review Avatar" class="review__avatar"> -->
                                                            <div class="review__text">
                                                                <div class="product-rating float-right">
                                                                    <!-- <span>
                                                                        <i class="dl-icon-star rated"></i>
                                                                        <i class="dl-icon-star rated"></i>
                                                                        <i class="dl-icon-star rated"></i>
                                                                        <i class="dl-icon-star rated"></i>
                                                                        <i class="dl-icon-star rated"></i>
                                                                    </span> -->
                                                                </div>
                                                                <div class="review__meta">
                                                                    <strong class="review__author">{{$setReview->name}} </strong>
                                                                    <span class="review__dash">-</span>
                                                                    <span class="review__published-date">{{date('d M, Y', strtotime($setReview->created_at))}}</span>
                                                                </div>
                                                                <div class="clearfix"></div>
                                                                <p class="review__description">{{strip_tags($setReview->review)}}</p>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <div class="col-lg-3 order-lg-1mt-md--40" id="primary-sidebar">
                    <div class="sidebar-widget">
                        <!-- Category Widget Start -->
                        <div class="product-widget categroy-widget mb--35 mb-md--30">
                            @include('pages.components.productCategorySidebar')
                        </div>
                        <!-- Category Widget Start -->
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row pb--30 pb-md--40">
                <div class="col-12">
                    <div class="row mb--40 mb-md--30">
                        <div class="col-12 text-center">
                            <div class="line-sep prod mtb-40">
                                <div class="line-title">PRODUK FAVORIT LAINNYA</div>
                                <div class="line-center"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="airi-element-carousel product-carousel nav-vertical-center" 
                            data-slick-options='{
                            "spaceBetween": 30,
                            "slidesToShow": 4,
                            "slidesToScroll": 1,
                            "arrows": true, 
                            "prevArrow": "dl-icon-left", 
                            "nextArrow": "dl-icon-right" 
                            }'
                            data-slick-responsive='[
                                {"breakpoint":1200, "settings": {"slidesToShow": 3} },
                                {"breakpoint":991, "settings": {"slidesToShow": 2} },
                                {"breakpoint":450, "settings": {"slidesToShow": 1} }
                            ]'
                            >
                                @foreach($getRelated as $setRelated)
                                <div class="airi-product">
                                    <div class="product-inner">
                                        <figure class="product-image">
                                            <div class="product-image--holder">
                                                <a href="{{url('product') .'/'. $setRelated->url_title}}">
                                                    <?php
                                                        if ($setRelated->image) {
                                                            $findImage = DB::table('uploads')->where('id', $setRelated->image)->first();
                                                            echo "<img src=". asset('storage/files/1/' . rawurlencode(substr($findImage->path, strrpos($findImage->path, '/') + 1))) ." alt='".$setRelated->title."' class='single-image' />";
                                                        }
                                                    ?>
                                                </a>
                                            </div>
                                        </figure>
                                        <div class="product-info">
                                            <h3 class="product-title">
                                                <a href="{{url('product') .'/'. $setRelated->url_title}}">{{$setRelated->title}}</a>
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
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