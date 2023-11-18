<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="css/style.css">
  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
    integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick.min.css" rel="stylesheet"
    type="text/css" media="all" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick-theme.min.css" rel="stylesheet"
    type="text/css" media="all" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js" type="text/javascript"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"
    type="text/javascript"></script>

</head>

<body>

  <section>
    <div class="top-header-container">
      <div class="top-header-message">
        <p>Love our work? You'll also love our web development services on Fiverr →</p>
      </div>
      <div class="top-header-btn">
        <button>
          Hire Us On Fiver
        </button>
      </div>
    </div>
  </section>
  <section>
    <div class="main-logo-container">
      <div class="main-logo-flex">
        <div class="main-logo">
          <div class="main-logo-img">
            <a href="#" class="main-logo-link">
              <img src="img/{WynkCode}.png" alt="Main Logo">
            </a>
          </div>
          <div class="top-header-nav">
            <ul>
              <li><a href="#">Code Hub</a></li>
              <li>
                <a href="#">Tutorials
                  <div class="top-header-dropdown-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                      class="bi bi-caret-down-fill" viewBox="0 0 16 16">
                      <path
                        d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z" />
                    </svg>
                  </div>
                </a>

                <ul class="top-header-nav-dropdown">
                  <li><a href="#">HTML</a></li>
                  <li><a href="#">CSS</a></li>
                  <li><a href="#">JavaScript</a></li>
                </ul>
              </li>
              <li><a href="#">Community</a></li>
            </ul>
          </div>
        </div>
        <div class="top-header-btn">
          <button>BUY NOW</button>
        </div>
      </div>
    </div>
  </section>
  <style>
    .top-header-nav ul ul {
      display: none;
      position: absolute;
      background-color: #fff;
      border: 1px solid #dbdbdb;
      border-radius: 5px;
      padding: 10px 0;

    }

    .top-header-nav ul li:hover ul {
      display: block;
      /* Show the dropdown when the parent list item is hovered */
    }

  </style>
  <section>
   <div class="navbar-slider-section">
            <div class="navbar-slider-width">
      <ul class="links nav-slider">
        <li><a href="#">HTML</a></li>
        <li><a href="#">CSS</a></li>
        <li>
          <a href="#">JAVASCRIPT</a>

        </li>
        <li>
          <a href="#">TYPESCRIPT</a>

        </li>
        <li><a href="#">NODE.JS</a></li>
        <li><a href="#">REACT</a></li>
        <li><a href="#">JAVA</a></li>
        <li><a href="#">PYTHON</a></li>
        <li><a href="#">MONGODB</a></li>
        <li><a href="#">MYSQL</a></li>
        <li><a href="#">PHP</a></li>
        <li><a href="#">POSTGRESQL</a></li>
        <li><a href="#">GIT</a></li>
        <li><a href="#">C</a></li>
        <li><a href="#">C++</a></li>
        <li><a href="#">KOTLIN</a></li>
        <li><a href="#">KOTLIN</a></li>
        <li><a href="#">KOTLIN</a></li>
        <li><a href="#">KOTLIN</a></li>
        <li><a href="#">KOTLIN</a></li>
        <li><a href="#">KOTLIN</a></li>
        <li><a href="#">KOTLIN</a></li>
      </ul>
    </div>
  </div>
  </section>
  <script>
    $('.nav-slider').slick({
      infinite: false,
      slidesToShow: 5,
      slidesToScroll: 1,
      speed: 250,
      variableWidth: true
    });</script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script src="js/navscript.js"></script>
  <script src="js/sticky.js"></script>

  <section>
    <div class="main-banner-section">
      <div class="main-banner-box">
        <div class="main-banner-heading">
          <h1>Learn To Code</h1>
        </div>
        <div class="search-container">
          <form id="searchForm" action="#" method="get">
            <input type="text" id="searchInput" class="search-input" name="query" placeholder="Search...">
            <button type="submit" id="searchButton" class="search-button"><svg xmlns="http://www.w3.org/2000/svg"
                width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                <path
                  d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
              </svg></button>
          </form>
        </div>
        <div class="main-banner-caption">
          <p>Free CSS Templates, CSS Layouts & More!</p>
        </div>
      </div>
    </div>
  </section>






  <section>
    <div class="article-grid-banner">
      <div class="site__wrapper">
        <div class="banner-grid">
          <div class="banner-card">
            <div class="card__image">
              <img src="img/Thumbnail Slider.png" alt="">

              <div class="card__overlay card__overlay--indigo">
                <div class="card__overlay-content">
                  <ul class="card__meta">
                    <li><a href="#0"><i class="fa fa-tag"></i> Html5/Css3</a></li>
                    <li><a href="#0"><i class="fa fa-clock-o"></i> 2 min ago</a></li>
                  </ul>

                  <a href="#0" class="card__title">How to create a card based article with HTML5 &amp; CSS3</a>

                  <ul class="card__meta card__meta--last">
                    <li><a href="#0"><i class="fa fa-user"></i> Mithicher</a></li>
                    <li><a href="#0"><i class="fa fa-facebook-square"></i> Share</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>


        <div class="banner-grid">
          <div class="banner-card">
            <div class="card__image">
              <img src="img/To-Do-List.png" alt="">

              <div class="card__overlay card__overlay--blue">
                <div class="card__overlay-content">
                  <ul class="card__meta">
                    <li><a href="#0"><i class="fa fa-tag"></i> UI/UX</a></li>
                    <li><a href="#0"><i class="fa fa-clock-o"></i> 2 days ago</a></li>
                  </ul>

                  <a href="#0" class="card__title">How to create a card based article with HTML5 &amp; CSS3</a>

                  <ul class="card__meta card__meta--last">
                    <li><a href="#0"><i class="fa fa-user"></i> Mithicher</a></li>
                    <li><a href="#0"><i class="fa fa-facebook-square"></i> Share</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="banner-grid">
          <div class="banner-card">
            <div class="card__image">
              <img src="img/Weather App.png" alt="">

              <div class="card__overlay card__overlay--indigo">
                <div class="card__overlay-content">
                  <ul class="card__meta">
                    <li><a href="#0"><i class="fa fa-tag"></i> UI/UX</a></li>
                    <li><a href="#0"><i class="fa fa-clock-o"></i> 2 days ago</a></li>
                  </ul>

                  <a href="#0" class="card__title">How to create a card based article with HTML5 &amp; CSS3</a>

                  <ul class="card__meta card__meta--last">
                    <li><a href="#0"><i class="fa fa-user"></i> Mithicher</a></li>
                    <li><a href="#0"><i class="fa fa-facebook-square"></i> Share</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="banner-grid">
          <div class="banner-card">
            <div class="card__image">
              <img src=img/Untitled 1.png" alt="">

              <div class="card__overlay card__overlay--indigo">
                <div class="card__overlay-content">
                  <ul class="card__meta">
                    <li><a href="#0"><i class="fa fa-tag"></i> Tutorials</a></li>
                    <li><a href="#0"><i class="fa fa-clock-o"></i> 2 days ago</a></li>
                  </ul>

                  <a href="#0" class="card__title">How to create a card based article with HTML5 &amp; CSS3</a>

                  <ul class="card__meta card__meta--last">
                    <li><a href="#0"><i class="fa fa-user"></i> Mithicher</a></li>
                    <li><a href="#0"><i class="fa fa-facebook-square"></i> Share</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="banner-grid">
          <div class="banner-card">
            <div class="card__image">
              <img src="img/transparent thum.jpg" alt="">

              <div class="card__overlay card__overlay--blue">
                <div class="card__overlay-content">
                  <ul class="card__meta">
                    <li><a href="#0"><i class="fa fa-tag"></i> Tutorials</a></li>
                    <li><a href="#0"><i class="fa fa-clock-o"></i> 2 days ago</a></li>
                  </ul>

                  <a href="#0" class="card__title">How to create a card based article with HTML5 &amp; CSS3</a>

                  <ul class="card__meta card__meta--last">
                    <li><a href="#0"><i class="fa fa-user"></i> Mithicher</a></li>
                    <li><a href="#0"><i class="fa fa-facebook-square"></i> Share</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- <section>
    <div class="banner-section">
      <div class="banner-content">
        <div class="banner-search-bar">
          <h2>1000+ Free HTML Templates</h2>
          <input type="text" name="" id="myInput" placeholder="Search..." onkeyup="search()">
          <p>Best HTML Template Free Download. HTML Website Templates, Basic and Simple HTML Templates. Responsive and
            fully customizable with easy Drag-n-Drop HTML Website Builder</p>
        </div>
      </div>
    </div>
  </section> -->

  <section>
    <div class="free-course-section">
      <div class="course-heading">
        <h2>Explore Free Courses</h2>
      </div>

      <div class="wrapper">

        <div class="box reveal">
          <div class="front-face">
            <a href="">
              <div class="icon">
                <i class="fa-brands fa-html5" style="color: #f06529;"></i>
              </div>
              <span>HTML5 Tutorials</span>
            </a>
          </div>
          <div class="back-face html-tutorial-box">
            <span>HTML5 Tutorials</span>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem in deleniti vitae beatae veritatis aliquid
              porro
              perspiciatis dolores impedit ad.</p>
            <a>Read More...</a>
          </div>
        </div>

        <div class="box reveal_second">
          <div class="front-face">
            <a href="">
              <div class="icon">
                <i class="fa-brands fa-css3-alt" style="color: #42a5f5;"></i>
              </div>
              <span>CSS3 Tutorials</span>
            </a>
          </div>
          <div class="back-face css3-tutorial-box">
            <span>CSS3 Tutorials</span>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem in deleniti vitae beatae veritatis aliquid
              porro
              perspiciatis dolores impedit ad.</p>
            <a>Read More...</a>
          </div>
        </div>
        <div class="box reveal_third">
          <div class="front-face">
            <a href="">
              <div class="icon">
                <i class="fa-brands fa-square-js" style="color: #f0db4f;"></i>
              </div>
              <span>JavaScript Tutorials</span>
            </a>
          </div>
          <div class="back-face js-tutorial-box">
            <span>JavaScript Tutorials</span>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem in deleniti vitae beatae veritatis aliquid
              porro
              perspiciatis dolores impedit ad.</p>
            <a>Read More...</a>
          </div>
        </div>
        <div class="box reveal">
          <div class="front-face">
            <a href="">
              <div class="icon">
                <i class="fa-brands fa-sass" style="color: #cc6699;"></i>
              </div>
              <span>SASS Tutorials</span>
            </a>
          </div>
          <div class="back-face sass-tutorial-box">
            <span>SASS Tutorials</span>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem in deleniti vitae beatae veritatis aliquid
              porro
              perspiciatis dolores impedit ad.</p>
            <a>Read More...</a>
          </div>
        </div>
        <div class="box reveal_second">
          <div class="front-face">
            <a href="">
              <div class="icon">
                <i class="fa-brands fa-shopify" style="color: #96bf48;"></i>
              </div>
              <span>Shopify Tutorials</span>
            </a>
          </div>
          <div class="back-face shopify-tutorial-box">
            <span>Shopify Tutorials</span>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem in deleniti vitae beatae veritatis aliquid
              porro
              perspiciatis dolores impedit ad.</p>
            <a>Read More...</a>
          </div>
        </div>
        <div class="box reveal_third">
          <div class="front-face">
            <a href="">
              <div class="icon">
                <i class="fa-brands fa-php" style="color: #376ac3;"></i>
              </div>
              <span>PHP Tutorials</span>
            </a>
          </div>
          <div class="back-face php-tutorial-box">
            <span>PHP Tutorials</span>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem in deleniti vitae beatae veritatis aliquid
              porro
              perspiciatis dolores impedit ad.</p>
            <a>Read More...</a>
          </div>
        </div>
        <div class="box reveal">
          <div class="front-face">
            <a href="">
              <div class="icon">
                <i class="fa-brands fa-square-js" style="color: #f0db4f;"></i>
              </div>
              <span>Jquery Tutorials</span>
            </a>
          </div>
          <div class="back-face jquery-tutorial-box">
            <span>Jquery Tutorials</span>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem in deleniti vitae beatae veritatis aliquid
              porro
              perspiciatis dolores impedit ad.</p>
            <a>Read More...</a>
          </div>
        </div>
        <div class="box reveal_second">
          <div class="front-face">
            <a href="">
              <div class="icon">
                <i class="fa-solid fa-database" style="color: #3b3d3f;"></i>
              </div>
              <span>Database Tutorials</span>
            </a>
          </div>
          <div class="back-face database-tutorial-box">
            <span>Database Tutorials</span>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem in deleniti vitae beatae veritatis aliquid
              porro
              perspiciatis dolores impedit ad.</p>
            <a>Read More...</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <script src="js/sticky.js"></script>


  <section>
    <div class="our-product-section">
      <div class="our-product-heading">
        <h2>OUR PRODUCTS
        </h2>
        <p>Only digital products related to web development like
          eBooks, HTML Templates & Web Apps.</p>
      </div>
      <div class="our-product-box">
        <div class="our-product-box-1 reveal">
          <i class="fa-solid fa-book"></i>
          <h3>E Books</h3>
          <p>A comprehensive library of tutorials covering various topics, written by our expert Web Developers who have
            years of experience and are available for a small fee.</p>
        </div>
        <div class="our-product-box-1 reveal_second">
          <svg xmlns="http://www.w3.org/2000/svg" width="55" height="55" fill="currentColor" class="bi bi-code-square"
            viewBox="0 0 16 16">
            <path
              d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z" />
            <path
              d="M6.854 4.646a.5.5 0 0 1 0 .708L4.207 8l2.647 2.646a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 0 1 .708 0zm2.292 0a.5.5 0 0 0 0 .708L11.793 8l-2.647 2.646a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708 0z" />
          </svg>
          <h3>Premium Templates</h3>
          <p>A comprehensive library of tutorials covering various topics, written by our expert Web Developers who have
            years of experience and are available for a small fee.</p>
        </div>
        <div class="our-product-box-1 reveal_third">
          <i class="fa-brands fa-app-store-ios"></i>
          <h3>Web Apps</h3>
          <p>A comprehensive library of tutorials covering various topics, written by our expert Web Developers who have
            years of experience and are available for a small fee.</p>
        </div>
      </div>
    </div>
  </section>


  <section>
    <div class="pricing-table-section">
      <div class="pricing-table">
        <div class="pricing-table-heading">
          <h2>Affordable Website Design Packages
            For Your Business</h2>
        </div>

        <div class="wrapper">

          <div class="table basic">
            <div class="pricing-table-name"><span>Bonze Web</span></div>
            <div class="price-section">
              <div class="price-area">
                <div class="inner-area">
                  <span class="text">$</span>
                  <span class="price">149.99</span>
                </div>
              </div>
            </div>
            <div class="btn"><button>Add to cart</button></div>
            <ul class="features">
              <li>
                <span class="list-name">One Selected Template</span>
                <span class="icon check"><i class="fa-brands fa-check"></i></span>
              </li>
              <li>
                <span class="list-name">100% Responsive Design</span>
                <span class="icon check"><i class="fa fa-check"></i></span>
              </li>
              <li>
                <span class="list-name">Credit Remove Permission</span>
                <span class="icon cross"><i class="fa fa-times"></i></span>
              </li>
              <li>
                <span class="list-name">Lifetime Template Updates</span>
                <span class="icon cross"><i class="fa fa-times"></i></span>
              </li>
            </ul>

          </div>
          <div class="table premium">
            <div class="pricing-table-name"><span>Silver Web</span></div>
            <div class="price-section">
              <div class="price-area">
                <div class="inner-area">
                  <span class="text">$</span>
                  <span class="price">299.99</span>
                </div>
              </div>
            </div>
            <div class="btn"><button>Purchase</button></div>
            <ul class="features">
              <li>
                <span class="list-name">Five Existing Templates</span>
                <span class="icon check"><i class="fas fa-check"></i></span>
              </li>
              <li>
                <span class="list-name">100% Responsive Design</span>
                <span class="icon check"><i class="fas fa-check"></i></span>
              </li>
              <li>
                <span class="list-name">Credit Remove Permission</span>
                <span class="icon check"><i class="fas fa-check"></i></span>
              </li>
              <li>
                <span class="list-name">Lifetime Template Updates</span>
                <span class="icon cross"><i class="fas fa-times"></i></span>
              </li>
            </ul>

          </div>
          <div class="table ultimate">
            <div class="pricing-table-name"><span>Gold Web</span></div>
            <div class="price-section">
              <div class="price-area">
                <div class="inner-area">
                  <span class="text">$</span>
                  <span class="price">499.99</span>
                </div>
              </div>
            </div>
            <div class="btn"><button>Purchase</button></div>
            <ul class="features">
              <li>
                <span class="list-name">All Existing Templates</span>
                <span class="icon check"><i class="fas fa-check"></i></span>
              </li>
              <li>
                <span class="list-name">100% Responsive Design</span>
                <span class="icon check"><i class="fas fa-check"></i></span>
              </li>
              <li>
                <span class="list-name">Credit Remove Permission</span>
                <span class="icon check"><i class="fas fa-check"></i></span>
              </li>
              <li>
                <span class="list-name">Lifetime Template Updates</span>
                <span class="icon check"><i class="fas fa-check"></i></span>
              </li>
            </ul>

          </div>
        </div>


  </section>

  <section>
    <div class="css-tutorial-section">
      <div class="css-tutorial-box">
        <div class="flex-box">
          <div class="recent-post-section">
            <div class="recent-secrtion">
              <p>Recent Posts</p>
            </div>
            <div class="recent-box">
              <div class="flex-box-gap moreBox card">
                <div class="recent-post-box-1 reveal">
                  <a href="">
                    <img src="img/Banner slick Slider.png" alt="Banner Slick Slider Image">
                    <h2>Create Responsive Banner Slick Slider using
                      HTML CSS & jQuery.</h2>
                    <div class="user-id-details-time">
                      <a href="">wynkCode</a>
                      <span>May 09, 2023</span>
                    </div>
                  </a>

                  <div class="social-media-icon">
                    <ul>
                      <li><a href=""> <i class="fa-brands fa-instagram"></i></a></li>
                      <li><a href=""> <i class="fa-brands fa-youtube"></i></a></li>
                      <li><a href=""> <i class="fa-brands fa-linkedin"></i></a></li>
                      <li><a href=""> <i class="fa-brands fa-twitter"></i></a></li>
                    </ul>
                  </div>
                </div>
                <div class="recent-post-box-1 reveal_second">
                  <a href="">
                    <img src="img/Thumbnail Slider.png">
                    <h2>Vertical Thumbnail Slick Slider Using HTML, CSS and JavaScript.</h2>
                    <p><b>wynkCode</b>May 9, 2023</p>
                  </a>
                  <div class="social-media-icon">
                    <ul>
                      <li><a href=""> <i class="fa-brands fa-instagram"></i></a></li>
                      <li><a href=""> <i class="fa-brands fa-youtube"></i></a></li>
                      <li><a href=""> <i class="fa-brands fa-linkedin"></i></a></li>
                      <li><a href=""> <i class="fa-brands fa-twitter"></i></a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="flex-box-gap moreBox card">
                <div class="recent-post-box-1 reveal">
                  <a href="">
                    <img src="img/CSS INDICATOR.png">
                    <h2>Magic Navigation Menu Indicator using Html CSS & Javascript</h2>
                    <p><b>wynkCode</b>May 9, 2023</p>
                  </a>
                  <div class="social-media-icon">
                    <ul>
                      <li><a href=""> <i class="fa-brands fa-instagram"></i></a></li>
                      <li><a href=""> <i class="fa-brands fa-youtube"></i></a></li>
                      <li><a href=""> <i class="fa-brands fa-linkedin"></i></a></li>
                      <li><a href=""> <i class="fa-brands fa-twitter"></i></a></li>
                    </ul>
                  </div>
                </div>
                <div class="recent-post-box-1 reveal_second">
                  <a href="">
                    <img src="img/Side bar menu.jpg">
                    <h2>Side Navigation Menu Bar using HTML, CSS And JavaScript</h2>
                    <p><b>wynkCode</b>May 9, 2023</p>
                  </a>
                  <div class="social-media-icon">
                    <ul>
                      <li><a href=""> <i class="fa-brands fa-instagram"></i></a></li>
                      <li><a href=""> <i class="fa-brands fa-youtube"></i></a></li>
                      <li><a href=""> <i class="fa-brands fa-linkedin"></i></a></li>
                      <li><a href=""> <i class="fa-brands fa-twitter"></i></a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="flex-box-gap moreBox card">
                <div class="recent-post-box-1 reveal">
                  <a href="">
                    <img src="img/Card Slider.png">
                    <h2>Responsive Card Slider with CSS and JavaScript Animation</h2>
                    <p><b>wynkCode</b>May 9, 2023</p>
                  </a>
                  <div class="social-media-icon">
                    <ul>
                      <li><a href=""> <i class="fa-brands fa-instagram"></i></a></li>
                      <li><a href=""> <i class="fa-brands fa-youtube"></i></a></li>
                      <li><a href=""> <i class="fa-brands fa-linkedin"></i></a></li>
                      <li><a href=""> <i class="fa-brands fa-twitter"></i></a></li>
                    </ul>
                  </div>
                </div>
                <div class="recent-post-box-1 reveal_second">
                  <a href="">
                    <img src="img/Hide and seek.png">
                    <h2>Hide & Seek Tab Bar Animation using Html CSS & Javascript</h2>
                    <p><b>wynkCode</b>May 9, 2023</p>
                  </a>
                  <div class="social-media-icon">
                    <ul>
                      <li><a href=""> <i class="fa-brands fa-instagram"></i></a></li>
                      <li><a href=""> <i class="fa-brands fa-youtube"></i></a></li>
                      <li><a href=""> <i class="fa-brands fa-linkedin"></i></a></li>
                      <li><a href=""> <i class="fa-brands fa-twitter"></i></a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="flex-box-gap moreBox card">
                <div class="recent-post-box-1 reveal">
                  <a href="">
                    <img src="img/Sticky Navbar.png">
                    <h2>Sticky Navigation Bar On Scroll Using HTML, CSS And JavaScript</h2>
                    <p><b>wynkCode</b>May 9, 2023</p>
                  </a>
                  <div class="social-media-icon">
                    <ul>
                      <li><a href=""> <i class="fa-brands fa-instagram"></i></a></li>
                      <li><a href=""> <i class="fa-brands fa-youtube"></i></a></li>
                      <li><a href=""> <i class="fa-brands fa-linkedin"></i></a></li>
                      <li><a href=""> <i class="fa-brands fa-twitter"></i></a></li>
                    </ul>
                  </div>
                </div>
                <div class="recent-post-box-1 reveal_second">
                  <a href="">
                    <img src="img/How to create Pagination in HTML CSS & JavaScript.jpg">
                    <h2>How to create Pagination in HTML CSS & JavaScript</h2>
                    <p><b>wynkCode</b>May 9, 2023</p>
                  </a>
                  <div class="social-media-icon">
                    <ul>
                      <li><a href=""> <i class="fa-brands fa-instagram"></i></a></li>
                      <li><a href=""> <i class="fa-brands fa-youtube"></i></a></li>
                      <li><a href=""> <i class="fa-brands fa-linkedin"></i></a></li>
                      <li><a href=""> <i class="fa-brands fa-twitter"></i></a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="flex-box-gap moreBox card" style="display: none;">
                <div class="recent-post-box-1 reveal">
                  <a href="">
                    <img src="img/How to create Pagination in HTML CSS & JavaScript.jpg">
                    <h2>How to create Pagination in HTML CSS & JavaScript</h2>
                    <p><b>wynkCode</b>May 9, 2023</p>
                  </a>
                  <div class="social-media-icon">
                    <ul>
                      <li><a href=""> <i class="fa-brands fa-instagram"></i></a></li>
                      <li><a href=""> <i class="fa-brands fa-youtube"></i></a></li>
                      <li><a href=""> <i class="fa-brands fa-linkedin"></i></a></li>
                      <li><a href=""> <i class="fa-brands fa-twitter"></i></a></li>
                    </ul>
                  </div>
                </div>
                <div class="recent-post-box-1 reveal_second">
                  <a href="">
                    <img src="img/How to create Pagination in HTML CSS & JavaScript.jpg">
                    <h2>How to create Pagination in HTML CSS & JavaScript</h2>
                    <p><b>wynkCode</b>May 9, 2023</p>
                  </a>
                  <div class="social-media-icon">
                    <ul>
                      <li><a href=""> <i class="fa-brands fa-instagram"></i></a></li>
                      <li><a href=""> <i class="fa-brands fa-youtube"></i></a></li>
                      <li><a href=""> <i class="fa-brands fa-linkedin"></i></a></li>
                      <li><a href=""> <i class="fa-brands fa-twitter"></i></a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="flex-box-gap moreBox card" style="display: none;">
                <div class="recent-post-box-1 reveal">
                  <a href="">
                    <img src="img/How to create Pagination in HTML CSS & JavaScript.jpg">
                    <h2>How to create Pagination in HTML CSS & JavaScript</h2>
                    <p><b>wynkCode</b>May 9, 2023</p>
                  </a>
                  <div class="social-media-icon">
                    <ul>
                      <li><a href=""> <i class="fa-brands fa-instagram"></i></a></li>
                      <li><a href=""> <i class="fa-brands fa-youtube"></i></a></li>
                      <li><a href=""> <i class="fa-brands fa-linkedin"></i></a></li>
                      <li><a href=""> <i class="fa-brands fa-twitter"></i></a></li>
                    </ul>
                  </div>
                </div>
                <div class="recent-post-box-1 reveal_second">
                  <a href="">
                    <img src="img/How to create Pagination in HTML CSS & JavaScript.jpg">
                    <h2>How to create Pagination in HTML CSS & JavaScript</h2>
                    <p><b>wynkCode</b>May 9, 2023</p>
                  </a>
                  <div class="social-media-icon">
                    <ul>
                      <li><a href=""> <i class="fa-brands fa-instagram"></i></a></li>
                      <li><a href=""> <i class="fa-brands fa-youtube"></i></a></li>
                      <li><a href=""> <i class="fa-brands fa-linkedin"></i></a></li>
                      <li><a href=""> <i class="fa-brands fa-twitter"></i></a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="flex-box-gap moreBox card" style="display: none;">
                <div class="recent-post-box-1 reveal">
                  <a href="">
                    <img src="img/How to create Pagination in HTML CSS & JavaScript.jpg">
                    <h2>How to create Pagination in HTML CSS & JavaScript</h2>
                    <p><b>wynkCode</b>May 9, 2023</p>
                  </a>
                  <div class="social-media-icon">
                    <ul>
                      <li><a href=""> <i class="fa-brands fa-instagram"></i></a></li>
                      <li><a href=""> <i class="fa-brands fa-youtube"></i></a></li>
                      <li><a href=""> <i class="fa-brands fa-linkedin"></i></a></li>
                      <li><a href=""> <i class="fa-brands fa-twitter"></i></a></li>
                    </ul>
                  </div>
                </div>
                <div class="recent-post-box-1 reveal_second">
                  <a href="">
                    <img src="img/How to create Pagination in HTML CSS & JavaScript.jpg">
                    <h2>How to create Pagination in HTML CSS & JavaScript</h2>
                    <p><b>wynkCode</b>May 9, 2023</p>
                  </a>
                  <div class="social-media-icon">
                    <ul>
                      <li><a href=""> <i class="fa-brands fa-instagram"></i></a></li>
                      <li><a href=""> <i class="fa-brands fa-youtube"></i></a></li>
                      <li><a href=""> <i class="fa-brands fa-linkedin"></i></a></li>
                      <li><a href=""> <i class="fa-brands fa-twitter"></i></a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="flex-box-gap moreBox card" style="display: none;">
                <div class="recent-post-box-1 reveal">
                  <a href="">
                    <img src="img/How to create Pagination in HTML CSS & JavaScript.jpg">
                    <h2>How to create Pagination in HTML CSS & JavaScript</h2>
                    <p><b>wynkCode</b>May 9, 2023</p>
                  </a>
                  <div class="social-media-icon">
                    <ul>
                      <li><a href=""> <i class="fa-brands fa-instagram"></i></a></li>
                      <li><a href=""> <i class="fa-brands fa-youtube"></i></a></li>
                      <li><a href=""> <i class="fa-brands fa-linkedin"></i></a></li>
                      <li><a href=""> <i class="fa-brands fa-twitter"></i></a></li>
                    </ul>
                  </div>
                </div>
                <div class="recent-post-box-1 reveal_second">
                  <a href="">
                    <img src="img/How to create Pagination in HTML CSS & JavaScript.jpg">
                    <h2>How to create Pagination in HTML CSS & JavaScript</h2>
                    <p><b>wynkCode</b>May 9, 2023</p>
                  </a>
                  <div class="social-media-icon">
                    <ul>
                      <li><a href=""> <i class="fa-brands fa-instagram"></i></a></li>
                      <li><a href=""> <i class="fa-brands fa-youtube"></i></a></li>
                      <li><a href=""> <i class="fa-brands fa-linkedin"></i></a></li>
                      <li><a href=""> <i class="fa-brands fa-twitter"></i></a></li>
                    </ul>
                  </div>
                </div>
              </div>

              <div class="view-all-btn">
                <a href="#">View All <i class="fa fa-arrow-right"></i> </a>
              </div>
              <!-- Loadmore Button -->
              <!-- <div id="loadMore" style="">
                <a href="#">Load More</a>
              </div> -->


            </div>
          </div>
          <div class="most-popular-side-bar">
            <div class="aside-bar-section side-bar-1">
              <div class="recent-secrtion">
                <p>Most Popular</p>
              </div>
              <div class="aside-bar">
                <div class="aside-bar-box-1 reveal">
                  <?php include 'fetch_data.php'; ?>
                  <?php $count = 0;
                  foreach ($images as $image) { ?>
                    <div class="aside-bar-content ">
                      <div class="aside-bar-content-img">
                        <img src="data:image/jpeg;base64, <?= base64_encode($image['image_data']) ?>"
                          alt="<?= $image['image_name'] ?>">

                      </div>
                      <div class="aside-bar-content-title">
                        <div class="aside-bar-heading">
                          <h3> <a href="">

                              <?= $image['title'] ?>

                            </a></h3>
                        </div>
                        <div class="aside-bar-date">
                          <p>
                            <?= $image['date'] ?>
                          </p>
                        </div>

                      </div>
                    </div>
                    <?php $count++; ?>
                    <?php if ($count >= 6) {
                      break; // Only display the most recent content
                    } ?>
                  <?php } ?>
                </div>




              </div>
            </div>

            <div class="aside-bar-section">
              <div class="recent-secrtion">
                <p>Follow Us</p>
              </div>
              <div class="aside-bar-social-account">
                <div class="aside-bar-icon reveal">
                  <i class="fa-brands fa-instagram"></i>
                  <h3>1,750</h3>
                  <p>Followers</p>
                </div>
                <div class="aside-bar-icon reveal_second">
                  <i class="fa-brands fa-youtube"></i>
                  <h3>212</h3>
                  <p>Subscriber</p>
                </div>
                <div class="aside-bar-icon reveal_third">
                  <i class="fa-brands fa-linkedin"></i>
                  <h3>600</h3>
                  <p>Followers</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  </section>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
  <script src="js/card.js"></script>

  <section>
    <div class="css-tutorial-section python-tutorial-section-box">
      <div class="css-tutorial-box">
        <div class="heading-box">
          <h2>JavaScript Tutorials</h2>
        </div>

        <div class="python-tutorials-section">
          <div class="recent-post-section">
            <div class="recent-secrtion">
              <p>Recent Posts</p>
            </div>
            <div class="recent-box">
              <div class="flex-box-gap moreBox card">
                <div class="recent-post-box-1 reveal">
                  <a href="JAVASCRIPT/calculator-in-javascript.html">
                    <img src="img/Calculator in Javascript.png">
                    <h2>How to build a calculator in JavaScript.</h2>
                    <p><b>wynkCode</b>May 9, 2023</p>
                  </a>
                  <div class="social-media-icon">
                    <ul>
                      <li><a href=""> <i class="fa-brands fa-instagram"></i></a></li>
                      <li><a href=""> <i class="fa-brands fa-youtube"></i></a></li>
                      <li><a href=""> <i class="fa-brands fa-linkedin"></i></a></li>
                      <li><a href=""> <i class="fa-brands fa-twitter"></i></a></li>
                    </ul>
                  </div>
                </div>
                <div class="recent-post-box-1 reveal_second">
                  <a href="JAVASCRIPT/form-validation.html">
                    <img src="img/form Validation.png" alt="Form Validation Image">
                    <h2>Create A Form Validation In JavaScript.</h2>
                    <p><b>wynkCode</b>May 9, 2023</p>
                  </a>
                  <div class="social-media-icon">
                    <ul>
                      <li><a href=""> <i class="fa-brands fa-instagram"></i></a></li>
                      <li><a href=""> <i class="fa-brands fa-youtube"></i></a></li>
                      <li><a href=""> <i class="fa-brands fa-linkedin"></i></a></li>
                      <li><a href=""> <i class="fa-brands fa-twitter"></i></a></li>
                    </ul>
                  </div>
                </div>
                <div class="recent-post-box-1 reveal_second">
                  <a href="JAVASCRIPT/music-player-app.html">
                    <img src="img/Music Player.png" alt="Music Player">
                    <h2>Create A Music Player App In JavaScript.</h2>
                    <p><b>wynkCode</b>May 9, 2023</p>
                  </a>
                  <div class="social-media-icon">
                    <ul>
                      <li><a href=""> <i class="fa-brands fa-instagram"></i></a></li>
                      <li><a href=""> <i class="fa-brands fa-youtube"></i></a></li>
                      <li><a href=""> <i class="fa-brands fa-linkedin"></i></a></li>
                      <li><a href=""> <i class="fa-brands fa-twitter"></i></a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="flex-box-gap moreBox card">
                <div class="recent-post-box-1 reveal">
                  <a href="JAVASCRIPT/quiz-app.html">
                    <img src="img/Quiz App.png" alt="Quiz Application">
                    <h2>Create A Quiz Application Using HTML CSS and JavaScript.</h2>
                    <p><b>wynkCode</b>May 9, 2023</p>
                  </a>
                  <div class="social-media-icon">
                    <ul>
                      <li><a href=""> <i class="fa-brands fa-instagram"></i></a></li>
                      <li><a href=""> <i class="fa-brands fa-youtube"></i></a></li>
                      <li><a href=""> <i class="fa-brands fa-linkedin"></i></a></li>
                      <li><a href=""> <i class="fa-brands fa-twitter"></i></a></li>
                    </ul>
                  </div>
                </div>
                <div class="recent-post-box-1 reveal_second">
                  <a href="JAVASCRIPT/to-do-list.html">
                    <img src="img/To-Do-List.png" alt="Todo List">
                    <h2>Create A Todo List In HTMl CSS and JavaScript.</h2>
                    <p><b>wynkCode</b>May 9, 2023</p>
                  </a>
                  <div class="social-media-icon">
                    <ul>
                      <li><a href=""> <i class="fa-brands fa-instagram"></i></a></li>
                      <li><a href=""> <i class="fa-brands fa-youtube"></i></a></li>
                      <li><a href=""> <i class="fa-brands fa-linkedin"></i></a></li>
                      <li><a href=""> <i class="fa-brands fa-twitter"></i></a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="flex-box-gap moreBox card">
                <div class="recent-post-box-1 reveal">
                  <a href="JAVASCRIPT/weather-app.html">
                    <img src="img/Weather App.png" alt="Weather App">
                    <h2>Building a Weather App Using JavaScript.</h2>
                    <p><b>wynkCode</b>May 9, 2023</p>
                  </a>
                  <div class="social-media-icon">
                    <ul>
                      <li><a href=""> <i class="fa-brands fa-instagram"></i></a></li>
                      <li><a href=""> <i class="fa-brands fa-youtube"></i></a></li>
                      <li><a href=""> <i class="fa-brands fa-linkedin"></i></a></li>
                      <li><a href=""> <i class="fa-brands fa-twitter"></i></a></li>
                    </ul>
                  </div>
                </div>
                <div class="recent-post-box-1 reveal">
                  <a href="">
                    <img src="img/Banner slick Slider.png" alt="Banner Slick Slider Image">
                    <h2>Create Responsive Banner Slick Slider using
                      HTML CSS & jQuery.</h2>
                    <p><b>wynkCode</b>May 9, 2023</p>
                  </a>
                  <div class="social-media-icon">
                    <ul>
                      <li><a href=""> <i class="fa-brands fa-instagram"></i></a></li>
                      <li><a href=""> <i class="fa-brands fa-youtube"></i></a></li>
                      <li><a href=""> <i class="fa-brands fa-linkedin"></i></a></li>
                      <li><a href=""> <i class="fa-brands fa-twitter"></i></a></li>
                    </ul>
                  </div>
                </div>
                <div class="recent-post-box-1 reveal_second">
                  <a href="">
                    <img src="img/How to create Pagination in HTML CSS & JavaScript.jpg">
                    <h2>How to create Pagination in HTML CSS & JavaScript</h2>
                    <p><b>wynkCode</b>May 9, 2023</p>
                  </a>
                  <div class="social-media-icon">
                    <ul>
                      <li><a href=""> <i class="fa-brands fa-instagram"></i></a></li>
                      <li><a href=""> <i class="fa-brands fa-youtube"></i></a></li>
                      <li><a href=""> <i class="fa-brands fa-linkedin"></i></a></li>
                      <li><a href=""> <i class="fa-brands fa-twitter"></i></a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="flex-box-gap moreBox card">
                <div class="recent-post-box-1 reveal">
                  <a href="">
                    <img src="img/How to create Pagination in HTML CSS & JavaScript.jpg">
                    <h2>How to create Pagination in HTML CSS & JavaScript</h2>
                    <p><b>wynkCode</b>May 9, 2023</p>
                  </a>
                  <div class="social-media-icon">
                    <ul>
                      <li><a href=""> <i class="fa-brands fa-instagram"></i></a></li>
                      <li><a href=""> <i class="fa-brands fa-youtube"></i></a></li>
                      <li><a href=""> <i class="fa-brands fa-linkedin"></i></a></li>
                      <li><a href=""> <i class="fa-brands fa-twitter"></i></a></li>
                    </ul>
                  </div>
                </div>
                <div class="recent-post-box-1 reveal_second">
                  <a href="">
                    <img src="img/How to create Pagination in HTML CSS & JavaScript.jpg">
                    <h2>How to create Pagination in HTML CSS & JavaScript</h2>
                    <p><b>wynkCode</b>May 9, 2023</p>
                  </a>
                  <div class="social-media-icon">
                    <ul>
                      <li><a href=""> <i class="fa-brands fa-instagram"></i></a></li>
                      <li><a href=""> <i class="fa-brands fa-youtube"></i></a></li>
                      <li><a href=""> <i class="fa-brands fa-linkedin"></i></a></li>
                      <li><a href=""> <i class="fa-brands fa-twitter"></i></a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="flex-box-gap moreBox card" style="display: none;">
                <div class="recent-post-box-1 reveal">
                  <a href="">
                    <img src="img/How to create Pagination in HTML CSS & JavaScript.jpg">
                    <h2>How to create Pagination in HTML CSS & JavaScript</h2>
                    <p><b>wynkCode</b>May 9, 2023</p>
                  </a>
                  <div class="social-media-icon">
                    <ul>
                      <li><a href=""> <i class="fa-brands fa-instagram"></i></a></li>
                      <li><a href=""> <i class="fa-brands fa-youtube"></i></a></li>
                      <li><a href=""> <i class="fa-brands fa-linkedin"></i></a></li>
                      <li><a href=""> <i class="fa-brands fa-twitter"></i></a></li>
                    </ul>
                  </div>
                </div>
                <div class="recent-post-box-1 reveal_second">
                  <a href="">
                    <img src="img/How to create Pagination in HTML CSS & JavaScript.jpg">
                    <h2>How to create Pagination in HTML CSS & JavaScript</h2>
                    <p><b>wynkCode</b>May 9, 2023</p>
                  </a>
                  <div class="social-media-icon">
                    <ul>
                      <li><a href=""> <i class="fa-brands fa-instagram"></i></a></li>
                      <li><a href=""> <i class="fa-brands fa-youtube"></i></a></li>
                      <li><a href=""> <i class="fa-brands fa-linkedin"></i></a></li>
                      <li><a href=""> <i class="fa-brands fa-twitter"></i></a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="flex-box-gap moreBox card" style="display: none;">
                <div class="recent-post-box-1 reveal">
                  <a href="">
                    <img src="img/How to create Pagination in HTML CSS & JavaScript.jpg">
                    <h2>How to create Pagination in HTML CSS & JavaScript</h2>
                    <p><b>wynkCode</b>May 9, 2023</p>
                  </a>
                  <div class="social-media-icon">
                    <ul>
                      <li><a href=""> <i class="fa-brands fa-instagram"></i></a></li>
                      <li><a href=""> <i class="fa-brands fa-youtube"></i></a></li>
                      <li><a href=""> <i class="fa-brands fa-linkedin"></i></a></li>
                      <li><a href=""> <i class="fa-brands fa-twitter"></i></a></li>
                    </ul>
                  </div>
                </div>
                <div class="recent-post-box-1 reveal_second">
                  <a href="">
                    <img src="img/How to create Pagination in HTML CSS & JavaScript.jpg">
                    <h2>How to create Pagination in HTML CSS & JavaScript</h2>
                    <p><b>wynkCode</b>May 9, 2023</p>
                  </a>
                  <div class="social-media-icon">
                    <ul>
                      <li><a href=""> <i class="fa-brands fa-instagram"></i></a></li>
                      <li><a href=""> <i class="fa-brands fa-youtube"></i></a></li>
                      <li><a href=""> <i class="fa-brands fa-linkedin"></i></a></li>
                      <li><a href=""> <i class="fa-brands fa-twitter"></i></a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="flex-box-gap moreBox card" style="display: none;">
                <div class="recent-post-box-1 reveal">
                  <a href="">
                    <img src="img/How to create Pagination in HTML CSS & JavaScript.jpg">
                    <h2>How to create Pagination in HTML CSS & JavaScript</h2>
                    <p><b>wynkCode</b>May 9, 2023</p>
                  </a>
                  <div class="social-media-icon">
                    <ul>
                      <li><a href=""> <i class="fa-brands fa-instagram"></i></a></li>
                      <li><a href=""> <i class="fa-brands fa-youtube"></i></a></li>
                      <li><a href=""> <i class="fa-brands fa-linkedin"></i></a></li>
                      <li><a href=""> <i class="fa-brands fa-twitter"></i></a></li>
                    </ul>
                  </div>
                </div>
                <div class="recent-post-box-1 reveal_second">
                  <a href="">
                    <img src="img/How to create Pagination in HTML CSS & JavaScript.jpg">
                    <h2>How to create Pagination in HTML CSS & JavaScript</h2>
                    <p><b>wynkCode</b>May 9, 2023</p>
                  </a>
                  <div class="social-media-icon">
                    <ul>
                      <li><a href=""> <i class="fa-brands fa-instagram"></i></a></li>
                      <li><a href=""> <i class="fa-brands fa-youtube"></i></a></li>
                      <li><a href=""> <i class="fa-brands fa-linkedin"></i></a></li>
                      <li><a href=""> <i class="fa-brands fa-twitter"></i></a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="flex-box-gap moreBox card" style="display: none;">
                <div class="recent-post-box-1 reveal">
                  <a href="">
                    <img src="img/How to create Pagination in HTML CSS & JavaScript.jpg">
                    <h2>How to create Pagination in HTML CSS & JavaScript</h2>
                    <p><b>wynkCode</b>May 9, 2023</p>
                  </a>
                  <div class="social-media-icon">
                    <ul>
                      <li><a href=""> <i class="fa-brands fa-instagram"></i></a></li>
                      <li><a href=""> <i class="fa-brands fa-youtube"></i></a></li>
                      <li><a href=""> <i class="fa-brands fa-linkedin"></i></a></li>
                      <li><a href=""> <i class="fa-brands fa-twitter"></i></a></li>
                    </ul>
                  </div>
                </div>
                <div class="recent-post-box-1 reveal_second">
                  <a href="">
                    <img src="img/How to create Pagination in HTML CSS & JavaScript.jpg">
                    <h2>How to create Pagination in HTML CSS & JavaScript</h2>
                    <p><b>wynkCode</b>May 9, 2023</p>
                  </a>
                  <div class="social-media-icon">
                    <ul>
                      <li><a href=""> <i class="fa-brands fa-instagram"></i></a></li>
                      <li><a href=""> <i class="fa-brands fa-youtube"></i></a></li>
                      <li><a href=""> <i class="fa-brands fa-linkedin"></i></a></li>
                      <li><a href=""> <i class="fa-brands fa-twitter"></i></a></li>
                    </ul>
                  </div>
                </div>
              </div>

              <div id="loadMore" style="">
                <a href="#">Load More</a>
              </div>
            </div>
          </div>
        </div>
      </div>
  </section>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
  <script src="js/card.js"></script>

  <section>
    <div class="home-bog-section">
      <div class="home-blog-box">
        <div class="home-blog-box-heading">
          <h2>Read The Latest Articles from Our Blog Post</h2>
        </div>
        <div class="recent-secrtion">
          <p>Latest Blog</p>
        </div>
        <div class="home-blog-post">
          <div class="home-blog-post-1 reveal">
            <div class="aside-bar-content-img">
              <img src="img/Website with Login & Registration Form in HTML CSS & JavaScript.jpg">
            </div>
            <div class="aside-bar-content-title" id="subheading">
              <h4>Website with Login & Registration For</h4>
              <p><b>wynkCode</b>May 9, 2023</p>
            </div>
          </div>
          <div class="home-blog-post-1 reveal_second">
            <div class="aside-bar-content-img">
              <img src="img/Website with Login & Registration Form in HTML CSS & JavaScript.jpg">
            </div>
            <div class="aside-bar-content-title" id="subheading">
              <h4>Website with Login & Registration For</h4>
              <p><b>wynkCode</b>May 9, 2023</p>
            </div>
          </div>
          <div class="home-blog-post-1 reveal_third">
            <div class="aside-bar-content-img">
              <img src="img/Website with Login & Registration Form in HTML CSS & JavaScript.jpg">
            </div>
            <div class="aside-bar-content-title" id="subheading">
              <h4>Website with Login & Registration For</h4>
              <p><b>wynkCode</b>May 9, 2023</p>
            </div>
          </div>
        </div>
        <div class="home-blog-post">
          <div class="home-blog-post-1 reveal">
            <div class="aside-bar-content-img">
              <img src="img/Website with Login & Registration Form in HTML CSS & JavaScript.jpg">
            </div>
            <div class="aside-bar-content-title" id="subheading">
              <h4>Website with Login & Registration For</h4>
              <p><b>wynkCode</b>May 9, 2023</p>
            </div>
          </div>
          <div class="home-blog-post-1 reveal_second">
            <div class="aside-bar-content-img">
              <img src="img/Website with Login & Registration Form in HTML CSS & JavaScript.jpg">
            </div>
            <div class="aside-bar-content-title" id="subheading">
              <h4>Website with Login & Registration For</h4>
              <p><b>wynkCode</b>May 9, 2023</p>
            </div>
          </div>
          <div class="home-blog-post-1 reveal_third">
            <div class="aside-bar-content-img">
              <img src="img/Website with Login & Registration Form in HTML CSS & JavaScript.jpg">
            </div>
            <div class="aside-bar-content-title" id="subheading">
              <h4>Website with Login & Registration For</h4>
              <p><b>wynkCode</b>May 9, 2023</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section>
    <div class="categories-section">
      <div id="animated-bg">
        <div id="container-inside">
          <div id="circle-small"></div>
          <div id="circle-medium"></div>
          <div id="circle-large"></div>
          <div id="circle-xlarge"></div>
          <div id="circle-xxlarge"></div>
        </div>
      </div>
      <div class="category-box">
        <div class="categories-box-heading">
          <h2>Explore New Design</h2>
          <div class="underline"><span></span></div>
        </div>
        <div class="recent-secrtion recent-box-topic">
          <p>New Topic</p>
        </div>
        <div class="categories-bx-all">
          <div class="categories-box-1">
            <div class="topic-heading">
              <h4><i class="fa-brands fa-css3-alt" style="color: #42a5f5;"></i> CSS Design</h4>
              <span></span>
            </div>
            <ul>
              <li><a href="">1. Website with Login <i class="fa-solid fa-arrow-up-right-from-square"></i></a></li>
              <li><a href="">2. HTML CSS & JavaScript <i class="fa-solid fa-arrow-up-right-from-square"></i></a></li>
              <li><a href="">3. HTML CSS & JavaScript <i class="fa-solid fa-arrow-up-right-from-square"></i></a></li>
              <li><a href="">4. Website with Login <i class="fa-solid fa-arrow-up-right-from-square"></i></a></li>
              <li><a href="">5. HTML CSS & JavaScript <i class="fa-solid fa-arrow-up-right-from-square"></i></a></li>
              <li><a href="">6. HTML CSS & JavaScript <i class="fa-solid fa-arrow-up-right-from-square"></i> </a></li>
              <li><a href="">7. Website with Login <i class="fa-solid fa-arrow-up-right-from-square"></i></a></li>
              <li><a href="">8. HTML CSS & JavaScript <i class="fa-solid fa-arrow-up-right-from-square"></i></a></li>
              <li><a href="">9. Website with Login <i class="fa-solid fa-arrow-up-right-from-square"></i></a></li>
              <li><a href="">10. Website with Login <i class="fa-solid fa-arrow-up-right-from-square"></i></a></li>
            </ul>
          </div>
          <div class="categories-box-1">
            <div class="topic-heading">
              <h4><i class="fa-brands fa-sass" style="color: #cc6699;"></i> SASS Design</h4>
              <span></span>
            </div>
            <ul>
              <li><a href="">1. Website with Login <i class="fa-solid fa-arrow-up-right-from-square"></i></a></li>
              <li><a href="">2. HTML CSS & JavaScript <i class="fa-solid fa-arrow-up-right-from-square"></i></a></li>
              <li><a href="">3. HTML CSS & JavaScript <i class="fa-solid fa-arrow-up-right-from-square"></i></a></li>
              <li><a href="">4. Website with Login <i class="fa-solid fa-arrow-up-right-from-square"></i></a></li>
              <li><a href="">5. HTML CSS & JavaScript <i class="fa-solid fa-arrow-up-right-from-square"></i></a></li>
              <li><a href="">6. HTML CSS & JavaScript <i class="fa-solid fa-arrow-up-right-from-square"></i> </a></li>
              <li><a href="">7. Website with Login <i class="fa-solid fa-arrow-up-right-from-square"></i></a></li>
              <li><a href="">8. HTML CSS & JavaScript <i class="fa-solid fa-arrow-up-right-from-square"></i></a></li>
              <li><a href="">9. Website with Login <i class="fa-solid fa-arrow-up-right-from-square"></i></a></li>
              <li><a href="">10. Website with Login <i class="fa-solid fa-arrow-up-right-from-square"></i></a></li>
            </ul>
          </div>
          <div class="categories-box-1">
            <div class="topic-heading">
              <h4> <i class="fa-brands fa-square-js" style="color: #f0db4f;"></i> JavaScript Design</h4>
              <span></span>
            </div>
            <ul>
              <li><a href="">1. Website with Login <i class="fa-solid fa-arrow-up-right-from-square"></i></a></li>
              <li><a href="">2. HTML CSS & JavaScript <i class="fa-solid fa-arrow-up-right-from-square"></i></a></li>
              <li><a href="">3. HTML CSS & JavaScript <i class="fa-solid fa-arrow-up-right-from-square"></i></a></li>
              <li><a href="">4. Website with Login <i class="fa-solid fa-arrow-up-right-from-square"></i></a></li>
              <li><a href="">5. HTML CSS & JavaScript <i class="fa-solid fa-arrow-up-right-from-square"></i></a></li>
              <li><a href="">6. HTML CSS & JavaScript <i class="fa-solid fa-arrow-up-right-from-square"></i> </a></li>
              <li><a href="">7. Website with Login <i class="fa-solid fa-arrow-up-right-from-square"></i></a></li>
              <li><a href="">8. HTML CSS & JavaScript <i class="fa-solid fa-arrow-up-right-from-square"></i></a></li>
              <li><a href="">9. Website with Login <i class="fa-solid fa-arrow-up-right-from-square"></i></a></li>
              <li><a href="">10. Website with Login <i class="fa-solid fa-arrow-up-right-from-square"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>

  <footer>
    <div class="footer-container-section">
      <div class="gradient-circle">
        <span class="reveal"></span>
        <span class="reveal"></span>
      </div>
      <div class="footer-container-box">
        <div class="footer-container-box-1">

          <div class="footer-container-logo">
            <h2>
              <a href="">wynk<span>Code</span></a>
            </h2>
          </div>
          <div class="footer-container-logo-details">
            <p>wynkCode is a blog dedicated to providing valuable and informative content about web development
              technologies such as HTML, CSS, JavaScript, and PHP... Read more</p>
          </div>
        </div>
        <div class="footer-container-box-1">
          <div class="footer-container-box-heading">
            <h3>Resources</h3>
          </div>
          <ul>
            <li><a href="#">Sass development</a></li>
            <li><a href="#">Web development</a></li>
            <li><a href="#">App development</a></li>
            <li><a href="#">Sass development</a></li>
            <li><a href="#">Web development</a></li>
          </ul>
        </div>
        <div class="footer-container-box-1">
          <div class="footer-container-box-heading">
            <h3>Company</h3>
          </div>
          <ul>
            <li><a href="#">Sass development</a></li>
            <li><a href="#">Web development</a></li>
            <li><a href="#">App development</a></li>
            <li><a href="#">Sass development</a></li>
            <li><a href="#">Web development</a></li>
          </ul>
        </div>
        <div class="footer-container-box-1">
          <div class="footer-container-box-heading">
            <h3>Resources</h3>
          </div>
          <ul>
            <li><a href="#">Sass development</a></li>
            <li><a href="#">Web development</a></li>
            <li><a href="#">App development</a></li>
            <li><a href="#">Sass development</a></li>
            <li><a href="#">Web development</a></li>
          </ul>
        </div>
        <div class="footer-container-box-social">
          <div class="footer-container-box-heading">
            <h3>Resources</h3>
          </div>
          <ul>
            <li><a class="footer-facebook" href="#"><span></span></a></li>
            <li><a class="footer-instagram" href="#"><span></span></a></li>
            <li><a class="footer-youtube" href="#"><span></span></a></li>
            <li><a class="footer-twitter" href="#"><span></span></a></li>
            <li><a class="footer-linkedin" href="#"><span></span></a></li>
            <li></li>
          </ul>
        </div>
      </div>
    </div>
  </footer>


</body>

</html>