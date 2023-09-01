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
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-5548895987560863" crossorigin="anonymous"></script>

</head>

<body class="gray-bg bg-2">

    @include('front.layout.head')

    <!--====== BINDUZ HEADER PART ENDS ======-->

    <!--====== BINDUZ ABOUT US PART ENDS ======-->

    <section class="binduz-er-about-us-area pb-60">
        <div class=" container">
            <div class="row">
                <div class=" col-lg-8">
                    <div class="binduz-er-about-us-content">
                        <h4 class="binduz-er-title">Politique de protection des données personnelles</h4>
                        <div class="binduz-er-text mt-50">
                            <p>Retrouvez sur cette page la politique de confidentialité de notre site web


                                Nous collectons des informations vous concernant lorsque vous :</p>
                            <ul>
                                <li>Inscrivez aux newsletters ou aux alertes proposées par Capitalistafrica</li>
                                <li>Naviguez sur le site</li>
                                <li>Communiquez avec nous</li>
                            </ul>
                        </div>
                        <div class="binduz-er-text mt-20">
                            <p>Toutes ces données sont généralement obtenues directement auprès de vous, que ce soit par téléphone, email ou Internet. Capitalist Africa peut toutefois être amenée à traiter des données obtenues d’organismes tiers, afin notamment de satisfaire ses obligations réglementaires ou avec votre consentement dans le cadre de l’utilisation de certains services.</p>
                        </div>
                        <div class="binduz-er-text mt-20">
                            <p>Vos données sont obtenues avec votre consentement et/ou recueillies conformément à ce que la réglementation permet ou exige.</p>
                        </div>
                        <div class="binduz-er-text mt-20">
                            <p>Les durées de conservation de vos données varient en fonction de la nature des données concernées, des finalités poursuivies ou encore selon la durée de la prescription légale.
                                Nous collectons et traitons vos données pour gérer la newsletter et gérer l’exercice de vos droits.</p>
                        </div>
                    </div>
                    <div class="binduz-er-about-us-content">
                        <h4 class="binduz-er-title">Nous contacter :</h4>
                        <p> Email : contact@capitalistafrica.com </p>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!--====== BINDUZ ABOUT US PART ENDS ======-->

      <!--====== BINDUZ FOOTER PART START ======-->
  <footer class="binduz-er-footer-area">
      <div class="container">
          <div class="row">
              <div class="col-lg-9">
                  <div class="row">
                      <div class="col-lg-4 col-md-6">
                          <div class="binduz-er-footer-widget-style-1">
                              <div class="binduz-er-footer-title">
                                  <h3 class="binduz-er-title">Categories</h3>
                              </div>
                              <div class="binduz-er-footer-menu-list">
                                  <ul>
                                      <li><a href="#categorie">Finances</a></li>
                                      <li><a href="#categorie">Politiques</a></li>
                                      <li><a href="#categorie">Analyses</a></li>
                                  </ul>
                                  <ul>
                                      <li><a href="#categorie">Industries</a></li>
                                      <li><a href="#categorie">Bourse</a></li>
                                  </ul>
                              </div>
                          </div>
                      </div>
                      <div class="col-lg-4 col-md-6">
                          <div class="binduz-er-footer-widget-style-1">
                              <div class="binduz-er-footer-title">
                                  <h3 class="binduz-er-title">Newsletter</h3>
                              </div>
                              <div class="binduz-er-footer-widget-form">
                                  <form action="{{route('front.newsletter')}}" method="post">
                                      @csrf 
                                      <!-- <div class="binduz-er-input-box">
                                            <i class="fal fa-user"></i>
                                            <input type="text" placeholder="Votre Nom">
                                        </div> -->
                                      <div class="binduz-er-input-box">
                                          <i class="fal fa-envelope"></i>
                                          <input type="email" name="email" placeholder="Votre adresse mail">
                                      </div>
                                      <div class="binduz-er-input-box">
                                          <button type="submit"><i class="fal fa-paper-plane"></i> Souscrire</button>
                                      </div>
                                  </form>
                              </div>
                          </div>
                      </div>
                      <div class="col-lg-4 col-md-6">
                          <div class="binduz-er-footer-widget-style-1">
                              <div class="binduz-er-footer-title">
                                  <h3 class="binduz-er-title">Contacts</h3>
                              </div>
                              <div class="binduz-er-footer-widget-form">
                                  <div class="binduz-er-input-box">
                                      <!-- <p><i class="fas fa-phone"></i> (+237)</p> -->
                                      <p><i class="fas fa-envelope"></i> contact@capitalistAfafrica.com</p>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-lg-3">
                  <div class="binduz-er-footer-widget-info">
                      <div class="binduz-er-logo" style="background-color: white; border-radius: 5px; padding-top: 10px;">
                          <a href="#"><img src="{{asset('capitalistAf/assets/images/LogoCA.png')}}" alt=""></a>
                      </div>
                      <div class="binduz-er-text">
                          <p>Capitalist Africa est la référence pour l'actualité économique, financière et politique africaine. </p>
                      </div>

                  </div>
              </div>
          </div>
      </div>
      <div class="binduz-er-back-to-top">
          <p>BACK TO TOP <i class="fal fa-long-arrow-right"></i></p>
      </div>
  </footer>
  <div class="binduz-er-footer-copyright-area">
      <div class="container">
          <div class="row align-items-center">
              <div class="col-lg-6">
                  <div class="binduz-er-copyright-text">
                      <p>2023 &copy; All right reserved By <span><a href="#" style="color: white;">CAPITALIST AFRICA</a></span> </p>
                  </div>
              </div>
              <div class="col-lg-6">
                  <div class="binduz-er-copyright-menu float-lg-end float-none">
                      <ul>
                          <li><a href="{{route('condition')}}" target="new">Conditions Générales</a></li>
                          <!-- <li><a href="#">Claim A Report</a></li>
                            <li><a href="#">Careers</a></li> -->
                      </ul>
                  </div>
              </div>
          </div>
      </div>
  </div>

  <!--====== BINDUZ FOOTER PART ENDS ======-->

  <!--====== BINDUZ BACK TO TOP PART START ======-->

  <!-- <div class="binduz-er-back-to-top">
        <p>BACK TO TOP <i class="fal fa-long-arrow-right"></i></p>
    </div> -->

  <!--====== BINDUZ BACK TO TOP PART ENDS ======-->




  <!--====== jquery js ======-->
  <script src="{{asset('capitalistAf/assets/js/vendor/modernizr-3.6.0.min.js')}}"></script>
  <script src="{{asset('capitalistAf/assets/js/vendor/jquery-1.12.4.min.js')}}"></script>

  <!--====== Bootstrap js ======-->
  <script src="{{asset('capitalistAf/assets/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('capitalistAf/assets/js/popper.min.js')}}"></script>

  <!--====== Slick js ======-->
  <script src="{{asset('capitalistAf/assets/js/slick.min.js')}}"></script>

  <!--====== nice select js ======-->
  <script src="{{asset('capitalistAf/assets/js/jquery.nice-select.min.js')}}"></script>

  <!--====== Isotope js ======-->
  <script src="{{asset('capitalistAf/assets/js/isotope.pkgd.min.js')}}"></script>

  <!--====== Images Loaded js ======-->
  <script src="{{asset('capitalistAf/assets/js/imagesloaded.pkgd.min.js')}}"></script>

  <!--====== Magnific Popup js ======-->
  <script src="{{asset('capitalistAf/assets/js/jquery.magnific-popup.min.js')}}"></script>

  <!--====== Main js ======-->
  <script src="{{asset('capitalistAf/assets/js/main.js')}}"></script>

 

  </body>

  </html>