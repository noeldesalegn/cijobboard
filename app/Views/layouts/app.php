<!doctype html>
<html lang="en">
  <head>
    <title>JobBoard &mdash; Website Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="Free-Template.co" />
    <link rel="shortcut icon" href="<?=base_url('ftco-32x32.png'); ?>">
    
    <link rel="stylesheet" href="<?=base_url('assets/css/custom-bs.css'); ?>">
    <link rel="stylesheet" href="<?=base_url('assets/css/jquery.fancybox.min.css'); ?>">
    <link rel="stylesheet" href="<?=base_url('assets/css/bootstrap-select.min.css'); ?>">
    <link rel="stylesheet" href="<?=base_url('assets/fonts/icomoon/style.css'); ?>">
    <link rel="stylesheet" href="<?=base_url('assets/fonts/line-icons/style.css'); ?>">
    <link rel="stylesheet" href="<?=base_url('assets/css/owl.carousel.min.css'); ?>">
    <link rel="stylesheet" href="<?=base_url('assets/css/animate.min.css'); ?>">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="<?=base_url('assets/css/style.css') ;?>">    
  </head>
  <body id="top">
  <div id="overlayer" style="display: none;"></div>
  <div class="loader" style="display: none;">
    <div class="spinner-border text-primary" role="status">
      <span class="sr-only">Loading...</span>
    </div>
  </div>
<div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div> <!-- .site-mobile-menu -->
    

    <!-- NAVBAR -->
    <header class="site-navbar mt-3">
      <div class="container-fluid">
        <div class="row align-items-center">
          <div class="site-logo col-6"><a href="<?= url_to('home'); ?>">JobBoard</a></div>

          <nav class="mx-auto site-navigation">
            <ul class="site-menu js-clone-nav d-none d-xl-block ml-0 pl-0">
              <li><a href="<?= url_to('home'); ?>" class="nav-link active">Home</a></li>
              <li><a href="<?= url_to('about'); ?>">About</a></li>
              <li><a href="<?= url_to('contact'); ?>">Contact</a></li>
              <!-- <li class="has-children">
                <a href="job-listings.html">Job Listings</a>
                <ul class="dropdown">
                  <li><a href="job-single.html">Job Single</a></li>
                  <li><a href="post-job.html">Post a Job</a></li>
                </ul>
              </li> -->
              <li class="has-children">
                <a href="services.html">Pages</a>
                <ul class="dropdown">
                  <li><a href="services.html">Services</a></li>
                  <li><a href="service-single.html">Service Single</a></li>
                  <li><a href="blog-single.html">Blog Single</a></li>
                  <li><a href="portfolio.html">Portfolio</a></li>
                  <li><a href="portfolio-single.html">Portfolio Single</a></li>
                  <li><a href="testimonials.html">Testimonials</a></li>
                  <li><a href="faq.html">Frequently Ask Questions</a></li>
                  <li><a href="gallery.html">Gallery</a></li>
                </ul>
              </li>
              <li><a href="blog.html">Blog</a></li>
              <li><a href="contact.html">Contact</a></li>
              <?php if(isset(auth()->user()->username)): ?>
            <li class="has-children">
                <a href="job-listings.html"><?php echo auth()->user()->username; ?></a>
                <ul class="dropdown">
                  <li><a href="<?= url_to('public.profile.users',auth()->user()->id ) ?>">Profile</a></li>
                  <li><a href="<?= url_to('update.profile.users' ) ?>">Update Profile</a></li>
                  <li><a href="<?= url_to('update.cv.users' ) ?>">Update CV</a></li>
                  <li><a href="<?= url_to('saved.jobs.users' ) ?>">Saved Josb</a></li>
                  <li><a href="<?= url_to('applyed.jobs.users' ) ?>">Applyed Jobs</a></li>
                  <hr>
                  <li><a href="<?= base_url('logout');?>">Log out</a></li>
                </ul>
              </li>
                <?php else : ?>

                  <li class="d-lg-"><a href="<?= base_url('login');?>">Log In</a></li>
                  <li class="d-lg-"><a href="<?= base_url('register');?>">Register</a></li>

                <?php endif;?>
            </ul>
                 
              <!-- <li class="d-lg-none"><a href="post-job.html"><span class="mr-2">+</span> Post a Job</a></li> -->
              
          </nav>
          
          <div class="right-cta-menu text-right d-flex aligin-items-center col-6">
            <div class="ml-auto">
              <!-- <a href="post-job.html" class="btn btn-outline-white border-width-2 d-none d-lg-inline-block"><span class="mr-2 icon-add"></span>Post a Job</a>
              <a href="login.html" class="btn btn-primary border-width-2 d-none d-lg-inline-block"><span class="mr-2 icon-lock_outline"></span>Log In</a> -->
            </div>
            <a href="#" class="site-menu-toggle js-menu-toggle d-inline-block d-xl-none mt-lg-2 ml-3"><span class="icon-menu h3 m-0 p-0 mt-2"></span></a>
          </div>

        </div>
      </div>
    </header>

    
<div class="app">
    <?= $this->renderSection('content'); ?>
</div>

    <footer class="site-footer">

      <a href="#top" class="smoothscroll scroll-top">
        <span class="icon-keyboard_arrow_up"></span>
      </a>

      <div class="container">
        <div class="row mb-5">
          <div class="col-6 col-md-3 mb-4 mb-md-0">
            <h3>Search Trending</h3>
            <ul class="list-unstyled">
              <li><a href="#">Web Design</a></li>
              <li><a href="#">Graphic Design</a></li>
              <li><a href="#">Web Developers</a></li>
              <li><a href="#">Python</a></li>
              <li><a href="#">HTML5</a></li>
              <li><a href="#">CSS3</a></li>
            </ul>
          </div>
          <div class="col-6 col-md-3 mb-4 mb-md-0">
            <h3>Company</h3>
            <ul class="list-unstyled">
              <li><a href="#">About Us</a></li>
              <li><a href="#">Career</a></li>
              <li><a href="#">Blog</a></li>
              <li><a href="#">Resources</a></li>
            </ul>
          </div>
          <div class="col-6 col-md-3 mb-4 mb-md-0">
            <h3>Support</h3>
            <ul class="list-unstyled">
              <li><a href="#">Support</a></li>
              <li><a href="#">Privacy</a></li>
              <li><a href="#">Terms of Service</a></li>
            </ul>
          </div>
          <div class="col-6 col-md-3 mb-4 mb-md-0">
            <h3>Contact Us</h3>
            <div class="footer-social">
              <a href="#"><span class="icon-facebook"></span></a>
              <a href="#"><span class="icon-twitter"></span></a>
              <a href="#"><span class="icon-instagram"></span></a>
              <a href="#"><span class="icon-linkedin"></span></a>
            </div>
          </div>
        </div>

        <div class="row text-center">
          <div class="col-12">
            <p class="copyright"><small>
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart text-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" >Colorlib</a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></small></p>
          </div>
        </div>
      </div>
    </footer>
  
  </div>

    <!-- SCRIPTS -->
    <script src="<?=base_url('assets/js/jquery.min.js'); ?>"></script>
    <script src="<?=base_url('assets/js/bootstrap.bundle.min.js'); ?>"></script>
    <script src="<?=base_url('assets/js/isotope.pkgd.min.js'); ?>"></script>
    <script src="<?=base_url('assets/js/stickyfill.min.js'); ?>"></script>
    <script src="<?=base_url('assets/js/jquery.fancybox.min.js'); ?>"></script>
    <script src="<?=base_url('assets/js/jquery.easing.1.3.js'); ?>"></script>
    
    <script src="<?=base_url('assets/js/jquery.waypoints.min.js'); ?>"></script>
    <script src="<?=base_url('assets/js/jquery.animateNumber.min.js'); ?>"></script>
    <script src="<?=base_url('assets/js/owl.carousel.min.js'); ?>"></script>
    
    <script src="<?=base_url('assets/js/bootstrap-select.min.js'); ?>"></script>
    
    <script src="<?=base_url('assets/js/custom.js'); ?>"></script>

     
  </body>
</html>