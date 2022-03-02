<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  
  <meta name="copyright" content="MACode ID, https://www.macodeid.com/">
  
  <title>Virtual Folio - Portfolio HTML5 Template</title>
  
  <link rel="shortcut icon" type="image/x-icon" href="../favicon.ico">
  
  <link rel="stylesheet" type="text/css" href="../css/themify-icons.css">
  
  <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">

  <link rel="stylesheet" type="text/css" href="../vendor/animate/animate.css">
  
  <link rel="stylesheet" type="text/css" href="../vendor/owl-carousel/owl.carousel.css">
  
  <link rel="stylesheet" type="text/css" href="../vendor/perfect-scrollbar/css/perfect-scrollbar.css">
  
  <link rel="stylesheet" type="text/css" href="../vendor/nice-select/css/nice-select.css">

  <link rel="stylesheet" type="text/css" href="../vendor/fancybox/css/jquery.fancybox.min.css">
  
  <link rel="stylesheet" type="text/css" href="../css/virtual.css">
  
  <link rel="stylesheet" type="text/css" href="../css/minibar.virtual.css">
</head>
<body class="theme-red">
  
  <!-- Back to top button -->
  <div class="btn-back_to_top">
    <span class="ti-arrow-up"></span>
  </div>
  
  <!-- Setting button -->
  <div class="config">
    <div class="template-config">
      <!-- Settings -->
      <div class="d-block">
        <button class="btn btn-fab btn-sm" id="sideel" title="Settings"><span class="ti-settings"></span></button>
      </div>
      <!-- Puschase -->
      <div class="d-block">
        <a href="https://macodeid.com/projects/virtual-folio/" class="btn btn-fab btn-sm" title="Get this template" data-toggle="tooltip" data-placement="left"><span class="ti-download"></span></a>
      </div>
      <!-- Help -->
      <div class="d-block">
        <a href="#" class="btn btn-fab btn-sm" title="Help" data-toggle="tooltip" data-placement="left"><span class="ti-help"></span></a>
      </div>
    </div>
    <div class="set-menu">
      <p>Select Color</p>
      <div class="color-bar" data-toggle="selected">
        <span class="color-item bg-theme-red selected" data-class="theme-red"></span>
        <span class="color-item bg-theme-blue" data-class="theme-blue"></span>
        <span class="color-item bg-theme-green" data-class="theme-green"></span>
        <span class="color-item bg-theme-orange" data-class="theme-orange"></span>
        <span class="color-item bg-theme-purple" data-class="theme-purple"></span>
      </div>
      <select class="custom-select d-block my-2" id="change-page">
        <option value="">Choose Page</option>
        <option value="index">Topbar</option>
        <option value="blog-topbar">Blog (Topbar)</option>
        <option value="index-2">Minibar</option>
        <option value="blog-minibar">Blog (Minibar)</option>
      </select>
    </div>
  </div>
  
  <div class="topbar-nav fixed-top">
    <div class="brand">
      <img src="../favicon.ico" alt="" width="30" height="30">
    </div>
    <h3 class="ml-1">Gram</h3>
    <button class="btn-fab toggle-menu mr-3"><span class="ti-menu"></span></button>
  </div>
  
  <!-- Minibar -->
  <div class="minibar">
    <div class="header">
      <div class="brand">
        
      </div>
    </div>
    <div class="content">
      <ul class="main-menu">
        <li class="menu-item active">
          <a href="#home" class="menu-link">
            <span class="icon ti-home"></span>
            <span class="caption">Home</span>
          </a>
        </li>
        <li class="menu-item">
          <a href="#about" class="menu-link">
            <span class="icon ti-user"></span>
            <span class="caption">About</span>
          </a>
        </li>
        <li class="menu-item">
          <a href="#services" class="menu-link">
            <span class="icon ti-file"></span>
            <span class="caption">Service</span>
          </a>
        </li>
        <li class="menu-item">
          <a href="#portfolio" class="menu-link">
            <span class="icon ti-briefcase"></span>
            <span class="caption">Portfolio</span>
          </a>
        </li>
        <li class="menu-item">
          <a href="#blog" class="menu-link">
            <span class="icon ti-book"></span>
            <span class="caption">Blog</span>
          </a>
        </li>
        <li class="menu-item">
          <a href="#contact" class="menu-link">
            <span class="icon ti-location-pin"></span>
            <span class="caption">Contact</span>
          </a>
        </li>
      </ul>
    </div>
  </div>
  
  <div class="vg-main-wrapper">
    <div class="vg-page page-home" id="home" style="background-image: url(../img/bg_image_2.jpg);">
      <div class="caption wow zoomInUp">
        <h1 class="fw-normal">Welcome</h1>
        <h2 class="fw-medium fg-theme">I'm Stephen Doe</h2>
        <p class="tagline">UI/UX & Web Designer</p>
      </div>
    </div>
    
    <!-- Page About -->
    <div class="vg-page page-about" id="about">
      <!-- Profile -->
      <div class="container py-3">
        <div class="row">
          <div class="col-md-6">
            <div class="img-place wow zoomIn">
              <img src="../img/person.jpg" alt="Photo Profile">
            </div>
          </div>
          <div class="col-md-6">
            <div class="caption wow fadeInRight">
              <h2 class="fg-dark">Stephen Doe</h2>
              <p class="fg-theme fw-medium">UI/UX & Web Designer</p>
              <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form</p>
              <ul class="theme-list">
                <li class="fg-dark"><b>From:</b> Texas, US</li>
                <li class="fg-dark"><b>Lives In:</b> Texas, US</li>
                <li class="fg-dark"><b>Age:</b> 25</li>
                <li class="fg-dark"><b>Gender:</b> Male</li>
              </ul>
              <button class="btn btn-theme btn-rounded">Download CV</button>
            </div>
          </div>
        </div>
      </div> <!-- End profile -->
      <!-- Skills -->
      <div class="container mt-5">
        <h1 class="text-center fg-dark wow fadeInUp">My Skills</h1>
        <div class="row py-3">
          <div class="col-md-6">
            <h4 class="wow fadeInUp">Coding skills</h4>
            <div class="progress-wrapper wow fadeInUp">
              <span class="caption">JavaScript</span>
              <div class="progress">
                <div class="progress-bar" role="progressbar" style="width: 86%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">86%</div>
              </div>
            </div>
            <div class="progress-wrapper wow fadeInUp">
              <span class="caption">PHP</span>
              <div class="progress">
                <div class="progress-bar" role="progressbar" style="width: 80%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">80%</div>
              </div>
            </div>
            <div class="progress-wrapper wow fadeInUp">
              <span class="caption">HTML + CSS</span>
              <div class="progress">
                <div class="progress-bar" role="progressbar" style="width: 100%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">100%</div>
              </div>
            </div>
            <div class="progress-wrapper wow fadeInUp">
              <span class="caption">Phyton</span>
              <div class="progress">
                <div class="progress-bar" role="progressbar" style="width: 90%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">90%</div>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <h4 class="wow fadeInUp">Design Skills</h4>
            <div class="progress-wrapper wow fadeInUp">
              <span class="caption">UI / UX Design</span>
              <div class="progress">
                <div class="progress-bar" role="progressbar" style="width: 92%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">92%</div>
              </div>
            </div>
            <div class="progress-wrapper wow fadeInUp">
              <span class="caption">Web Design</span>
              <div class="progress">
                <div class="progress-bar" role="progressbar" style="width: 99%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">99%</div>
              </div>
            </div>
            <div class="progress-wrapper wow fadeInUp">
              <span class="caption">Logo Design</span>
              <div class="progress">
                <div class="progress-bar" role="progressbar" style="width: 79%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">79%</div>
              </div>
            </div>
          </div>
        </div>
      </div> <!-- End skills -->
      <!-- Resume -->
      <div class="container pt-5">
        <div class="row">
          <div class="col-md-6 wow fadeInRight">
            <h2 class="fg-dark">Education</h2>
            <ul class="timeline mt-4 pr-md-5">
              <li>
                <div class="title">2010</div>
                <div class="details">
                  <h5>Specialize of course</h5>
                  <small class="fg-theme">University of Study</small>
                  <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered</p>
                </div>
              </li>
              <li>
                <div class="title">2009</div>
                <div class="details">
                  <h5>Specialize of course</h5>
                  <small class="fg-theme">University of Study</small>
                  <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered</p>
                </div>
              </li>
              <li>
                <div class="title">2008</div>
                <div class="details">
                  <h5>Specialize of course</h5>
                  <small class="fg-theme">University of Study</small>
                  <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered</p>
                </div>
              </li>
            </ul>
          </div>
          <div class="col-md-6 wow fadeInRight" data-wow-delay="200ms">
            <h2 class="fg-dark">Experience</h2>
            <ul class="timeline mt-4 pr-md-5">
              <li>
                <div class="title">2017 - Current</div>
                <div class="details">
                  <h5>Specialize of course</h5>
                  <small class="fg-theme">University of Study</small>
                  <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered</p>
                </div>
              </li>
              <li>
                <div class="title">2014</div>
                <div class="details">
                  <h5>Specialize of course</h5>
                  <small class="fg-theme">University of Study</small>
                  <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered</p>
                </div>
              </li>
              <li>
                <div class="title">2011</div>
                <div class="details">
                  <h5>Specialize of course</h5>
                  <small class="fg-theme">University of Study</small>
                  <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered</p>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div> <!-- End resume -->
    </div> <!-- End page about -->
    
    <!-- Page Service -->
    <div class="vg-page page-service" id="services">
      <h1 class="text-center wow fadeInUp">Services</h1>
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-lg-4 wow fadeInUp">
            <div class="card card-body">
              <div class="iconic">
                <span class="ti-layout"></span>
              </div>
              <h4 class="fg-theme">Web Design</h4>
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard</p>
              <a href="#" class="btn btn-theme btn-rounded">Read More</a>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 wow fadeInUp">
            <div class="card card-body">
              <div class="iconic">
                <span class="ti-announcement"></span>
              </div>
              <h4 class="fg-theme">SEO</h4>
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard</p>
              <a href="#" class="btn btn-theme btn-rounded">Read More</a>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 wow fadeInUp">
            <div class="card card-body">
              <div class="iconic">
                <span class="ti-desktop"></span>
              </div>
              <h4 class="fg-theme">Web Development</h4>
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard</p>
              <a href="#" class="btn btn-theme btn-rounded">Read More</a>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 wow fadeInUp">
            <div class="card card-body">
              <div class="iconic">
                <span class="ti-layout"></span>
              </div>
              <h4 class="fg-theme">Web Design</h4>
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard</p>
              <a href="#" class="btn btn-theme btn-rounded">Read More</a>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 wow fadeInUp">
            <div class="card card-body">
              <div class="iconic">
                <span class="ti-announcement"></span>
              </div>
              <h4 class="fg-theme">SEO</h4>
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard</p>
              <a href="#" class="btn btn-theme btn-rounded">Read More</a>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 wow fadeInUp">
            <div class="card card-body">
              <div class="iconic">
                <span class="ti-desktop"></span>
              </div>
              <h4 class="fg-theme">Web Development</h4>
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard</p>
              <a href="#" class="btn btn-theme btn-rounded">Read More</a>
            </div>
          </div>
        </div>
      </div>
    </div> <!-- End page services -->
    
    <!-- Testimonials -->
    <div class="vg-page p-0" id="testimonial">
      <div class="owl-carousel testi-carousel" style="background-image: url(../img/photo-2.jpg);">
        <div class="item">
          <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Minus, dicta atque. Voluptas illum quasi asperiores autem unde cupiditate temporibus quisquam iste rem dignissimos. Commodi placeat, quis omnis inventore asperiores sit.</p>
          <span class="iconic">
            <span class="ti-quote-left"></span>
          </span>
          <h4>Andrew Johanson</h4>
        </div>
        <div class="item">
          <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Minus, dicta atque. Voluptas illum quasi asperiores autem unde cupiditate temporibus quisquam iste rem dignissimos. Commodi placeat, quis omnis inventore asperiores sit.</p>
          <span class="iconic">
            <span class="ti-quote-left"></span>
          </span>
          <h4>Louis Herreira</h4>
        </div>
        <div class="item">
          <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Minus, dicta atque. Voluptas illum quasi asperiores autem unde cupiditate temporibus quisquam iste rem dignissimos. Commodi placeat, quis omnis inventore asperiores sit.</p>
          <span class="iconic">
            <span class="ti-quote-left"></span>
          </span>
          <h4>Patrice Clark</h4>
        </div>
      </div>
    </div> <!-- End testimonial -->
    
    <!-- Portfolio page -->
    <div class="vg-page page-portfolio" id="portfolio">
      <div class="container">
        <div class="text-center wow fadeInUp">
          <div class="badge badge-subhead">Portfolio</div>
        </div>
        <h1 class="text-center fw-normal wow fadeInUp">See my work</h1>
        <div class="filterable-button py-3 wow fadeInUp" data-toggle="selected">
          <button class="btn btn-theme-outline selected" data-filter="*">All</button>
          <button class="btn btn-theme-outline" data-filter=".apps">Apps</button>
          <button class="btn btn-theme-outline" data-filter=".template">Template</button>
          <button class="btn btn-theme-outline" data-filter=".ios">IOS</button>
          <button class="btn btn-theme-outline" data-filter=".ui-ux">UI/UX</button>
          <button class="btn btn-theme-outline" data-filter=".graphic">Graphic</button>
          <button class="btn btn-theme-outline" data-filter=".wireframes">Wireframes</button>
        </div>

        <div class="gridder my-3">
          <div class="grid-item apps wow zoomIn">
            <div class="img-place" data-src="../img/work/work-1.jpg" data-fancybox data-caption="<h5 class='fg-theme'>Mobile Travel App</h5> <p>Travel, Discovery</p>">
              <img src="../img/work/work-1.jpg" alt="">
              <div class="img-caption">
                <h5 class="fg-theme">Mobile Travel App</h5>
                <p>Travel, Discovery</p>
              </div>
            </div>
          </div>
          <div class="grid-item template wireframes wow zoomIn">
            <div class="img-place" data-src="../img/work/work-2.jpg" data-fancybox data-caption="<h5 class='fg-theme'>Music App</h5> <p>Musics</p>">
              <img src="../img/work/work-2.jpg" alt="">
              <div class="img-caption">
                <h5 class="fg-theme">Music App</h5>
                <p>Musics</p>
              </div>
            </div>
          </div>
          <div class="grid-item apps ios wow zoomIn">
            <div class="img-place" data-src="../img/work/work-3.jpg" data-fancybox data-caption="<h5 class='fg-theme'>Gaming Dashboard</h5> <p>Games, Streaming</p>">
              <img src="../img/work/work-3.jpg" alt="">
              <div class="img-caption">
                <h5 class="fg-theme">Gaming Dashboard</h5>
                <p>Games, Streaming</p>
              </div>
            </div>
          </div>
          <div class="grid-item graphic ui-ux wow zoomIn">
            <div class="img-place" data-src="../img/work/work-4.jpg" data-fancybox data-caption="<h5 class='fg-theme'>Drugs Delivery App</h5> <p>Health, Drugs</p>">
              <img src="../img/work/work-4.jpg" alt="">
              <div class="img-caption">
                <h5 class="fg-theme">Drugs Delivery App</h5>
                <p>Health, Drugs</p>
              </div>
            </div>
          </div>
          <div class="grid-item apps ios wow zoomIn">
            <div class="img-place" data-src="../img/work/work-5.jpg" data-fancybox data-caption="<h5 class='fg-theme'>Musics Discover</h5> <p>Musics, Dashboard</p>">
              <img src="../img/work/work-5.jpg" alt="">
              <div class="img-caption">
                <h5 class="fg-theme">Musics Discover</h5>
                <p>Musics, Dashboard</p>
              </div>
            </div>
          </div>
          <div class="grid-item graphic ui-ux wireframes wow zoomIn">
            <div class="img-place" data-src="../img/work/work-6.jpg" data-fancybox data-caption="<h5 class='fg-theme'>Game Streaming</h5> <p>Games, Streaming</p>">
              <img src="../img/work/work-6.jpg" alt="">
              <div class="img-caption">
                <h5 class="fg-theme">Game Streaming</h5>
                <p>Games, Streaming</p>
              </div>
            </div>
          </div>
        </div> <!-- End gridder -->
        <div class="text-center wow fadeInUp">
          <a href="javascript:void(0)" class="btn btn-theme">Load More</a>
        </div>
      </div>
    </div> <!-- End Portfolio page -->
    
    <!-- Page Blog -->
    <div class="vg-page page-blog" id="blog">
      <h1 class="text-center fg-dark wow fadeInUp">Latest Post</h1>
      <div class="container">
        <div class="row post-grid">
          <div class="col-md-6 col-lg-4 wow fadeInUp">
            <div class="card">
              <div class="img-place">
                <img src="../img/work/work-9.jpg" alt="">
              </div>
              <div class="caption">
                <a href="javascript:void(0)" class="post-category">Technology</a>
                <a href="#" class="post-title">Invision design forward fund</a>
                <span class="post-date"><span class="sr-only">Published on</span> May 22, 2018</span>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 wow fadeInUp">
            <div class="card">
              <div class="img-place">
                <img src="../img/work/work-6.jpg" alt="">
              </div>
              <div class="caption">
                <a href="javascript:void(0)" class="post-category">Business</a>
                <a href="#" class="post-title">Announcing a plan for small teams</a>
                <span class="post-date"><span class="sr-only">Published on</span> May 22, 2018</span>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 wow fadeInUp">
            <div class="card">
              <div class="img-place">
                <img src="../img/work/work-1.jpg" alt="">
              </div>
              <div class="caption">
                <a href="javascript:void(0)" class="post-category">Design</a>
                <a href="#" class="post-title">5 basic tips for illustrating</a>
                <span class="post-date"><span class="sr-only">Published on</span> May 22, 2018</span>
              </div>
            </div>
          </div>
          <div class="col-12 text-center py-3 wow fadeInUp">
            <a href="blog-minibar.html" class="btn btn-theme">See All Post</a>
          </div>
        </div>
      </div>
    </div> <!-- End page blog -->
    
    <!-- Page Contact -->
    <div class="vg-page page-contact" id="contact">
      <h1 class="text-center fg-dark wow fadeInUp">Contact</h1>
      <div class="container-fluid">
        <div class="row py-5">
          <div class="col-lg-7 wow zoomIn">
            <div class="vg-maps">
              <div id="google-maps" style="width: 100%; height: 100%;"></div>
            </div>
          </div>
          <div class="col-lg-5">
            <form class="vg-contact-form">
              <div class="form-row">
                <div class="col-12 wow fadeInUp">
                  <input class="form-control" type="text" name="Name" placeholder="Your Name">
                </div>
                <div class="col-6 wow fadeInUp">
                  <input class="form-control" type="text" name="Email" placeholder="Email Address">
                </div>
                <div class="col-6 wow fadeInUp">
                  <input class="form-control" type="text" name="Subject" placeholder="Subject">
                </div>
                <div class="col-12 wow fadeInUp">
                  <textarea class="form-control" name="Message" rows="6" placeholder="Enter message here.."></textarea>
                </div>
                <button type="submit" class="btn btn-theme mt-3 wow fadeInUp ml-1">Send Message</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div> <!-- End page contact -->
    
    <!-- Footer -->
    <div class="vg-footer">
      <h1 class="text-center">Virtual Folio</h1>
      <div class="container">
        <div class="row">
          <div class="col-lg-4 py-3">
            <div class="footer-info">
              <p>Where to find me</p>
              <hr class="divider">
              <p class="fs-large fg-white">1600 Amphitheatre Parkway Mountain View, California 94043 US</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 py-3">
            <div class="float-lg-right">
              <p>Follow me</p>
              <hr class="divider">
              <ul class="list-unstyled">
                <li><a href="#">Instagram</a></li>
                <li><a href="#">Facebook</a></li>
                <li><a href="#">Twitter</a></li>
                <li><a href="#">Youtube</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 py-3">
            <div class="float-lg-right">
              <p>Contact me</p>
              <hr class="divider">
              <ul class="list-unstyled">
                <li>info@virtual.com</li>
                <li>+8890234</li>
                <li>+813023</li>
              </ul>
            </div>
          </div>
        </div>
        <div class="row justify-content-center mt-3">
          <div class="col-12 mb-3">
            <h3 class="fw-normal text-center">Subscribe</h3>
          </div>
          <div class="col-lg-6">
            <form class="mb-3">
              <div class="input-group">
                <input type="text" class="form-control" placeholder="Email address">
                <input type="submit" class="btn btn-theme no-shadow" value="Subscribe">
              </div>
            </form>
          </div>
          <div class="col-12">
            <p class="text-center mb-0 mt-4">Copyright &copy;2020. All right reserved | This template is made with <span class="ti-heart fg-theme-red"></span> by <a href="https://www.macodeid.com/">MACode ID</a></p>
          </div>
        </div>
      </div>
    </div> <!-- End footer -->
  </div> <!-- End main wrapper -->
  
  
  <script src="../js/jquery-3.5.1.min.js"></script>
  
  <script src="../js/bootstrap.bundle.min.js"></script>
  
  <script src="../vendor/owl-carousel/owl.carousel.min.js"></script>
  
  <script src="../vendor/perfect-scrollbar/js/perfect-scrollbar.js"></script>
  
  <script src="../vendor/isotope/isotope.pkgd.min.js"></script>
  
  <script src="../vendor/nice-select/js/jquery.nice-select.min.js"></script>
  
  <script src="../vendor/fancybox/js/jquery.fancybox.min.js"></script>

  <script src="../vendor/wow/wow.min.js"></script>

  <script src="../vendor/animateNumber/jquery.animateNumber.min.js"></script>

  <script src="../vendor/waypoints/jquery.waypoints.min.js"></script>
  
  <script src="../js/google-maps.js"></script>
  
  <script src="../js/minibar-virtual.js"></script>

  <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAIA_zqjFMsJM_sxP9-6Pde5vVCTyJmUHM&callback=initMap"></script>

</body>
</html>