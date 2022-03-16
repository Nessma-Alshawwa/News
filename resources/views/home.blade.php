@extends('layouts.main')

@section('MainContent')
<section class="vizew-post-area mb-50">
    <div class="container">
        <div class="col-12">
            <div class="all-posts-area">
                <!-- Section Heading -->
                <div class="section-heading style-2">
                    <h4>Featured Videos</h4>
                    <div class="line"></div>
                </div>

                <!-- Featured Post Slides -->
                <div class="featured-post-slides owl-carousel mb-30">
                    <!-- Single Feature Post -->
                    <div class="single-feature-post video-post bg-img" style="background-image: url({{asset("img/bg-img/14.jpg")}});">
                        <!-- Play Button -->
                        <a href="#" class="btn play-btn"><i class="fa fa-play" aria-hidden="true"></i></a>

                        <!-- Post Content -->
                        <div class="post-content">
                            <a href="#" class="post-cata">Business</a>
                            <a href="#" class="post-title">Theresa May battles Brexiteer backlash amid disquiet</a>
                            <div class="post-meta d-flex">
                                <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 25</a>
                                <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 25</a>
                                <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 25</a>
                            </div>
                        </div>

                        <!-- Video Duration -->
                        <span class="video-duration">05.03</span>
                    </div>

                    <!-- Single Feature Post -->
                    <div class="single-feature-post video-post bg-img" style="background-image: url({{asset("img/bg-img/11.jpg")}});">
                        <!-- Play Button -->
                        <a href="#" class="btn play-btn"><i class="fa fa-play" aria-hidden="true"></i></a>

                        <!-- Post Content -->
                        <div class="post-content">
                            <a href="#" class="post-cata">Music</a>
                            <a href="#" class="post-title">Reunification of migrant toddlers, parents should be completed Thursday</a>
                            <div class="post-meta d-flex">
                                <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 25</a>
                                <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 25</a>
                                <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 25</a>
                            </div>
                        </div>

                        <!-- Video Duration -->
                        <span class="video-duration">05.03</span>
                    </div>

                    <!-- Single Feature Post -->
                    <div class="single-feature-post video-post bg-img" style="background-image: url({{asset("img/bg-img/10.jpg")}});">
                        <!-- Play Button -->
                        <a href="#" class="btn play-btn"><i class="fa fa-play" aria-hidden="true"></i></a>

                        <!-- Post Content -->
                        <div class="post-content">
                            <a href="#" class="post-cata">Sports</a>
                            <a href="#" class="post-title">Quisque mollis tristique ante. Proin ligula eros, varius id tristique sit amet, rutrum non ligula.</a>
                            <div class="post-meta d-flex">
                                <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 25</a>
                                <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 25</a>
                                <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 25</a>
                            </div>
                        </div>

                        <!-- Video Duration -->
                        <span class="video-duration">05.03</span>
                    </div>

                    <!-- Single Feature Post -->
                    <div class="single-feature-post video-post bg-img" style="background-image: url({{asset("img/bg-img/23.jpg")}});">
                        <!-- Play Button -->
                        <a href="#" class="btn play-btn"><i class="fa fa-play" aria-hidden="true"></i></a>

                        <!-- Post Content -->
                        <div class="post-content">
                            <a href="#" class="post-cata">Game</a>
                            <a href="#" class="post-title">Thailand cave rescue: Boys 'doing well' after spending night</a>
                            <div class="post-meta d-flex">
                                <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 25</a>
                                <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 25</a>
                                <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 25</a>
                            </div>
                        </div>

                        <!-- Video Duration -->
                        <span class="video-duration">05.03</span>
                    </div>

                    <!-- Single Feature Post -->
                    <div class="single-feature-post video-post bg-img" style="background-image: url({{asset("img/bg-img/22.jpg")}});">
                        <!-- Play Button -->
                        <a href="#" class="btn play-btn"><i class="fa fa-play" aria-hidden="true"></i></a>

                        <!-- Post Content -->
                        <div class="post-content">
                            <a href="#" class="post-cata">Sports</a>
                            <a href="#" class="post-title">May fights on after Johnson savages Brexit approach</a>
                            <div class="post-meta d-flex">
                                <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 25</a>
                                <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 25</a>
                                <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 25</a>
                            </div>
                        </div>

                        <!-- Video Duration -->
                        <span class="video-duration">05.03</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ##### Trending Posts Area Start ##### -->
<section class="trending-posts-area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <!-- Section Heading -->
                <div class="section-heading">
                    <h4>Trending Post News</h4>
                    <div class="line"></div>
                </div>
            </div>
        </div>
        <!-- ##### Archive Grid Posts Area Start ##### -->
        <div class="vizew-grid-posts-area mb-80">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-8">
                        <!-- Archive Catagory & View Options -->
                        <div class="archive-catagory-view mb-50 d-flex align-items-center justify-content-between">
                            <!-- Catagory -->
                            <div class="archive-catagory">
                                <h4><i class="fa fa-trophy" aria-hidden="true"></i> Post</h4>
                            </div>
                        </div>

                        <div class="row">
                            @foreach($all_news as $v)
                                <!-- Single Blog Post -->
                                    <div class="col-12 col-md-6">
                                        <div class="single-post-area mb-50">
                                            <!-- Post Thumbnail -->


                                            <!-- Post Content -->
                                            <div class="post-content">
                                                <h5>{{$v->id}} || <a href="{{route('post',$v->id)}}" class="post-title mb-3">{{$v->title}}</a> </h5>
                                                <p>{{$v->disc}}</p>
                                                <a class="btn vizew-btn mt-auto" href="{{route('delete_news',$v->id)}}">Delete News</a>
                                                <a class="btn vizew-btn mt-auto" href="{{route('soft_delete_news',$v->id)}}">Soft Delete News</a>
                                            </div>
                                        </div>
                                    </div>
                            @endforeach

                            <span>{{ $all_news->links('vendor.pagination.custom') }}</span>
                        </div>
                        <div class="row justify-content-center">
                            <a class="btn vizew-btn mt-15 mr-5" href="{{route('restore')}}">Restore</a>
                            <a class="btn vizew-btn mt-15" href="{{route('create_new')}}">Create news</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ##### Archive Grid Posts Area End ##### -->
    </div>
</section>
@stop