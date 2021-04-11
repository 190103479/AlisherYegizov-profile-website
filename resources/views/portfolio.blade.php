<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Portfolio - CV project</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

 
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  
  <link href="assets/css/style.css" rel="stylesheet">

  
</head>

<body>

  
  <header id="header" class="fixed-top">
    <div class="container-fluid d-flex justify-content-between align-items-center">

      <h1 class="logo me-auto me-lg-0"><a href="{{ route('home')}}">{{__('lang.title')}}</a></h1>
      

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
        <li><a  href="{{route('home')}}">{{__('lang.home')}}</a></li>
          <li><a  href="{{ route('about')}}">{{__('lang.about')}}</a></li>
          <li><a class="active"  href="{{ route('portfolio')}}">{{__('lang.port')}}</a></li>
          <li><a href="{{ route('contact')}}">{{__('lang.cont')}}</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>

      <div class="header-social-links">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div>

    </div>

  </header>

  <main id="main">

    
    <section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>{{__('lang.port')}}</h2>
          <p>{{__('lang.po')}}</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">HTML</li>
              <li data-filter=".filter-card">JAVA</li>
              <li data-filter=".filter-web">DATA</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="https://c4.wallpaperflare.com/wallpaper/5/237/148/flight-sport-blur-background-wallpaper-preview.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Sport</h4>
                <p>HTML</p>
                <div class="portfolio-links">
                  <a href="https://c4.wallpaperflare.com/wallpaper/5/237/148/flight-sport-blur-background-wallpaper-preview.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="SPORT"><i >zoom</i></a>
                  
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="https://i.pinimg.com/originals/6c/56/be/6c56be53a61002a2ab9aa9cca73aae65.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Bank</h4>
                <p>DATA</p>
                <div class="portfolio-links">
                  <a href="https://i.pinimg.com/originals/6c/56/be/6c56be53a61002a2ab9aa9cca73aae65.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="BANK"><i >zoom</i></a>
                  
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="https://www.thefunsizedlife.com/wp-content/uploads/2020/12/Copy-of-Copy-of-Join-the-List-21.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Chill</h4>
                <p>HTML</p>
                <div class="portfolio-links">
                  <a href="https://www.thefunsizedlife.com/wp-content/uploads/2020/12/Copy-of-Copy-of-Join-the-List-21.png" data-gallery="portfolioGallery" class="portfolio-lightbox" title="CHILL"><i >zoom</i></a>
                  
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="https://securityintelligence.com/wp-content/uploads/2019/11/news_ta2101-threat-actor-targeted-german-italian-and-us-organizations-with-maze-ransomware.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Maze</h4>
                <p>JAVA</p>
                <div class="portfolio-links">
                  <a href="https://securityintelligence.com/wp-content/uploads/2019/11/news_ta2101-threat-actor-targeted-german-italian-and-us-organizations-with-maze-ransomware.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="MAZE"><i >zoom</i></a>
                  
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="https://www.feeldesain.com/wp-content/uploads/2011/08/feeldesain-chicago.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Transit</h4>
                <p>DATA</p>
                <div class="portfolio-links">
                  <a href="https://www.feeldesain.com/wp-content/uploads/2011/08/feeldesain-chicago.png" data-gallery="portfolioGallery" class="portfolio-lightbox" title="TRANSIT"><i >zoom</i></a>
                  
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="https://www.creativedisplaysnow.com/wp-content/uploads/2016/07/minimalistic_store_displays.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Store</h4>
                <p>HTML</p>
                <div class="portfolio-links">
                  <a href="https://www.creativedisplaysnow.com/wp-content/uploads/2016/07/minimalistic_store_displays.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="STORE"><i >zoom</i></a>
                  
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="https://morewithlessdesign.com/wp-content/uploads/2016/10/Proti_Proudu-1.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Order</h4>
                <p>JAVA</p>
                <div class="portfolio-links">
                  <a href="https://morewithlessdesign.com/wp-content/uploads/2016/10/Proti_Proudu-1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="ORDER"><i >zoom</i></a>
                  
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="https://coolwallpapers.me/picsup/5053580-8-bit-mega-man-minimalist-pixel-art-simple-video-game.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Game</h4>
                <p>JAVA</p>
                <div class="portfolio-links">
                  <a href="https://coolwallpapers.me/picsup/5053580-8-bit-mega-man-minimalist-pixel-art-simple-video-game.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="GAME"><i >zoom</i></a>
                 
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="https://iveybusinessjournal.com/wp-content/uploads/2015/06/Top-Gun_000038365094_resize.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Deal</h4>
                <p>DATA</p>
                <div class="portfolio-links">
                  <a href="https://iveybusinessjournal.com/wp-content/uploads/2015/06/Top-Gun_000038365094_resize.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="DEAL"><i >zoom</i></a>
                  
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section>

  </main>

  <footer id="footer">
    <div class="container">
      <div class="copyright">
        &copy; ALISHER YEGIZOV <strong><span>190103479</span></strong>
      </div>
      <div class="credits">
        
        Uploaded to <a href="https://github.com/">GitHub</a>
      </div>
    </div>
  </footer>

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>

  
  <script src="assets/js/main.js"></script>

</body>

</html>