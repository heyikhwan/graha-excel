@extends('pages.layouts.app')
@section('title', 'PROJECT NAME')

@section('style')
<!-- script -->
@endsection

@section('content')
<style>
    h3.post-title { text-align: left; }
    h3.post-title a { font-size: 1.6rem; text-align: left; }
    .post-content p { text-align: left; font-size: 1.2rem; }
    .post-info { padding: 0; }
    .news-category-content { text-align: center !important; }
</style>
    <div id="content" class="main-content-wrapper">
        <div class="page-content-inner blog-page-sidebar">
            <div class="container">
                <div class="row ptb--80 pt-md--60 pb-md--55 pt-sm--50 pb-sm--45 justify-content-center">
                    <div class="col-lg-10 order-lg-2 mb-md--40" id="main-content">
                        
                        <div class="row">
                          <div class="col-sm-12 text-center">
                            <h1 class="text-center">{{$currentCategory->title}}</h1>
                            <div class="text-center news-category-content">{!! $currentCategory->description !!}</div>
                          </div>
                        </div>
                        <br /><br />
                        <div class="row">
                            
                            @foreach($articles as $article)
                            <div class="col-sm-4 col-lg-4 mb--40 mb-md--30 mb-sm--25">
                                <article class="post">
                                    <div class="post-media">
                                        <div class="image">
                                            <?php
                                            // if($currentCategory->url_title == "tips-toren-air") $currentCategory->url_title = "tips";
                                            // if($currentCategory->url_title == "tips-atap-upvc") $currentCategory->url_title = "tips";
                                                if ($article->image) {
                                                    $findImage = DB::table('uploads')->where('id', $article->image)->first();
                                                    echo "<img src=". asset('storage/files/1/' . rawurlencode(substr($findImage->path, strrpos($findImage->path, '/') + 1))) ." alt='".$article->title."'  />";
                                                } else {
                                                    echo "<img src='{{asset('public/main/img/c6.jpg')}}' />";
                                                }
                                            ?>
                                            <a href="{{url('/articles') .'/'. $article->article_category->url_title.'/'.$article->url_title}}" class="link-overlay">{{$article->title}}</a>
                                        </div>
                                    </div>
                                    <div class="post-info">
                                        <h3 class="post-title">
                                            <a href="{{url('/articles') .'/'. $article->article_category->url_title.'/'.$article->url_title}}">{{$article->title}}</a>
                                        </h3>
                                        {{-- <div class="post-meta">
                                            <a href="{{url('/articles') .'/'. $article->article_category->url_title}}" class="posted-on" tabindex="0">{{date('d M, Y', strtotime($getNews->created_at))}}</a>
                                        </div> --}}
                                        <div class="post-content">
                                            <p>{{substr(strip_tags($article->description), 0, 100)}}...</p>
                                        </div>
                                        {{-- <a href="{{url('/articles') .'/'. $article->article_category->url_title.'/'.$article->url_title}}" class="read-more-btn">Read More</a> --}}
                                    </div>
                                </article>
                            </div>
                            @endforeach
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <nav class="pagination-wrap">
                                    <!-- <ul class="pagination">
                                        <li><a href="#" class="prev page-number"><i class="fa fa-long-arrow-left"></i></a></li>
                                        <li><span class="current page-number">1</span></li>
                                        <li><a href="#" class="page-number">2</a></li>
                                        <li><a href="#" class="page-number">3</a></li>
                                        <li><a href="#" class="next page-number"><i class="fa fa-long-arrow-right"></i></a></li>
                                    </ul> -->
                                    {{ $articles->links('vendor.pagination.web') }}
                                </nav>
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