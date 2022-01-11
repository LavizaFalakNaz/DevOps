<?php
    include 'config/config.php';
?>

<!doctype html>
<html lang="en">
  
<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title  -->
    <title>Devicks - Home</title>
    <meta name="description" content="Bootstrap 5 landing page template with flat design and fast loading. Create great website with company landing page template.">

    <!--Plugins Styles-->
    <link rel="stylesheet" href="assets/plugins/aos/dist/aos.css">
    <link rel="stylesheet" href="assets/plugins/lightgallery.js/dist/css/lightgallery.min.css">
    <link rel="stylesheet" href="assets/plugins/flickity/dist/flickity.min.css">

    <!--Styles-->
    <link rel="stylesheet" href="assets/css/theme.css">


    <!-- PWA Optimize -->
    <link rel="manifest" href="assets/js/pwa/manifest.json">
    
    <meta name="theme-color" content="#5b2be0">
    <!-- google font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&amp;display=swap" rel="stylesheet">

    <!-- Favicon  -->
    <link rel="icon" href="assets/images/favicon.png">
  </head>

  <body id="top">
    <!--Skippy-->
    <a id="skippy" class="visually-hidden-focusable" href="#content">
      <div class="container">
        <span class="skiplink-text">Skip to main content</span>
      </div>
    </a>
  
    <!-- progress scroll -->
    <progress id="progress-bar" class="progress-one" max="100">
      <span class="progress-container">
        <span class="progress-bar"></span>
      </span>
    </progress>
    
    <!-- ========== { HEADER }==========  -->
    <header>
      <!-- Navbar -->
      <nav class="main-nav navbar navbar-expand-lg hover-navbar dark-to-light fixed-top navbar-dark">
        <div class="container">
          <a class="navbar-brand main-logo" href="#">
            
            <img class="logo-light" src="assets/images/logo.png" style="max-height: 3rem;"  alt="LOGO">
            <img class="logo-dark" src="assets/images/logo.png" style="max-height: 3rem;" alt="LOGO">
          </a>

          <!-- navbar toggler -->
          <button class="navbar-toggler" type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarTogglerDemo"
            aria-controls="navbarTogglerDemo"
            aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <!-- collapse menu -->
          <div class="collapse navbar-collapse" id="navbarTogglerDemo">
            <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
              <li class="nav-item">
                <a class="nav-link" href="#hero">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#about">About</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="#features">Features</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#team">Team</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#testimonial">Testimonial</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#contact">Contact</a>
              </li>
            </ul>
            <div class="d-grid d-lg-block my-3 my-lg-0 ms-0 ms-lg-4">
              <a class="btn btn-warning btn-sm" href="pages/login.php">
                Login
              </a>
              <a class="btn btn-warning btn-sm" href="pages/signup.php">
                Signup
              </a>
            </div>
          </div><!-- end collapse menu -->
        </div>
      </nav><!-- End Navbar -->
    </header><!-- end header -->

    <!-- =========={ MAIN }==========  -->
    <main id="content">
      <!-- =========={ HERO }==========  -->
      <div id="hero" class="section bg-gradient-primary pt-8 pt-md-7 pb-7 pb-xl-5 overflow-hidden">
        <!-- background overlay -->
        <div class="overlay bg-gradient-primary opacity-90 z-index-n1"></div>

        <div class="container">
          <!-- row -->
          <div class="row  justify-content-center">
            <!-- hero image -->
            <div class="col-md-9 col-lg-6 align-self-center order-lg-2 d-none d-lg-block" data-aos="flip-up">
              <img src="assets/images/home.png" class="w-100 my-5 py-5" alt="">
            </div>

            <!-- hero content -->
            <div class="col-10 col-md-9 col-lg-6 align-self-center pe-lg-5 order-lg-1" data-aos="fade-up">
              <div class="text-left mt-6 mt-xl-5 me-lg-6">
                <div class="mb-3">
                  <h1 class="fw-bold text-white">Professional Project Management Tool</h1>
                </div>
                <p class="lead text-light mb-5">Revolutionize your work with a project management tool designed for all teams. Try Asana. Millions of users in 190 countries trust Asana to manage projects and stay on track. Fast Setup. Visualize Work. Drag & Drop. Keep Projects on Track. Easily Coordinate Work.</p>
                <a class="btn btn-warning hover-button-up js-scroll-trigger" href="#features">
                  <!-- <i class="fas fa-arrow-right me-1"></i>  -->
                  <svg xmlns="http://www.w3.org/2000/svg" width="1.5rem" height="1.5rem" class="me-2" fill="currentColor" viewBox="0 0 512 512"><polyline points="268 112 412 256 268 400" style="fill:none;stroke:currentColor;stroke-linecap:round;stroke-linejoin:round;stroke-width:48px"/><line x1="392" y1="256" x2="100" y2="256" style="fill:none;stroke:currentColor;stroke-linecap:round;stroke-linejoin:round;stroke-width:48px"/></svg>
                  Main Features
                </a>
              </div>
            </div>
          </div><!-- end row -->
        </div>
      </div><!-- end hero -->

      
      <!-- =========={ ABOUT }==========  -->
      <div id="about" class="section py-6 bg-white">
        <div class="container">
          <div class="row">
            <!-- content -->
            <div class="col-lg-6 align-self-center" data-aos="fade-right" >
              <div class="max-box mb-5 mb-lg-0 me-lg-6">
                <h2 class="fw-bold mb-3">About Us</h2>
                <p class=" mb-5">Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                  Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley 
                  of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into 
                  electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
                   and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum
                </p>
                <!-- button -->
                <a href="#team" class="btn btn-primary hover-button-up me-3">
                  <!-- <i class="fas fa-paper-plane me-1"></i> -->
                  <svg xmlns="http://www.w3.org/2000/svg" width="1.5rem" height="1.5rem" class="me-2" fill="currentColor" viewBox="0 0 512 512"><path d="M53.12,199.94l400-151.39a8,8,0,0,1,10.33,10.33l-151.39,400a8,8,0,0,1-15-.34L229.66,292.45a16,16,0,0,0-10.11-10.11L53.46,215A8,8,0,0,1,53.12,199.94Z" style="fill:none;stroke:currentColor;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"/><line x1="460" y1="52" x2="227" y2="285" style="fill:none;stroke:currentColor;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"/></svg>
                  Our Team
                </a>
              </div>
            </div><!-- end content -->

            <div class="col-lg-6" data-aos="fade-left">
              <div class="position-relative hover-shadow-sm rounded-3 overflow-hidden">
                <img src="assets/images/about.gif" class="img-fluid w-100" alt="background images">
               
              </div>
            </div>
          </div>
        </div>
      </div><!-- end ABOUT -->

    <!-- =========={ FEATURES }==========  -->
    <div id="features" class="section pt-7 pt-lg-8 pb-3 bg-light">
      <div class="container">
        <!-- section header -->
        <header class="text-center mx-auto mb-5 mb-lg-6">
          <h2 class="h3 fw-bold">Main Features</h2>
          <hr class="divider my-4 bg-primary border-primary">
        </header><!-- end section header -->
        <!-- row -->
        <div class="row">
          <div class="col-lg-4 col-sm-6" data-aos="fade-up">
            <!-- service block -->
            <div class="five-service hover-box-up text-center mb-7">
              <div class="service-icon text-white border">
                <span>
                  <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 512 512"><rect stroke="currentColor" x="32" y="64" width="448" height="320" rx="32" ry="32" style="fill:none;stroke-linejoin:round;stroke-width:32px"/><polygon fill="currentColor" points="304 448 296 384 216 384 208 448 304 448" style="stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"/><line stroke="currentColor" x1="368" y1="448" x2="144" y2="448" style="fill:none;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"/><path fill="currentColor" d="M32,304v48a32.09,32.09,0,0,0,32,32H448a32.09,32.09,0,0,0,32-32V304Zm224,64a16,16,0,1,1,16-16A16,16,0,0,1,256,368Z"/></svg>
                
                </span>
              </div>
              <div class="service-content pt-5 pb-4 px-4 shadow-sm rounded-3">
                <h3 class="h5 mt-3">Web Development</h3>
                <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                <a href="#" class="read-more" title="Read More">
                  <svg class="bi bi-plus" width="2rem" height="2rem" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M8 3.5a.5.5 0 01.5.5v4a.5.5 0 01-.5.5H4a.5.5 0 010-1h3.5V4a.5.5 0 01.5-.5z" clip-rule="evenodd"></path>
                    <path fill-rule="evenodd" d="M7.5 8a.5.5 0 01.5-.5h4a.5.5 0 010 1H8.5V12a.5.5 0 01-1 0V8z" clip-rule="evenodd"></path>
                  </svg>
                </a>
              </div>
            </div><!-- end service block -->
          </div>

          <div class="col-lg-4 col-sm-6" data-aos="fade-up" data-aos-delay="100">
            <!-- service block -->
            <div class="five-service hover-box-up text-center mb-7">
              <div class="service-icon text-white border">
                <span>
                  <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 512 512"><path stroke="currentColor" d="M256.05,80.65Q263.94,80,272,80c106,0,192,86,192,192S378,464,272,464A192.09,192.09,0,0,1,89.12,330.65" style="fill:none;stroke-linecap:round;stroke-miterlimit:10;stroke-width:32px"/><path stroke="currentColor" d="M256,48C141.12,48,48,141.12,48,256a207.29,207.29,0,0,0,18.09,85L256,256Z" style="fill:none;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"/></svg>
                  <!-- <i class="fas fa-chart-pie text-primary"></i>  -->
                </span>
              </div>
              <div class="service-content pt-5 pb-4 px-4 shadow-sm rounded-3">
                <h3 class="h5 mt-3">Digital Marketing</h3>
                <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                <a href="#" class="read-more" title="Read More">
                  <!-- <i class="fa fa-plus"></i> -->
                  <svg class="bi bi-plus" width="2rem" height="2rem" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M8 3.5a.5.5 0 01.5.5v4a.5.5 0 01-.5.5H4a.5.5 0 010-1h3.5V4a.5.5 0 01.5-.5z" clip-rule="evenodd"></path>
                    <path fill-rule="evenodd" d="M7.5 8a.5.5 0 01.5-.5h4a.5.5 0 010 1H8.5V12a.5.5 0 01-1 0V8z" clip-rule="evenodd"></path>
                  </svg>
                </a>
              </div>
            </div><!-- end service block -->
          </div>

          <div class="col-lg-4 col-sm-6" data-aos="fade-up" data-aos-delay="200">
            <!-- service block -->
            <div class="five-service hover-box-up text-center mb-7">
              <div class="service-icon text-white border">
                <span>
                  <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 512 512"><path stroke="currentColor" d="M221.09,64A157.09,157.09,0,1,0,378.18,221.09,157.1,157.1,0,0,0,221.09,64Z" style="fill:none;stroke-miterlimit:10;stroke-width:32px"/><line stroke="currentColor" x1="338.29" y1="338.29" x2="448" y2="448" style="fill:none;stroke-linecap:round;stroke-miterlimit:10;stroke-width:32px"/></svg>
                  <!-- <i class="text-primary fas fa-search"></i> -->
                </span>
              </div>
              <div class="service-content pt-5 pb-4 px-4 shadow-sm rounded-3">
                <h3 class="h5 mt-3">Search Engine Optimization</h3>
                <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                <a href="#" class="read-more" title="Read More">
                  <!-- <i class="fa fa-plus"></i> -->
                  <svg class="bi bi-plus" width="2rem" height="2rem" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M8 3.5a.5.5 0 01.5.5v4a.5.5 0 01-.5.5H4a.5.5 0 010-1h3.5V4a.5.5 0 01.5-.5z" clip-rule="evenodd"></path>
                    <path fill-rule="evenodd" d="M7.5 8a.5.5 0 01.5-.5h4a.5.5 0 010 1H8.5V12a.5.5 0 01-1 0V8z" clip-rule="evenodd"></path>
                  </svg>
                </a>
              </div>
            </div><!-- end service block -->
          </div>

          <div class="col-lg-4 col-sm-6" data-aos="fade-up">
            <!-- service block -->
            <div class="five-service hover-box-up text-center mb-7">
              <div class="service-icon text-white border">
                <span>
                  <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 512 512"><path fill="currentColor" d="M455.27,32H56.73A24.74,24.74,0,0,0,32,56.73V455.27A24.74,24.74,0,0,0,56.73,480H256V304H202.45V240H256V189c0-57.86,40.13-89.36,91.82-89.36,24.73,0,51.33,1.86,57.51,2.68v60.43H364.15c-28.12,0-33.48,13.3-33.48,32.9V240h67l-8.75,64H330.67V480h124.6A24.74,24.74,0,0,0,480,455.27V56.73A24.74,24.74,0,0,0,455.27,32Z"/></svg>
                  <!-- <i class="text-primary fab fa-facebook"></i> -->
                </span>
              </div>
              <div class="service-content pt-5 pb-4 px-4 shadow-sm rounded-3">
                <h3 class="h5 mt-3">Social Media Marketing</h3>
                <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                <a href="#" class="read-more" title="Read More">
                  <!-- <i class="fa fa-plus"></i> -->
                  <svg class="bi bi-plus" width="2rem" height="2rem" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M8 3.5a.5.5 0 01.5.5v4a.5.5 0 01-.5.5H4a.5.5 0 010-1h3.5V4a.5.5 0 01.5-.5z" clip-rule="evenodd"></path>
                    <path fill-rule="evenodd" d="M7.5 8a.5.5 0 01.5-.5h4a.5.5 0 010 1H8.5V12a.5.5 0 01-1 0V8z" clip-rule="evenodd"></path>
                  </svg>
                </a>
              </div>
            </div><!-- end service block -->
          </div>

          <div class="col-lg-4 col-sm-6" data-aos="fade-up" data-aos-delay="100">
            <!-- service block -->
            <div class="five-service hover-box-up text-center mb-7">
              <div class="service-icon text-white border">
                <span>
                  <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 512 512"><rect stroke="currentColor" x="128" y="16" width="256" height="480" rx="48" ry="48" style="fill:none;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"/><path stroke="currentColor" d="M176,16h24a8,8,0,0,1,8,8h0a16,16,0,0,0,16,16h64a16,16,0,0,0,16-16h0a8,8,0,0,1,8-8h24" style="fill:none;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"/></svg>
                  <!-- <i class="text-primary fas fa-mobile"></i> -->
                </span>
              </div>
              <div class="service-content pt-5 pb-4 px-4 shadow-sm rounded-3">
                <h3 class="h5 mt-3">Mobile Apps Marketing</h3>
                <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                <a href="#" class="read-more" title="Read More">
                  <!-- <i class="fa fa-plus"></i> -->
                  <svg class="bi bi-plus" width="2rem" height="2rem" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M8 3.5a.5.5 0 01.5.5v4a.5.5 0 01-.5.5H4a.5.5 0 010-1h3.5V4a.5.5 0 01.5-.5z" clip-rule="evenodd"></path>
                    <path fill-rule="evenodd" d="M7.5 8a.5.5 0 01.5-.5h4a.5.5 0 010 1H8.5V12a.5.5 0 01-1 0V8z" clip-rule="evenodd"></path>
                  </svg>
                </a>
              </div>
            </div><!-- end service block -->
          </div>

          <div class="col-lg-4 col-sm-6" data-aos="fade-up" data-aos-delay="200">
            <!-- service block -->
            <div class="five-service hover-box-up text-center mb-7">
              <div class="service-icon text-white border">
                <span>
                  <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 512 512"><path fill="currentColor" d="M473.16,221.48l-2.26-9.59H262.46v88.22H387c-12.93,61.4-72.93,93.72-121.94,93.72-35.66,0-73.25-15-98.13-39.11a140.08,140.08,0,0,1-41.8-98.88c0-37.16,16.7-74.33,41-98.78s61-38.13,97.49-38.13c41.79,0,71.74,22.19,82.94,32.31l62.69-62.36C390.86,72.72,340.34,32,261.6,32h0c-60.75,0-119,23.27-161.58,65.71C58,139.5,36.25,199.93,36.25,256S56.83,369.48,97.55,411.6C141.06,456.52,202.68,480,266.13,480c57.73,0,112.45-22.62,151.45-63.66,38.34-40.4,58.17-96.3,58.17-154.9C475.75,236.77,473.27,222.12,473.16,221.48Z"/></svg>
                  <!-- <i class="text-primary fab fa-google"></i> -->
                </span>
              </div>
              <div class="service-content pt-5 pb-4 px-4 shadow-sm rounded-3">
                <h3 class="h5 mt-3">Google Suite</h3>
                <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                <a href="#" class="read-more" title="Read More">
                  <!-- <i class="fa fa-plus"></i> -->
                  <svg class="bi bi-plus" width="2rem" height="2rem" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M8 3.5a.5.5 0 01.5.5v4a.5.5 0 01-.5.5H4a.5.5 0 010-1h3.5V4a.5.5 0 01.5-.5z" clip-rule="evenodd"></path>
                    <path fill-rule="evenodd" d="M7.5 8a.5.5 0 01.5-.5h4a.5.5 0 010 1H8.5V12a.5.5 0 01-1 0V8z" clip-rule="evenodd"></path>
                  </svg>
                </a>
              </div>
            </div><!-- end service block -->
          </div>
        </div><!-- end row -->
      </div>
    </div><!-- End FEATURES -->

      <!-- =========={ Packages }==========  -->
      <div id="packages" class="section pt-6 pt-md-7 pb-4 pb-md-5 bg-white">
        <div class="container">
          <!-- section header -->
          <header class="text-center mx-auto mb-5">
            <h2 class="h3 fw-bold">Payment Packages</h2>
            <hr class="divider my-4 bg-warning border-warning">
            <p class="lead text-muted">Pay only fixed monthly fee and the rest we will handle for you!</p>
          </header><!-- end section header -->

          <!-- navigation -->
          <div class="text-center">
            <div class="slideToggle mb-5 mb-lg-6">
              <label class="form-switch">
                <span class="beforeinput">Monthly</span>
                <input type="checkbox" id="js-checkbox" class="js-checkbox">
                <i></i>
                <span class="afterinput">Yearly</span>
              </label>
            </div>
          </div>

          <!-- row -->
          <div class="row justify-content-center">
            <div class="col-11 col-md-6 col-lg-4" data-aos="fade-up">
              <div class="px-xl-2">
                <!-- price table-->
                <div class="pricing-table-two border rounded-3 mb-5">
                  <!-- pricing header -->
                  <header class="pricing-header">
                    <h3 class="h4 fw-bold">Starter</h3>
                    <p class="sub-head text-muted">Start Up</p>
                    <div class="line-after bg-gradient-primary mb-4"></div>
                    <div class="pricing-fee">
                      <h4 class="js-monthly text-primary">$19.99 <span class="small fw-light">/Month</span></h4>
                      <h4 class="js-yearly text-primary">$199.99 <span class="small fw-light">/Year</span></h4>
                    </div>
                  </header><!-- end pricing header -->

                  <!-- pricing content -->
                  <div class="pricing-content">
                    <p>100 Employee</p>
                    <p>Unlimited Features</p>
                    <p>Presentation Software</p>
                    <p>Project Management</p>
                    <p>Event Management</p>
                    <div class="d-grid mt-5"><a class="btn btn-secondary" href="#">Get Started</a></div>
                  </div><!-- end pricing content -->
                </div><!-- End price table-->
              </div>
            </div>

            <div class="col-11 col-md-6 col-lg-4" data-aos="fade-up">
              <div class="px-xl-2">
                <!-- price table-->
                <div class="pricing-table-two border bg-light rounded-3 mt-lg-n4 mb-5">
                  <!-- ribbon -->
                  <div class="ribbon ribbon-md ribbon-end">
                    <span class="bg-warning text-dark">Popular</span>
                  </div>
                  <!-- pricing header -->
                  <div class="pricing-header">
                    <h3 class="h4 fw-bold">Professional</h3>
                    <p class="sub-head text-muted">Small Business</p>
                    <div class="line-after bg-gradient-primary mb-4"></div>
                    <div class="pricing-fee">
                      <h4 class="js-monthly text-primary">$29.99 <span class="small fw-light">/Month</span></h4>
                      <h4 class="js-yearly text-primary">$299.99 <span class="small fw-light">/Year</span></h4>
                    </div>
                  </div><!-- end pricing header -->

                  <!-- pricing content -->
                  <div class="pricing-content">
                    <p>500 Employee</p>
                    <p>Unlimited Features</p>
                    <p>Presentation Software</p>
                    <p>Project Management</p>
                    <p>Event Management</p>
                    <p>Most Popular</p>
                    <div class="d-grid mt-5">
                      <a class="btn btn-primary" href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" class="me-2" width="1.5rem" height="1.5rem" viewBox="0 0 512 512"><path d="M53.12,199.94l400-151.39a8,8,0,0,1,10.33,10.33l-151.39,400a8,8,0,0,1-15-.34L229.66,292.45a16,16,0,0,0-10.11-10.11L53.46,215A8,8,0,0,1,53.12,199.94Z" style="fill:none;stroke:currentColor;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"></path><line x1="460" y1="52" x2="227" y2="285" style="fill:none;stroke:currentColor;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"></line></svg>Get Started
                      </a>
                    </div>
                  </div><!-- end pricing content -->
                </div><!-- end pricing table -->
              </div>
            </div>

            <div class="col-11 col-md-6 col-lg-4" data-aos="fade-up">
              <div class="px-xl-2">
                <!-- price table-->
                <div class="pricing-table-two border rounded-3 mb-5">
                  <!-- pricing header -->
                  <header class="pricing-header">
                    <h3 class="h4 fw-bold">Expert</h3>
                    <p class="sub-head text-muted">Big Business</p>
                    <div class="line-after bg-gradient-primary mb-4"></div>
                    <div class="pricing-fee">
                      <h4 class="js-monthly text-primary">$39.99 <span class="small fw-light">/Month</span></h4>
                      <h4 class="js-yearly text-primary">$399.99 <span class="small fw-light">/Year</span></h4>
                    </div>
                  </header><!-- end pricing header -->

                  <!-- pricing content -->
                  <div class="pricing-content">
                    <p>1000 Employee</p>
                    <p>Unlimited Features</p>
                    <p>Presentation Software</p>
                    <p>Project Management</p>
                    <p>Event Management</p>
                    <div class="d-grid mt-5"><a class="btn btn-secondary" href="#">Get Started</a></div>
                  </div><!-- end pricing content -->
                </div><!-- End price table-->
              </div>
            </div>
          </div><!-- end row -->
        </div>
      </div><!-- End Packages -->

      <!-- =========={ TEAM }==========  -->
      <div id="team" class="section pt-6 pt-md-7 pb-4 pb-md-5 bg-light">
        <div class="container">
            <!-- section header -->
            <header class="text-center mx-auto mb-5">
              <h2 class="h3 fw-bold">Our Team</h2>
              <hr class="divider my-4 bg-warning border-warning">
            </header><!-- end section header -->
          <!-- row -->
          <div class="row justify-content-center">
            <div class="col-8 col-sm-6 col-md-5 col-lg-6">
              <!-- team block -->
              <div class="team4 rounded-3 shadow-sm bg-white mb-5">
                <!-- Row -->
                <div class="row g-0">
                  <div class="col-lg-5">
                    <!-- team thumbnail -->
                    <div class="team-thumb z-index-1">
                      <!-- scribble -->
                      <figure class="scribble scale-2 top-0 end-0 me-n5 mt-n6 z-index-n1 opacity-30" data-aos="fade-down-left">
                        <svg class="text-white" width="200" height="200" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                          <path fill="currentColor" d="M42.5,-66.2C57.1,-56.7,72.5,-48.4,81.1,-35.3C89.8,-22.2,91.8,-4.4,89.6,13C87.3,30.4,80.7,47.4,69.5,60.1C58.3,72.9,42.4,81.5,25.9,84.6C9.5,87.8,-7.4,85.4,-22.7,79.8C-37.9,74.1,-51.5,65.2,-60.9,53.3C-70.4,41.4,-75.8,26.6,-79,10.8C-82.1,-5,-83.1,-21.7,-77.7,-36.4C-72.4,-51,-60.7,-63.7,-46.7,-73.5C-32.7,-83.3,-16.4,-90.1,-1.2,-88.2C13.9,-86.3,27.8,-75.7,42.5,-66.2Z" transform="translate(100 100)" />
                        </svg>
                      </figure>
                      <img src="assets/images/team/avatar1.png" class="img-fluid" alt="title image">
                      <div class="team-social">
                        <ul class="list-unstyled hover-social mb-0">
                          <li>
                            <a class="text-twitter" aria-label="Twitter link" href="#">
                              <!-- <i class="fab fa-twitter text-twitter"></i> -->
                               <svg xmlns="http://www.w3.org/2000/svg" width="1rem" height="1rem" viewBox="0 0 512 512"><path fill="currentColor" d="M496,109.5a201.8,201.8,0,0,1-56.55,15.3,97.51,97.51,0,0,0,43.33-53.6,197.74,197.74,0,0,1-62.56,23.5A99.14,99.14,0,0,0,348.31,64c-54.42,0-98.46,43.4-98.46,96.9a93.21,93.21,0,0,0,2.54,22.1,280.7,280.7,0,0,1-203-101.3A95.69,95.69,0,0,0,36,130.4C36,164,53.53,193.7,80,211.1A97.5,97.5,0,0,1,35.22,199v1.2c0,47,34,86.1,79,95a100.76,100.76,0,0,1-25.94,3.4,94.38,94.38,0,0,1-18.51-1.8c12.51,38.5,48.92,66.5,92.05,67.3A199.59,199.59,0,0,1,39.5,405.6,203,203,0,0,1,16,404.2,278.68,278.68,0,0,0,166.74,448c181.36,0,280.44-147.7,280.44-275.8,0-4.2-.11-8.4-.31-12.5A198.48,198.48,0,0,0,496,109.5Z"></path></svg>
                            </a>
                          </li>
                          <li>
                            <a class="text-facebook" aria-label="Facebook link" href="#">
                              <!-- <i class="fab fa-facebook text-facebook"></i> -->
                              <svg xmlns="http://www.w3.org/2000/svg" width="1rem" height="1rem" viewBox="0 0 512 512"><path fill="currentColor" d="M455.27,32H56.73A24.74,24.74,0,0,0,32,56.73V455.27A24.74,24.74,0,0,0,56.73,480H256V304H202.45V240H256V189c0-57.86,40.13-89.36,91.82-89.36,24.73,0,51.33,1.86,57.51,2.68v60.43H364.15c-28.12,0-33.48,13.3-33.48,32.9V240h67l-8.75,64H330.67V480h124.6A24.74,24.74,0,0,0,480,455.27V56.73A24.74,24.74,0,0,0,455.27,32Z"></path></svg>
                            </a>
                          </li>
                          <li>
                            <a class="text-instagram" aria-label="Instagram link" href="#">
                              <!-- <i class="fab fa-instagram text-instagram"></i> -->
                              <svg xmlns="http://www.w3.org/2000/svg" width="1rem" height="1rem" viewBox="0 0 512 512"><path fill="currentColor" d="M349.33,69.33a93.62,93.62,0,0,1,93.34,93.34V349.33a93.62,93.62,0,0,1-93.34,93.34H162.67a93.62,93.62,0,0,1-93.34-93.34V162.67a93.62,93.62,0,0,1,93.34-93.34H349.33m0-37.33H162.67C90.8,32,32,90.8,32,162.67V349.33C32,421.2,90.8,480,162.67,480H349.33C421.2,480,480,421.2,480,349.33V162.67C480,90.8,421.2,32,349.33,32Z"></path><path fill="currentColor" d="M377.33,162.67a28,28,0,1,1,28-28A27.94,27.94,0,0,1,377.33,162.67Z"></path><path fill="currentColor" d="M256,181.33A74.67,74.67,0,1,1,181.33,256,74.75,74.75,0,0,1,256,181.33M256,144A112,112,0,1,0,368,256,112,112,0,0,0,256,144Z"></path></svg>
                            </a>
                          </li>
                          <li>
                           <a class="text-linkedin" aria-label="Linkedin link" href="#">
                              <!-- <i class="fab fa-linkedin text-linkedin"></i> -->
                              <svg xmlns="http://www.w3.org/2000/svg" width="1rem" height="1rem" viewBox="0 0 512 512"><path fill="currentColor" d="M444.17,32H70.28C49.85,32,32,46.7,32,66.89V441.61C32,461.91,49.85,480,70.28,480H444.06C464.6,480,480,461.79,480,441.61V66.89C480.12,46.7,464.6,32,444.17,32ZM170.87,405.43H106.69V205.88h64.18ZM141,175.54h-.46c-20.54,0-33.84-15.29-33.84-34.43,0-19.49,13.65-34.42,34.65-34.42s33.85,14.82,34.31,34.42C175.65,160.25,162.35,175.54,141,175.54ZM405.43,405.43H341.25V296.32c0-26.14-9.34-44-32.56-44-17.74,0-28.24,12-32.91,23.69-1.75,4.2-2.22,9.92-2.22,15.76V405.43H209.38V205.88h64.18v27.77c9.34-13.3,23.93-32.44,57.88-32.44,42.13,0,74,27.77,74,87.64Z"></path></svg>
                            </a>
                          </li>
                        </ul>
                      </div>
                    </div><!-- end team thumbnail -->
                  </div>
                  <div class="col-lg-7">
                    <!-- team info -->
                    <div class="team-info p-4">
                      <p class="h4 mb-1">Joe Antonio</p>
                      <p class="text-muted mb-2">Founder CEO</p>
                      <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit nihil tenetur minus quidem .</p>
                    </div><!-- end team info -->
                  </div>
                </div><!-- Row -->
              </div><!-- team block -->
            </div>

            <div class="col-8 col-sm-6 col-md-5 col-lg-6">
              <!-- team block -->
              <div class="team4 rounded-3 shadow-sm bg-white mb-5">
                <!-- Row -->
                <div class="row g-0">
                  <div class="col-lg-5">
                    <!-- team thumbnail -->
                    <div class="team-thumb z-index-1">
                      <!-- scribble -->
                      <figure class="scribble scale-2 top-0 end-0 me-n5 mt-n6 z-index-n1 opacity-30" data-aos="fade-down-left">
                        <svg class="text-white" width="200" height="200" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                          <path fill="currentColor" d="M42.5,-66.2C57.1,-56.7,72.5,-48.4,81.1,-35.3C89.8,-22.2,91.8,-4.4,89.6,13C87.3,30.4,80.7,47.4,69.5,60.1C58.3,72.9,42.4,81.5,25.9,84.6C9.5,87.8,-7.4,85.4,-22.7,79.8C-37.9,74.1,-51.5,65.2,-60.9,53.3C-70.4,41.4,-75.8,26.6,-79,10.8C-82.1,-5,-83.1,-21.7,-77.7,-36.4C-72.4,-51,-60.7,-63.7,-46.7,-73.5C-32.7,-83.3,-16.4,-90.1,-1.2,-88.2C13.9,-86.3,27.8,-75.7,42.5,-66.2Z" transform="translate(100 100)" />
                        </svg>
                      </figure>
                      <img src="assets/images/team/avatar2.png" class="img-fluid" alt="title image">
                      <div class="team-social">
                        <ul class="list-unstyled hover-social mb-0">
                          <li>
                            <a class="text-twitter" aria-label="Twitter link" href="#">
                              <!-- <i class="fab fa-twitter text-twitter"></i> -->
                               <svg xmlns="http://www.w3.org/2000/svg" width="1rem" height="1rem" viewBox="0 0 512 512"><path fill="currentColor" d="M496,109.5a201.8,201.8,0,0,1-56.55,15.3,97.51,97.51,0,0,0,43.33-53.6,197.74,197.74,0,0,1-62.56,23.5A99.14,99.14,0,0,0,348.31,64c-54.42,0-98.46,43.4-98.46,96.9a93.21,93.21,0,0,0,2.54,22.1,280.7,280.7,0,0,1-203-101.3A95.69,95.69,0,0,0,36,130.4C36,164,53.53,193.7,80,211.1A97.5,97.5,0,0,1,35.22,199v1.2c0,47,34,86.1,79,95a100.76,100.76,0,0,1-25.94,3.4,94.38,94.38,0,0,1-18.51-1.8c12.51,38.5,48.92,66.5,92.05,67.3A199.59,199.59,0,0,1,39.5,405.6,203,203,0,0,1,16,404.2,278.68,278.68,0,0,0,166.74,448c181.36,0,280.44-147.7,280.44-275.8,0-4.2-.11-8.4-.31-12.5A198.48,198.48,0,0,0,496,109.5Z"></path></svg>
                            </a>
                          </li>
                          <li>
                            <a class="text-facebook" aria-label="Facebook link" href="#">
                              <!-- <i class="fab fa-facebook text-facebook"></i> -->
                              <svg xmlns="http://www.w3.org/2000/svg" width="1rem" height="1rem" viewBox="0 0 512 512"><path fill="currentColor" d="M455.27,32H56.73A24.74,24.74,0,0,0,32,56.73V455.27A24.74,24.74,0,0,0,56.73,480H256V304H202.45V240H256V189c0-57.86,40.13-89.36,91.82-89.36,24.73,0,51.33,1.86,57.51,2.68v60.43H364.15c-28.12,0-33.48,13.3-33.48,32.9V240h67l-8.75,64H330.67V480h124.6A24.74,24.74,0,0,0,480,455.27V56.73A24.74,24.74,0,0,0,455.27,32Z"></path></svg>
                            </a>
                          </li>
                          <li>
                            <a class="text-instagram" aria-label="Instagram link" href="#">
                              <!-- <i class="fab fa-instagram text-instagram"></i> -->
                              <svg xmlns="http://www.w3.org/2000/svg" width="1rem" height="1rem" viewBox="0 0 512 512"><path fill="currentColor" d="M349.33,69.33a93.62,93.62,0,0,1,93.34,93.34V349.33a93.62,93.62,0,0,1-93.34,93.34H162.67a93.62,93.62,0,0,1-93.34-93.34V162.67a93.62,93.62,0,0,1,93.34-93.34H349.33m0-37.33H162.67C90.8,32,32,90.8,32,162.67V349.33C32,421.2,90.8,480,162.67,480H349.33C421.2,480,480,421.2,480,349.33V162.67C480,90.8,421.2,32,349.33,32Z"></path><path fill="currentColor" d="M377.33,162.67a28,28,0,1,1,28-28A27.94,27.94,0,0,1,377.33,162.67Z"></path><path fill="currentColor" d="M256,181.33A74.67,74.67,0,1,1,181.33,256,74.75,74.75,0,0,1,256,181.33M256,144A112,112,0,1,0,368,256,112,112,0,0,0,256,144Z"></path></svg>
                            </a>
                          </li>
                          <li>
                           <a class="text-linkedin" aria-label="Linkedin link" href="#">
                              <!-- <i class="fab fa-linkedin text-linkedin"></i> -->
                              <svg xmlns="http://www.w3.org/2000/svg" width="1rem" height="1rem" viewBox="0 0 512 512"><path fill="currentColor" d="M444.17,32H70.28C49.85,32,32,46.7,32,66.89V441.61C32,461.91,49.85,480,70.28,480H444.06C464.6,480,480,461.79,480,441.61V66.89C480.12,46.7,464.6,32,444.17,32ZM170.87,405.43H106.69V205.88h64.18ZM141,175.54h-.46c-20.54,0-33.84-15.29-33.84-34.43,0-19.49,13.65-34.42,34.65-34.42s33.85,14.82,34.31,34.42C175.65,160.25,162.35,175.54,141,175.54ZM405.43,405.43H341.25V296.32c0-26.14-9.34-44-32.56-44-17.74,0-28.24,12-32.91,23.69-1.75,4.2-2.22,9.92-2.22,15.76V405.43H209.38V205.88h64.18v27.77c9.34-13.3,23.93-32.44,57.88-32.44,42.13,0,74,27.77,74,87.64Z"></path></svg>
                            </a>
                          </li>
                        </ul>
                      </div>
                    </div><!-- end team thumbnail -->
                  </div>
                  <div class="col-lg-7">
                    <!-- team info -->
                    <div class="team-info p-4">
                      <p class="h4 mb-1">Thony Khan</p>
                      <p class="text-muted mb-2">Product Manager</p>
                      <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit nihil tenetur minus quidem .</p>
                    </div><!-- end team info -->
                  </div>
                </div><!-- Row -->
              </div><!-- team block -->
            </div>

            <div class="col-8 col-sm-6 col-md-5 col-lg-6">
              <!-- team block -->
              <div class="team4 rounded-3 shadow-sm bg-white mb-5">
                <!-- Row -->
                <div class="row g-0">
                  <div class="col-lg-5">
                    <!-- team thumbnail -->
                    <div class="team-thumb z-index-1">
                      <!-- scribble -->
                      <figure class="scribble scale-2 top-0 end-0 me-n5 mt-n6 z-index-n1 opacity-30" data-aos="fade-down-left">
                        <svg class="text-white" width="200" height="200" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                          <path fill="currentColor" d="M42.5,-66.2C57.1,-56.7,72.5,-48.4,81.1,-35.3C89.8,-22.2,91.8,-4.4,89.6,13C87.3,30.4,80.7,47.4,69.5,60.1C58.3,72.9,42.4,81.5,25.9,84.6C9.5,87.8,-7.4,85.4,-22.7,79.8C-37.9,74.1,-51.5,65.2,-60.9,53.3C-70.4,41.4,-75.8,26.6,-79,10.8C-82.1,-5,-83.1,-21.7,-77.7,-36.4C-72.4,-51,-60.7,-63.7,-46.7,-73.5C-32.7,-83.3,-16.4,-90.1,-1.2,-88.2C13.9,-86.3,27.8,-75.7,42.5,-66.2Z" transform="translate(100 100)" />
                        </svg>
                      </figure>
                      <img src="assets/images/team/avatar3.png" class="img-fluid" alt="title image">
                      <div class="team-social">
                        <ul class="list-unstyled hover-social mb-0">
                          <li>
                            <a class="text-twitter" aria-label="Twitter link" href="#">
                              <!-- <i class="fab fa-twitter text-twitter"></i> -->
                               <svg xmlns="http://www.w3.org/2000/svg" width="1rem" height="1rem" viewBox="0 0 512 512"><path fill="currentColor" d="M496,109.5a201.8,201.8,0,0,1-56.55,15.3,97.51,97.51,0,0,0,43.33-53.6,197.74,197.74,0,0,1-62.56,23.5A99.14,99.14,0,0,0,348.31,64c-54.42,0-98.46,43.4-98.46,96.9a93.21,93.21,0,0,0,2.54,22.1,280.7,280.7,0,0,1-203-101.3A95.69,95.69,0,0,0,36,130.4C36,164,53.53,193.7,80,211.1A97.5,97.5,0,0,1,35.22,199v1.2c0,47,34,86.1,79,95a100.76,100.76,0,0,1-25.94,3.4,94.38,94.38,0,0,1-18.51-1.8c12.51,38.5,48.92,66.5,92.05,67.3A199.59,199.59,0,0,1,39.5,405.6,203,203,0,0,1,16,404.2,278.68,278.68,0,0,0,166.74,448c181.36,0,280.44-147.7,280.44-275.8,0-4.2-.11-8.4-.31-12.5A198.48,198.48,0,0,0,496,109.5Z"></path></svg>
                            </a>
                          </li>
                          <li>
                            <a class="text-facebook" aria-label="Facebook link" href="#">
                              <!-- <i class="fab fa-facebook text-facebook"></i> -->
                              <svg xmlns="http://www.w3.org/2000/svg" width="1rem" height="1rem" viewBox="0 0 512 512"><path fill="currentColor" d="M455.27,32H56.73A24.74,24.74,0,0,0,32,56.73V455.27A24.74,24.74,0,0,0,56.73,480H256V304H202.45V240H256V189c0-57.86,40.13-89.36,91.82-89.36,24.73,0,51.33,1.86,57.51,2.68v60.43H364.15c-28.12,0-33.48,13.3-33.48,32.9V240h67l-8.75,64H330.67V480h124.6A24.74,24.74,0,0,0,480,455.27V56.73A24.74,24.74,0,0,0,455.27,32Z"></path></svg>
                            </a>
                          </li>
                          <li>
                            <a class="text-instagram" aria-label="Instagram link" href="#">
                              <!-- <i class="fab fa-instagram text-instagram"></i> -->
                              <svg xmlns="http://www.w3.org/2000/svg" width="1rem" height="1rem" viewBox="0 0 512 512"><path fill="currentColor" d="M349.33,69.33a93.62,93.62,0,0,1,93.34,93.34V349.33a93.62,93.62,0,0,1-93.34,93.34H162.67a93.62,93.62,0,0,1-93.34-93.34V162.67a93.62,93.62,0,0,1,93.34-93.34H349.33m0-37.33H162.67C90.8,32,32,90.8,32,162.67V349.33C32,421.2,90.8,480,162.67,480H349.33C421.2,480,480,421.2,480,349.33V162.67C480,90.8,421.2,32,349.33,32Z"></path><path fill="currentColor" d="M377.33,162.67a28,28,0,1,1,28-28A27.94,27.94,0,0,1,377.33,162.67Z"></path><path fill="currentColor" d="M256,181.33A74.67,74.67,0,1,1,181.33,256,74.75,74.75,0,0,1,256,181.33M256,144A112,112,0,1,0,368,256,112,112,0,0,0,256,144Z"></path></svg>
                            </a>
                          </li>
                          <li>
                           <a class="text-linkedin" aria-label="Linkedin link" href="#">
                              <!-- <i class="fab fa-linkedin text-linkedin"></i> -->
                              <svg xmlns="http://www.w3.org/2000/svg" width="1rem" height="1rem" viewBox="0 0 512 512"><path fill="currentColor" d="M444.17,32H70.28C49.85,32,32,46.7,32,66.89V441.61C32,461.91,49.85,480,70.28,480H444.06C464.6,480,480,461.79,480,441.61V66.89C480.12,46.7,464.6,32,444.17,32ZM170.87,405.43H106.69V205.88h64.18ZM141,175.54h-.46c-20.54,0-33.84-15.29-33.84-34.43,0-19.49,13.65-34.42,34.65-34.42s33.85,14.82,34.31,34.42C175.65,160.25,162.35,175.54,141,175.54ZM405.43,405.43H341.25V296.32c0-26.14-9.34-44-32.56-44-17.74,0-28.24,12-32.91,23.69-1.75,4.2-2.22,9.92-2.22,15.76V405.43H209.38V205.88h64.18v27.77c9.34-13.3,23.93-32.44,57.88-32.44,42.13,0,74,27.77,74,87.64Z"></path></svg>
                            </a>
                          </li>
                        </ul>
                      </div>
                    </div><!-- end team thumbnail -->
                  </div>
                  <div class="col-lg-7">
                    <!-- team info -->
                    <div class="team-info p-4">
                      <p class="h4 mb-1">John Timito</p>
                      <p class="text-muted mb-2">Marketing</p>
                      <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit nihil tenetur minus quidem .</p>
                    </div><!-- end team info -->
                  </div>
                </div><!-- Row -->
              </div><!-- team block -->
            </div>

            <div class="col-8 col-sm-6 col-md-5 col-lg-6">
              <!-- team block -->
              <div class="team4 rounded-3 shadow-sm bg-white mb-5">
                <!-- Row -->
                <div class="row g-0">
                  <div class="col-lg-5">
                    <!-- team thumbnail -->
                    <div class="team-thumb z-index-1">
                      <!-- scribble -->
                      <figure class="scribble scale-2 top-0 end-0 me-n5 mt-n6 z-index-n1 opacity-30" data-aos="fade-down-left">
                        <svg class="text-white" width="200" height="200" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                          <path fill="currentColor" d="M42.5,-66.2C57.1,-56.7,72.5,-48.4,81.1,-35.3C89.8,-22.2,91.8,-4.4,89.6,13C87.3,30.4,80.7,47.4,69.5,60.1C58.3,72.9,42.4,81.5,25.9,84.6C9.5,87.8,-7.4,85.4,-22.7,79.8C-37.9,74.1,-51.5,65.2,-60.9,53.3C-70.4,41.4,-75.8,26.6,-79,10.8C-82.1,-5,-83.1,-21.7,-77.7,-36.4C-72.4,-51,-60.7,-63.7,-46.7,-73.5C-32.7,-83.3,-16.4,-90.1,-1.2,-88.2C13.9,-86.3,27.8,-75.7,42.5,-66.2Z" transform="translate(100 100)" />
                        </svg>
                      </figure>
                      <img src="assets/images/team/avatar4.png" class="img-fluid" alt="title image">
                      <div class="team-social">
                        <ul class="list-unstyled hover-social mb-0">
                          <li>
                            <a class="text-twitter" aria-label="Twitter link" href="#">
                              <!-- <i class="fab fa-twitter text-twitter"></i> -->
                               <svg xmlns="http://www.w3.org/2000/svg" width="1rem" height="1rem" viewBox="0 0 512 512"><path fill="currentColor" d="M496,109.5a201.8,201.8,0,0,1-56.55,15.3,97.51,97.51,0,0,0,43.33-53.6,197.74,197.74,0,0,1-62.56,23.5A99.14,99.14,0,0,0,348.31,64c-54.42,0-98.46,43.4-98.46,96.9a93.21,93.21,0,0,0,2.54,22.1,280.7,280.7,0,0,1-203-101.3A95.69,95.69,0,0,0,36,130.4C36,164,53.53,193.7,80,211.1A97.5,97.5,0,0,1,35.22,199v1.2c0,47,34,86.1,79,95a100.76,100.76,0,0,1-25.94,3.4,94.38,94.38,0,0,1-18.51-1.8c12.51,38.5,48.92,66.5,92.05,67.3A199.59,199.59,0,0,1,39.5,405.6,203,203,0,0,1,16,404.2,278.68,278.68,0,0,0,166.74,448c181.36,0,280.44-147.7,280.44-275.8,0-4.2-.11-8.4-.31-12.5A198.48,198.48,0,0,0,496,109.5Z"></path></svg>
                            </a>
                          </li>
                          <li>
                            <a class="text-facebook" aria-label="Facebook link" href="#">
                              <!-- <i class="fab fa-facebook text-facebook"></i> -->
                              <svg xmlns="http://www.w3.org/2000/svg" width="1rem" height="1rem" viewBox="0 0 512 512"><path fill="currentColor" d="M455.27,32H56.73A24.74,24.74,0,0,0,32,56.73V455.27A24.74,24.74,0,0,0,56.73,480H256V304H202.45V240H256V189c0-57.86,40.13-89.36,91.82-89.36,24.73,0,51.33,1.86,57.51,2.68v60.43H364.15c-28.12,0-33.48,13.3-33.48,32.9V240h67l-8.75,64H330.67V480h124.6A24.74,24.74,0,0,0,480,455.27V56.73A24.74,24.74,0,0,0,455.27,32Z"></path></svg>
                            </a>
                          </li>
                          <li>
                            <a class="text-instagram" aria-label="Instagram link" href="#">
                              <!-- <i class="fab fa-instagram text-instagram"></i> -->
                              <svg xmlns="http://www.w3.org/2000/svg" width="1rem" height="1rem" viewBox="0 0 512 512"><path fill="currentColor" d="M349.33,69.33a93.62,93.62,0,0,1,93.34,93.34V349.33a93.62,93.62,0,0,1-93.34,93.34H162.67a93.62,93.62,0,0,1-93.34-93.34V162.67a93.62,93.62,0,0,1,93.34-93.34H349.33m0-37.33H162.67C90.8,32,32,90.8,32,162.67V349.33C32,421.2,90.8,480,162.67,480H349.33C421.2,480,480,421.2,480,349.33V162.67C480,90.8,421.2,32,349.33,32Z"></path><path fill="currentColor" d="M377.33,162.67a28,28,0,1,1,28-28A27.94,27.94,0,0,1,377.33,162.67Z"></path><path fill="currentColor" d="M256,181.33A74.67,74.67,0,1,1,181.33,256,74.75,74.75,0,0,1,256,181.33M256,144A112,112,0,1,0,368,256,112,112,0,0,0,256,144Z"></path></svg>
                            </a>
                          </li>
                          <li>
                           <a class="text-linkedin" aria-label="Linkedin link" href="#">
                              <!-- <i class="fab fa-linkedin text-linkedin"></i> -->
                              <svg xmlns="http://www.w3.org/2000/svg" width="1rem" height="1rem" viewBox="0 0 512 512"><path fill="currentColor" d="M444.17,32H70.28C49.85,32,32,46.7,32,66.89V441.61C32,461.91,49.85,480,70.28,480H444.06C464.6,480,480,461.79,480,441.61V66.89C480.12,46.7,464.6,32,444.17,32ZM170.87,405.43H106.69V205.88h64.18ZM141,175.54h-.46c-20.54,0-33.84-15.29-33.84-34.43,0-19.49,13.65-34.42,34.65-34.42s33.85,14.82,34.31,34.42C175.65,160.25,162.35,175.54,141,175.54ZM405.43,405.43H341.25V296.32c0-26.14-9.34-44-32.56-44-17.74,0-28.24,12-32.91,23.69-1.75,4.2-2.22,9.92-2.22,15.76V405.43H209.38V205.88h64.18v27.77c9.34-13.3,23.93-32.44,57.88-32.44,42.13,0,74,27.77,74,87.64Z"></path></svg>
                            </a>
                          </li>
                        </ul>
                      </div>
                    </div><!-- end team thumbnail -->
                  </div>
                  <div class="col-lg-7">
                    <!-- team info -->
                    <div class="team-info p-4">
                      <p class="h4 mb-1">Daniel Emo</p>
                      <p class="text-muted mb-2">Senior Designer</p>
                      <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit nihil tenetur minus quidem .</p>
                    </div><!-- end team info -->
                  </div>
                </div><!-- Row -->
              </div><!-- team block -->
            </div>
          </div>
        </div>
      </div><!-- End Team-->

      <!-- =========={ COUNTER }==========  -->
      <div id="counter" class="section pt-6 pt-md-7 pb-5 pb-md-6 bg-dark jarallax">
        <!-- background parallax -->
        <img class="jarallax-img" src="assets/images/bg-planet.jpg" alt="title">
        <div class="overlay bg-primary opacity-80 z-index-n1"></div>

        <div class="container">
          <div class="row text-center text-uppercase">
            <div class="col-lg-3 col-sm-6">
              <div class="d-flex align-item-center justify-content-center p-4 bg-light rounded-3 position-relative mb-4">
                <!-- icon -->
                <div class="text-center">
                  <!-- svg icons -->
                  <svg class="bi bi-person text-primary mb-1 me-3" width="4rem" height="4rem" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M13 14s1 0 1-1-1-4-6-4-6 3-6 4 1 1 1 1h10zm-9.995-.944v-.002.002zM3.022 13h9.956a.274.274 0 00.014-.002l.008-.002c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664a1.05 1.05 0 00.022.004zm9.974.056v-.002.002zM8 7a2 2 0 100-4 2 2 0 000 4zm3-2a3 3 0 11-6 0 3 3 0 016 0z" clip-rule="evenodd"></path>
                  </svg>
                </div>
                <!-- text -->
                <div class="text-left">
                  <div class="h2 mb-1 text-primary">
                    <span class="counter">1200</span>
                  </div>
                  <small class="d-block text-uppercase text-primary">Customers</small>
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-sm-6">
              <div class="d-flex align-item-center justify-content-center p-4 bg-light rounded-3 position-relative mb-4">
                <!-- icons -->
                <div class="text-center">
                  <!-- svg icons -->
                  <svg class="bi bi-briefcase text-primary mb-1 me-3" width="4rem" height="4rem" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M0 12.5A1.5 1.5 0 001.5 14h13a1.5 1.5 0 001.5-1.5v-6h-1v6a.5.5 0 01-.5.5h-13a.5.5 0 01-.5-.5v-6H0v6z" clip-rule="evenodd"></path>
                    <path fill-rule="evenodd" d="M0 4.5A1.5 1.5 0 011.5 3h13A1.5 1.5 0 0116 4.5v2.384l-7.614 2.03a1.5 1.5 0 01-.772 0L0 6.884V4.5zM1.5 4a.5.5 0 00-.5.5v1.616l6.871 1.832a.5.5 0 00.258 0L15 6.116V4.5a.5.5 0 00-.5-.5h-13zM5 2.5A1.5 1.5 0 016.5 1h3A1.5 1.5 0 0111 2.5V3h-1v-.5a.5.5 0 00-.5-.5h-3a.5.5 0 00-.5.5V3H5v-.5z" clip-rule="evenodd"></path>
                  </svg>
                </div>
                <!-- text -->
                <div class="text-left">
                  <div class="h2 mb-1 text-primary">
                    <span class="counter">700</span>
                  </div>
                  <small class="d-block text-uppercase text-primary">Company</small>
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-sm-6">
              <div class="d-flex align-item-center justify-content-center p-4 bg-light rounded-3 position-relative mb-4">
                <!-- icon -->
                <div class="text-center">
                  <!-- svg icons -->
                  <svg class="bi bi-award text-primary mb-1 me-3" width="4rem" height="4rem" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M9.669.864L8 0 6.331.864l-1.858.282-.842 1.68-1.337 1.32L2.6 6l-.306 1.854 1.337 1.32.842 1.68 1.858.282L8 12l1.669-.864 1.858-.282.842-1.68 1.337-1.32L13.4 6l.306-1.854-1.337-1.32-.842-1.68L9.669.864zm1.196 1.193l-1.51-.229L8 1.126l-1.355.702-1.51.229-.684 1.365-1.086 1.072L3.614 6l-.25 1.506 1.087 1.072.684 1.365 1.51.229L8 10.874l1.356-.702 1.509-.229.684-1.365 1.086-1.072L12.387 6l.248-1.506-1.086-1.072-.684-1.365z" clip-rule="evenodd"></path>
                    <path d="M4 11.794V16l4-1 4 1v-4.206l-2.018.306L8 13.126 6.018 12.1 4 11.794z"></path>
                  </svg>
                </div>
                <!-- text -->
                <div class="text-left">
                  <div class="h2 mb-1 text-primary">
                    <span class="counter">20</span>
                  </div>
                  <small class="d-block text-uppercase text-primary">Awards</small>
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-sm-6">
              <div class="d-flex align-item-center justify-content-center p-4 bg-light rounded-3 position-relative mb-4">
                <!-- icon -->
                <div class="text-center">
                  <!-- svg icons -->
                  <svg class="bi bi-file-earmark-check text-primary mb-1 me-3" width="4rem" height="4rem" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path d="M9 1H4a2 2 0 00-2 2v10a2 2 0 002 2h5v-1H4a1 1 0 01-1-1V3a1 1 0 011-1h5v2.5A1.5 1.5 0 0010.5 6H13v2h1V6L9 1z"></path>
                    <path fill-rule="evenodd" d="M15.854 10.146a.5.5 0 010 .708l-3 3a.5.5 0 01-.708 0l-1.5-1.5a.5.5 0 01.708-.708l1.146 1.147 2.646-2.647a.5.5 0 01.708 0z" clip-rule="evenodd"></path>
                  </svg>
                </div>
                <!-- text -->
                <div class="text-left">
                  <div class="h2 mb-1 text-primary">
                    <span class="counter">450</span>
                  </div>
                  <small class="d-block text-uppercase text-primary">Project</small>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div><!-- end counter -->

      <!-- =========={ Testimonials }==========  -->
      <div id="testimonial" class="section py-6 py-md-7 bg-light">
        <div class="container">
          <!--header section-->
          <header class="text-center mx-auto mb-5">
            <h2 class="h3 fw-bold">Our Testimonial</h2>
            <hr class="divider my-4 mx-auto bg-warning border-warning">
            <p class="lead text-muted">Do not take our words, check out what people says.!</p>
          </header>

          <!-- row -->
          <div class="row justify-content-center">
            <div class="col-11 col-md-12">
              <!-- review slider -->
              <div class="nav-dark-button" data-flickity='{ "cellAlign": "left", "wrapAround": true, "adaptiveHeight": true, "pageDots": false }'>
                <!-- item -->
                <div class="col-12 col-md-6 px-3 px-lg-5">
                  <!-- Reviews -->
                  <blockquote class="reviews-one rounded-3 mb-5">
                    <p>Absolutely love the company . I have used it on numerous websites and hands down, by far, the best management tool.</p>
                    <ul class="ratings my-2 text-muted">
                      <li class="active">
                        <!-- icon -->
                        <svg xmlns='http://www.w3.org/2000/svg' width='18' height='18' fill="currentColor" viewBox='0 0 512 512'><path class="rating-svg" d='M394,480a16,16,0,0,1-9.39-3L256,383.76,127.39,477a16,16,0,0,1-24.55-18.08L153,310.35,23,221.2A16,16,0,0,1,32,192H192.38l48.4-148.95a16,16,0,0,1,30.44,0l48.4,149H480a16,16,0,0,1,9.05,29.2L359,310.35l50.13,148.53A16,16,0,0,1,394,480Z'/></svg>
                        <!-- <i class="fa fa-star"></i> -->
                      </li>
                      <li class="active">
                        <!-- icon -->
                        <svg xmlns='http://www.w3.org/2000/svg' width='18' height='18' fill="currentColor" viewBox='0 0 512 512'><path class="rating-svg" d='M394,480a16,16,0,0,1-9.39-3L256,383.76,127.39,477a16,16,0,0,1-24.55-18.08L153,310.35,23,221.2A16,16,0,0,1,32,192H192.38l48.4-148.95a16,16,0,0,1,30.44,0l48.4,149H480a16,16,0,0,1,9.05,29.2L359,310.35l50.13,148.53A16,16,0,0,1,394,480Z'/></svg>
                        <!-- <i class="fa fa-star"></i> -->
                      </li>
                      <li class="active">
                        <!-- icon -->
                        <svg xmlns='http://www.w3.org/2000/svg' width='18' height='18' fill="currentColor" viewBox='0 0 512 512'><path class="rating-svg" d='M394,480a16,16,0,0,1-9.39-3L256,383.76,127.39,477a16,16,0,0,1-24.55-18.08L153,310.35,23,221.2A16,16,0,0,1,32,192H192.38l48.4-148.95a16,16,0,0,1,30.44,0l48.4,149H480a16,16,0,0,1,9.05,29.2L359,310.35l50.13,148.53A16,16,0,0,1,394,480Z'/></svg>
                        <!-- <i class="fa fa-star"></i> -->
                      </li>
                      <li class="active">
                        <!-- icon -->
                        <svg xmlns='http://www.w3.org/2000/svg' width='18' height='18' fill="currentColor" viewBox='0 0 512 512'><path class="rating-svg" d='M394,480a16,16,0,0,1-9.39-3L256,383.76,127.39,477a16,16,0,0,1-24.55-18.08L153,310.35,23,221.2A16,16,0,0,1,32,192H192.38l48.4-148.95a16,16,0,0,1,30.44,0l48.4,149H480a16,16,0,0,1,9.05,29.2L359,310.35l50.13,148.53A16,16,0,0,1,394,480Z'/></svg>
                        <!-- <i class="fa fa-star"></i> -->
                      </li>
                      <li class="active">
                        <!-- icon -->
                        <svg xmlns='http://www.w3.org/2000/svg' width='18' height='18' fill="currentColor" viewBox='0 0 512 512'><path class="rating-svg" d='M394,480a16,16,0,0,1-9.39-3L256,383.76,127.39,477a16,16,0,0,1-24.55-18.08L153,310.35,23,221.2A16,16,0,0,1,32,192H192.38l48.4-148.95a16,16,0,0,1,30.44,0l48.4,149H480a16,16,0,0,1,9.05,29.2L359,310.35l50.13,148.53A16,16,0,0,1,394,480Z'/></svg>
                        <!-- <i class="fa fa-star"></i> -->
                      </li>
                    </ul>
                  </blockquote>
                  <div class="d-flex">
                    <img class="d-flex align-self-center rounded-circle reviews-one-thumb shadow-md mx-3 mt-2" src="assets/images/team/avatar1-small.png" alt="Image description">
                    <div class="align-self-center">
                      <p class="mb-0">
                        <strong class="d-block">Jessica Ramos</strong>
                        <span class="fs-75 text-muted">CEO One Company</span>
                      </p>
                    </div>
                  </div><!-- End Reviews -->
                </div>

                <!-- item -->
                <div class="col-12 col-md-6 px-3 px-lg-5">
                  <!-- Reviews -->
                  <blockquote class="reviews-one rounded-3 mb-5">
                    <p>Hi I'am purchased this tool a few days ago and this is very amazing, they give me great help with some setup issues.</p>
                    <ul class="ratings my-2 text-muted">
                      <li class="active">
                        <!-- icon -->
                        <svg xmlns='http://www.w3.org/2000/svg' width='18' height='18' fill="currentColor" viewBox='0 0 512 512'><path class="rating-svg" d='M394,480a16,16,0,0,1-9.39-3L256,383.76,127.39,477a16,16,0,0,1-24.55-18.08L153,310.35,23,221.2A16,16,0,0,1,32,192H192.38l48.4-148.95a16,16,0,0,1,30.44,0l48.4,149H480a16,16,0,0,1,9.05,29.2L359,310.35l50.13,148.53A16,16,0,0,1,394,480Z'/></svg>
                        <!-- <i class="fa fa-star"></i> -->
                      </li>
                      <li class="active">
                        <!-- icon -->
                        <svg xmlns='http://www.w3.org/2000/svg' width='18' height='18' fill="currentColor" viewBox='0 0 512 512'><path class="rating-svg" d='M394,480a16,16,0,0,1-9.39-3L256,383.76,127.39,477a16,16,0,0,1-24.55-18.08L153,310.35,23,221.2A16,16,0,0,1,32,192H192.38l48.4-148.95a16,16,0,0,1,30.44,0l48.4,149H480a16,16,0,0,1,9.05,29.2L359,310.35l50.13,148.53A16,16,0,0,1,394,480Z'/></svg>
                        <!-- <i class="fa fa-star"></i> -->
                      </li>
                      <li class="active">
                        <!-- icon -->
                        <svg xmlns='http://www.w3.org/2000/svg' width='18' height='18' fill="currentColor" viewBox='0 0 512 512'><path class="rating-svg" d='M394,480a16,16,0,0,1-9.39-3L256,383.76,127.39,477a16,16,0,0,1-24.55-18.08L153,310.35,23,221.2A16,16,0,0,1,32,192H192.38l48.4-148.95a16,16,0,0,1,30.44,0l48.4,149H480a16,16,0,0,1,9.05,29.2L359,310.35l50.13,148.53A16,16,0,0,1,394,480Z'/></svg>
                        <!-- <i class="fa fa-star"></i> -->
                      </li>
                      <li class="active">
                        <!-- icon -->
                        <svg xmlns='http://www.w3.org/2000/svg' width='18' height='18' fill="currentColor" viewBox='0 0 512 512'><path class="rating-svg" d='M394,480a16,16,0,0,1-9.39-3L256,383.76,127.39,477a16,16,0,0,1-24.55-18.08L153,310.35,23,221.2A16,16,0,0,1,32,192H192.38l48.4-148.95a16,16,0,0,1,30.44,0l48.4,149H480a16,16,0,0,1,9.05,29.2L359,310.35l50.13,148.53A16,16,0,0,1,394,480Z'/></svg>
                        <!-- <i class="fa fa-star"></i> -->
                      </li>
                      <li class="active">
                        <!-- icon -->
                        <svg xmlns='http://www.w3.org/2000/svg' width='18' height='18' fill="currentColor" viewBox='0 0 512 512'><path class="rating-svg" d='M394,480a16,16,0,0,1-9.39-3L256,383.76,127.39,477a16,16,0,0,1-24.55-18.08L153,310.35,23,221.2A16,16,0,0,1,32,192H192.38l48.4-148.95a16,16,0,0,1,30.44,0l48.4,149H480a16,16,0,0,1,9.05,29.2L359,310.35l50.13,148.53A16,16,0,0,1,394,480Z'/></svg>
                        <!-- <i class="fa fa-star"></i> -->
                      </li>
                    </ul>
                  </blockquote>
                  <div class="d-flex">
                    <img class="d-flex align-self-center rounded-circle reviews-one-thumb shadow-md mx-3 mt-2" src="assets/images/team/avatar3-small.png" alt="Image description">
                    <div class="align-self-center">
                      <p class="mb-0">
                        <strong class="d-block">Sebastion Doe</strong>
                        <span class="fs-75 text-muted">Manager Zero Company</span>
                      </p>
                    </div>
                  </div><!-- End Reviews -->
                </div>

                 <!-- item -->
                <div class="col-12 col-md-6 px-3 px-lg-5">
                  <!-- Reviews -->
                  <blockquote class="reviews-one rounded-3 mb-5">
                    <p>The tool is amazing, flexible and working fine! Updates are always timely. But their customer support is what makes company really great for me.</p>
                    <ul class="ratings my-2 text-muted">
                      <li class="active">
                        <!-- icon -->
                        <svg xmlns='http://www.w3.org/2000/svg' width='18' height='18' fill="currentColor" viewBox='0 0 512 512'><path class="rating-svg" d='M394,480a16,16,0,0,1-9.39-3L256,383.76,127.39,477a16,16,0,0,1-24.55-18.08L153,310.35,23,221.2A16,16,0,0,1,32,192H192.38l48.4-148.95a16,16,0,0,1,30.44,0l48.4,149H480a16,16,0,0,1,9.05,29.2L359,310.35l50.13,148.53A16,16,0,0,1,394,480Z'/></svg>
                        <!-- <i class="fa fa-star"></i> -->
                      </li>
                      <li class="active">
                        <!-- icon -->
                        <svg xmlns='http://www.w3.org/2000/svg' width='18' height='18' fill="currentColor" viewBox='0 0 512 512'><path class="rating-svg" d='M394,480a16,16,0,0,1-9.39-3L256,383.76,127.39,477a16,16,0,0,1-24.55-18.08L153,310.35,23,221.2A16,16,0,0,1,32,192H192.38l48.4-148.95a16,16,0,0,1,30.44,0l48.4,149H480a16,16,0,0,1,9.05,29.2L359,310.35l50.13,148.53A16,16,0,0,1,394,480Z'/></svg>
                        <!-- <i class="fa fa-star"></i> -->
                      </li>
                      <li class="active">
                        <!-- icon -->
                        <svg xmlns='http://www.w3.org/2000/svg' width='18' height='18' fill="currentColor" viewBox='0 0 512 512'><path class="rating-svg" d='M394,480a16,16,0,0,1-9.39-3L256,383.76,127.39,477a16,16,0,0,1-24.55-18.08L153,310.35,23,221.2A16,16,0,0,1,32,192H192.38l48.4-148.95a16,16,0,0,1,30.44,0l48.4,149H480a16,16,0,0,1,9.05,29.2L359,310.35l50.13,148.53A16,16,0,0,1,394,480Z'/></svg>
                        <!-- <i class="fa fa-star"></i> -->
                      </li>
                      <li class="active">
                        <!-- icon -->
                        <svg xmlns='http://www.w3.org/2000/svg' width='18' height='18' fill="currentColor" viewBox='0 0 512 512'><path class="rating-svg" d='M394,480a16,16,0,0,1-9.39-3L256,383.76,127.39,477a16,16,0,0,1-24.55-18.08L153,310.35,23,221.2A16,16,0,0,1,32,192H192.38l48.4-148.95a16,16,0,0,1,30.44,0l48.4,149H480a16,16,0,0,1,9.05,29.2L359,310.35l50.13,148.53A16,16,0,0,1,394,480Z'/></svg>
                        <!-- <i class="fa fa-star"></i> -->
                      </li>
                      <li class="active">
                        <!-- icon -->
                        <svg xmlns='http://www.w3.org/2000/svg' width='18' height='18' fill="currentColor" viewBox='0 0 512 512'><path class="rating-svg" d='M394,480a16,16,0,0,1-9.39-3L256,383.76,127.39,477a16,16,0,0,1-24.55-18.08L153,310.35,23,221.2A16,16,0,0,1,32,192H192.38l48.4-148.95a16,16,0,0,1,30.44,0l48.4,149H480a16,16,0,0,1,9.05,29.2L359,310.35l50.13,148.53A16,16,0,0,1,394,480Z'/></svg>
                        <!-- <i class="fa fa-star"></i> -->
                      </li>
                    </ul>
                  </blockquote>
                  <div class="d-flex">
                    <img class="d-flex align-self-center rounded-circle reviews-one-thumb shadow-md mx-3 mt-2" src="assets/images/team/avatar4-small.png" alt="Image description">
                    <div class="align-self-center">
                      <p class="mb-0">
                        <strong class="d-block">Tom Robert</strong>
                        <span class="fs-75 text-muted">Manager Five Company</span>
                      </p>
                    </div>
                  </div><!-- End Reviews -->
                </div>
              </div><!-- end review slider -->
            </div>
          </div><!-- end row -->
        </div>
      </div><!-- End Reviews -->

      <!-- =========={ CONTACT }==========  -->
      <div id="contact" class="section pt-6 pb-5 bg-white">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <div class="contact-area w-100 p-4">
                <h3 class="h4 mb-5 text-center">Contact Us</h3>
                <!-- contact form -->
                <form action="#" class="contact-form">
                  <div class="row">
                    <div class="col-md-6 mb-4">
                      <label class="form-label" for="name">Your Name</label>
                      <input type="text" name="name" class="form-control" id="name">
                      <div class="validate"></div>
                    </div>
                    <div class="col-md-6 mb-4">
                      <label class="form-label" for="email">Your Email</label>
                      <input type="email" class="form-control" name="email" id="email">
                      <div class="validate"></div>
                    </div>
                  </div>
                  <div class="mb-4">
                    <label class="form-label" for="subject">Subject</label>
                    <input type="text" class="form-control" name="subject" id="subject">
                    <div class="validate"></div>
                  </div>
                  <div class="mb-4">
                    <label class="form-label" for="messages">Message</label>
                    <textarea class="form-control" name="message" rows="10" id="messages"></textarea>
                    <div class="validate"></div>
                  </div>
                  <div class="text-center mb-4">
                    <button class="btn btn-primary" type="submit">
                      <svg xmlns="http://www.w3.org/2000/svg" width="1.5rem" height="1.5rem" fill="currentColor" class="me-2 rtl-270" viewBox="0 0 512 512"><path d="M53.12,199.94l400-151.39a8,8,0,0,1,10.33,10.33l-151.39,400a8,8,0,0,1-15-.34L229.66,292.45a16,16,0,0,0-10.11-10.11L53.46,215A8,8,0,0,1,53.12,199.94Z" style="fill:none;stroke:currentColor;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"></path><line x1="460" y1="52" x2="227" y2="285" style="fill:none;stroke:currentColor;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"></line></svg>
                      Send Message
                    </button>
                  </div>
                </form><!-- end contact form -->
              </div>
            </div>

            <div class="col-md-6">
              <div class="p-4">
                <h3 class="h4 mb-5 text-center">Our Maps</h3>
                <!-- maps responsive -->
                <div class="responsive-maps mb-5">
                  <iframe class="lazy" data-src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1537389.2000627194!2d-105.93786665117793!3d41.18442046635789!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54eab584e432360b%3A0x1c3bb99243deb742!2sUnited%20States!5e0!3m2!1sen!2sid!4v1585008753367!5m2!1sen!2sid" aria-label="Google Maps" width="800" height="600" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div><!-- end maps responsive -->
                <p><b>Working Time</b>: Monday - Saturday: 09:00 AM - 08:00 PM</p>
                <p><b>Phone Number</b>: +1 234 5678 90</p>
                <p><b>Email</b>: Support@domain.com</p>
              </div>
            </div>
          </div>
        </div>
      </div><!-- End contact -->
    </main><!-- end main -->

    <!-- =========={ FOOTER }==========  -->
    <footer class="bg-secondary">
      <!--Footer content-->
      <div id="footer" class="footer-dark section pt-6 pb-5">
        <div class="container">
          <div class="row">
            <!-- left widget -->
            <div class="col-lg-4">
              <!-- Footer Content -->
              <div class="widget-content pe-lg-5">
                <!-- Footer Title -->
                <h4 class="h5 mb-4">About Us</h4>
                <div class="widget-body">
                  <p>This template is designed in Bootstrap . The conetnt is dummy and focus is just to make design attractive and professional</p>
                  <address>
                    <!-- <i class="fa fa-map-marker-alt me-2"></i> -->
                    <svg xmlns="http://www.w3.org/2000/svg" width="1.2rem" height="1.2rem" viewBox="0 0 512 512"><path fill="currentColor" d="M256,48c-79.5,0-144,61.39-144,137,0,87,96,224.87,131.25,272.49a15.77,15.77,0,0,0,25.5,0C304,409.89,400,272.07,400,185,400,109.39,335.5,48,256,48Z" style="fill:none;stroke:currentColor;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"/><circle fill="currentColor" cx="256" cy="192" r="48" style="fill:none;stroke:currentColor;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"/></svg>
                    Example Address,<br> ABC 12345, Country
                  </address>
                  <p class="footer-info">
                    <!-- <i class="fa fa-phone me-2"></i> -->
                    <svg xmlns="http://www.w3.org/2000/svg" width="1.2rem" height="1.2rem" viewBox="0 0 512 512"><path fill="currentColor" d="M451,374c-15.88-16-54.34-39.35-73-48.76C353.7,313,351.7,312,332.6,326.19c-12.74,9.47-21.21,17.93-36.12,14.75s-47.31-21.11-75.68-49.39-47.34-61.62-50.53-76.48,5.41-23.23,14.79-36c13.22-18,12.22-21,.92-45.3-8.81-18.9-32.84-57-48.9-72.8C119.9,44,119.9,47,108.83,51.6A160.15,160.15,0,0,0,83,65.37C67,76,58.12,84.83,51.91,98.1s-9,44.38,23.07,102.64,54.57,88.05,101.14,134.49S258.5,406.64,310.85,436c64.76,36.27,89.6,29.2,102.91,23s22.18-15,32.83-31a159.09,159.09,0,0,0,13.8-25.8C465,391.17,468,391.17,451,374Z" style="fill:none;stroke:currentColor;stroke-miterlimit:10;stroke-width:32px"/></svg>
                  +(123) 456-7890</p>
                  <p class="footer-info">
                    <!-- <i class="fa fa-envelope me-2"></i> -->
                    <svg xmlns="http://www.w3.org/2000/svg" width="1.2rem" height="1.2rem" viewBox="0 0 512 512"><rect fill="currentColor" x="48" y="96" width="416" height="320" rx="40" ry="40" style="fill:none;stroke:currentColor;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"/><polyline fill="currentColor" points="112 160 256 272 400 160" style="fill:none;stroke:currentColor;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"/></svg>
                  support@example.com</p>
                </div>
              </div>
            </div>

            <!-- center widget -->
            <div class="footer-links col-md-6 col-lg-4">
              <!-- Footer Content -->
              <div class="widget-content">
                <!-- Footer Title -->
                <h4 class="h5 mb-4">Popular Links</h4>
                <div class="row">
                  <div class="col-md-12">
                    <ul class="list-unstyled before-arrow">
                      <li class="py-2"><a href="#about">About us</a></li>
                      <li class="py-2"><a href="#features">Tool Features</a></li>
                      <li class="py-2"><a href="#team">Our Team</a></li>
                      <li class="py-2"><a href="#testimonial">Testimonial</a></li>
                      <li class="py-2"><a href="#contact">Contact Us</a></li>
                      <li class="py-2"><a href="#">Term of use</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>

            <!-- right -->
            <div class="widget col-md-6 col-lg-4">
              <!-- Footer Content -->
              <div class="widget-content">
                <!-- Footer Title -->
                <h4 class="h5 mb-4">Newsletter</h4>
                <p>Subscribe to our mailing list to receives daily updates direct to your inbox!</p>
                <!--form-->
                <div class="mx-auto mb-4">
                  <form id="subscribe" action="#">
                    <div class="input-group">
                      <input type="email" class="form-control" name="email" required="" placeholder="Enter you email address" aria-label="subcribe newsletter">
                      <button class="btn btn-warning" type="submit">Subscribe</button>
                    </div>
                  </form>
                </div><!--end form-->

                <div class="my-1"></div>
                <ul class="footer-links list-unstyled social-icon mb-4">
                  <!--facebook-->
                  <li class="my-2 me-3">
                    <a target="_blank" rel="noopener noreferrer" href="https://facebook.com/" title="Facebook">
                      <!-- <i class="fab fa-facebook fa-2x"></i> -->
                      <svg xmlns="http://www.w3.org/2000/svg" width="2rem" height="2rem" viewBox="0 0 512 512"><path fill="currentColor" d="M455.27,32H56.73A24.74,24.74,0,0,0,32,56.73V455.27A24.74,24.74,0,0,0,56.73,480H256V304H202.45V240H256V189c0-57.86,40.13-89.36,91.82-89.36,24.73,0,51.33,1.86,57.51,2.68v60.43H364.15c-28.12,0-33.48,13.3-33.48,32.9V240h67l-8.75,64H330.67V480h124.6A24.74,24.74,0,0,0,480,455.27V56.73A24.74,24.74,0,0,0,455.27,32Z"/></svg>
                    </a>
                  </li>
                  <!--twitter-->
                  <li class="my-2 me-3">
                    <a target="_blank" rel="noopener noreferrer" href="https://twitter.com/" title="Twitter">
                      <!-- <i class="fab fa-twitter fa-2x"></i> -->
                      <svg xmlns="http://www.w3.org/2000/svg" width="2rem" height="2rem" viewBox="0 0 512 512"><path fill="currentColor" d="M496,109.5a201.8,201.8,0,0,1-56.55,15.3,97.51,97.51,0,0,0,43.33-53.6,197.74,197.74,0,0,1-62.56,23.5A99.14,99.14,0,0,0,348.31,64c-54.42,0-98.46,43.4-98.46,96.9a93.21,93.21,0,0,0,2.54,22.1,280.7,280.7,0,0,1-203-101.3A95.69,95.69,0,0,0,36,130.4C36,164,53.53,193.7,80,211.1A97.5,97.5,0,0,1,35.22,199v1.2c0,47,34,86.1,79,95a100.76,100.76,0,0,1-25.94,3.4,94.38,94.38,0,0,1-18.51-1.8c12.51,38.5,48.92,66.5,92.05,67.3A199.59,199.59,0,0,1,39.5,405.6,203,203,0,0,1,16,404.2,278.68,278.68,0,0,0,166.74,448c181.36,0,280.44-147.7,280.44-275.8,0-4.2-.11-8.4-.31-12.5A198.48,198.48,0,0,0,496,109.5Z"/></svg>
                    </a>
                  </li>
                  <!--youtube-->
                  <li class="my-2 me-3">
                    <a target="_blank" rel="noopener noreferrer" href="https://youtube.com/" title="Youtube">
                      <!-- <i class="fab fa-youtube fa-2x"></i> -->
                      <svg xmlns="http://www.w3.org/2000/svg" width="2rem" height="2rem" viewBox="0 0 512 512"><path fill="currentColor" d="M508.64,148.79c0-45-33.1-81.2-74-81.2C379.24,65,322.74,64,265,64H247c-57.6,0-114.2,1-169.6,3.6-40.8,0-73.9,36.4-73.9,81.4C1,184.59-.06,220.19,0,255.79q-.15,53.4,3.4,106.9c0,45,33.1,81.5,73.9,81.5,58.2,2.7,117.9,3.9,178.6,3.8q91.2.3,178.6-3.8c40.9,0,74-36.5,74-81.5,2.4-35.7,3.5-71.3,3.4-107Q512.24,202.29,508.64,148.79ZM207,353.89V157.39l145,98.2Z"/></svg>
                    </a>
                  </li>
                  <!--VKontakte-->
                  <li class="my-2 me-3">
                    <a target="_blank" rel="noopener noreferrer" href="https://vk.com/" title="VKontakte">
                      <!-- <i class="fab fa-vk fa-2x"></i> -->
                      <svg xmlns="http://www.w3.org/2000/svg" width="2rem" height="2rem" viewBox="0 0 512 512"><path fill="currentColor" d="M484.7,132c3.56-11.28,0-19.48-15.75-19.48H416.58c-13.21,0-19.31,7.18-22.87,14.86,0,0-26.94,65.6-64.56,108.13-12.2,12.3-17.79,16.4-24.4,16.4-3.56,0-8.14-4.1-8.14-15.37V131.47c0-13.32-4.06-19.47-15.25-19.47H199c-8.14,0-13.22,6.15-13.22,12.3,0,12.81,18.81,15.89,20.84,51.76V254c0,16.91-3,20-9.66,20-17.79,0-61-66.11-86.92-141.44C105,117.64,99.88,112,86.66,112H33.79C18.54,112,16,119.17,16,126.86c0,13.84,17.79,83.53,82.86,175.77,43.21,63,104.72,96.86,160.13,96.86,33.56,0,37.62-7.69,37.62-20.5V331.33c0-15.37,3.05-17.93,13.73-17.93,7.62,0,21.35,4.09,52.36,34.33C398.28,383.6,404.38,400,424.21,400h52.36c15.25,0,22.37-7.69,18.3-22.55-4.57-14.86-21.86-36.38-44.23-62-12.2-14.34-30.5-30.23-36.09-37.92-7.62-10.25-5.59-14.35,0-23.57-.51,0,63.55-91.22,70.15-122" style="fill-rule:evenodd"/></svg>
                    </a>
                  </li>
                  <!--Linkedin-->
                  <li class="my-2 me-3">
                    <a target="_blank" rel="noopener noreferrer" href="https://linkedin.com/" title="Linkedin">
                      <!-- <i class="fab fa-linkedin fa-2x"></i> -->
                      <svg xmlns="http://www.w3.org/2000/svg" width="2rem" height="2rem" viewBox="0 0 512 512"><path fill="currentColor" d="M444.17,32H70.28C49.85,32,32,46.7,32,66.89V441.61C32,461.91,49.85,480,70.28,480H444.06C464.6,480,480,461.79,480,441.61V66.89C480.12,46.7,464.6,32,444.17,32ZM170.87,405.43H106.69V205.88h64.18ZM141,175.54h-.46c-20.54,0-33.84-15.29-33.84-34.43,0-19.49,13.65-34.42,34.65-34.42s33.85,14.82,34.31,34.42C175.65,160.25,162.35,175.54,141,175.54ZM405.43,405.43H341.25V296.32c0-26.14-9.34-44-32.56-44-17.74,0-28.24,12-32.91,23.69-1.75,4.2-2.22,9.92-2.22,15.76V405.43H209.38V205.88h64.18v27.77c9.34-13.3,23.93-32.44,57.88-32.44,42.13,0,74,27.77,74,87.64Z"/></svg>
                    </a>
                  </li>
                  <!--instagram-->
                  <li class="my-2 me-3">
                    <a target="_blank" rel="noopener noreferrer" href="https://instagram.com/" title="Instagram">
                      <!-- <i class="fab fa-instagram fa-2x"></i> -->
                      <svg xmlns="http://www.w3.org/2000/svg" width="2rem" height="2rem" viewBox="0 0 512 512"><path fill="currentColor" d="M349.33,69.33a93.62,93.62,0,0,1,93.34,93.34V349.33a93.62,93.62,0,0,1-93.34,93.34H162.67a93.62,93.62,0,0,1-93.34-93.34V162.67a93.62,93.62,0,0,1,93.34-93.34H349.33m0-37.33H162.67C90.8,32,32,90.8,32,162.67V349.33C32,421.2,90.8,480,162.67,480H349.33C421.2,480,480,421.2,480,349.33V162.67C480,90.8,421.2,32,349.33,32Z"/><path fill="currentColor" d="M377.33,162.67a28,28,0,1,1,28-28A27.94,27.94,0,0,1,377.33,162.67Z"/><path fill="currentColor" d="M256,181.33A74.67,74.67,0,1,1,181.33,256,74.75,74.75,0,0,1,256,181.33M256,144A112,112,0,1,0,368,256,112,112,0,0,0,256,144Z"/></svg>
                    </a>
                  </li><!--end instagram-->
                </ul>
              </div><!-- End Footer Content -->
            </div><!-- end right -->
          </div>
        </div>
      </div><!--End footer content-->

      <!--Start footer copyright-->
      <div class="footer-dark">
        <div class="container py-4 border-top border-smooth">
          <div class="row">
            <div class="col-12 text-center">
              <p class="d-block my-3">Copyright &copy; Your Company | All rights reserved.</p>
            </div>
          </div>
        </div>
      </div><!--End footer copyright-->
    </footer><!-- End Footer -->

    <!-- =========={ SCROLL TO TOP }==========  -->
    <a href="#top" class="p-3 border position-fixed end-1 bottom-1 z-index-10 back-top" title="Scroll To Top">
      <!-- <i class="fas fa-arrow-up"></i> -->
      <svg class="bi bi-arrow-up" width="1rem" height="1rem" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd" d="M8 3.5a.5.5 0 01.5.5v9a.5.5 0 01-1 0V4a.5.5 0 01.5-.5z" clip-rule="evenodd"></path>
        <path fill-rule="evenodd" d="M7.646 2.646a.5.5 0 01.708 0l3 3a.5.5 0 01-.708.708L8 3.707 5.354 6.354a.5.5 0 11-.708-.708l3-3z" clip-rule="evenodd"></path>
      </svg>
    </a>

    <!-- =========={ JAVASCRIPT }==========  -->
    <!-- Popper and Bootstrap js -->
    <script src="assets/plugins/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin js -->
    <script src="assets/plugins/jarallax/dist/jarallax.min.js"></script>
    <script src="assets/plugins/jarallax/dist/jarallax-video.min.js"></script>

    <script src="assets/plugins/lightgallery.js/dist/js/lightgallery.min.js"></script>
    <script src="assets/plugins/lightgallery.js/demo/js/lg-thumbnail.min.js"></script>
    <script src="assets/plugins/lightgallery.js/demo/js/lg-video.js"></script>
    
    <script src="assets/plugins/aos/dist/aos.js"></script>
    <script src="assets/plugins/waypoints/lib/noframework.waypoints.min.js"></script>
    <script src="assets/plugins/counterup2/dist/index.js"></script>
    <script src="assets/plugins/flickity/dist/flickity.pkgd.min.js"></script>
    <script src="assets/plugins/isotope-layout/dist/isotope.pkgd.min.js"></script>
    <script src="assets/plugins/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>
    <script src="assets/plugins/vanilla-lazyload/dist/lazyload.min.js"></script>
    <script src="assets/plugins/hc-sticky/dist/hc-sticky.js"></script>

    <!-- Theme js -->
    <script src="assets/js/theme.js"></script>

    <!-- JS Optimize -->
    <!-- <script src="dist/js/bundle.min.js"></script> -->
  </body>

</html>