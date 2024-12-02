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
    .product-data-tab { margin-top: 30px; }
    .tab-style-1 .nav-tabs { justify-content: flex-start; }
    .tab-style-1.product-data-tab .product-data-tab__link.nav-link { text-transform: initial; margin-left: 0; font-size: 14px; }
    .below_banner_container { padding: 15px; padding-top: 0px; }
    .below_banner_tagline { color: #ccc; font-size: 14px; margin-bottom: 15px; }
    .below_banner_title { color: #666; font-size: 18px; margin-bottom: 20px; font-weight: bold; }
    .below_banner_desc { color: #333; }
    .color-thumb:nth-of-type(1) {
        margin-left: 0px;
        padding-left: 0px;
    }
    .color-thumb {
        background-color: transparent;
        border: none;
        border-radius: 50%;
        width: 24px;
        height: 34px;
        margin: 0 4px;
        cursor: pointer;
        outline: none;
        display: inline-block;
    }

    .color-thumb i {
        font-size: 24px;
        line-height: 24px;
    }
    .slick-dots {
        bottom: 0;
        position: absolute;
        left: 0;
        right: 0;
        text-align: center;
    }
    .slick-dots li button {
        background: none;
        border: none;
        outline: none;
        box-shadow: none;
    }
    .slick-dots li button:before {
        content: '';
        display: block;
        width: 10px;
        height: 10px;
        border-radius: 50%;
        background: #D8D8D8;
    }

    .slick-dots li.slick-active button:before {
        background: #B8B8BA;
    }


</style>
@endsection

@section('content')
    <?php
    $category = App\Models\Category::find($getProduct->categories); 
    if (!function_exists('getDocumentUrl')) {
        function getDocumentUrl($id)
        {
            return get_uploaded_file_name($id);
            
        }
    }
        if ($getProduct->image) {
            $img = get_uploaded_file_name($getProduct->image);
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
                                        <div class="product-gallery__large-image">
                                            <div class="gallery-with-thumbs">
                                                <div class="product-gallery__wrapper">
                                                    <div class="main-slider product-gallery__full-image image-popup">
                                                        <figure class="product-gallery__image zoom" data-type="color" data-color-id="default">
                                                        <?php
                                                            if ($getProduct->image) {
                                                                echo "<img src='". getDocumentUrl($getProduct->image) ."' alt='".$getProduct->title."' />";
                                                            }
                                                        ?>
                                                        </figure>

                                                        @foreach ($getProduct->image_color as $colorImage)
                                                            <figure class="product-gallery__image zoom" data-type="color" data-color-id="{{ $colorImage->color_id }}">
                                                                <img src="{{ getDocumentUrl($colorImage->image) }}" alt="{{ $colorImage->color->name }}" />
                                                            </figure>
                                                        @endforeach

                                                        @foreach ($getProduct->image_size as $sizeImage)
                                                            <figure class="product-gallery__image zoom" data-type="size" data-size-id="{{ $sizeImage->size_id }}">
                                                                <img src="{{ getDocumentUrl($sizeImage->image) }}" alt="{{ $sizeImage->size->name }}" />
                                                            </figure>
                                                        @endforeach
                                                    </div>
                                                    <div class="product-gallery__actions">
                                                        <button class="action-btn btn-zoom-popup"><i class="dl-icon-zoom-in"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="airi-element-carousel product-carousel nav-vertical-center" 
                                    data-slick-options='{
                                    "spaceBetween": 0,
                                    "slidesToShow": 1,
                                    "slidesToScroll": 1,
                                    "arrows": true,
                                    "dots": true,
                                    "infinite": true,
                                    "prevArrow": "fa fa-chevron-circle-left", 
                                    "nextArrow": "fa fa-chevron-circle-right" 
                                    }'
                                    data-slick-responsive='[
                                        {"breakpoint":1200, "settings": {"slidesToShow": 1} },
                                        {"breakpoint":991, "settings": {"slidesToShow": 1} },
                                        {"breakpoint":450, "settings": {"slidesToShow": 1} }
                                    ]'
                                    >
                                    <?php
                                        if ($getProduct->slideshows) {
                                            $slideshows = json_decode($getProduct->slideshows);
                                            foreach ($slideshows as $slideshowId) {
                                                echo "<div><img src='". getDocumentUrl($slideshowId) ."' alt='Slideshow Banner ".$getProduct->title."' /></div>";
                                            }
                                        }
                                    ?>
                                </div>
                            </div>
                            <div class="col-md-6 product-main-details ">
                                <div class="product-summary">
                                    <div class="clearfix"></div>
                                    <h1 class="product-title">{{$getProduct->title}}</h1>
                                    <p>{{$getProduct->name}}</p>
                                    <p>{{$category->name}}</p>
                                    <hr>
                                    <h4>Pilihan Warna</h4>
                                    <div class="product-gallery__thumb">
                                        @php
                                        if ($getProduct->color){
                                            $setDecode = json_decode($getProduct->color);
                                            foreach ($setDecode as $getColor){
                                                $findColor = DB::table('colors')->where('id', $getColor)->first();
                                                if ($findColor) {
                                                    echo "<button class='product-gallery__thumb--single color-thumb' data-color-id='{$findColor->id }'>";
                                                    echo "<i class='fa fa-circle' style='color: {$findColor->color }'></i>";
                                                    echo "</button>";
                                                }
                                            }
                                        }
                                        @endphp
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
                                                    echo "<li><a href='#' data-size-id='{$findSize->id}'>". $findSize->size ."</a></li>";
                                                }
                                            }
                                        }
                                        ?>
                                    </ul>
                                    <div class="clearfix"></div>
                                    @if($getProduct->katalog_link)
                                        <a href="{{ getDocumentUrl($getProduct->katalog_link) }}" class='btn btn-style-1 btn-medium btn-block add-to-cart' target='_blank'>{{ $getProduct->katalog_label }}</a>
                                    @endif
                                    <a href="https://www.grahaexcel.com/page/kenapa-memilih-excel#contact-us"  class='btn btn-style-1 btn-medium btn-block add-to-cart' style="background: #cf987e; margin-top:10px;">HUBUNGI KAMI</a>
                                    <div class="product-data-tab tab-style-1">
                                        <div class="nav nav-tabs product-data-tab__head mb--40 mb-md--30" id="product-tab" role="tablist">
                                            
                                            <a class="product-data-tab__link nav-link active" id="nav-aksesoris-tab" data-toggle="tab" href="#nav-aksesoris" role="tab" aria-selected="true"> 
                                                <span>Aksesoris</span>
                                            </a>
                                            <a class="product-data-tab__link nav-link" id="nav-carapasang-tab" data-toggle="tab" href="#nav-carapasang" role="tab" aria-selected="true"> 
                                                <span>Cara Pasang</span>
                                            </a>
                                        </div>
                                        <div class="tab-content product-data-tab__content" id="product-tabContent">
                                            <div class="tab-pane fade show active" id="nav-aksesoris" role="tabpanel" aria-labelledby="nav-aksesoris-tab">
                                                <div class="product-description">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <?php
                                                            if ($getProduct->Aksesoris) {
                                                                echo "<img src='". getDocumentUrl($getProduct->Aksesoris) ."' alt='Aksesoris ".$getProduct->title."' />";
                                                            }
                                                            ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="nav-carapasang" role="tabpanel" aria-labelledby="nav-carapasang-tab">
                                                <div class="product-description">
                                                    <div class="col-md-12">
                                                        <?php
                                                        if ($getProduct->cara_pasang) {
                                                            echo "<img src='". getDocumentUrl($getProduct->cara_pasang) ."' alt='Cara Pasang ".$getProduct->title."' />";
                                                        }
                                                        ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-cente pt--45 pt-lg--50 pt-md--55 pt-sm--35" style="margin-bottom: 80px;">
                            <div class="col-12 col-sm-6">
                                <div class="below_banner_container">
                                    <div class="below_banner_tagline">{{$getProduct->below_banner_tagline}}</div>
                                    <div class="below_banner_title">{{$getProduct->below_banner_title}}</div>
                                    <div class="below_banner_desc">{!!$getProduct->below_banner_desc!!}</div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <?php
                                if ($getProduct->right_banner) {
                                    echo "<img src='". getDocumentUrl($getProduct->right_banner) ."' alt='Right Banner ".$getProduct->title."' />";
                                }
                                ?>
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
        <?php /*
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
        */
        ?>
        <div class="container-fluid" style="padding:0;margin:0;">
            <?php
            if($getProduct->banner_bawah)
            {
                echo "<a href='".$getProduct->banner_bawah_link."' target='_blank' style='width:100%;'><img src='". getDocumentUrl($getProduct->banner_bawah) ."' alt='Bottom Banner ".$getProduct->title."' style='width:100%;' /></a>";
            }
            ?>
        </div>
        
        <div class="default-content" style="margin: 60px 0 0;">
            <div class="container">
                <div class="row">
                    <?php
                    for($i = 1; $i <= 4; $i++)
                    {
                        $content_var = "keunggulan_text_{$i}";
                        $content = $getProduct->$content_var;
                        $image_var = "keunggulan_produk_{$i}";
                        $image = $getProduct->$image_var;
                        $url_var = "keunggulan_link_{$i}";
                        $url = $getProduct->$url_var;
                        if($url == "") $url = "#";
                        else $url = getDocumentUrl($getProduct->$url_var);
                        ?>
                        <div class="col-md-3">
                            <div class="content-img">
                                <a href='<?php echo $url; ?>'>
                                <img src="<?php echo getDocumentUrl($getProduct->$image_var); ?>" alt="<?php echo $content; ?>">
                                <h3><?php echo $content; ?></h3>
                                </a>
                            </div>
                        </div>
                        <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
<script>
    $(document).ready(function() {
        const $productImages = $('.product-gallery__image');
        const $colorThumbs = $('.color-thumb');
        const $sizeLinks = $('.product-widget__list a');

        function showImagesByType(type, id) {
            $productImages.hide(); 

            let $selectedImages;

            if (type === 'color') {
                $selectedImages = $productImages.filter(`[data-type="color"][data-color-id="${id}"]`);
            } else if (type === 'size') {
                $selectedImages = $productImages.filter(`[data-type="size"][data-size-id="${id}"]`);
            }

            if ($selectedImages.length) {
                $selectedImages.show().css({
                    'position': 'relative',
                    'overflow': 'hidden',
                    'width': '495px',
                    'left': '0px',
                    'top': '0px',
                    'z-index': '999',
                    'opacity': '1'
                });
            } else {
                $productImages.filter('[data-type="color"][data-color-id="default"]').show().css({
                    'position': 'relative',
                    'overflow': 'hidden',
                    'width': '495px',
                    'left': '0px',
                    'top': '0px',
                    'z-index': '999',
                    'opacity': '1'
                });
            }
        }

        $colorThumbs.on('click', function() {
            const colorId = $(this).data('color-id');
            showImagesByType('color', colorId);
        });

        $sizeLinks.on('click', function(e) {
            e.preventDefault(); 
            $sizeLinks.removeClass('active');
            $(this).addClass('active');

            const sizeId = $(this).data('size-id');
            showImagesByType('size', sizeId);
        });

        showImagesByType('color', 'default'); 
    });
</script>
@endsection