<!doctype html>
<html lang="en">

<head>

    <!--====== Required meta tags ======-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
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

<body class="gray-bg bg-2">

    <!--====== OFFCANVAS MENU PART START ======-->
    @include('front.layout.head')


    <div class="binduz-er-breadcrumb-area">
        <div class=" container">
            <div class="row">
                <div class=" col-lg-12">
                    <div class="binduz-er-breadcrumb-box">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Accueil</a></li>
                                @if($monArticle[0]->categorie=="fi")
                                <li class="breadcrumb-item"><a href="#">Finances</a></li>
                                @elseif($monArticle[0]->categorie=="po")
                                <li class="breadcrumb-item"><a href="#">Infrastructures </a></li>
                                @elseif($monArticle[0]->categorie=="id")
                                <li class="breadcrumb-item"><a href="#">Industries</a></li>
                                @elseif($monArticle[0]->categorie=="an")
                                <li class="breadcrumb-item"><a href="#">Analyses</a></li>
                                @else
                                <li class="breadcrumb-item"><a href="#">Bourse</a></li>
                                @endif
                                <li class="breadcrumb-item"><a href="#">Details</a></li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!--====== BINDUZ HEADER PART ENDS ======-->

    <!--====== BINDUZ AUTHOR USER PART START ======-->
    <div class="binduz-er-blog-bg-area"></div>
    <section class="binduz-er-author-item-area binduz-er-author-item-layout-1 pb-20">
        <div class=" container">
            <div class="row">
                <div class=" col-lg-9">
                    <div class="binduz-er-author-item mb-40">
                        <div class="binduz-er-content">
                            <div class="binduz-er-meta-item">
                                <div class="binduz-er-meta-categories">
                                    @if($monArticle[0]->categorie=="fi")
                                    <a href="#">Finances</a>
                                    @elseif($monArticle[0]->categorie=="po")
                                    <a href="#">Infrastructures</a>
                                    @elseif($monArticle[0]->categorie=="id")
                                    <a href="#">Industries</a>
                                    @elseif($monArticle[0]->categorie=="an")
                                    <a href="#">Analyses</a>
                                    @else
                                    <a href="#">Bourse</a>
                                    @endif
                                </div>
                                <div class="binduz-er-meta-date">
                                    <span><i class="fal fa-calendar-alt"></i>{{$monArticle[0]->updated_at}}</span>
                                </div>
                            </div>
                            <h3 class="binduz-er-title">{{$monArticle[0]->title}} </h3>
                            <div class="binduz-er-meta-author">
                                <div class="binduz-er-author">
                                    <!-- <img src="assets/images/user-2.jpg" alt=""> -->
                                    <span>Par <span>Capitalist Africa</span></span>
                                </div>
                                <!-- <div class="binduz-er-meta-list">
                                    <ul>
                                        <li><i class="fal fa-eye"></i> {{$totalvue}}  Vue(s) </li>
                                        <li><i class="fal fa-heart"></i> 5k</li>
                                        <li><i class="fal fa-comments"></i> 5k</li>
                                    </ul>
                                </div> -->
                            </div>
                        </div>
                        <div class="row">
                            <div class=" col-lg-12">
                                <div class="binduz-er-blog-details-box">
                                    <div class="binduz-er-text ">
                                        <p style="text-align: justify;">{{$monArticle[0]->paragraphe1}}</p>
                                        <p>{{$monArticle[0]->paragraphe2}}</p>
                                    </div>

                                    <div class="binduz-er-quote-text ">
                                        <p style="text-align: justify;">{{$monArticle[0]->blockote}}</p>
                                        <span>Par <span>Capitalist Africa</span></span>

                                    </div>
                                    <!-- <div class="binduz-er-text mt-50">
                                        <p>When creating your app package, you can choose to create it manually or use App Studio, which is a useful app inside Teams that helps developers make Teams apps (yes, meta indeed stalled the App Studio app in you).</p>
                                        <ul>
                                            <li>Once you have installed the App Studio app in your Teams client</li>
                                            <li>App Studio will guide you through</li>
                                            <li>Web services up and running, you’ll need to create an app package that can be distributed and installed</li>
                                        </ul>
                                    </div> -->
                                    <div class="binduz-er-text pt-50 text-justify">
                                        <p style="text-align: justify;">{{$monArticle[0]->paragraphe3}}</p>
                                    </div>
                                    @if(!empty($monArticle[0]->paragraphe4))
                                    <div class="binduz-er-text pt-50 text-justify">
                                        <p style="text-align: justify;">{{$monArticle[0]->paragraphe4}}</p>
                                    </div>
                                    @endif
                                    @if(!empty($monArticle[0]->paragraphe10))

                                    <div class="binduz-er-text pt-50 text-justify">
                                        <p style="text-align: justify;">{{$monArticle[0]->paragraphe5}}</p>
                                    </div>
                                    @endif

                                    @if(!empty($monArticle[0]->paragraphe10))

                                    <div class="binduz-er-text pt-50 text-justify">
                                        <p style="text-align: justify;">{{$monArticle[0]->paragraphe6}}</p>
                                    </div>
                                    @endif

                                    @if(!empty($monArticle[0]->paragraphe10))

                                    <div class="binduz-er-text pt-50 text-justify">
                                        <p style="text-align: justify;">{{$monArticle[0]->paragraphe7}}</p>
                                    </div>
                                    @endif

                                    @if(!empty($monArticle[0]->paragraphe10))

                                    <div class="binduz-er-text pt-50 text-justify">
                                        <p style="text-align: justify;">{{$monArticle[0]->paragraphe8}}</p>
                                    </div>
                                    @endif

                                    @if(!empty($monArticle[0]->paragraphe10))

                                    <div class="binduz-er-text pt-50 text-justify">
                                        <p style="text-align: justify;">{{$monArticle[0]->paragraphe9}}</p>
                                    </div>
                                    @endif

                                    @if(!empty($monArticle[0]->paragraphe10))
                                    <div class="binduz-er-text pt-50 text-justify">
                                        <p style="text-align: justify;">{{$monArticle[0]->paragraphe10}}</p>
                                    </div>
                                    @endif

                                    <!-- <div class="binduz-er-text mt-50 mb-50">
                                        <h3 class="binduz-er-title">Working Process</h3>
                                        <p>Are looking beyond ideation stage to, at the very least, beta, and for companies that are corporate-ready. Retailers want to see it all, so they usually have not precisely identified one tech they want to focus on. Visual search and fit-tech are definitely trends.</p>
                                        <p>He gave the example of a plumber sending an invoice, and how they can tell if someone starts to create an invoice and can’t make it through the whole process. For a small business entrepreneur, “that’s a big deal because that means they’re not going to get paid, which means that tuition payment for their kid in college may be in jeopardy. So we take that really, really seriously.”</p>
                                    </div> -->

                                    <div class="binduz-er-footer-add-item text-center pt-55">
                                        <!-- <span class="binduz-er-mb-10 d-inline-block">ADVERTISEMENT</span> -->
                                        <img src="assets/images/space-bg-4.jpg" alt="">
                                    </div>
                                    <div class="binduz-er-blog-related-post">
                                        <div class="binduz-er-related-post-title">
                                            <h3 class="binduz-er-title">Autres Publications</h3>
                                        </div>
                                        <div class="binduz-er-blog-related-post-slide">
                                            @foreach($allArticle as $myListe)
                                            <div class="binduz-er-video-post binduz-er-recently-viewed-item">
                                                <div class="binduz-er-latest-news-item">
                                                    <div class="binduz-er-thumb">
                                                        <?php 
                                                        
                                                        ?>
                                                        <img src="<?php echo substr($myListe->image,0,3);?>" width="299px" height="199px" alt="">
                                                        </div>
                                                    <div class="binduz-er-content">
                                                        <div class="binduz-er-meta-item">
                                                            <div class="binduz-er-meta-categories">
                                                                @if($myListe->categorie=="fi")
                                                                <a href="#">Finances</a>
                                                                @elseif($myListe->categorie=="po")
                                                                <a href="#">Infrastructures</a>
                                                                @elseif($myListe->categorie=="id")
                                                                <a href="#">Industries</a>
                                                                @elseif($myListe->categorie=="an")
                                                                <a href="#">Analyses</a>
                                                                @else
                                                                <a href="#">Bourse</a>
                                                                @endif
                                                            </div>
                                                            <div class="binduz-er-meta-date">
                                                                <span><i class="fal fa-calendar-alt"></i>{{$myListe->updated_at}}</span>
                                                            </div>
                                                        </div>
                                                        <h5 class="binduz-er-title"><a href="{{route('article.details',['ref'=>$myListe->ref,'categorie'=>$myListe->categorie])}}">{{$myListe->title}}</a></h5>
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
                <div class=" col-lg-3">
                    <div class="binduz-er-populer-news-sidebar">

                        <div class="binduz-er-populer-news-sidebar-post pt-60">
                            <div class="binduz-er-popular-news-title">
                                <ul class="nav nav-pills mb-3" id="pills-tab-2" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Dernières publications</a>
                                    </li>
                                    <!-- <li class="nav-item" role="presentation">
                                        <a class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Most Recent</a>
                                    </li> -->
                                </ul>
                            </div>
                            <div class="tab-content" id="pills-tabContent-2">
                                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                    <div class="binduz-er-sidebar-latest-post-box">
                                        @foreach($ArticleDesac as $myListe)
                                        <div class="binduz-er-sidebar-latest-post-item">
                                            <div class="binduz-er-thumb">
                                                <img src="{{$myListe->image}}" alt="latest">
                                            </div>
                                            <div class="binduz-er-content">
                                                <span><i class="fal fa-calendar-alt"></i> {{$myListe->updated_at}}</span>
                                                <h4 class="binduz-er-title"><a href="#">{{$myListe->title}}</a></h4>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>


                        <!-- <div class="binduz-er-populer-news-social binduz-er-author-page-social mt-40">
                            <div class="binduz-er-popular-news-title">
                                <h3 class="binduz-er-title">Réseaux Sociaux</h3>
                            </div>
                            <div class="binduz-er-social-list">
                                <div class="binduz-er-list">
                                    <a href="#">
                                        <span><i class="fab fa-facebook-f"></i> <span>facebook</span> </span>
                                    </a>
                                    <a href="#">
                                        <span><i class="fab fa-twitter"></i> <span>Twitter</span> </span>
                                        <a href="#">
                                            <span><i class="fab fa-youtube" style="background-color: red!important;"></i> <span>Youtube</span>
                                            </span>

                                        </a>
                                </div>
                            </div>
                        </div> -->

                        <!-- <div class="binduz-er-populer-news-social binduz-er-author-page-social mt-40">
                            <div class="binduz-er-popular-news-title">
                                <h3 class="binduz-er-title">Video Post</h3>
                            </div>
                            <div class="binduz-er-video-post binduz-er-recently-viewed-item">
                                <div class="binduz-er-latest-news-item">
                                    <div class="binduz-er-thumb">
                                        <img src="assets/images/editors-pack-thumb-1.jpg" alt="">
                                        <div class="binduz-er-play">
                                            <a href="#"><i class="fas fa-play"></i></a>
                                        </div>
                                    </div>
                                    <div class="binduz-er-content">
                                        <div class="binduz-er-meta-item">
                                            <div class="binduz-er-meta-categories">
                                                <a href="#">Technology</a>
                                            </div>
                                            <div class="binduz-er-meta-date">
                                                <span><i class="fal fa-calendar-alt"></i>24th February 2020</span>
                                            </div>
                                        </div>
                                        <h5 class="binduz-er-title"><a href="#">Nearly three weeks after Rita Ora and Chris Brown released their collaboration, “Body On Me,”</a></h5>
                                        <div class="binduz-er-meta-author">
                                            <span>Par <span>Capitalist Africa</span></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> -->

                        <!-- <div class="binduz-er-sidebar-social binduz-er-populer-news-sidebar-add d-none d-lg-block">
                            <div class="binduz-er-sidebar-add mt-40">
                                <h3 class="binduz-er-title">Build your website & <span>grow your business</span></h3>
                                <a class="binduz-er-main-btn" href="#">Purchase</a>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--====== BINDUZ AUTHOR USER PART ENDS ======-->

    <!--====== BINDUZ FOOTER 2 PART START ======-->

    @include('front.layout.footer')