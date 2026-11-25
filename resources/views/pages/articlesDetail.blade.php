@extends('pages.layouts.app')
@section('title', 'PROJECT NAME')
@section('meta_tag')
    <meta name="keywords" content="{{ $getNews?->meta_keyword ?? $getNews->news_category->title }}">
    @if (!empty($getNews?->schema))
        {!! $getNews->schema !!}
    @endif
@endsection
@section('og_tags')
    <meta property="og:type" content="article">
    <meta property="og:title" content="{{ $getNews->page_title ?: $getNews->title }}">
    <meta property="og:description" content="{{ \App\Support\Meta::cleanDescription($metaDescription ?? '') }}">
    <meta property="og:image" content="{{ $getNews->image ? get_uploaded_file_name($getNews->image) : asset('assets/images/logo.png') }}">
    <meta property="og:url" content="{{ url($_SERVER['REQUEST_URI']) }}">
    <meta property="og:site_name" content="Grahaexcel">
    <meta property="article:published_time" content="{{ date('c', strtotime($getNews->created_at)) }}">
    <meta property="article:modified_time" content="{{ date('c', strtotime($getNews->updated_at)) }}">
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
    .recent-articles { margin-top: 60px; padding-top: 40px; border-top: 1px solid #eee; }
    .recent-articles-title { text-align: left; margin-bottom: 30px; }
    .recent-articles h3.post-title { text-align: left; }
    .recent-articles h3.post-title a { font-size: 1.6rem; text-align: left; }
    .recent-articles .post-content p { text-align: left; font-size: 1.2rem; }
    .recent-articles .post-info { padding: 0; }
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
                                                    Ditulis oleh: Tim Graha Excel
                                                    -
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

                        @if ($recentArticles->isNotEmpty())
                        <div class="recent-articles">
                            <h2 class="recent-articles-title">Recent Articles</h2>
                            <div class="row">
                                @foreach ($recentArticles as $recent)
                                    @php
                                        $recentUrl = url('/articles') . '/' . ($recent->article_category->url_title ?? '') . '/' . $recent->url_title;
                                    @endphp
                                    <div class="col-sm-4 col-lg-4 mb--40 mb-md--30 mb-sm--25">
                                        <article class="post">
                                            <div class="post-media">
                                                <div class="image">
                                                    @if ($recent->image)
                                                        <img src="{{ get_uploaded_file_name($recent->image) }}" alt="{{ $recent->image_alt_text ?: $recent->title }}" loading="lazy" />
                                                    @endif
                                                    <a href="{{ $recentUrl }}" class="link-overlay">{{ $recent->title }}</a>
                                                </div>
                                            </div>
                                            <div class="post-info">
                                                <h3 class="post-title">
                                                    <a href="{{ $recentUrl }}">{{ $recent->title }}</a>
                                                </h3>
                                                <div class="post-content">
                                                    <p>{{ \Illuminate\Support\Str::limit(strip_tags($recent->description), 100) }}</p>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
<!-- script -->
@endsection
