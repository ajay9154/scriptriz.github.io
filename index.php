<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="css/animscss.scss">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick.min.css" rel="stylesheet"
        type="text/css" media="all" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick-theme.min.css" rel="stylesheet"
        type="text/css" media="all" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"
        type="text/javascript"></script>


    <link href="https://fonts.cdnfonts.com/css/euclid-circular-a" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/brands.min.css"
        integrity="sha512-W/zrbCncQnky/EzL+/AYwTtosvrM+YG/V6piQLSe2HuKS6cmbw89kjYkp3tWFn1dkWV7L1ruvJyKbLz73Vlgfg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>


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

<body>
    <!-- Top Header Message (Fiverr) -->
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
                            <img src="img/Scriptriz black.png" alt="Main Logo">
                        </a>
                    </div>
                    <div class="top-header-nav">
                        <ul>
                            <li><a href="#">Code Hub</a></li>
                            <li>
                                <a href="#">Tutorials
                                    <div class="top-header-dropdown-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-caret-down-fill" viewBox="0 0 16 16">
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


    <!-- Header & Navbar -->
    <section>
        <div id="header" class="navbar-slider-section">
            <div class="navbar-slider-width stickynav">
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
                    <li><a href="#">&#128515;</a></li>
                </ul>
            </div>
        </div>
    </section>
    <script>


        $('.nav-slider').slick({
            infinite: true,
            slidesToShow: 4,
            slidesToScroll: 1,
            speed: 300,
            variableWidth: true
        });


    </script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src="js/navscript.js"></script>
    <script src="js/sticky.js"></script>

    <section>
        <div class="container">
            <div class="section-home-banner">

                <div class="banner-flex-box">
                    <div class="home-banner-content">
                        <div class="home-banner-content-first">
                            <div class="home-banner-content-main-heading">
                                <h1>Learn programming<br>for Free</h1>
                            </div>
                            <div class="home-banner-content-main-para">
                                <p>Explore your artistic side through our diverse art classes and workshops. Dive into
                                    the world of colors, shapes, and imagination with our experienced instructors.</p>

                            </div>
                        </div>
                        <div class="banner-newsletter">
                            <div class="newsletter-heading">
                                <h4>Get the latest tutorials and updates</h4>
                            </div>
                            <div class="newsletter-input-field">
                                <input type="text" placeholder="Enter your email">
                                <button type="submit">Subscribe</button>
                            </div>
                        </div>

                    </div>
                    <div class="home-banner-content-image">
                        <img src="img/typing-cuate.svg" alt="Get the latest tutorials and updates">
                    </div>

                </div>

            </div>
        </div>

    </section>

    <section>
        <div class="container">
            <div class="tutorial-boxes-section">
                <div class="tutorial-boxes-heading">
                    <h2>Latest Tutorial </h2>
                </div>
                <div class="service-box-1 nav-slider">

                    <div class="service">
                        <div class="flip-box">
                            <div class="flip-box-inner">
                                <div class="flip-box-front">

                                    <h4>HTML</h4>
                                    <i class="fa fa-chevron-right"></i>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="service">
                        <div class="flip-box">
                            <div class="flip-box-inner">
                                <div class="flip-box-front">

                                    <h4>CSS</h4>
                                    <i class="fa fa-chevron-right"></i>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="service">
                        <div class="flip-box">
                            <div class="flip-box-inner">
                                <div class="flip-box-front">

                                    <h4>JavaScript</h4>
                                    <i class="fa fa-chevron-right"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="service">
                        <div class="flip-box">
                            <div class="flip-box-inner">
                                <div class="flip-box-front">

                                    <h4>React.js</h4>
                                    <i class="fa fa-chevron-right"></i>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="service">
                        <div class="flip-box">
                            <div class="flip-box-inner">
                                <div class="flip-box-front">

                                    <h4>Node.js</h4>
                                    <i class="fa fa-chevron-right"></i>
                                </div>

                            </div>
                        </div>
                    </div>


                    <div class="service">
                        <div class="flip-box">
                            <div class="flip-box-inner">
                                <div class="flip-box-front">

                                    <h4>Vue.js</h4>
                                    <i class="fa fa-chevron-right"></i>
                                </div>

                            </div>
                        </div>
                    </div>


                    <div class="service">
                        <div class="flip-box">
                            <div class="flip-box-inner">
                                <div class="flip-box-front">

                                    <h4>Bootstrap</h4>
                                    <i class="fa fa-chevron-right"></i>
                                </div>

                            </div>
                        </div>
                    </div>


                    <div class="service">
                        <div class="flip-box">
                            <div class="flip-box-inner">
                                <div class="flip-box-front">

                                    <h4>jQuery</h4>
                                    <i class="fa fa-chevron-right"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="service">
                        <div class="flip-box">
                            <div class="flip-box-inner">
                                <div class="flip-box-front">

                                    <h4>SASS</h4>
                                    <i class="fa fa-chevron-right"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="service">
                        <div class="flip-box">
                            <div class="flip-box-inner">
                                <div class="flip-box-front">

                                    <h4>Angular</h4>
                                    <i class="fa fa-chevron-right"></i>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="service">
                        <div class="flip-box">
                            <div class="flip-box-inner">
                                <div class="flip-box-front">

                                    <h4>php</h4>
                                    <i class="fa fa-chevron-right"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="service">
                        <div class="flip-box">
                            <div class="flip-box-inner">
                                <div class="flip-box-front">

                                    <h4>SQL</h4>
                                    <i class="fa fa-chevron-right"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="service">
                        <div class="flip-box">
                            <div class="flip-box-inner">
                                <div class="flip-box-front">
                                    <h4>DBMS</h4>
                                    <i class="fa fa-chevron-right"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="service">
                        <div class="flip-box">
                            <div class="flip-box-inner">
                                <div class="flip-box-front">

                                    <h4>C</h4>
                                    <i class="fa fa-chevron-right"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="service">
                        <div class="flip-box">
                            <div class="flip-box-inner">
                                <div class="flip-box-front">

                                    <h4>C++</h4>
                                    <i class="fa fa-chevron-right"></i>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="service">
                        <div class="flip-box">
                            <div class="flip-box-inner">
                                <div class="flip-box-front">

                                    <h4>Python</h4>
                                    <i class="fa fa-chevron-right"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="service">
                        <div class="flip-box">
                            <div class="flip-box-inner">
                                <div class="flip-box-front">

                                    <h4>Java</h4>
                                    <i class="fa fa-chevron-right"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="service">
                        <div class="flip-box">
                            <div class="flip-box-inner">
                                <div class="flip-box-front">

                                    <h4>Swift</h4>
                                    <i class="fa fa-chevron-right"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="service">
                        <div class="flip-box">
                            <div class="flip-box-inner">
                                <div class="flip-box-front">

                                    <h4>Kotlin</h4>
                                    <i class="fa fa-chevron-right"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="service">
                        <div class="flip-box">
                            <div class="flip-box-inner">
                                <div class="flip-box-front">

                                    <h4>MongoDB</h4>
                                    <i class="fa fa-chevron-right"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="submit-button">
                  
                        <a id="loadMorebtn" href="#">View All</a>
                  
                </div>

                </div>
            </div>
        </div>
    </section>
    <script>
  $(document).ready(function () {
    var $services = $(".service");
    var showCount = 8;
    var increment = 20;

    function updateVisibility() {
      $services.slice(0, showCount).show();

      var hiddenServices = $services.filter(":hidden");

      if (hiddenServices.length > 0) {
        hiddenServices.slice(0, increment).slideDown();
        $("#loadMorebtn").text("View Less").addClass("noContent");
      } else {
        $services.slice(showCount).slideUp();
        $("#loadMorebtn").text("View All").removeClass("noContent");
      }
    }

    // Initial visibility update
    updateVisibility();

    // Click event for the "Load More" button
    $("#loadMorebtn").on("click", function (e) {
      e.preventDefault();
      updateVisibility();
    });

    // Check window width on resize
    $(window).resize(function () {
      if ($(window).width() > 639) {
        // Reset to initial state if the width is greater than 639px
        $services.show();
        $("#loadMorebtn").text("Load More").removeClass("noContent");
      } else {
        // Update visibility if the width is less than or equal to 639px
        updateVisibility();
      }
    });
  });
</script>



    <section>
        <div class="container">
            <div class="source-code-tutorials-section">
                <div class="source-code-main-headbtn">
                    <div class="h2-heading">
                        <h2>CSS Tutorials</h2>
                    </div>

                </div>
                <div class="source-code-flex-box">
                    <?php include 'fetch_data.php'; ?>
                    <?php $count = 0;
                    foreach ($images as $image) { ?>
                        <div class="source-code-box">
                            <div class="source-image-container">
                                <img src="data:image/jpeg;base64, <?= base64_encode($image['image_data']) ?>"
                                    alt="<?= $image['image_name'] ?>">
                            </div>
                            <div class="source-title-date-container">
                                <div class="source-title-content">
                                    <h4>
                                        <a href="<?= $image['pagelink'] ?>">
                                            <?= $image['title'] ?>
                                        </a>
                                    </h4>

                                </div>
                                <div class="source-date-data">
                                    <p>Date:
                                        <?= $image['date'] ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <?php $count++; ?>
                        <?php if ($count >= 9) {
                            break; // Only display the most recent content
                        } ?>
                    <?php } ?>
                </div>
                <div class="view-all-button">
                    <button>
                        <a href="#">View All</a>
                    </button>
                </div>
            </div>
        </div>
    </section>


    <footer>
        <div class="main-footer-section">
            <div class="ft-container">
                <div class="footer-logo">
                    <img src="img/Scriptriz white.png" alt="Main Logo">
                </div>
                <div class="footer-menu">
                    <h3>About Us</h3>
                    <p>CodingNepal is a blog dedicated to providing valuable and informative content about web
                        development
                        technologies such as HTML, CSS, JavaScript, and PHP <a href="#">Read More...</a></p>
                </div>
                <div class="follow-us footer-menu">
                    <h3>Follow Us</h3>
                    <ul>
                        <li><a href=""> <i class="fa-brands fa-instagram"></i></a></li>
                        <li><a href=""> <i class="fa-brands fa-youtube"></i></a></li>
                        <li><a href=""> <i class="fa-brands fa-linkedin"></i></a></li>
                        <li><a href=""> <i class="fa-brands fa-twitter"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

</body>

</html>
<style>

</style>