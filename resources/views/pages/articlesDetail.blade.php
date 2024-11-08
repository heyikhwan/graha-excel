@extends('pages.layouts.app')
@section('title', 'PROJECT NAME')
@section('meta_tag')
    <meta name="keywords" content="{{ $getNews?->meta_keyword ?? $getNews->news_category->title }}">
@endsection
@section('style')
<style>iframe[src*="youtube.com"]{width: 100% !important;height: auto!important;aspect-ratio:16/9 !important;}
    .post-content a{
        font-weight: 700;
        color: blue;
    }
</style>
<!-- script -->
@endsection

@section('content')
<style>
    h3 a { font-size: 2rem; }
</style>
<?php
        if ($getNews->image) {
            $img = get_uploaded_file_name($getNews->image);
        }
        else
        {
            $img = "";
        }
        echo '<script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "NewsArticle",
      "mainEntityOfPage": {
        "@type": "WebPage",
        "@id": "'.url($_SERVER['REQUEST_URI']).'"
      },
      "headline": "'.$getNews->title.'",
      "image": [
        "'.$img.'"
       ],
      "datePublished": "'.date('Y-m-d', strtotime($getNews->created_at)).'T08:00:00+07:00",
      "dateModified": "'.date('Y-m-d', strtotime($getNews->created_at)).'T08:00:00+07:00",
      "author": {
        "@type": "Person",
        "name": "Grahaexcel Admin"
      },
       "publisher": {
        "@type": "Organization",
        "name": "Grahaexcel",
        "logo": {
          "@type": "ImageObject",
          "url": "https://www.grahaexcel.com/assets/images/logo.png"
        }
      }
    }
    </script>
    <script type="application/ld+json">
    {
    "@context": "https://schema.org/",
    "@type": "BreadcrumbList",
    "itemListElement": [
        {
        "@type": "ListItem",
        "position": "1",
        "name": "Home",
        "item": "https://www.grahaexcel.com/"
        },
        {
        "@type": "ListItem",
        "position": "2",
        "name": "'.$getNews->news_category->title.'",
        "item": "https://www.grahaexcel.com/articles/'.$getNews->news_category->url_title.'"
        },
        {
        "@type": "ListItem",
        "position": "3",
        "name": "'.$getNews->title.'",
        "item": "'.url($_SERVER['REQUEST_URI']).'"
        }
    ]
    }
    </script>';
    ?>
    <div id="content" class="main-content-wrapper">
        <div class="page-content-inner blog-page-sidebar">
            <div class="container">
                <div class="row ptb--80 pt-md--60 pb-md--55 pt-sm--50 pb-sm--45 justify-content-center">
                    <div class="col-lg-9 order-lg-2 mb-md--40" id="main-content">
                        <div class="row">
                            <div class="col-md-12">
                                <article class="single-post-details">
                                    <div class="entry-header">
                                        <h1 class="entry-title">{{$getNews->title}}</h1>
                                        <div class="entry-meta">
                                            <div class="entry-meta-top">
                                                <div class="posted-on">
                                                    {{date('d M, Y', strtotime($getNews->dt_published))}}
                                                    - 
                                                    <a href="{{url('/articles') .'/'. $currentCategory->url_title}}">{{$currentCategory->title}}</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="post-media">
                                        <div class="image">
                                            <?php
                                                if ($getNews->image) {
                                                    $alt = $getNews?->image_alt_text ?? "Gambar ".$getNews->title;
                                                    echo "<img src='". get_uploaded_file_name($getNews->image) ."' alt='".$alt."'  />";
                                                }
                                            ?>
                                        </div>
                                    </div>
                                    <div class="post-info">
                                        <div class="post-content text-left">
                                            {!!str_replace(["http:/", 'alt=""', 'public/files'], ["https:/", 'alt="Gambar '.$getNews->title." ".intval(rand(0,10)).'"', 'images/files'],$getNews->description)!!}
                                        </div>
                                    </div>
                                </article>
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