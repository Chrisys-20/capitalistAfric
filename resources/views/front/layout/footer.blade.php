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
                                      <li><a href="article-details.php">Finances</a></li>
                                      <li><a href="#">Politiques</a></li>
                                      <li><a href="#">Analyses</a></li>
                                  </ul>
                                  <ul>
                                      <li><a href="#">Industries</a></li>
                                      <li><a href="#">Bourse</a></li>
                                      <li><a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">Admin</a></li>
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
                          <p>Lorem ipsum dolor sit amet, consec tetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspend isse ultrices gravida.</p>
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
                          <li><a href="politique_de_confidentialité.pdf" target="new">Conditions Générales</a></li>
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

  <!-- Sweet Alerts js -->
  <script src="assets/libs/sweetalert2/sweetalert2.min.js"></script>

<!-- Sweet alert init js-->
<script src="assets/js/pages/sweet-alerts.init.js"></script>

  </body>

  </html>