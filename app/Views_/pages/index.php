<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <link href="<?= base_url('assets/new/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" />
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/new/css/swiper-bundle.min.css'); ?>" />
    <link rel="stylesheet" href="<?= base_url('assets/new/css/style.css'); ?>">
<style type="text/css">
    .dropdown-hover {
    position: relative;
    display: inline-block;
}


.dropdown-menu {
    display: none;
    position: absolute;
    top: 100%;
    left: 0;
    border-radius: 0px 0px 5px 5px;
    min-width: 160px;
    background-color: #ffffff;
    border: 1px solid #fff;
    z-index: 1000;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}


.dropdown-hover:hover .dropdown-menu {
    display: block;
}


.dropdown-menu a {
    display: block;
    padding: 7px 15px;
    color: #2B466A;
    text-decoration: none;
}

.dropdown-menu a:hover {
    background-color: #2B466A;
    color: white;
}
</style>
</head>

<body>

    <header class="">
        <div class="header-top-bar">
            <div class="container">
                <div class="header-top-bar-content text-center">
                    <h4>CGCRC is a growing global hub for risk and compliance professionals. </h4>
                </div>
            </div>
        </div>
        <div class="header-bottombg-white shadow">
            <div class="container">
                <div class="nav-postion">
                    <div class="navbar-wrapper rounded "> 

                        <!-- Primary Menu Start -->
                        <div class="nav-wrapper">
                            <nav class="primary-menu" style="display: block;">
                                <ul class="menu">
                                    <li><a href="#">Knowledge Hub</a></li>
                                    <li><a href="#">Certifications</a></li>
                                    <li><a href="#">Membership</a></li>
                                    <li><a href="#">Events</a></li>
                                </ul>
                            </nav> 
                        </div>
                        <!-- Primary Menu End -->

                        <!-- Icon Nav Start -->
                        <div class="icon-nav position-relative">
                            <?php // echo authCheck(); die; ?>
                        	<?php if (authCheck()): ?>
                            <div class="header-btn">
                                <div class="dropdown-hover">
                                    <a href="#" class="btn btn-outline-dark">
                                        <i class="fa-solid fa-arrow-right-to-bracket me-2"></i>Login
                                    </a>
                                    <div class="dropdown-menu">
                                        <a href="#">Admin Login</a>
                                        <a href="#">User Login</a>
                                    </div>
                                </div>

                                <a href="#" class="btn btn-mobile-nav">
                                    <i class="fa-regular fa-user me-2"></i>Register
                                </a>
                            </div>

                        <?php else: ?>
                        	<div class="header-btn">
                                <a href="#" class="btn btn-outline-dark" data-bs-toggle="modal" data-bs-target="#modalLogin">
                                	<i class="fa-solid fa-arrow-right-to-bracket me-2"></i>Login 2
                                </a>

                                <a href="<?= generateURL('register'); ?>" class="btn btn-mobile-nav">
                                	<i class="fa-regular fa-user me-2"></i>Register
                                </a> 
                            </div>
                        <?php endif; ?>
                            <div class="search-btn">
                                <a href="#" class="btn btn-outline-dark main-search">
                                    <i class="fa-solid fa-magnifying-glass"></i>
                                </a>
                                <div class="search-option" style="display: none;">
                                    <div class="d-flex">
                                        <input type="text" placeholder="Search...">
                                        <button class="button" type="submit"><i class="fa fa-search"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="nav-icon mobile-menu-icon">
                                <a href="#" class="btn" id="mbmenu-trigger">
                                    <i class="fas fa-bars"></i>
                                </a>
                            </div>

                        </div>
                        <!-- Icon Nav End -->
                    </div>
                    <div class="mobile-menu-main" id="mbmenu">
                        <nav class="mean-nav">
                            <ul class="menu">
                                <li><a href="#">Knowledge Hub</a></li>
                                <li><a href="#">Certifications</a></li>
                                <li><a href="#">Membership</a></li>
                                <li><a href="#">Events</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

    </header>

    <section class="home-banner-section-wrap">
        <div class="container">
            <div class="home-banner-slider-wrap">
                <!-- Swiper -->
                <div class="swiper home-banner-slider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide home-banner-item">
                            <img src="<?= base_url('assets/new'); ?>/images/slider-1.074f49a0.jpg" alt="" class="w-100">
                        </div>
                        <div class="swiper-slide home-banner-item">
                            <img src="<?= base_url('assets/new'); ?>/images/slider-1.074f49a0.jpg" alt="" class="w-100">
                        </div>
                    </div>
                    <!-- Navigation buttons -->
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>

            </div>
        </div>
    </section>



    <section class="cgcrc-content-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="cgcrc-content">
                        <h2 class="section-title">Welcome to CGCRC</h2>
                        <p>CGCRC is a growing global hub for risk and compliance professionals. We’re building a vibrant
                            community dedicated to advancing expertise, fostering collaboration, and fighting financial
                            crime. Through trusted content, practical tools, and future-ready certifications, we empower
                            you
                            to lead with confidence in a complex world.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="news-section">
        <div class="container">
            <div class="row">
                <div class="col-md-4 nwes-wrap">
                    <div class="news-title-head">

                        <h2>Latest News</h2>
                    </div>
                    <div class="post-widget-item">
                        <ul class="dtq-post-list-parent">

                            <li class="dtq-post-list-child"><a class="dtq-post-list-child-inner" href="#">
                                    <div class="dtq-post-list-thumb">
                                        <img class="dtq-img-cover" decoding="async"
                                            src="<?= base_url('assets/new'); ?>/images/canada-fintrac-transactions-iran-sanctions.png">
                                    </div>
                                    <div class="dtq-post-list-content">
                                        <h3 class="dtq-post-list-title">Lorem ipsum dolor sit amet consectetur
                                            adipisicing elit.</h3>
                                        <div class="dtq-post-list-meta">
                                            <div class="dtq-post-list-date"> Jul 16, 2025 </div>
                                        </div>

                                    </div>
                                    <div>
                                        <p class="dtq-post-list-excerpt">Lorem ipsum dolor sit amet consectetur,
                                            adipisicing elit. Quas nobis aut harum voluptas perferendis,.</p>
                                    </div>
                                </a>
                            </li>
                            <li class="dtq-post-list-child"><a class="dtq-post-list-child-inner" href="#">
                                    <div class="dtq-post-list-thumb">
                                        <img class="dtq-img-cover" decoding="async"
                                            src="<?= base_url('assets/new'); ?>/images/canada-fintrac-transactions-iran-sanctions.png">
                                    </div>
                                    <div class="dtq-post-list-content">
                                        <h3 class="dtq-post-list-title">Lorem ipsum dolor sit amet consectetur
                                            adipisicing elit.</h3>
                                        <div class="dtq-post-list-meta">
                                            <div class="dtq-post-list-date"> Jul 16, 2025 </div>
                                        </div>

                                    </div>
                                    <div>
                                        <p class="dtq-post-list-excerpt">Lorem ipsum dolor sit amet consectetur,
                                            adipisicing elit. Quas nobis aut harum voluptas perferendis,.</p>
                                    </div>
                                </a>
                            </li>
                            <li class="dtq-post-list-child"><a class="dtq-post-list-child-inner" href="#">
                                    <div class="dtq-post-list-thumb">
                                        <img class="dtq-img-cover" decoding="async"
                                            src="<?= base_url('assets/new'); ?>/images/canada-fintrac-transactions-iran-sanctions.png">
                                    </div>
                                    <div class="dtq-post-list-content">
                                        <h3 class="dtq-post-list-title">Lorem ipsum dolor sit amet consectetur
                                            adipisicing elit.</h3>
                                        <div class="dtq-post-list-meta">
                                            <div class="dtq-post-list-date"> Jul 16, 2025 </div>
                                        </div>

                                    </div>
                                    <div>
                                        <p class="dtq-post-list-excerpt">Lorem ipsum dolor sit amet consectetur,
                                            adipisicing elit. Quas nobis aut harum voluptas perferendis,.</p>
                                    </div>
                                </a>
                            </li>
                            <li class="dtq-post-list-child"><a class="dtq-post-list-child-inner" href="#">
                                    <div class="dtq-post-list-thumb">
                                        <img class="dtq-img-cover" decoding="async"
                                            src="<?= base_url('assets/new'); ?>/images/canada-fintrac-transactions-iran-sanctions.png">
                                    </div>
                                    <div class="dtq-post-list-content">
                                        <h3 class="dtq-post-list-title">Lorem ipsum dolor sit amet consectetur
                                            adipisicing elit.</h3>
                                        <div class="dtq-post-list-meta">
                                            <div class="dtq-post-list-date"> Jul 16, 2025 </div>
                                        </div>

                                    </div>
                                    <div>
                                        <p class="dtq-post-list-excerpt">Lorem ipsum dolor sit amet consectetur,
                                            adipisicing elit. Quas nobis aut harum voluptas perferendis,.</p>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>

                </div>
                <div class="col-md-4 nwes-wrap">
                    <div class="news-title-head">

                        <h2> Upcoming Events</h2>
                    </div>
                    <div class="post-widget-item">
                        <ul class="dtq-post-list-parent">

                            <li class="dtq-post-list-child"><a class="dtq-post-list-child-inner" href="#">
                                    <div class="dtq-post-list-thumb">
                                        <img class="dtq-img-cover" decoding="async"
                                            src="<?= base_url('assets/new'); ?>/images/canada-fintrac-transactions-iran-sanctions.png">
                                    </div>
                                    <div class="dtq-post-list-content">
                                        <h3 class="dtq-post-list-title">Lorem ipsum dolor sit amet consectetur
                                            adipisicing elit.</h3>
                                        <div class="dtq-post-list-meta">
                                            <div class="dtq-post-list-date"> Jul 16, 2025 </div>
                                        </div>

                                    </div>
                                    <div>
                                        <p class="dtq-post-list-excerpt">Lorem ipsum dolor sit amet consectetur,
                                            adipisicing elit. Quas nobis aut harum voluptas perferendis,.</p>
                                    </div>
                                </a>
                            </li>
                            <li class="dtq-post-list-child"><a class="dtq-post-list-child-inner" href="#">
                                    <div class="dtq-post-list-thumb">
                                        <img class="dtq-img-cover" decoding="async"
                                            src="<?= base_url('assets/new'); ?>/images/canada-fintrac-transactions-iran-sanctions.png">
                                    </div>
                                    <div class="dtq-post-list-content">
                                        <h3 class="dtq-post-list-title">Lorem ipsum dolor sit amet consectetur
                                            adipisicing elit.</h3>
                                        <div class="dtq-post-list-meta">
                                            <div class="dtq-post-list-date"> Jul 16, 2025 </div>
                                        </div>

                                    </div>
                                    <div>
                                        <p class="dtq-post-list-excerpt">Lorem ipsum dolor sit amet consectetur,
                                            adipisicing elit. Quas nobis aut harum voluptas perferendis,.</p>
                                    </div>
                                </a>
                            </li>
                            <li class="dtq-post-list-child"><a class="dtq-post-list-child-inner" href="#">
                                    <div class="dtq-post-list-thumb">
                                        <img class="dtq-img-cover" decoding="async"
                                            src="<?= base_url('assets/new'); ?>/images/canada-fintrac-transactions-iran-sanctions.png">
                                    </div>
                                    <div class="dtq-post-list-content">
                                        <h3 class="dtq-post-list-title">Lorem ipsum dolor sit amet consectetur
                                            adipisicing elit.</h3>
                                        <div class="dtq-post-list-meta">
                                            <div class="dtq-post-list-date"> Jul 16, 2025 </div>
                                        </div>

                                    </div>
                                    <div>
                                        <p class="dtq-post-list-excerpt">Lorem ipsum dolor sit amet consectetur,
                                            adipisicing elit. Quas nobis aut harum voluptas perferendis,.</p>
                                    </div>
                                </a>
                            </li>
                            <li class="dtq-post-list-child"><a class="dtq-post-list-child-inner" href="#">
                                    <div class="dtq-post-list-thumb">
                                        <img class="dtq-img-cover" decoding="async"
                                            src="<?= base_url('assets/new'); ?>/images/canada-fintrac-transactions-iran-sanctions.png">
                                    </div>
                                    <div class="dtq-post-list-content">
                                        <h3 class="dtq-post-list-title">Lorem ipsum dolor sit amet consectetur
                                            adipisicing elit.</h3>
                                        <div class="dtq-post-list-meta">
                                            <div class="dtq-post-list-date"> Jul 16, 2025 </div>
                                        </div>

                                    </div>
                                    <div>
                                        <p class="dtq-post-list-excerpt">Lorem ipsum dolor sit amet consectetur,
                                            adipisicing elit. Quas nobis aut harum voluptas perferendis,.</p>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>

                </div>
                <div class="col-md-4 nwes-wrap">
                    <div class="news-title-head">

                        <h2>Notifications</h2>
                    </div>
                    <div class="post-widget-item">
                        <ul class="dtq-post-list-parent">

                            <li class="dtq-post-list-child"><a class="dtq-post-list-child-inner" href="#">
                                    <div class="dtq-post-list-thumb">
                                        <img class="dtq-img-cover" decoding="async"
                                            src="<?= base_url('assets/new'); ?>/images/canada-fintrac-transactions-iran-sanctions.png">
                                    </div>
                                    <div class="dtq-post-list-content">
                                        <h3 class="dtq-post-list-title">Lorem ipsum dolor sit amet consectetur
                                            adipisicing elit.</h3>
                                        <div class="dtq-post-list-meta">
                                            <div class="dtq-post-list-date"> Jul 16, 2025 </div>
                                        </div>

                                    </div>
                                    <div>
                                        <p class="dtq-post-list-excerpt">Lorem ipsum dolor sit amet consectetur,
                                            adipisicing elit. Quas nobis aut harum voluptas perferendis,.</p>
                                    </div>
                                </a>
                            </li>
                            <li class="dtq-post-list-child"><a class="dtq-post-list-child-inner" href="#">
                                    <div class="dtq-post-list-thumb">
                                        <img class="dtq-img-cover" decoding="async"
                                            src="<?= base_url('assets/new'); ?>/images/canada-fintrac-transactions-iran-sanctions.png">
                                    </div>
                                    <div class="dtq-post-list-content">
                                        <h3 class="dtq-post-list-title">Lorem ipsum dolor sit amet consectetur
                                            adipisicing elit.</h3>
                                        <div class="dtq-post-list-meta">
                                            <div class="dtq-post-list-date"> Jul 16, 2025 </div>
                                        </div>

                                    </div>
                                    <div>
                                        <p class="dtq-post-list-excerpt">Lorem ipsum dolor sit amet consectetur,
                                            adipisicing elit. Quas nobis aut harum voluptas perferendis,.</p>
                                    </div>
                                </a>
                            </li>
                            <li class="dtq-post-list-child"><a class="dtq-post-list-child-inner" href="#">
                                    <div class="dtq-post-list-thumb">
                                        <img class="dtq-img-cover" decoding="async"
                                            src="<?= base_url('assets/new'); ?>/images/canada-fintrac-transactions-iran-sanctions.png">
                                    </div>
                                    <div class="dtq-post-list-content">
                                        <h3 class="dtq-post-list-title">Lorem ipsum dolor sit amet consectetur
                                            adipisicing elit.</h3>
                                        <div class="dtq-post-list-meta">
                                            <div class="dtq-post-list-date"> Jul 16, 2025 </div>
                                        </div>

                                    </div>
                                    <div>
                                        <p class="dtq-post-list-excerpt">Lorem ipsum dolor sit amet consectetur,
                                            adipisicing elit. Quas nobis aut harum voluptas perferendis,.</p>
                                    </div>
                                </a>
                            </li>
                            <li class="dtq-post-list-child"><a class="dtq-post-list-child-inner" href="#">
                                    <div class="dtq-post-list-thumb">
                                        <img class="dtq-img-cover" decoding="async"
                                            src="<?= base_url('assets/new'); ?>/images/canada-fintrac-transactions-iran-sanctions.png">
                                    </div>
                                    <div class="dtq-post-list-content">
                                        <h3 class="dtq-post-list-title">Lorem ipsum dolor sit amet consectetur
                                            adipisicing elit.</h3>
                                        <div class="dtq-post-list-meta">
                                            <div class="dtq-post-list-date"> Jul 16, 2025 </div>
                                        </div>

                                    </div>
                                    <div>
                                        <p class="dtq-post-list-excerpt">Lorem ipsum dolor sit amet consectetur,
                                            adipisicing elit. Quas nobis aut harum voluptas perferendis,.</p>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </section> 
    <footer class="footer">
        <div class="footer-logo">
            <a href="#"><img src="<?= base_url('assets/new'); ?>/images/risk-logo-1-footer-r.png" alt="Footer Logo" width="150" height="150"></a>
        </div>

        <div class="footer-content">
            <div class="newsletter">
                <h3>Subscribe to Our Newsletter</h3>
                <form action="#" method="post">
                    <input type="email" placeholder="Enter your email" required>
                    <button type="submit">Subscribe</button>
                </form>
                <div class="privacy-content-main">
                <div class="privacy">
                    <a href="#">Privacy Policy</a>
                </div>

                <!-- <div class="auth-links">
                    <a href="#">Login</a> | <a href="#">Register</a>
                </div> -->
                </div>
            </div>


        </div>

        <div class="footer-bottom"></div>
    </footer>
 


    <script src="<?= base_url('assets/new/js/jquery-3.6.0.min.js'); ?>"></script>
    <!-- Swiper JS -->
    <script src="<?= base_url('assets/new/js/swiper-bundle.min.js'); ?>"></script>
    <script src="<?= base_url('assets/new/js/bootstrap.bundle.min.js'); ?>"></script>

    <script>
        $('.search-option').hide();
        $(".main-search").on('click', function () {
            $('.search-option').animate({
                height: 'toggle',
            });
        });
    </script>
    <script>
        const bannerSwiper = new Swiper('.home-banner-slider', {
            loop: true,
            autoplay: {
                delay: 6000,
                disableOnInteraction: false,
            },
            //   pagination: {
            //       el: '.swiper-pagination',
            //      clickable: true,
            //   },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            // speed: 600,
            effect: 'slide' // You can also try 'fade'
        });
    </script>
    <script>
        const swiper = new Swiper('.et-slider', {
            loop: true,
            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            speed: 700,
            effect: 'slide' // You can also use 'fade'
        });
    </script>
    <script>
        $(document).ready(function () {
            $("#mbmenu-trigger").click(function () {
                $("#mbmenu").slideToggle("slow");
            });
        });
    </script>

</body>

</html>