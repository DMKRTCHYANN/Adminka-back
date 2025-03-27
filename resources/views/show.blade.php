<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <title>Invest Armenia</title>
    <link rel="shortcut icon" href="../img/favicon.png"/>
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css2?family=Libre+Caslon+Display&family=Outfit:wght@300;400&display=swap">
    <link rel="stylesheet" href="../css/plugins.css"/>
    <link rel="stylesheet" href="../css/style.css?14"/>
</head>
<body>

<!-- Preloader -->
<div class="preloader-bg"></div>
<div id="preloader">
    <div id="preloader-status">
        <div class="preloader-position loader"><span></span></div>
    </div>
</div>
<!-- Progress scroll totop -->
<div class="progress-wrap cursor-pointer">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"/>
    </svg>
</div>
<!-- Navbar -->
<nav class="navbar navbar-expand-lg">
    <div class="container">
        <!-- Logo -->
        <div class="logo-wrapper">
            <!--                <a class="logo" href="/"><h1 style="font-weight: 400; font-size: 20px; font-family: 'system-ui';margin-bottom: 0;">INVEST ARMENIA</h1></a>-->
            <a class="logo" href="/"><img src="../img/logoo.svg?3" class="logo" style="max-width: 170px; width: 100%"/></a>
        </div>
        <!-- Button -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar"
                aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation"><span
                class="navbar-toggler-icon"><i class="ti-menu"></i></span></button>
        <!-- Menu -->
        <div class="collapse navbar-collapse" id="navbar">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="/">Главная страница</a></li>
                <li class="nav-item"><a class="nav-link" href="../contact">Обратная Связь</a></li>
            </ul>
        </div>
    </div>
</nav>
<!-- Slider -->
<header class="header slider">
    <div class="owl-carousel owl-theme">
        @foreach($images as $image)
            <div class="text-center item bg-img" data-overlay-dark="4"
                 data-background="{{ url('storage/' . $image->image) }}">
            </div>
        @endforeach
    </div>
    <!-- button scroll -->
    <a href="#" data-scroll-nav="1" class="mouse smoothscroll"> <span class="mouse-icon">
                <span class="mouse-wheel"></span> </span>
    </a>
</header>
<!-- Content -->
<section class="restaurant-page  section-padding" data-scroll-index="1">
    <div class="container">
        <div class="row mb-30">
            <div class="col-md-12">
                <div class="section-title">{{ strip_tags($building->title) }} </div>
                {!! $building->long_description !!}
            </div>
        </div>
    </div>
</section>

<!-- Restaurant Menu -->
<!--    <section class="section-padding menu faq-1">-->
<!--        <div class="container">-->
<!--            <div class="row">-->
<!--                <div class="col-md-3">-->
<!--                    <h3 class="sub-title border-bot-dark">Yummy Flavors</h3>-->
<!--                </div>-->
<!--                <div class="col-md-9">-->
<!--                    <div class="section-title whte"><span>Restaurant Menu</span></div>-->
<!--                    <p class="mb-30">Aenean sed arcu efficitur, commodo justo ut, accumsan massa vivamus ac risus in felis imperdiet mollis id sit amet odio miss vestibulum dignissim finibus diam a commodo nulla quis miss duru rana egestas ipsum.</p>-->
<!--                    <div class="row menu-book">-->
<!--                        <div class="col-md-12">-->
<!--                            <ul class="accordion-menu clearfix">-->
<!--                                <li class="accordion block">-->
<!--                                    <div class="acc-btn">Starters</div>-->
<!--                                    <div class="acc-content">-->
<!--                                        <div class="content">-->
<!--                                            <div class="row">-->
<!--                                                <div class="col-lg-6 col-md-12">-->
<!--                                                    <div class="menu-list mb-30">-->
<!--                                                        <div class="item">-->
<!--                                                            <div class="img">-->
<!--                                                                <a href="img/menu/starters/1.jpg" class="image-popup-vertical-fit" title="Mozzarella Dippers"><img src="img/menu/starters/1.jpg" alt="" title=""> </a>-->
<!--                                                            </div>-->
<!--                                                            <div class="flex">-->
<!--                                                                <div class="title">Mozzarella Dippers</div>-->
<!--                                                                <div class="dots"></div>-->
<!--                                                                <div class="price">$27.00</div>-->
<!--                                                            </div>-->
<!--                                                            <p><i>Fried mozzarella sticks, marinara sauce</i></p>-->
<!--                                                        </div>-->
<!--                                                    </div>-->
<!--                                                    <div class="menu-list">-->
<!--                                                        <div class="item">-->
<!--                                                            <div class="img">-->
<!--                                                                <a href="img/menu/starters/2.jpg" class="image-popup-vertical-fit" title="Buffalo Wings"><img src="img/menu/starters/2.jpg" alt="" title=""> </a>-->
<!--                                                            </div>-->
<!--                                                            <div class="flex">-->
<!--                                                                <div class="title">Buffalo Wings</div>-->
<!--                                                                <div class="dots"></div>-->
<!--                                                                <div class="price">$30.50</div>-->
<!--                                                            </div>-->
<!--                                                            <p><i>Spicy chicken wings, blue cheese sauce</i></p>-->
<!--                                                        </div>-->
<!--                                                    </div>-->
<!--                                                </div>-->
<!--                                                <div class="col-lg-6 col-md-12">-->
<!--                                                    <div class="menu-list mb-30">-->
<!--                                                        <div class="item">-->
<!--                                                            <div class="img">-->
<!--                                                                <a href="img/menu/starters/3.jpg" class="image-popup-vertical-fit" title="Onion Rings"><img src="img/menu/starters/3.jpg" alt="" title=""> </a>-->
<!--                                                            </div>-->
<!--                                                            <div class="flex">-->
<!--                                                                <div class="title">Onion Rings</div>-->
<!--                                                                <div class="dots"></div>-->
<!--                                                                <div class="price">$15.00</div>-->
<!--                                                            </div>-->
<!--                                                            <p><i>Fried onion rings, smoked aioli</i></p>-->
<!--                                                        </div>-->
<!--                                                    </div>-->
<!--                                                    <div class="menu-list">-->
<!--                                                        <div class="item">-->
<!--                                                            <div class="img">-->
<!--                                                                <a href="img/menu/starters/4.jpg" class="image-popup-vertical-fit" title="Chilli Con Carne"><img src="img/menu/starters/4.jpg" alt="" title=""> </a>-->
<!--                                                            </div>-->
<!--                                                            <div class="flex">-->
<!--                                                                <div class="title">Chilli Con Carne</div>-->
<!--                                                                <div class="dots"></div>-->
<!--                                                                <div class="price">$20.00</div>-->
<!--                                                            </div>-->
<!--                                                            <p><i>Spicy ground beef, kidney beans</i></p>-->
<!--                                                        </div>-->
<!--                                                    </div>-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </li>-->
<!--                                <li class="accordion block">-->
<!--                                    <div class="acc-btn">Main Courses</div>-->
<!--                                    <div class="acc-content">-->
<!--                                        <div class="content">-->
<!--                                            <div class="row">-->
<!--                                                <div class="col-lg-6 col-md-12">-->
<!--                                                    <div class="menu-list mb-30">-->
<!--                                                        <div class="item">-->
<!--                                                            <div class="img">-->
<!--                                                                <a href="img/menu/mains/1.jpg" class="image-popup-vertical-fit" title="Rusty’s Burger"><img src="img/menu/mains/1.jpg" alt="" title=""> </a>-->
<!--                                                            </div>-->
<!--                                                            <div class="flex">-->
<!--                                                                <div class="title">Rusty’s Burger</div>-->
<!--                                                                <div class="dots"></div>-->
<!--                                                                <div class="price">$35.00</div>-->
<!--                                                            </div>-->
<!--                                                            <p><i>Smoked pulled beef ribs, cheddar</i></p>-->
<!--                                                        </div>-->
<!--                                                    </div>-->
<!--                                                    <div class="menu-list">-->
<!--                                                        <div class="item">-->
<!--                                                            <div class="img">-->
<!--                                                                <a href="img/menu/mains/2.jpg" class="image-popup-vertical-fit" title="Cajun Fish Steak"><img src="img/menu/mains/2.jpg" alt="" title=""> </a>-->
<!--                                                            </div>-->
<!--                                                            <div class="flex">-->
<!--                                                                <div class="title">Cajun Fish Steak</div>-->
<!--                                                                <div class="dots"></div>-->
<!--                                                                <div class="price">$30.00</div>-->
<!--                                                            </div>-->
<!--                                                            <p><i>Cajun spicied seabass, deep potatoes</i></p>-->
<!--                                                        </div>-->
<!--                                                    </div>-->
<!--                                                </div>-->
<!--                                                <div class="col-lg-6 col-md-12">-->
<!--                                                    <div class="menu-list mb-30">-->
<!--                                                        <div class="item">-->
<!--                                                            <div class="img">-->
<!--                                                                <a href="img/menu/mains/3.jpg" class="image-popup-vertical-fit" title="Southern Fried Chicken"><img src="img/menu/mains/3.jpg" alt="" title=""> </a>-->
<!--                                                            </div>-->
<!--                                                            <div class="flex">-->
<!--                                                                <div class="title">Southern Fried Chicken</div>-->
<!--                                                                <div class="dots"></div>-->
<!--                                                                <div class="price">$15.10</div>-->
<!--                                                            </div>-->
<!--                                                            <p><i>Cajun coated chicken breast, fries mustard</i></p>-->
<!--                                                        </div>-->
<!--                                                    </div>-->
<!--                                                    <div class="menu-list">-->
<!--                                                        <div class="item">-->
<!--                                                            <div class="img">-->
<!--                                                                <a href="img/menu/mains/4.jpg" class="image-popup-vertical-fit" title="Avocado Tempura"><img src="img/menu/mains/4.jpg" alt="" title=""> </a>-->
<!--                                                            </div>-->
<!--                                                            <div class="flex">-->
<!--                                                                <div class="title">Avocado Tempura</div>-->
<!--                                                                <div class="dots"></div>-->
<!--                                                                <div class="price">$40.00</div>-->
<!--                                                            </div>-->
<!--                                                            <p><i>Sweetcorn kernels, butter, potato</i></p>-->
<!--                                                        </div>-->
<!--                                                    </div>-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </li>-->
<!--                                <li class="accordion block">-->
<!--                                    <div class="acc-btn">Salads</div>-->
<!--                                    <div class="acc-content">-->
<!--                                        <div class="content">-->
<!--                                            <div class="row">-->
<!--                                                <div class="col-lg-6 col-md-12">-->
<!--                                                    <div class="menu-list mb-30">-->
<!--                                                        <div class="item">-->
<!--                                                            <div class="img">-->
<!--                                                                <a href="img/menu/salads/1.jpg" class="image-popup-vertical-fit" title="Ceaser Salad"><img src="img/menu/salads/1.jpg" alt="" title=""> </a>-->
<!--                                                            </div>-->
<!--                                                            <div class="flex">-->
<!--                                                                <div class="title">Ceaser Salad</div>-->
<!--                                                                <div class="dots"></div>-->
<!--                                                                <div class="price">$15.00</div>-->
<!--                                                            </div>-->
<!--                                                            <p><i>Romaine lettuce, croutons, parmigiano</i></p>-->
<!--                                                        </div>-->
<!--                                                    </div>-->
<!--                                                    <div class="menu-list">-->
<!--                                                        <div class="item">-->
<!--                                                            <div class="img">-->
<!--                                                                <a href="img/menu/salads/2.jpg" class="image-popup-vertical-fit" title="Waldorf Salad"><img src="img/menu/salads/2.jpg" alt="" title=""> </a>-->
<!--                                                            </div>-->
<!--                                                            <div class="flex">-->
<!--                                                                <div class="title">Waldorf Salad</div>-->
<!--                                                                <div class="dots"></div>-->
<!--                                                                <div class="price">$10.00</div>-->
<!--                                                            </div>-->
<!--                                                            <p><i>Lettuce, celery, apple, grape, walnut</i></p>-->
<!--                                                        </div>-->
<!--                                                    </div>-->
<!--                                                </div>-->
<!--                                                <div class="col-lg-6 col-md-12">-->
<!--                                                    <div class="menu-list mb-30">-->
<!--                                                        <div class="item">-->
<!--                                                            <div class="img">-->
<!--                                                                <a href="img/menu/salads/3.jpg" class="image-popup-vertical-fit" title="Grilled Salmon Salad"><img src="img/menu/salads/3.jpg" alt="" title=""> </a>-->
<!--                                                            </div>-->
<!--                                                            <div class="flex">-->
<!--                                                                <div class="title">Grilled Salmon Salad</div>-->
<!--                                                                <div class="dots"></div>-->
<!--                                                                <div class="price">$25.00</div>-->
<!--                                                            </div>-->
<!--                                                            <p><i>Grilled salmon, mixed greens, capers</i></p>-->
<!--                                                        </div>-->
<!--                                                    </div>-->
<!--                                                    <div class="menu-list">-->
<!--                                                        <div class="item">-->
<!--                                                            <div class="img">-->
<!--                                                                <a href="img/menu/salads/4.jpg" class="image-popup-vertical-fit" title="Chicken Cobb Salad"><img src="img/menu/salads/4.jpg" alt="" title=""> </a>-->
<!--                                                            </div>-->
<!--                                                            <div class="flex">-->
<!--                                                                <div class="title">Chicken Cobb Salad</div>-->
<!--                                                                <div class="dots"></div>-->
<!--                                                                <div class="price">$30.50</div>-->
<!--                                                            </div>-->
<!--                                                            <p><i>Iceberg lettuce, cherry tomatoes, avocado</i></p>-->
<!--                                                        </div>-->
<!--                                                    </div>-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </li>-->
<!--                                <li class="accordion block">-->
<!--                                    <div class="acc-btn">Desserts</div>-->
<!--                                    <div class="acc-content">-->
<!--                                        <div class="content">-->
<!--                                            <div class="row">-->
<!--                                                <div class="col-lg-6 col-md-12">-->
<!--                                                    <div class="menu-list mb-30">-->
<!--                                                        <div class="item">-->
<!--                                                            <div class="img">-->
<!--                                                                <a href="img/menu/desserts/1.jpg" class="image-popup-vertical-fit" title="New York Cheesecake"><img src="img/menu/desserts/1.jpg" alt="" title=""> </a>-->
<!--                                                            </div>-->
<!--                                                            <div class="flex">-->
<!--                                                                <div class="title">New York Cheesecake</div>-->
<!--                                                                <div class="dots"></div>-->
<!--                                                                <div class="price">$20.00</div>-->
<!--                                                            </div>-->
<!--                                                            <p><i>Cheesecake, strawberry & lime salad</i></p>-->
<!--                                                        </div>-->
<!--                                                    </div>-->
<!--                                                    <div class="menu-list">-->
<!--                                                        <div class="item">-->
<!--                                                            <div class="img">-->
<!--                                                                <a href="img/menu/desserts/2.jpg" class="image-popup-vertical-fit" title="Rusty’s ice-cream"><img src="img/menu/desserts/2.jpg" alt="" title=""> </a>-->
<!--                                                            </div>-->
<!--                                                            <div class="flex">-->
<!--                                                                <div class="title">Rusty’s ice-cream</div>-->
<!--                                                                <div class="dots"></div>-->
<!--                                                                <div class="price">$10.50</div>-->
<!--                                                            </div>-->
<!--                                                            <p><i>Vanilla, bourbon, cookie, ice-cream</i></p>-->
<!--                                                        </div>-->
<!--                                                    </div>-->
<!--                                                </div>-->
<!--                                                <div class="col-lg-6 col-md-12">-->
<!--                                                    <div class="menu-list mb-30">-->
<!--                                                        <div class="item">-->
<!--                                                            <div class="img">-->
<!--                                                                <a href="img/menu/desserts/3.jpg" class="image-popup-vertical-fit" title="Vegan Potato Waffles"><img src="img/menu/desserts/3.jpg" alt="" title=""> </a>-->
<!--                                                            </div>-->
<!--                                                            <div class="flex">-->
<!--                                                                <div class="title">Vegan Potato Waffles</div>-->
<!--                                                                <div class="dots"></div>-->
<!--                                                                <div class="price">$18.00</div>-->
<!--                                                            </div>-->
<!--                                                            <p><i>Chocolate chip cookies, chocolate</i></p>-->
<!--                                                        </div>-->
<!--                                                    </div>-->
<!--                                                    <div class="menu-list">-->
<!--                                                        <div class="item">-->
<!--                                                            <div class="img">-->
<!--                                                                <a href="img/menu/desserts/4.jpg" class="image-popup-vertical-fit" title="Apple & Pear Crumble"><img src="img/menu/desserts/4.jpg" alt="" title=""> </a>-->
<!--                                                            </div>-->
<!--                                                            <div class="flex">-->
<!--                                                                <div class="title">Apple Pear Crumble</div>-->
<!--                                                                <div class="dots"></div>-->
<!--                                                                <div class="price">$40.00</div>-->
<!--                                                            </div>-->
<!--                                                            <p><i>Caramelized pear, vanilla ice-cream</i></p>-->
<!--                                                        </div>-->
<!--                                                    </div>-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </li>-->
<!--                                <li class="accordion block">-->
<!--                                    <div class="acc-btn">Wine</div>-->
<!--                                    <div class="acc-content">-->
<!--                                        <div class="content">-->
<!--                                            <div class="row">-->
<!--                                                <div class="col-lg-6 col-md-12">-->
<!--                                                    <div class="menu-list mb-30">-->
<!--                                                        <div class="item">-->
<!--                                                            <div class="img">-->
<!--                                                                <a href="img/menu/wine/1.jpg" class="image-popup-vertical-fit" title="Riscos Malbec"><img src="img/menu/wine/1.jpg" alt="" title=""> </a>-->
<!--                                                            </div>-->
<!--                                                            <div class="flex">-->
<!--                                                                <div class="title">Riscos Malbec</div>-->
<!--                                                                <div class="dots"></div>-->
<!--                                                                <div class="price">$25.00</div>-->
<!--                                                            </div>-->
<!--                                                            <p><i>Full, Redcurrant, Spice, Chile</i></p>-->
<!--                                                        </div>-->
<!--                                                    </div>-->
<!--                                                    <div class="menu-list">-->
<!--                                                        <div class="item">-->
<!--                                                            <div class="img">-->
<!--                                                                <a href="img/menu/wine/2.jpg" class="image-popup-vertical-fit" title="Dom Perignon"><img src="img/menu/wine/2.jpg" alt="" title=""> </a>-->
<!--                                                            </div>-->
<!--                                                            <div class="flex">-->
<!--                                                                <div class="title">Dom Perignon</div>-->
<!--                                                                <div class="dots"></div>-->
<!--                                                                <div class="price">$30.00</div>-->
<!--                                                            </div>-->
<!--                                                            <p><i>Stylish, Premium, Iconic, Champagne</i></p>-->
<!--                                                        </div>-->
<!--                                                    </div>-->
<!--                                                </div>-->
<!--                                                <div class="col-lg-6 col-md-12">-->
<!--                                                    <div class="menu-list mb-30">-->
<!--                                                        <div class="item">-->
<!--                                                            <div class="img">-->
<!--                                                                <a href="img/menu/wine/3.jpg" class="image-popup-vertical-fit" title="Amarone Classico"><img src="img/menu/wine/3.jpg" alt="" title=""> </a>-->
<!--                                                            </div>-->
<!--                                                            <div class="flex">-->
<!--                                                                <div class="title">Amarone Classico</div>-->
<!--                                                                <div class="dots"></div>-->
<!--                                                                <div class="price">$20.00</div>-->
<!--                                                            </div>-->
<!--                                                            <p><i>Intense, Rich, Spice, Italy</i></p>-->
<!--                                                        </div>-->
<!--                                                    </div>-->
<!--                                                    <div class="menu-list">-->
<!--                                                        <div class="item">-->
<!--                                                            <div class="img">-->
<!--                                                                <a href="img/menu/wine/4.jpg" class="image-popup-vertical-fit" title="Valle Berta Gavi"><img src="img/menu/wine/4.jpg" alt="" title=""> </a>-->
<!--                                                            </div>-->
<!--                                                            <div class="flex">-->
<!--                                                                <div class="title">Valle Berta Gavi</div>-->
<!--                                                                <div class="dots"></div>-->
<!--                                                                <div class="price">$45.00</div>-->
<!--                                                            </div>-->
<!--                                                            <p><i>Clean, Soft, Honeysuckle, Italy</i></p>-->
<!--                                                        </div>-->
<!--                                                    </div>-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </li>-->
<!--                            </ul>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </section>-->
<!--    &lt;!&ndash; Banner Video &ndash;&gt;-->
<!--    <section class="banner-video-wrapper" data-overlay-dark="3">-->
<!--        <video width="100%" height="100%" autoplay="autoplay" muted preload="auto" loop="loop">-->
<!--            <source src="https://duruthemes.com/demo/html/patara/restaurant.mp4" type="video/mp4">-->
<!--        </video>-->
<!--        <div class="wrap-content v-middle">-->
<!--            <div class="container">-->
<!--                <div class="row justify-content-center">-->
<!--                    <div class="col-md-6 text-center">-->
<!--                        <h1>Welcome to Patara Restaurant</h1>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </section>-->
<!-- Footer -->
<!--    <footer class="footer">-->
<!--        <div class="top">-->
<!--            <div class="container">-->
<!--                <div class="row">-->
<!--                    <div class="col-md-3 mb-30">-->
<!--                        <div class="sub-title border-footer-light whte">Contact Us!</div>-->
<!--                    </div>-->
<!--                    <div class="col-md-4 offset-md-1">-->
<!--                        <div class="item">-->
<!--                            <h3>Get in touch</h3>-->
<!--                            <p>1616 Broadway NY, New York 10001-->
<!--                                <br>United States of America.-->
<!--                            </p>-->
<!--                            <p class="phone">+1 203 123 0606</p>-->
<!--                            <p class="mail">info@hotel.com</p>-->
<!--                            <div class="social mt-2"> <a href="index.html"><i class="ti-twitter"></i></a> <a href="index.html"><i class="ti-instagram"></i></a> <a href="index.html"><i class="ti-linkedin"></i></a> </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="col-md-4">-->
<!--                        <div class="item">-->
<!--                            <h3>Rooms & Suites</h3>-->
<!--                            <ul class="footer-explore-list list-unstyled">-->
<!--                                <li><a href="rooms.html">Junior Room</a></li>-->
<!--                                <li><a href="rooms.html">Family Room</a></li>-->
<!--                                <li><a href="rooms.html">Double Room</a></li>-->
<!--                                <li><a href="rooms.html">Deluxe Room</a></li>-->
<!--                                <li><a href="rooms.html">Superior Room</a></li>-->
<!--                                <li><a href="rooms.html">King Suite</a></li>-->
<!--                            </ul>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="bottom">-->
<!--            <div class="container">-->
<!--                <div class="row">-->
<!--                    <div class="col-lg-4 col-md-6">-->
<!--                        <p>© 2025 PATARA - Resort & Spa Hotel. All right reserved.</p>-->
<!--                    </div>-->
<!--                    <div class="col-lg-8 col-md-6">-->
<!--                        <p class="right"><a href="#">Terms &amp; Conditions</a></p>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </footer>-->
<!-- jQuery -->
<script src="../js/jquery-3.6.3.min.js"></script>
<script src="../js/jquery-migrate-3.0.0.min.js"></script>
<script src="../js/modernizr-2.6.2.min.js"></script>
<script src="../js/imagesloaded.pkgd.min.js"></script>
<script src="../js/jquery.isotope.v3.0.2.js"></script>
<script src="../js/pace.js"></script>
<script src="../js/popper.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/scrollIt.min.js"></script>
<script src="../js/jquery.waypoints.min.js"></script>
<script src="../js/owl.carousel.min.js"></script>
<script src="../js/jquery.stellar.min.js"></script>
<script src="../js/jquery.magnific-popup.js"></script>
<script src="../js/YouTubePopUp.js"></script>
<script src="../js/select2.js"></script>
<script src="../js/datepicker.js"></script>
<script src="../js/smooth-scroll.min.js"></script>
<script src="../js/wow.min.js"></script>
<script src="../js/custom.js"></script>

</body>
</html>
