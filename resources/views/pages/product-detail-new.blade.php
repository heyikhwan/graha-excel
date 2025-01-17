@extends('pages.layouts.app-without-article')
@section('title', 'PROJECT NAME')

@section('style')
<!-- script -->
<style>
    .product-categories li ul li {
        line-height: 1;
        list-style: none;
        margin-left: 15px;
        margin-bottom: 15px;
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

    .content-img .feature {
        text-align: center;
        background: #f7f7f7;
        margin-bottom: 30px;
        display: inline-block;
    }

    .content-img .feature h3 {
        font-size: 13px;
        margin: 15px 0;
        text-transform: uppercase;
    }
    @media only screen and (max-width: 600px) {
        .product-gallery__image img {
            height: auto!important;
        }
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


    $title = htmlspecialchars($getProduct->title, ENT_QUOTES, 'UTF-8');
    $image = htmlspecialchars($img, ENT_QUOTES, 'UTF-8');


    $description = !empty($getProduct->description)
        ? htmlspecialchars(strip_tags($getProduct->description), ENT_QUOTES, 'UTF-8')
        : 'Deskripsi tidak tersedia';


    echo '<script type="application/ld+json">
    {
        "@context": "https://schema.org/",
        "@type": "Product",
        "name": "' . $title . '",
        "image": "' . $image . '",
        "description": "' . $description . '",
        "brand": {
            "@type": "Brand",
            "name": "Excel"
        },
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
                <div class="col-lg-9 order-1 order-lg-2" id="main-content">
                    <div class="row">
                        <div class="col-md-6 product-main-image">
                            <div class="product-image">
                                <div class="product-gallery ms-dong">
                                    <div class="product-gallery__large-image">
                                        <div class="gallery-with-thumbs">
                                            <div class="product-gallery__wrapper">
                                                <div class="main-slider product-gallery__full-image image-popup">
                                                    @php
                                                        $sortedImageColorSizes = $getProduct->image_color_sizes->sortBy('size_id');
                                                    @endphp
                                                    @foreach ($sortedImageColorSizes as $index => $colorImageSize)
                                                        <figure class="product-gallery__image zoom {{ $index === 0 ? 'default' : '' }}" data-type="color" data-color-id="{{ $colorImageSize->color_id }}" data-size-id="{{ $colorImageSize->size_id }}">
                                                            <img src="{{ getDocumentUrl($colorImageSize->image) }}" alt="{{ $colorImageSize->color->name }}" />
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
                                        $sizes = [];
                                        foreach ($setDecode as $getSize) {
                                            $findSize = DB::table('sizes')->where('id', $getSize)->first();
                                            if ($findSize) {
                                                $sizes[] = $findSize;
                                            }
                                        }

                                        if (!function_exists('extractNumberFromSize')) {
                                            function extractNumberFromSize($sizeName) {
                                                preg_match('/\d+/', $sizeName, $matches);
                                                return isset($matches[0]) ? (int) $matches[0] : 0;
                                            }
                                        }

                                        usort($sizes, function($a, $b) {
                                            return extractNumberFromSize($a->size) - extractNumberFromSize($b->size);
                                        });

                                        foreach ($sizes as $findSize) {
                                            echo "<li><a href='#' data-size-id='{$findSize->id}'>" . $findSize->size . "</a></li>";
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
                <div class="col-lg-3 order-4 order-lg-1 mt-md--40" id="primary-sidebar">
                    <div class="sidebar-widget">
                        <!-- Category Widget Start -->
                        <div class="product-widget categroy-widget mb--35 mb-md--30">
                            @include('pages.components.productCategorySidebar')
                        </div>
                        <!-- Category Widget Start -->
                    </div>
                </div>
                <div class="col-12 order-2 order-lg-3">
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
                                    if($url == "" || $url == 0) $url = "#";
                                    else $url = getDocumentUrl($getProduct->$url_var);
                                    ?>
                                    <div class="col-md-3">
                                        <div class="content-img">
                                            @if($url == "#")
                                            <div class="feature">
                                                <img src="<?php echo getDocumentUrl($getProduct->$image_var); ?>" alt="<?php echo $content; ?>">
                                                <h3><?php echo $content; ?></h3>
                                            </div>
                                            @else
                                            <a href='<?php echo $url; ?>'>
                                                <img src="<?php echo getDocumentUrl($getProduct->$image_var); ?>" alt="<?php echo $content; ?>">
                                                <h3><?php echo $content; ?></h3>
                                            </a>
                                            @endif
                                        </div>
                                    </div>
                                    <?php
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 order-3 order-lg-4 mt-md--40">
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
    </div>
@endsection

@section('script')
<script>
    $(document).ready(function() {
        //$('.product-gallery__image').slick('setPosition');

        const $productImages = $('.product-gallery__image');
        const $colorThumbs = $('.color-thumb');
        const $sizeLinks = $('.product-widget__list a');

        let selectedColorId = $colorThumbs.first().data('color-id'); // Default to the first color
        let selectedSizeId = null; // No size selected initially

        function showImagesByType() {
            $productImages.hide(); // Hide all images first

            // Filter images by both selected color and selected size
            let $selectedImages = $productImages.filter(function() {
                const colorMatch = $(this).data('color-id') === selectedColorId;
                const sizeMatch = selectedSizeId ? $(this).data('size-id') === selectedSizeId : true;
                return colorMatch && sizeMatch;
            });

            // If selected images exist, show them
            if ($selectedImages.length) {
                $selectedImages.show().css({
                    'position': 'relative',
                    'overflow': 'hidden',
                    'left': '0px',
                    'top': '0px',
                    'z-index': '999',
                    'opacity': '1'
                });
            } else {
                // Show default image if no matching images found
                $productImages.filter('.default').show().css({
                    'position': 'relative',
                    'overflow': 'hidden',
                    'left': '0px',
                    'top': '0px',
                    'z-index': '999',
                    'opacity': '1'
                });
            }
        }

        // Handle color selection
        $colorThumbs.on('click', function() {
            selectedColorId = $(this).data('color-id');
            showImagesByType(); // Update images based on the current selection
        });

        // Handle size selection
        $sizeLinks.on('click', function(e) {
            e.preventDefault();
            $sizeLinks.removeClass('active');
            $(this).addClass('active');

            selectedSizeId = $(this).data('size-id');
            showImagesByType(); // Update images based on the current selection
        });

        // Initialize images display based on the default color
        showImagesByType();

        // Automatically select the first size if available
        if ($sizeLinks.length > 0) {
            const firstSizeLink = $sizeLinks.first();
            firstSizeLink.addClass('active');
            selectedSizeId = firstSizeLink.data('size-id');
            showImagesByType();
        }
    });

</script>
@endsection
