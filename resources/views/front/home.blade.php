<!doctype html>
<html lang="en">

<head>

    <!--====== Required meta tags ======-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="capitalist Africa est un site qui publie des articles d’actualité de manières journalière">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--====== Title ======-->
    <title>Capitalist| Africa</title>

    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="{{asset('capitalistAf/assets/images/LogoCA.png')}}" type="image/png">

    <!--====== Bootstrap css ======-->
    <link rel="stylesheet" href="{{asset('capitalistAf/assets/css/bootstrap.min.css')}}">

    <!--====== Fontawesome css ======-->
    <link rel="stylesheet" href="{{asset('capitalistAf/assets/css/font-awesome.min.css')}}">

    <!--====== nice select css ======-->
    <link rel="stylesheet" href="{{asset('capitalistAf/assets/css/nice-select.css')}}">

    <!--====== Magnific Popup css ======-->
    <link rel="stylesheet" href="{{asset('capitalistAf/assets/css/magnific-popup.css')}}">

    <!--====== Slick css ======-->
    <link rel="stylesheet" href="{{asset('capitalistAf/assets/css/slick.css')}}">

    <!--====== Default css ======-->
    <link rel="stylesheet" href="{{asset('capitalistAf/assets/css/default.css')}}">

    <!--====== Style css ======-->
    <link rel="stylesheet" href="{{asset('capitalistAf/assets/css/style.css')}}">

    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-5548895987560863"
     crossorigin="anonymous"></script>
</head>

<body>

    @include('front.layout.head')


    <!--====== BINDUZ HEADER PART ENDS ======-->

    <!--====== BINDUZ HERO PART START ======-->

    <section class="binduz-er-news-slider-2-area pt-50">
        <div class=" container-fluid p-0">
            <div class="row">
                <div class=" col-lg-12">
                    <div class="binduz-er-news-slider-2-item">
                        @foreach($categories as $mycategorie)
                        @if($mycategorie->priority=="principale")
                        <div class="binduz-er-news-viewed-most">
                            <div class="binduz-er-thumb">
                                @if($mycategorie->image)
                                <img src="{{$mycategorie->image}}" width="574px" height="574px" alt="">
                                @else
                                <img src="{{asset('capitalistAf/assets/images/journee_traite.jpg')}}" width="574px" height="574px" alt="">
                                @endif
                            </div>
                            <div class="binduz-er-content">
                                <div class="binduz-er-meta-item">
                                    <div class="binduz-er-meta-categories">
                                        @if($mycategorie->categorie=="fi")
                                        <a href="#">Finances</a>
                                        @elseif($mycategorie->categorie=="po")
                                        <a href="#">Politiques</a>
                                        @elseif($mycategorie->categorie=="id")
                                        <a href="#">Industries</a>
                                        @elseif($mycategorie->categorie=="an")
                                        <a href="#">Analyses</a>
                                        @else
                                        <a href="#">Bourse</a>
                                        @endif
                                    </div>
                                    <div class="binduz-er-meta-date">
                                        <span><i class="fal fa-calendar-alt"></i> {{$mycategorie->updated_at}}</span>
                                    </div>
                                </div>
                                <h4 class="binduz-er-title"><a href="{{route('article.details',['ref'=>$mycategorie->ref,'categorie'=>$mycategorie->categorie])}}">{{$mycategorie->title}}</a></h4>
                            </div>
                        </div>
                        @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!--====== BINDUZ HERO PART ENDS ======-->


    <!--====== BINDUZ TRENDING PART START ======-->

    <section class="binduz-er-trending-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-12">
                    <div class="binduz-er-trending-news-topbar d-block d-md-flex justify-content-between align-items-center">
                        <div class="binduz-er-trending-box">
                            <div class="binduz-er-title">
                                <h3 class="binduz-er-title">Catégories</h3>
                            </div>
                        </div>

                        <div class="binduz-er-news-tab-btn d-flex justify-content-md-end justify-content-start">
                            <ul class="nav nav-pills " id="pills-tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link active" id="pills-1-tab" data-bs-toggle="pill" href="#pills-1" role="tab" aria-controls="pills-1" aria-selected="true">Finances</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="pills-2-tab" data-bs-toggle="pill" href="#pills-2" role="tab" aria-controls="pills-2" aria-selected="false">Politique</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="pills-3-tab" data-bs-toggle="pill" href="#pills-3" role="tab" aria-controls="pills-3" aria-selected="false">Industries</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="pills-4-tab" data-bs-toggle="pill" href="#pills-4" role="tab" aria-controls="pills-4" aria-selected="false">Bourse</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="pills-5-tab" data-bs-toggle="pill" href="#pills-5" role="tab" aria-controls="pills-5" aria-selected="false">Analyses</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="binduz-er-trending-news-list">
                                <div class="tab-content mt-50" id="pills-tabContent">
                                    <div class="tab-pane fade show active" id="pills-1" role="tabpanel" aria-labelledby="pills-1-tab">
                                        <div class="row">
                                            <div class="col-lg-7 col-md-6">
                                                <div class="binduz-er-trending-box">
                                                    <div class="binduz-er-trending-news-item">
                                                        <img src="{{asset('capitalistAf/assets/images/news-slider-2.jpg')}}" alt="">
                                                        <div class="binduz-er-trending-news-overlay">
                                                            <div class="binduz-er-trending-news-meta">
                                                                <div class="binduz-er-meta-categories">
                                                                    <a href="#">Finances</a>
                                                                </div>
                                                                <!-- <div class="binduz-er-meta-date">
                                                                    <span><i class="fal fa-calendar-alt"></i> 24th February 2020</span>
                                                                </div> -->
                                                                <div class="binduz-er-trending-news-title">
                                                                    <h3 class="binduz-er-title"><a href="#">L'actualité à votre porté</a></h3>
                                                                </div>
                                                            </div>
                                                            <!-- <div class="binduz-er-news-share">
                                                                <a href="#"><i class="fal fa-share"></i></a>
                                                            </div> -->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-5 col-md-6">
                                                <div class="binduz-er-trending-news-list-item" style="overflow-y: auto; height: 420px;">
                                                    @foreach($categories as $mycategorie)
                                                    @if($mycategorie->categorie=="fi")
                                                    <div class="binduz-er-trending-news-list-box">
                                                        <div class="binduz-er-thumb">
                                                            @if($mycategorie->image)
                                                            <img src="{{$mycategorie->image}}" width="116px" height="100px" alt="">
                                                            @else
                                                            <img src="{{asset('capitalistAf/assets/images/trending-news-list-thumb-1.jpg')}}" width="116px" height="100px" alt="">
                                                            @endif
                                                        </div>
                                                        <div class="binduz-er-content">
                                                            <div class="binduz-er-meta-item">
                                                                <div class="binduz-er-meta-categories">
                                                                    <a href="#">Finances</a>
                                                                </div>
                                                                <div class="binduz-er-meta-date">
                                                                    <span><i class="fal fa-calendar-alt"></i> {{$mycategorie->updated_at}}</span>
                                                                </div>
                                                            </div>
                                                            <div class="binduz-er-trending-news-list-title">
                                                                <h4 class="binduz-er-title"><a href="{{route('article.details',['ref'=>$mycategorie->ref,'categorie'=>$mycategorie->categorie])}}">{{$mycategorie->title}}</a></h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    @endif
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="pills-2" role="tabpanel" aria-labelledby="pills-2-tab">
                                        <div class="row">
                                            <div class="col-lg-7 col-md-6">
                                                <div class="binduz-er-trending-box">
                                                    <div class="binduz-er-trending-news-item">
                                                        <img src="{{asset('capitalistAf/assets/images/news-slider-3.jpg')}}" alt="">
                                                        <div class="binduz-er-trending-news-overlay">
                                                            <div class="binduz-er-trending-news-meta">
                                                                <div class="binduz-er-meta-categories">
                                                                    <a href="#">Politique</a>
                                                                </div>
                                                                <!-- <div class="binduz-er-meta-date">
                                                                    <span><i class="fal fa-calendar-alt"></i> 24th February 2020</span>
                                                                </div> -->
                                                                <div class="binduz-er-trending-news-title">
                                                                    <h3 class="binduz-er-title"><a href="#">L'actualité à votre porté</a></h3>
                                                                </div>
                                                            </div>
                                                            <!-- <div class="binduz-er-news-share">
                                                                <a href="#"><i class="fal fa-share"></i></a>
                                                            </div> -->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-5 col-md-6">
                                                <div class="binduz-er-trending-news-list-item" style="overflow-y: auto; height: 420px;">
                                                    @foreach($categories as $mycategorie)
                                                    @if($mycategorie->categorie=="po")
                                                    <div class="binduz-er-trending-news-list-box">
                                                        <div class="binduz-er-thumb">
                                                            @if($mycategorie->image)
                                                            <img src="{{$mycategorie->image}}" width="116px" height="100px" alt="">
                                                            @else
                                                            <img src="{{asset('capitalistAf/assets/images/trending-news-list-thumb-1.jpg')}}" width="116px" height="100px" alt="">
                                                            @endif
                                                        </div>
                                                        <div class="binduz-er-content">
                                                            <div class="binduz-er-meta-item">
                                                                <div class="binduz-er-meta-categories">
                                                                    <a href="#">Politique</a>
                                                                </div>
                                                                <div class="binduz-er-meta-date">
                                                                    <span><i class="fal fa-calendar-alt"></i> {{$mycategorie->updated_at}}</span>
                                                                </div>
                                                            </div>
                                                            <div class="binduz-er-trending-news-list-title">
                                                                <h4 class="binduz-er-title"><a href="{{route('article.details',['ref'=>$mycategorie->ref,'categorie'=>$mycategorie->categorie])}}">{{$mycategorie->title}}</a></h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    @endif
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="pills-3" role="tabpanel" aria-labelledby="pills-3-tab">
                                        <div class="row">
                                            <div class="col-lg-7 col-md-6">
                                                <div class="binduz-er-trending-box">
                                                    <div class="binduz-er-trending-news-item">
                                                        <img src="{{asset('capitalistAf/assets/images/news-slider-2.jpg')}}" alt="">
                                                        <div class="binduz-er-trending-news-overlay">
                                                            <div class="binduz-er-trending-news-meta">
                                                                <div class="binduz-er-meta-categories">
                                                                    <a href="#">Industries</a>
                                                                </div>
                                                                <!-- <div class="binduz-er-meta-date">
                                                                    <span><i class="fal fa-calendar-alt"></i> 24th February 2020</span>
                                                                </div> -->
                                                                <div class="binduz-er-trending-news-title">
                                                                    <h3 class="binduz-er-title"><a href="#">L'actualité à votre porté</a></h3>
                                                                </div>
                                                            </div>
                                                            <!-- <div class="binduz-er-news-share">
                                                                <a href="#"><i class="fal fa-share"></i></a>
                                                            </div> -->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-5 col-md-6">
                                                <div class="binduz-er-trending-news-list-item" style="overflow-y: auto; height: 420px;">
                                                    @foreach($categories as $mycategorie)
                                                    @if($mycategorie->categorie=="id")
                                                    <div class="binduz-er-trending-news-list-box">
                                                        <div class="binduz-er-thumb">
                                                            @if($mycategorie->image)
                                                            <img src="{{$mycategorie->image}}" width="116px" height="100px" alt="">
                                                            @else
                                                            <img src="{{asset('capitalistAf/assets/images/trending-news-list-thumb-1.jpg')}}" width="116px" height="100px" alt="">
                                                            @endif
                                                        </div>
                                                        <div class="binduz-er-content">
                                                            <div class="binduz-er-meta-item">
                                                                <div class="binduz-er-meta-categories">
                                                                    <a href="#">Industries</a>
                                                                </div>
                                                                <div class="binduz-er-meta-date">
                                                                    <span><i class="fal fa-calendar-alt"></i> {{$mycategorie->updated_at}}</span>
                                                                </div>
                                                            </div>
                                                            <div class="binduz-er-trending-news-list-title">
                                                                <h4 class="binduz-er-title"><a href="{{route('article.details',['ref'=>$mycategorie->ref,'categorie'=>$mycategorie->categorie])}}">{{$mycategorie->title}}</a></h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    @endif
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="pills-4" role="tabpanel" aria-labelledby="pills-4-tab">
                                        <div class="row">
                                            <div class="col-lg-7 col-md-6">
                                                <div class="binduz-er-trending-box">
                                                    <div class="binduz-er-trending-news-item">
                                                        <img src="{{asset('capitalistAf/assets/images/trending-thumb.png')}}" alt="">
                                                        <div class="binduz-er-trending-news-overlay">
                                                            <div class="binduz-er-trending-news-meta">
                                                                <div class="binduz-er-meta-categories">
                                                                    <a href="#">Bourse</a>
                                                                </div>
                                                                <!-- <div class="binduz-er-meta-date">
                                                                    <span><i class="fal fa-calendar-alt"></i> 24th February 2020</span>
                                                                </div> -->
                                                                <div class="binduz-er-trending-news-title">
                                                                    <h3 class="binduz-er-title"><a href="#">L'actualité à votre porté</a></h3>
                                                                </div>
                                                            </div>
                                                            <!-- <div class="binduz-er-news-share">
                                                                <a href="#"><i class="fal fa-share"></i></a>
                                                            </div> -->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-5 col-md-6">
                                                <div class="binduz-er-trending-news-list-item" style="overflow-y: auto; height: 420px;">
                                                    @foreach($categories as $mycategorie)
                                                    @if($mycategorie->categorie=="bo")
                                                    <div class="binduz-er-trending-news-list-box">
                                                        <div class="binduz-er-thumb">
                                                            @if($mycategorie->image)
                                                            <img src="{{$mycategorie->image}}" width="116px" height="100px" alt="">
                                                            @else
                                                            <img src="{{asset('capitalistAf/assets/images/trending-news-list-thumb-1.jpg')}}" width="116px" height="100px" alt="">
                                                            @endif
                                                        </div>
                                                        <div class="binduz-er-content">
                                                            <div class="binduz-er-meta-item">
                                                                <div class="binduz-er-meta-categories">
                                                                    <a href="#">Bourse</a>
                                                                </div>
                                                                <div class="binduz-er-meta-date">
                                                                    <span><i class="fal fa-calendar-alt"></i> {{$mycategorie->updated_at}}</span>
                                                                </div>
                                                            </div>
                                                            <div class="binduz-er-trending-news-list-title">
                                                                <h4 class="binduz-er-title"><a href="{{route('article.details',['ref'=>$mycategorie->ref,'categorie'=>$mycategorie->categorie])}}">{{$mycategorie->title}}</a></h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    @endif
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="pills-5" role="tabpanel" aria-labelledby="pills-5-tab">
                                        <div class="row">
                                            <div class="col-lg-7 col-md-6">
                                                <div class="binduz-er-trending-box">
                                                    <div class="binduz-er-trending-news-item">
                                                        <img src="{{asset('capitalistAf/assets/images/news-slider-2.jpg')}}" alt="">
                                                        <div class="binduz-er-trending-news-overlay">
                                                            <div class="binduz-er-trending-news-meta">
                                                                <div class="binduz-er-meta-categories">
                                                                    <a href="#">Analyses</a>
                                                                </div>
                                                                <!-- <div class="binduz-er-meta-date">
                                                                    <span><i class="fal fa-calendar-alt"></i> 24th February 2020</span>
                                                                </div> -->
                                                                <div class="binduz-er-trending-news-title">
                                                                    <h3 class="binduz-er-title"><a href="#">L'actualité à votre porté</a></h3>
                                                                </div>
                                                            </div>
                                                            <!-- <div class="binduz-er-news-share">
                                                                <a href="#"><i class="fal fa-share"></i></a>
                                                            </div> -->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-5 col-md-6">
                                                <div class="binduz-er-trending-news-list-item" style="overflow-y: auto; height: 420px;">
                                                    @foreach($categories as $mycategorie)
                                                    @if($mycategorie->categorie=="an")
                                                    <div class="binduz-er-trending-news-list-box">
                                                        <div class="binduz-er-thumb">
                                                            @if($mycategorie->image)
                                                            <img src="{{$mycategorie->image}}" width="116px" height="100px" alt="">
                                                            @else
                                                            <img src="{{asset('capitalistAf/assets/images/trending-news-list-thumb-1.jpg')}}" width="116px" height="100px" alt="">
                                                            @endif
                                                        </div>
                                                        <div class="binduz-er-content">
                                                            <div class="binduz-er-meta-item">
                                                                <div class="binduz-er-meta-categories">
                                                                    <a href="#">Analyses</a>
                                                                </div>
                                                                <div class="binduz-er-meta-date">
                                                                    <span><i class="fal fa-calendar-alt"></i> {{$mycategorie->updated_at}}</span>
                                                                </div>
                                                            </div>
                                                            <div class="binduz-er-trending-news-list-title">
                                                                <h4 class="binduz-er-title"><a href="{{route('article.details',['ref'=>$mycategorie->ref,'categorie'=>$mycategorie->categorie])}}">{{$mycategorie->title}}</a></h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    @endif
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="  col-lg-3 col-md-12">
                    <div class="binduz-er-sidebar-latest-post">
                        <div class="binduz-er-sidebar-title">
                            <h4 class="binduz-er-title">Latest Post</h4>
                        </div>
                        <div class="binduz-er-sidebar-latest-post-box" style="overflow-y: auto; height: 420px;">
                            @foreach($lastPublication as $malist)
                            <div class="binduz-er-sidebar-latest-post-item">
                                <!-- <div class="binduz-er-thumb">
                                    @if($malist->image)
                                    <img src="{{$malist->image}}" width="574px" height="574px" alt="">
                                    @else
                                    <img src="{{asset('capitalistAf/assets/images/latest-post-4.jpg')}}" width="80px" height="80px" alt="">
                                    @endif
                                </div> -->
                                <div class="binduz-er-content">
                                    <div class="binduz-er-meta-item">
                                        <div class="binduz-er-meta-categories">
                                            <div class="binduz-er-meta-item">
                                                @if($malist->categorie=="fi")
                                                <a href="#" style="display: inline-block;background: #FFEAEA;border-radius: 5px;color: #F63A3A;font-size: 14px;font-weight: 700;text-transform: capitalize;padding: 0 15px;">Finances</a>
                                                @elseif($malist->categorie=="po")
                                                <a href="#" style="display: inline-block;background: #FFEAEA;border-radius: 5px;color: #F63A3A;font-size: 14px;font-weight: 700;text-transform: capitalize;padding: 0 15px;">Politiques</a>
                                                @elseif($malist->categorie=="id")
                                                <a href="#" style="display: inline-block;background: #FFEAEA;border-radius: 5px;color: #F63A3A;font-size: 14px;font-weight: 700;text-transform: capitalize;padding: 0 15px;">Industries</a>
                                                @elseif($malist->categorie=="an")
                                                <a href="#" style="display: inline-block;background: #FFEAEA;border-radius: 5px;color: #F63A3A;font-size: 14px;font-weight: 700;text-transform: capitalize;padding: 0 15px;">Analyses</a>
                                                @else
                                                <a href="#" style="display: inline-block;background: #FFEAEA;border-radius: 5px;color: #F63A3A;font-size: 14px;font-weight: 700;text-transform: capitalize;padding: 0 15px;">Bourse</a>
                                                @endif
                                            </div>
                                            <div class="binduz-er-meta-date">
                                                <span><i class="fal fa-calendar-alt"></i> {{$malist->updated_at}}</span>
                                            </div>
                                        </div>
                                    </div>
                                    <h4 class="binduz-er-title"><a href="{{route('article.details',['ref'=>$malist->ref,'categorie'=>$malist->categorie])}}">{{$malist->title}}</a></h4>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--====== BINDUZ TRENDING PART ENDS ======-->

    <!--====== BINDUZ TRENDING TODAY PART START ======-->

    <section class="binduz-er-trending-today-area">
        <div class="binduz-er-bg-cover"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="binduz-er-trending-today-topbar">
                        <div class="binduz-er-trending-today-title">
                            <h3 class="binduz-er-title">Les (04) Meilleurs articles</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($Meilleurpublication as $malist)
                <div class="col-lg-3 col-md-6">
                    <div class="binduz-er-trending-today-item">
                        <div class="binduz-er-trending-news-list-box">
                            <div class="binduz-er-thumb">
                                <img src="{{$malist->image}}" alt="">
                            </div>
                            <div class="binduz-er-content">
                                <div class="binduz-er-meta-item">
                                    <div class="binduz-er-meta-categories">
                                        @if($malist->categorie=="fi")
                                        <a href="#">Finances</a>
                                        @elseif($malist->categorie=="po")
                                        <a href="#">Politiques</a>
                                        @elseif($malist->categorie=="id")
                                        <a href="#">Industries</a>
                                        @elseif($malist->categorie=="an")
                                        <a href="#">Analyses</a>
                                        @else
                                        <a href="#">Bourse</a>
                                        @endif
                                    </div>
                                    <div class="binduz-er-meta-date">
                                        <span><i class="fal fa-calendar-alt"></i> {{$malist->updated_at}}</span>
                                    </div>
                                </div>
                                <div class="binduz-er-trending-news-list-title">
                                    <h4 class="binduz-er-title"><a href="{{route('article.details',['ref'=>$malist->ref,'categorie'=>$malist->categorie])}}">{{$malist->title}}</a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!--====== BINDUZ TRENDING TODAY PART ENDS ======-->

    <!--====== BINDUZ MAIN POSTS PART START ======-->

    <section class="binduz-er-main-posts-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <div class="binduz-er-video-post-topbar">
                        <div class="binduz-er-video-post-title">
                            <h3 class="binduz-er-title">Publications de la semaine </h3>
                        </div>
                    </div>
                    <div class="row">
                        @foreach($publication as $malist)
                        <div class="col-xl-4 col-lg-6 col-md-6">
                            <div class="binduz-er-main-posts-item">
                                <div class="binduz-er-trending-news-list-box">
                                    <div class="binduz-er-thumb">
                                        @if($malist->image)
                                        <img src="{{$malist->image}}" width="322px" height="216px" alt="">
                                        @else
                                        <img src="" alt="Vous avez oublié d'ajouter l'image">
                                        @endif
                                    </div>
                                    <div class="binduz-er-content">
                                        <div class="binduz-er-meta-item">
                                            <div class="binduz-er-meta-categories">
                                                @if($malist->categorie=="fi")
                                                <a href="#">Finances</a>
                                                @elseif($malist->categorie=="po")
                                                <a href="#">Politiques</a>
                                                @elseif($malist->categorie=="id")
                                                <a href="#">Industries</a>
                                                @elseif($malist->categorie=="an")
                                                <a href="#">Analyses</a>
                                                @else
                                                <a href="#">Bourse</a>
                                                @endif
                                            </div>
                                            <div class="binduz-er-meta-date">
                                                <span><i class="fal fa-calendar-alt"></i> {{$malist->updated_at}}</span>
                                            </div>
                                        </div>
                                        <div class="binduz-er-trending-news-list-title">
                                            <h4 class="binduz-er-title"><a href="{{route('article.details',['ref'=>$malist->ref,'categorie'=>$malist->categorie])}}">{{$malist->title}}</a></h4>
                                            <p>{{$malist->paragraphe1}}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="binduz-er-populer-news-sidebar-newsletter mt-40">
                        <form action="{{route('front.newsletter')}}" method="post">
                            @csrf
                            <div class="binduz-er-newsletter-box text-center">
                                <img src="assets/images/icon/icon-3.png" alt="">
                                <h3 class="binduz-er-title"> Newsletter</h3>
                                <p>L'info à votre porté.</p>
                                <div class="binduz-er-input-box">
                                    <input type="text" name="email" placeholder="Votre adresse mail">
                                </div>
                                <div class="binduz-er-input-box " style="padding-top: 7px;margin-top: 14px;">
                                    <button type="submit" style="color: white;margin-right: 42px;"><i class="fal fa-long-arrow-right"></i> Souscrire</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- <div class="binduz-er-sidebar-latest-post">
                        <div class="binduz-er-sidebar-title">
                            <h4 class="binduz-er-title">Dernières Publications</h4>
                        </div>
                        <div class="binduz-er-sidebar-latest-post-box">
                            <div class="binduz-er-sidebar-latest-post-item">
                                <div class="binduz-er-thumb">
                                    <img src="{{asset('capitalistAf/assets/images/latest-post-4.jpg')}}" alt="latest">
                                </div>
                                <div class="binduz-er-content">
                                    <span><i class="fal fa-calendar-alt"></i> 23 Août 2023</span>
                                    <h4 class="binduz-er-title"><a href="#">Introducing Android Earthquake Alerts</a>
                                    </h4>
                                </div>
                            </div>
                            <div class="binduz-er-sidebar-latest-post-item">
                                <div class="binduz-er-thumb">
                                    <img src="{{asset('capitalistAf/assets/images/latest-post-4.jpg')}}" alt="latest">
                                </div>
                                <div class="binduz-er-content">
                                    <span><i class="fal fa-calendar-alt"></i> 23 Août 2023</span>
                                    <h4 class="binduz-er-title"><a href="#">Loud and clear: AI is improving Assistant
                                        </a></h4>
                                </div>
                            </div>
                            <div class="binduz-er-sidebar-latest-post-item">
                                <div class="binduz-er-thumb">
                                    <img src="{{asset('capitalistAf/assets/images/latest-post-4.jpg')}}" alt="latest">
                                </div>
                                <div class="binduz-er-content">
                                    <span><i class="fal fa-calendar-alt"></i> 23 Août 2023</span>
                                    <h4 class="binduz-er-title"><a href="#">Tips and shortcuts for a more productive</a>
                                    </h4>
                                </div>
                            </div>
                            <div class="binduz-er-sidebar-latest-post-item">
                                <div class="binduz-er-thumb">
                                    <img src="{{asset('capitalistAf/assets/images/latest-post-4.jpg')}}" alt="latest">
                                </div>
                                <div class="binduz-er-content">
                                    <span><i class="fal fa-calendar-alt"></i> 23 Août 2023</span>
                                    <h4 class="binduz-er-title"><a href="#">Sparks of inspiration to the new trend
                                            2023</a></h4>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <!-- <div class="binduz-er-sidebar-add-box mt-40">
                        <div class="binduz-er-logo">
                            <a href="#"><img src="{{asset('capitalistAf/assets/images/logo-2.png')}}" alt=""></a>
                        </div>
                        <p>Built with amazing platform & framwork. You can use anyway in blog, news & magazine.</p>
                        <a class="binduz-er-main-btn" href="#">Purchase Now</a>
                    </div> -->
                </div>
            </div>
        </div>
    </section>

    <!--====== BINDUZ MAIN POSTS PART ENDS ======-->
    <!--====== BINDUZ FEATURED PART START ======-->

    <!-- <section class="binduz-er-featured-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="binduz-er-featured-slider mt-30">
                        <div class="binduz-er-featured-title">
                            <h3 class="binduz-er-title">Featured</h3>
                        </div>
                        <div class="binduz-er-featured-slider-item">
                            <div class="binduz-er-trending-news-list-box">
                                <div class="binduz-er-thumb">

                                    <img src="{{asset('capitalistAf/assets/images/feature-news-thuimb.jpg')}}" alt="">
                                </div>
                                <div class="binduz-er-content">
                                    <div class="binduz-er-meta-item">
                                        <div class="binduz-er-meta-categories">
                                            <a href="#">Politiques</a>
                                        </div>
                                        <div class="binduz-er-meta-date">
                                            <span><i class="fal fa-calendar-alt"></i> 14th February 2023</span>
                                        </div>
                                    </div>
                                    <div class="binduz-er-trending-news-list-title">
                                        <h4 class="binduz-er-title"><a href="#">Hear educators' stories this Teacher
                                                Appreciation Week</a></h4>
                                    </div>
                                </div>
                            </div>
                            <div class="binduz-er-trending-news-list-box">
                                <div class="binduz-er-thumb">
                                    <img src="{{asset('capitalistAf/assets/images/feature-news-thuimb-2.jpg')}}" alt="">
                                </div>
                                <div class="binduz-er-content">
                                    <div class="binduz-er-meta-item">
                                        <div class="binduz-er-meta-categories">
                                            <a href="#">Politiques</a>
                                        </div>
                                        <div class="binduz-er-meta-date">
                                            <span><i class="fal fa-calendar-alt"></i> 14th February 2023</span>
                                        </div>
                                    </div>
                                    <div class="binduz-er-trending-news-list-title">
                                        <h4 class="binduz-er-title"><a href="#">Escucha las historias de los educadores
                                                en esta </a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-6">
                    <div class="binduz-er-trending-news-list-item mb-30" style="overflow-y: auto; height: 420px;">
                        <div class="binduz-er-trending-news-list-box"
                            style="margin-top: 30px!important;margin-left: 30px!important;">
                            <div class="binduz-er-thumb">
                                <img src="{{asset('capitalistAf/assets/images/trending-news-list-thumb-1.jpg')}}" alt="">
                            </div>
                            <div class="binduz-er-content">
                                <div class="binduz-er-meta-item">
                                    <div class="binduz-er-meta-categories">
                                        <a href="#">Bourse</a>
                                    </div>
                                    <div class="binduz-er-meta-date">
                                        <span><i class="fal fa-calendar-alt"></i> 14th February 2023</span>
                                    </div>
                                </div>
                                <div class="binduz-er-trending-news-list-title">
                                    <h4 class="binduz-er-title"><a href="#">Bring iconic Japanese characters to life
                                            with</a></h4>
                                </div>
                            </div>
                        </div>
                        <div class="binduz-er-trending-news-list-box"
                            style="margin-top: 30px!important;margin-left: 30px!important;">
                            <div class="binduz-er-thumb">
                                <img src="{{asset('capitalistAf/assets/images/trending-news-list-thumb-1.jpg')}}" alt="">
                            </div>
                            <div class="binduz-er-content">
                                <div class="binduz-er-meta-item">
                                    <div class="binduz-er-meta-categories">
                                        <a href="#">Bourse</a>
                                    </div>
                                    <div class="binduz-er-meta-date">
                                        <span><i class="fal fa-calendar-alt"></i> 14th February 2023</span>
                                    </div>
                                </div>
                                <div class="binduz-er-trending-news-list-title">
                                    <h4 class="binduz-er-title"><a href="#">Bring iconic Japanese characters to life
                                            with</a></h4>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="binduz-er-sidebar-latest-post">
                        <div class="binduz-er-sidebar-title">
                            <h4 class="binduz-er-title">Dernières Publications</h4>
                        </div>
                        <div class="binduz-er-sidebar-latest-post-box">
                            <div class="binduz-er-sidebar-latest-post-item">
                                <div class="binduz-er-thumb">
                                    <img src="{{asset('capitalistAf/assets/images/latest-post-4.jpg')}}" alt="latest">
                                </div>
                                <div class="binduz-er-content">
                                    <span><i class="fal fa-calendar-alt"></i> 23 Août 2023</span>
                                    <h4 class="binduz-er-title"><a href="#">Introducing Android Earthquake Alerts</a>
                                    </h4>
                                </div>
                            </div>
                            <div class="binduz-er-sidebar-latest-post-item">
                                <div class="binduz-er-thumb">
                                    <img src="{{asset('capitalistAf/assets/images/latest-post-4.jpg')}}" alt="latest">
                                </div>
                                <div class="binduz-er-content">
                                    <span><i class="fal fa-calendar-alt"></i> 23 Août 2023</span>
                                    <h4 class="binduz-er-title"><a href="#">Loud and clear: AI is improving Assistant
                                        </a></h4>
                                </div>
                            </div>
                            <div class="binduz-er-sidebar-latest-post-item">
                                <div class="binduz-er-thumb">
                                    <img src="{{asset('capitalistAf/assets/images/latest-post-4.jpg')}}" alt="latest">
                                </div>
                                <div class="binduz-er-content">
                                    <span><i class="fal fa-calendar-alt"></i> 23 Août 2023</span>
                                    <h4 class="binduz-er-title"><a href="#">Tips and shortcuts for a more productive</a>
                                    </h4>
                                </div>
                            </div>
                            <div class="binduz-er-sidebar-latest-post-item">
                                <div class="binduz-er-thumb">
                                    <img src="{{asset('capitalistAf/assets/images/latest-post-4.jpg')}}" alt="latest">
                                </div>
                                <div class="binduz-er-content">
                                    <span><i class="fal fa-calendar-alt"></i> 23 Août 2023</span>
                                    <h4 class="binduz-er-title"><a href="#">Sparks of inspiration to the new trend
                                            2023</a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

    <!--====== BINDUZ FEATURED PART ENDS ======-->

    <!--====== BINDUZ FOOTER PART START ======-->
    @include('front.layout.footer')