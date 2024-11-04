@extends('pages.layouts.app')
@section('title', 'PROJECT NAME')

@section('style')
<!-- script -->
@endsection

@section('content')
<style>
    h3 a { font-size: 2rem; }
</style>
    <div id="content" class="main-content-wrapper">
        <div class="page-content-inner blog-page-sidebar">
            <div class="container">
                <div class="row ptb--80 pt-md--60 pb-md--55 pt-sm--50 pb-sm--45 justify-content-center">
                    <div class="col-lg-10 order-lg-2 mb-md--40" id="main-content">
                        <h1 class="text-center" style="margin: 20px 0;">Berita, Tips, dan Events Terbaru</h1>
                        <img src="{{asset('assets/web/img/placeholder/header-news.jpg')}}" alt="Berita Terbaru">
                        <br/>
                        <br/>
                        <div class="row">
                            @foreach($articleCategories as $articleCategory)
                            <div class="col-sm-4 col-lg-4 mb--40 mb-md--30 mb-sm--25">
                                <article class="post">
                                    <div class="post-media">
                                        <div class="image">
                                            <?php
                                                if ($articleCategory->image) {
                                                    echo "<img src='". get_uploaded_file_name($articleCategory->image) ."' alt='".$articleCategory->title."'  />";
                                                } else {
                                                    echo "<img src='{{asset('public/main/img/c6.jpg')}}' alt='".$articleCategory->title."' />";
                                                }
                                            ?>
                                            <a href="{{url('/articles') .'/'. $articleCategory->url_title}}" class="link-overlay">{{$articleCategory->title}}</a>
                                        </div>
                                    </div>
                                    <div class="post-info">
                                        <h3 class="post-title">
                                            <a href="{{url('/articles') .'/'. $articleCategory->url_title}}">{{$articleCategory->title}}</a>
                                        </h3>
                                        {{-- <div class="post-meta">
                                            <a href="{{url('/articles') .'/'. $articleCategory->url_title}}" class="posted-on" tabindex="0">{{date('d M, Y', strtotime($getNews->created_at))}}</a>
                                        </div> --}}
                                        <div class="post-content">
                                            <p>{{substr(strip_tags($articleCategory->description), 0, 100)}}</p>
                                        </div>
                                        {{-- <a href="{{url('/articles') .'/'. $articleCategory->url_title}}" class="read-more-btn">Read More</a> --}}
                                    </div>
                                </article>
                            </div>
                            @endforeach
                        </div>
                        <!-- <div class="row">
                            <div class="col-12">
                                <nav class="pagination-wrap">
                                    <ul class="pagination">
                                        <li><a href="#" class="prev page-number"><i class="fa fa-long-arrow-left"></i></a></li>
                                        <li><span class="current page-number">1</span></li>
                                        <li><a href="#" class="page-number">2</a></li>
                                        <li><a href="#" class="page-number">3</a></li>
                                        <li><a href="#" class="next page-number"><i class="fa fa-long-arrow-right"></i></a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
<!-- script -->
@endsection