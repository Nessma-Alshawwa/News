<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Vizew</title>

    <!-- Favicon -->
    <link rel="icon" href="{{asset("img/core-img/favicon.ico")}}">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="{{asset("css/style.css")}}">

</head>

<body>
    <!-- Preloader -->
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="lds-ellipsis">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>

    <!-- ##### Header Area Start ##### -->
    <header class="header-area">
        <!-- Navbar Area -->
        <div class="vizew-main-menu" id="sticker">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">

                    <!-- Menu -->
                    <nav class="classy-navbar justify-content-between" id="vizewNav">

                        <!-- Nav brand -->
                        <a href="{{route('home')}}" class="nav-brand"><img src="{{asset("img/core-img/logo.png")}}" alt=""></a>

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <div class="classy-menu">

                            <!-- Close Button -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul>
                                    <li class="active"><a href="{{route('home')}}">Home</a></li>
                                    <li><a href="#">Archives</a></li>
                                    <li><a href="#">Pages</a>
                                        <ul class="dropdown">
                                            <li><a href="{{route('home')}}">- Home</a></li>
                                            <li><a href="#">- Archive</a></li>
                                            <li><a href="#">- Single Post</a></li>
                                            <li><a href="#">- Contact</a></li>
                                            <li><a href="#">- Typography</a></li>
                                            <li><a href="#">- Login</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Contact</a></li>
                                </ul>
                            </div>
                            <!-- Nav End -->
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->

    <!-- ##### Vizew Post Area Start ##### -->
    <br>
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
                                                    {{-- 1- <h1>{{$v->id}} || <a href="http://127.0.0.1:8000/news/4">{{$v->title}}</a> </h1>--}}
                                                    {{-- 2- <h1>{{$v->id}} || <a href="{{url("news/".$v->id)}}">{{$v->title}}</a> </h1> --}}

                                                    <h5>{{$v->id}} || <a href="{{route('post',$v->id)}}" class="post-title mb-3">{{$v->title}}</a> </h5>
                                                    <p>{{$v->disc}}</p>
                                                    <a class="btn vizew-btn mt-auto" href="{{route('delete_news',$v->id)}}">Delete News</a>
                                                    <a class="btn vizew-btn mt-auto" href="{{route('soft_delete_news',$v->id)}}">Soft Delete News</a>
{{--                                                    <a class="btn vizew-btn mt-15" href="{{route('restore',$v->id)}}">Restore</a>--}}
                                                </div>
                                            </div>
                                        </div>
                                @endforeach

                                <span>{{ $all_news->render() }}</span>
                            </div>
                            <div class="row justify-content-center">
                                <a class="btn vizew-btn mt-15" href="{{route('restore')}}">Restore</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ##### Archive Grid Posts Area End ##### -->
        </div>
    </section>
    <!-- ##### Trending Posts Area End ##### -->

    <section class="contact-area mb-80">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <!-- Section Heading -->
                    <div class="section-heading style-2">
                        <h4>ADD NEWS</h4>
                        <div class="line"></div>
                    </div>
                    <div>
                        <p>
                        @if($errors->any())
                            <ul>@foreach($errors->all() as $error)
                                    <li>{{$error}}</li>
                                @endforeach
                            </ul>
                        @endif
                        </p>
                    </div>

                    <!-- ADD Form Area -->
                    <div class="contact-form-area mt-50">
                        <form method="post" action="{!! route('add_news') !!}" enctype="multipart/form-data">
                            {!! csrf_field() !!}
                            <div class="form-group">
                                <label for="title">Title*</label>
                                <input type="text" name="title" placeholder="Title" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="disc">Discription*</label>
                                <input type="text" name="disc" placeholder="Discription" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="contents">Content*</label>
{{--                                <input type="text" name="contents" placeholder="Content" class="form-control">--}}
                                <textarea name="contents" placeholder="Content" cols="30" rows="10" class="form-control"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="add_by">User*</label>
                                <input type="text" name="add_by" placeholder="User" class="form-control">
                            </div>
                            <div class="form-group">
                                <select name="status">
                                    <option value="active">active</option>
                                    <option value="not_active">not_active</option>
                                </select>
                            </div>
                            <button class="btn vizew-btn mt-30" type="submit" value="Add News">Add News</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Contact Area End ##### -->

    <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area">
        <div class="container">
            <div class="row">
                <!-- Footer Widget Area -->
                <div class="col-12 col-sm-6 col-xl-3">
                    <div class="footer-widget mb-70">
                        <!-- Logo -->
                        <a href="{{route('home')}}" class="foo-logo d-block mb-4"><img src="{{asset("img/core-img/logo2.png")}}" alt=""></a>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna</p>
                    </div>
                </div>

                <!-- Footer Widget Area -->
                <div class="col-12 col-sm-6 col-xl-3">
                    <div class="footer-widget mb-70">
                        <h6 class="widget-title">Our Address</h6>
                        <!-- Contact Address -->
                        <div class="contact-address">
                            <p>101 E 129th St, East Chicago, <br>IN 46312, US</p>
                            <p>Phone: 001-1234-88888</p>
                            <p>Email: info.colorlib@gmail.com</p>
                        </div>
                        <!-- Footer Social Area -->
                        <div class="footer-social-area">
                            <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                            <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
                            <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                            <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                            <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!-- Copywrite Area -->
        <div class="copywrite-area">
            <div class="container">
                <div class="row align-items-center">
                    <!-- Copywrite Text -->
                    <div class="col-12 col-sm-6">
                        <p class="copywrite-text">Copyright &copy; 2020</p>
                    </div>
                    <div class="col-12 col-sm-6">
                        <nav class="footer-nav">
                            <ul>
                                <li><a href="#">Advertise</a></li>
                                <li><a href="#">About</a></li>
                                <li><a href="#">Contact</a></li>
                                <li><a href="#">Disclaimer</a></li>
                                <li><a href="#">Privacy</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ##### Footer Area End ##### -->

    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="{{asset("js/jquery/jquery-2.2.4.min.js")}}"></script>
    <!-- Popper js -->
    <script src="{{asset("js/bootstrap/popper.min.js")}}"></script>
    <!-- Bootstrap js -->
    <script src="{{asset("js/bootstrap/bootstrap.min.js")}}"></script>
    <!-- All Plugins js -->
    <script src="{{asset("js/plugins/plugins.js")}}"></script>
    <!-- Active js -->
    <script src="{{asset("js/active.js")}}"></script>
</body>

</html>
