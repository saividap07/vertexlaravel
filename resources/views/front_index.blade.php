<!DOCTYPE html><html><head><meta charset="utf-8"/>

  
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <!-- Site Metas -->
  <meta name="keywords" content=""/>
  <meta name="description" content=""/>
  <meta name="author" content=""/>

  <title>BigWing</title>

  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css"/>

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="{{asset('front/css/bootstrap.css')}}"/>

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Dosis:400,500|Poppins:400,700&amp;display=swap" rel="stylesheet"/>
  <!-- Custom styles for this template -->
  <link href="{{asset('front/css/style.css')}}" rel="stylesheet"/>
  <!-- responsive style -->
  <link href="{{asset('css/responsive.css')}}" rel="stylesheet"/>
</head>

<body>
  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-8">
            <nav class="navbar navbar-expand-lg custom_nav-container ">
              <a class="navbar-brand" href="index.html">
                <span>
                  BigWing
                </span>
              </a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>

              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <div class="d-flex  flex-column flex-lg-row align-items-center">
                  <ul class="navbar-nav  ">
                    <li class="nav-item active">
                      <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="about.html">About </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="service.html">Services </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="contact.html">Contact</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#"> Login</a>
                    </li>
                  </ul>
                  <form class="form-inline my-2 my-lg-0 ml-0 ml-lg-4 mb-3 mb-lg-0">
                    <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit"></button>
                  </form>
                </div>
              </div>
            </nav>
          </div>
        </div>
      </div>
    </header>
    <!-- end header section -->
    <!-- slider section -->
    <section class=" slider_section ">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active">01</li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1">02</li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2">03</li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container">
              <div class="row">
                <div class="col-lg-5 col-md-6">
                  <div class="slider_detail-box">
                    <h1>
                      Start <br/>
                      Business with <br/>
                      Our Company
                    </h1>
                    <p>
                      sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                      nostrud exercitation ullamco laboris nisi
                    </p>
                    <div class="btn-box">
                      <a href="" class="btn-1">
                        Read More
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="slider_img-box">
                    <img src="{{asset('front/images/slider-img.png')}}" alt=""/>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container">
              <div class="row">
                <div class="col-lg-5 col-md-6">
                  <div class="slider_detail-box">
                    <h1>
                      Start <br/>
                      Business with <br/>
                      Our Company
                    </h1>
                    <p>
                      sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                      nostrud exercitation ullamco laboris nisi
                    </p>
                    <div class="btn-box">
                      <a href="" class="btn-1">
                        Read More
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="slider_img-box">
                    <img src="{{asset('front/images/slider-img.png')}}" alt=""/>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container">
              <div class="row">
                <div class="col-lg-5 col-md-6">
                  <div class="slider_detail-box">
                    <h1>
                      Start <br/>
                      Business with <br/>
                      Our Company
                    </h1>
                    <p>
                      sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                      nostrud exercitation ullamco laboris nisi
                    </p>
                    <div class="btn-box">
                      <a href="" class="btn-1">
                        Read More
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="slider_img-box">
                    <img src="{{asset('front/images/slider-img.png')}}" alt=""/>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel_btn-container">
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </section>
    <!-- end slider section -->
  </div>

  <!-- welcome section -->
  <section class="welcome_section layout_padding">
    <div class="container">
      <div class="custom_heading-container">
        <h2>
          Welcome To Our Company
        </h2>
      </div>
      <div class="layout_padding2">
        <div class="img-box">
          <img src="{{asset('front/images/welcome.png')}}" alt=""/>
        </div>
        <div class="detail-box">
          <p>
            dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
            aliqua.
            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            Duis
            aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
          </p>
          <div>
            <a href="">
              Read More
            </a>
          </div>
        </div>
      </div>

    </div>
  </section>
  <!-- end welcome section -->

  <!-- service section -->

  <section class="service_section">
    <div class="container">
      <div class="custom_heading-container">
        <h2>
          Our Services
        </h2>
      </div>
      <div class="service_container layout_padding2">
        <div class="service_box">
          <div class="img-box">
            <img src="{{asset('front/images/s-1.jpg')}}" alt=""/>
          </div>
          <div class="detail-box">
            <h4>
              Business <br/>
              Consultant
            </h4>
            <p>
              have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even
              slightly believable. If you are
            </p>
          </div>
        </div>
        <div class="service_box">
          <div class="img-box">
            <img src="{{asset('front/images/s-2.jpg')}}" alt=""/>
          </div>
          <div class="detail-box">
            <h4>
              Marketing <br/>
              Analytics
            </h4>
            <p>
              have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even
              slightly believable. If you are
            </p>
          </div>
        </div>
        <div class="service_box">
          <div class="img-box">
            <img src="{{asset('front/images/s-3.jpg')}}" alt=""/>
          </div>
          <div class="detail-box">
            <h4>
              Financial <br/>
              Planning
            </h4>
            <p>
              have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even
              slightly believable. If you are
            </p>
          </div>
        </div>
      </div>
      <div>
        <a href="">
          Read More
        </a>
      </div>
    </div>
  </section>

  <!-- end service section -->
  <!--problem section -->
  <section class="problem_section layout_padding">
    <div class="container">
      <div class="custom_heading-container">
        <h2>
          Do you have any business problem ?
        </h2>
      </div>
      <div class="layout_padding2">
        <div class="img-box">
          <img src="{{asset('front/images/problem.jpg')}}" alt=""/>
        </div>
        <div class="detail-box">
          <p>
            There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in
            some form, by injected humour, or randomised words which don&#39;t look even slightly believable. I
          </p>
          <div>
            <a href="">
              Read More
            </a>
          </div>
        </div>
      </div>

    </div>
  </section>
  <!-- end problem section -->
  <!-- why section -->

  <section class="why_section layout_padding">
    <div class="container">
      <div class="custom_heading-container">
        <h2>
          Why Choose Us
        </h2>
      </div>
      <div class="content-container">
        <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
          magna aliqua. Ut enim ad minim veniam, quis
        </p>
        <div class="row">
          <div class="col-md-3 col-sm-6">
            <div class="img-box">
              <img src="{{asset('images/smiley.png')}}" alt=""/>
            </div>
            <div class="detail-box">
              <h3>
                99%
              </h3>
              <h6>
                SATISFIED CLIENTS
              </h6>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="img-box">
              <img src="{{asset('front/images/monitor.png')}}" alt=""/>
            </div>
            <div class="detail-box">
              <h3>
                4700+
              </h3>
              <h6>
                AWESOME planing
              </h6>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="img-box">
              <img src="{{asset('front/images/multiple-users-silhouette.png')}}" alt=""/>
            </div>
            <div class="detail-box">
              <h3>
                4500+
              </h3>
              <h6>
                CLIENTS
              </h6>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="img-box">
              <img src="{{asset('front/images/bar-chart.png')}}" alt=""/>
            </div>
            <div class="detail-box">
              <h3>
                19000+
              </h3>
              <h6>
                DAILY business
              </h6>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- end why section -->

  <!-- client section -->
  <section class="client_section layout_padding">
    <div class="container">
      <h2>
        What Our Clients Says
      </h2>
      <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="client_container layout_padding2">
              <div class="client_text">
                <p>
                  psum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                  magna
                  aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                  commodo
                  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                </p>
              </div>
              <div class="detail-box">
                <div class="img-box">
                  <img src="{{asset('front/images/client.png')}}" alt=""/>
                </div>
                <div class="name">
                  <h5>
                    Joans Mark
                  </h5>
                  <p>
                    cal
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="client_container layout_padding2">
              <div class="client_text">
                <p>
                  psum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                  magna
                  aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                  commodo
                  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                </p>
              </div>
              <div class="detail-box">
                <div class="img-box">
                  <img src="{{asset('front/images/client.png')}}" alt=""/>
                </div>
                <div class="name">
                  <h5>
                    Joans Mark
                  </h5>
                  <p>
                    cal
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="client_container layout_padding2">
              <div class="client_text">
                <p>
                  psum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                  magna
                  aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                  commodo
                  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                </p>
              </div>
              <div class="detail-box">
                <div class="img-box">
                  <img src="{{asset('front/images/client.png')}}" alt=""/>
                </div>
                <div class="name">
                  <h5>
                    Joans Mark
                  </h5>
                  <p>
                    cal
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
          <span class="sr-only">Next</span>
        </a>
      </div>

    </div>
  </section>
  <!-- end client section -->
  <!-- contact section -->
  <section class="contact_section layout_padding">
    <div class="container contact_heading">
      <h2>
        Contact Us
      </h2>
      <p>
        psum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
      </p>
    </div>
    <div class="container">
      <form>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputName4">Name</label>
            <input type="text" class="form-control" id="inputName4"/>
          </div>
          <div class="form-group col-md-6">
            <label for="inputEmail4">Email</label>
            <input type="email" class="form-control" id="inputEmail4"/>
          </div>

        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputNumber4">Phone number</label>
            <input type="tel" class="form-control" id="inputNumber4"/>
          </div>
          <div class="form-group col-md-6">
            <label for="inputState">Select Service</label>
            <select id="inputState" class="form-control">
              <option selected=""></option>
              <option>...</option>
            </select>
          </div>

        </div>
        <div class="form-group">
          <label for="inputMessage">Message</label>
          <input type="text" class="form-control" id="inputMessage" placeholder=""/>
        </div>
    </div>

    <div class="d-flex justify-content-center">
      <button type="submit" class="">Send</button>
    </div>
    </form>
    
  </section>


  <!-- end contact section -->
  <div class="footer_bg">
    <!-- info section -->
    <section class="info_section layout_padding2-bottom">
      <div class="container">
        <h3 class="">
          Vertex
        </h3>
      </div>
      <div class="container info_content">

        <div>
          <div class="row">
          
            <div class="col-md-6 col-lg-5" style="color:white;font-size:17px">
              <div class="d-flex">
                <h5>
                 About Vertex
                </h5>
              </div>
              <div>
              <p>Vertex Technosys is a software based company, our experts serve a wide range of software development like web design, graphic design, web development, software development, mobile development, seo services, digital marketing, e-commerce solutions, custom application development, product development & web promotions services.</p>              
              </div>
            </div>

            <div class="col-md-6 col-lg-2">
              <div class="d-flex">
                <h5>
                  Quick Links
                </h5>
              </div>
              <div class="d-flex ">
                <ul>
                  <li>
                    <a href="about.php">
                      About Us
                    </a>
                  </li>
                  <li>
                    <a href="service.php">
                      Services
                    </a>
                  </li>
                  <li>
                    <a href="portfolio.php">
                      Portfolio
                    </a>
                  </li>
                  <li>
                    <a href="careers.php">
                      Career
                    </a>
                  </li>
                  <li>
                    <a href="contact.php">
                      Contact Us
                    </a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-md-6 col-lg-2">
              <div class="d-flex">
                <h5>
                  Our Services
                </h5>
              </div>
              <div class="d-flex ">
                <ul>
                  <li>
                    <a href="service.php">
                      Web Development
                    </a>
                  </li>
                  <li>
                    <a href="service.php">
                      Graphic Design
                    </a>
                  </li>
                  <li>
                    <a href="service.php">
                      SEO
                    </a>
                  </li>
                  <li>
                    <a href="service.php">
                      Custom Application
                    </a>
                  </li>
                  <li>
                    <a href="service.php">
                      Mobile App
                    </a>
                  </li>
                </ul>
               
              </div>
            </div>
            <div class="col-md-6 col-lg-3" style="color:white;font-size:17px">
              <div class="d-flex">
                <h5>
                 Get in Touch
                </h5>
              </div>
              <div>
              <p>9/4, Shri Markendaya Yantramag Dharak Society, Near New WIT College, Next to Upahar Bakery lane, Solapur - 413006.</p>
              <p>+91 9823140574</p>
              <p>info@vertextechnosys.com</p>
              </div>
            </div>
          </div>
        </div>
        <div class="d-flex flex-column flex-lg-row justify-content-between align-items-center align-items-lg-baseline">
          <div class="social-box">
            <a href="">
              <img src="images/fb.png" alt=""/>
            </a>

            <a href="">
              <img src="images/twitter.png" alt=""/>
            </a>
            <a href="">
              <img src="images/linkedin1.png" alt=""/>
            </a>
            <a href="">
              <img src="images/instagram1.png" alt=""/>
            </a>
          </div>
          <div class="form_container mt-5">
            <form action="">
              <label for="subscribeMail">
                Newsletter
              </label>
              <input type="email" placeholder="Enter Your email" id="subscribeMail"/>
              <button type="submit">
                Subscribe
              </button>
            </form>
          </div>
        </div>
      </div>

    </section>

    <!-- end info_section -->

    <!-- footer section -->
    <section class="container-fluid footer_section">
      <p>
        © 2019 All Rights Reserved By
        <a href="https://html.design/">Free Html Templates</a>
      </p>
    </section>
    <!-- footer section -->
  </div>


  <script type="text/javascript" src="{{asset('front/js/jquery-3.4.1.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('front/js/bootstrap.js')}}"></script>



</body></html>