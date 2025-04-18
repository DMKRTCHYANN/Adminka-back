<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <title>Invest Armenia</title>
    <link rel="shortcut icon" href="img/favicon.png"/>
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css2?family=Libre+Caslon+Display&family=Outfit:wght@300;400&display=swap">
    <link rel="stylesheet" href="css/plugins.css"/>
    <link rel="stylesheet" href="css/style.css?24"/>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
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
            <a class="logo" href="/"><img src="./img/logoo.svg?3" class="logo"
                                          style="max-width: 235px; width: 100%"/></a>
        </div>
        <!-- Button -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar"
                aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation"><span
                class="navbar-toggler-icon"><i class="ti-menu"></i></span></button>
        <!-- Menu -->
        <div class="collapse navbar-collapse" id="navbar">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link active" style="font-size: 16px" href="/">{{ __('messages.a') }}</a></li>
                <li class="nav-item"><a class="nav-link" style="font-size: 16px" href="{{ route('contact') }}">Обратная Связь</a></li>
                <li class="nav-item"><a class="nav-link" style="font-size: 16px" href="{{ route('map') }}">Карта</a></li>
                <li class="nav-item dropdown">
                    @php ($languages = ['en' => 'English', 'ru' => 'Русский'])
                    <a class="nav-link dropdown-toggle" href="#" id="languageDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="font-size: 16px;">
                        {{ strtoupper(app()->getLocale()) }}
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="languageDropdown">
                        @foreach ($languages as $langCode => $language)
                            <li>
                                <a class="dropdown-item" href="{{ route('lang.change', ['lang' => $langCode]) }}">
                                    {{ $language }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!--
    <section class="comming section-padding">
        <div class="">
            <div class="container" >
                <div class="row text-center mb-30">
                    <div class="col-md-12">
                        <section class="" data-scroll-index="1">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12" style="text-align: left; position: absolute; left: 50%; top: 50%; transform: translate(-50%, -50%)">
&lt;!&ndash;                            <h2>What are the Benefits of the Spa?</h2>&ndash;&gt;
                                        <p style="font-size: 14px; letter-spacing: 1px; font-weight: 400; text-align: center; color: #fff; font-family: 'Libre Caslon Display', serif;">12-13 апреля 2025</p>
                                        <p style="font-size: 30px; letter-spacing: 1px; font-weight: 400; text-align: center; color: #fff; font-family: 'Libre Caslon Display', serif;">Выставка-продажа элитной недвижимости Армении</p>
                                        <div class="post-comment-section">
                                            <div class="row">
                                            </div>
                                        </div>
                                    </div>
                                    &lt;!&ndash; Sidebar &ndash;&gt;
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
&lt;!&ndash;
                <div class="row text-center mb-30">
                    <div class="col-6 col-md-3">
                        <div class="item">
                            <div class="down">
                                <h3 id="days">00</h3>
                            </div>
                            <div class="item-info">
                                <h6 class="mb-0">Days</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-3">
                        <div class="item">
                            <div class="down">
                                <h3 id="hours">00</h3>
                            </div>
                            <div class="item-info">
                                <h6 class="mb-0">Hours</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-3">
                        <div class="item">
                            <div class="down">
                                <h3 id="minutes">00</h3>
                            </div>
                            <div class="item-info">
                                <h6 class="mb-0">Minutes</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-3">
                        <div class="item">
                            <div class="down">
                                <h3 id="seconds">00</h3>
                            </div>
                            <div class="item-info">
                                <h6 class="mb-0">Seconds</h6>
                            </div>
                        </div>
                    </div>
                </div>
&ndash;&gt;

            </div>
        </div>
    </section>
-->
<!-- Slider -->
<!--<header class="header slider-fade">-->
<header class="header slider-fade">
    <div class="owl-carousel owl-theme" id="buildings-container">
        @foreach($buildings as $building)
            <div class="text-center item bg-img"
                 data-overlay-dark="4"
                 data-background="{{ url('storage/'.$building->bg_image) }}">
                <div class="v-middle caption">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7 col-md-12">
                                <h1>{{ strip_tags($building->title) }}</h1>
                                <div class="butn-light mt-30 mb-30">
                                    <a href="/buildings/{{ $building->id }}">
                                        <span>Узнать больше</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</header>
<!--    <div class="owl-carousel owl-theme">-->
<!--        <div class="text-center item bg-img" data-overlay-dark="4"-->
<!--             data-background="img/slider/artlife-kempinski-residences/img1.jpg">-->
<!--            <div class="v-middle caption">-->
<!--                <div class="container">-->
<!--                    <div class="row justify-content-center">-->
<!--                        <div class="col-lg-7 col-md-12">-->
<!--                                                      <h1>Artlife Kempinski</h1>-->
<!--                                                      <div class="butn-light mt-30 mb-30"><a href="./artlife-kempinski-residences"><span>Узнать больше</span></a>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--            <div class="text-center item bg-img" data-overlay-dark="4" data-background="img/slider/sarin/img1.jpg">-->
<!--                <div class="v-middle caption">-->
<!--                    <div class="container">-->
<!--                        <div class="row justify-content-center">-->
<!--                            <div class="col-lg-7 col-md-12">-->
<!--                                <h1>Amanoo Sarin</h1>-->
<!--                                <div class="butn-light mt-30 mb-30"> <a href="./sarin"><span>Узнать больше</span></a> </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="text-center item bg-img" data-overlay-dark="4" data-background="img/slider/dalan/img1.webp">-->
<!--                <div class="v-middle caption">-->
<!--                    <div class="container">-->
<!--                        <div class="row justify-content-center">-->
<!--                            <div class="col-lg-7 col-md-12">-->
<!--                                <h1 style="font-size: 30px; white-space: nowrap">Dalan Technopark</h1>-->
<!--                                <div class="butn-light mt-30 mb-30"> <a href="./dalan"><span>Узнать больше</span></a> </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="text-center item bg-img" data-overlay-dark="4" data-background="img/slider/milano-firenze-towers/img1.jpg">-->
<!--                <div class="v-middle caption">-->
<!--                    <div class="container">-->
<!--                        <div class="row justify-content-center">-->
<!--                            <div class="col-lg-7 col-md-12">-->
<!--                                <h1>Milano-Firenze Towers</h1>-->
<!--                                <div class="butn-light mt-30 mb-30"> <a href="./milano-firenze-towers"><span>Узнать больше</span></a> </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="text-center item bg-img" data-overlay-dark="4" data-background="img/slider/myler/img2.jpeg">-->
<!--                <div class="v-middle caption">-->
<!--                    <div class="container">-->
<!--                        <div class="row justify-content-center">-->
<!--                            <div class="col-lg-7 col-md-12">-->
<!--                                <h1>MyLer</h1>-->
<!--                                <div class="butn-light mt-30 mb-30"> <a href="./myler"><span>Узнать больше</span></a> </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="text-center item bg-img" data-overlay-dark="4" data-background="img/slider/pullman-residences-yerevan/1.webp">-->
<!--                <div class="v-middle caption">-->
<!--                    <div class="container">-->
<!--                        <div class="row justify-content-center">-->
<!--                            <div class="col-lg-7 col-md-12">-->
<!--                                <h1>Pullman Residences</h1>-->
<!--                                <div class="butn-light mt-30 mb-30"> <a href="./pullman-residences-yerevan"><span>Узнать больше</span></a> </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="text-center item bg-img" data-overlay-dark="4" data-background="img/slider/movenpick-resort-tsaghkadzor/img1.jpg">-->
<!--                <div class="v-middle caption">-->
<!--                    <div class="container">-->
<!--                        <div class="row justify-content-center">-->
<!--                            <div class="col-lg-7 col-md-12">-->
<!--                                <h1>MÖVENPICK</h1>-->
<!--                                <div class="butn-light mt-30 mb-30"> <a href="./movenpick-resort-tsaghkadzor"><span>Узнать больше</span></a> </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="text-center item bg-img" data-overlay-dark="4" data-background="img/slider/aivazovsky/img1.jpg">-->
<!--                <div class="v-middle caption">-->
<!--                    <div class="container">-->
<!--                        <div class="row justify-content-center">-->
<!--                            <div class="col-lg-7 col-md-12">-->
<!--                                <h1>AIVAZOVSKY</h1>-->
<!--                                <div class="butn-light mt-30 mb-30"> <a href="./айвазовский"><span>Узнать больше</span></a> </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->

<!--            <div class="text-center item bg-img" data-overlay-dark="4" data-background="img/slider/intown/img1.webp">-->
<!--                <div class="v-middle caption">-->
<!--                    <div class="container">-->
<!--                        <div class="row justify-content-center">-->
<!--                            <div class="col-lg-7 col-md-12">-->
<!--                                <h1>InTown</h1>-->
<!--                                <div class="butn-light mt-30 mb-30"> <a href="./intown"><span>Узнать больше</span></a> </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="text-center item bg-img" data-overlay-dark="4" data-background="img/slider/novotel/img1.webp">-->
<!--                <div class="v-middle caption">-->
<!--                    <div class="container">-->
<!--                        <div class="row justify-content-center">-->
<!--                            <div class="col-lg-7 col-md-12">-->
<!--                                <h1>Novotel</h1>-->
<!--                                <div class="butn-light mt-30 mb-30"> <a href="./novotel"><span>Узнать больше</span></a> </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->

<!--            &lt;!&ndash; The opacity on the image is made with "data-overlay-dark="number". You can change it using the numbers 0-9. &ndash;&gt;-->
<!--            <div class="text-center item bg-img" data-overlay-dark="6" data-background="img/slider/firdus/img1.jpg">-->
<!--                <div class="v-middle caption">-->
<!--                    <div class="container">-->
<!--                        <div class="row justify-content-center">-->
<!--                            <div class="col-lg-6 col-md-12">-->
<!--                                <h1>Firdus</h1>-->
<!--                                <div class="butn-light mt-30 mb-30"> <a href="./фирдус"><span>Узнать больше</span></a> </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="text-center item bg-img" data-overlay-dark="4" data-background="img/slider/old-yerevan/img1.jpg">-->
<!--                <div class="v-middle caption">-->
<!--                    <div class="container">-->
<!--                        <div class="row justify-content-center">-->
<!--                            <div class="col-lg-7 col-md-12">-->
<!--                                <h1>Old Yerevan</h1>-->
<!--                                <div class="butn-light mt-30 mb-30"> <a href="./старый-ереван"><span>Узнать больше</span></a> </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="text-center item bg-img" data-overlay-dark="4" data-background="img/slider/ember/img2.webp">-->
<!--                <div class="v-middle caption">-->
<!--                    <div class="container">-->
<!--                        <div class="row justify-content-center">-->
<!--                            <div class="col-lg-7 col-md-12">-->
<!--                                <h1>Ember</h1>-->
<!--                                <div class="butn-light mt-30 mb-30"> <a href="./эмбер"><span>Узнать больше</span></a> </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="text-center item bg-img" data-overlay-dark="4" data-background="img/slider/hevn/img1.jpg">-->
<!--                <div class="v-middle caption">-->
<!--                    <div class="container">-->
<!--                        <div class="row justify-content-center">-->
<!--                            <div class="col-lg-7 col-md-12">-->
<!--                                <h1>HEVN</h1>-->
<!--                                <div class="butn-light mt-30 mb-30"> <a href="./hevn"><span>Узнать больше</span></a> </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="text-center item bg-img" data-overlay-dark="4" data-background="img/slider/amanoo/img1.jpg">-->
<!--                <div class="v-middle caption">-->
<!--                    <div class="container">-->
<!--                        <div class="row justify-content-center">-->
<!--                            <div class="col-lg-7 col-md-12">-->
<!--                                <h1>Amanoo IVY</h1>-->
<!--                                <div class="butn-light mt-30 mb-30"> <a href="./amanoo"><span>Узнать больше</span></a> </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="text-center item bg-img" data-overlay-dark="4" data-background="img/slider/skyline/img1.jpg">-->
<!--                <div class="v-middle caption">-->
<!--                    <div class="container">-->
<!--                        <div class="row justify-content-center">-->
<!--                            <div class="col-lg-7 col-md-12">-->
<!--                                <h1>Skyline</h1>-->
<!--                                <div class="butn-light mt-30 mb-30"> <a href="./skyline"><span>Узнать больше</span></a> </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="text-center item bg-img" data-overlay-dark="4" data-background="img/slider/allur/img1.jpg">-->
<!--                <div class="v-middle caption" style="bottom: 10%; top: unset;">-->
<!--                    <div class="container">-->
<!--                        <div class="row justify-content-center">-->
<!--                            <div class="col-lg-7 col-md-12" style="padding-top: 100px;">-->
<!--                                <h1>ALLUR RESIDENCE DILIJAN</h1>-->
<!--                                <div class="butn-light mt-30 mb-30"> <a href="./allur"><span>Узнать больше</span></a> </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="text-center item bg-img" data-overlay-dark="4" data-background="img/slider/argishti/img8.webp">-->
<!--                <div class="v-middle caption">-->
<!--                    <div class="container">-->
<!--                        <div class="row justify-content-center">-->
<!--                            <div class="col-lg-7 col-md-12">-->
<!--                                <h1>Argishti</h1>-->
<!--                                <div class="butn-light mt-30 mb-30"> <a href="./argishti"><span>Узнать больше</span></a> </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="text-center item bg-img" data-overlay-dark="6" data-background="img/slider/amiryan-saryan/img1.jpg">-->
<!--                <div class="v-middle caption">-->
<!--                    <div class="container">-->
<!--                        <div class="row justify-content-center">-->
<!--                            <div class="col-lg-7 col-md-12">-->
<!--                                <h1>Amiryan Residence</h1>-->
<!--                                <div class="butn-light mt-30 mb-30"> <a href="./амирян-сарьян"><span>Узнать больше</span></a> </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--    </div>-->
<!--</header>-->
<!-- Booking Search -->
<!--    <div class="booking-wrapper">-->
<!--        <div class="container">-->
<!--            <div class="booking-inner clearfix">-->
<!--                <form action="#" class="form1 clearfix">-->
<!--                    <div class="col1 c1">-->
<!--                        <div class="input1_wrapper border-l border-b border-t border-r">-->
<!--                            <label>Check in</label>-->
<!--                            <div class="input1_inner">-->
<!--                                <input type="text" class="form-control input datepicker" placeholder="Check in">-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="col1 c2">-->
<!--                        <div class="input1_wrapper border-l border-b border-t border-r">-->
<!--                            <label>Check out</label>-->
<!--                            <div class="input1_inner">-->
<!--                                <input type="text" class="form-control input datepicker" placeholder="Check out">-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="col2 c3">-->
<!--                        <div class="select1_wrapper border-l border-b border-t border-r">-->
<!--                            <label>Adults</label>-->
<!--                            <div class="select1_inner">-->
<!--                                <select class="select2 select" style="width: 100%">-->
<!--                                    <option value="1">1 Adult</option>-->
<!--                                    <option value="2">2 Adults</option>-->
<!--                                    <option value="3">3 Adults</option>-->
<!--                                    <option value="4">4 Adults</option>-->
<!--                                </select>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="col2 c4">-->
<!--                        <div class="select1_wrapper border-l border-b border-t  border-r">-->
<!--                            <label>Children</label>-->
<!--                            <div class="select1_inner">-->
<!--                                <select class="select2 select" style="width: 100%">-->
<!--                                    <option value="1">Children</option>-->
<!--                                    <option value="1">1 Child</option>-->
<!--                                    <option value="2">2 Children</option>-->
<!--                                    <option value="3">3 Children</option>-->
<!--                                    <option value="4">4 Children</option>-->
<!--                                </select>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="col2 c5">-->
<!--                        <div class="select1_wrapper border-l border-b border-t  border-r">-->
<!--                            <label>Rooms</label>-->
<!--                            <div class="select1_inner">-->
<!--                                <select class="select2 select" style="width: 100%">-->
<!--                                    <option value="1">1 Room</option>-->
<!--                                    <option value="2">2 Rooms</option>-->
<!--                                    <option value="3">3 Rooms</option>-->
<!--                                    <option value="4">4 Rooms</option>-->
<!--                                </select>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="col3 c6">-->
<!--                        <button type="submit" class="btn-form1-submit">Check Now</button>-->
<!--                    </div>-->
<!--                </form>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!-- About -->
<section class="about section-padding" style="padding-bottom: 0; padding-top: 40px;">
    <div class="container">
        <div class="row">

            <div class="col-md-12">
                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        {{ __('messages.a') }}
                        <p style="color: #aa8353; font-weight: 600; font-size: 20px; text-shadow: -2px 1px 2px rgba(0,0,0,0.6);">
                            Первая выставка элитной недвижимости Армении</p>
                        <p style="  color: #aa8353; font-weight: 600; font-size: 18px; text-shadow: -2px 1px 2px rgba(0,0,0,0.6); margin-bottom: 0px; padding-bottom: 0;">
                            12 апреля 12:00 - 21:00 </p>
                        <p style="color: #aa8353; font-weight: 600; font-size: 18px; text-shadow: -2px 1px 2px rgba(0,0,0,0.6);">
                            13 апреля 11:00 - 20:00 </p>
                        <p style="color: #bfbfbd; font-weight: 600; font-size: 16px; text-shadow: -2px 1px 2px rgba(0,0,0,0.6);">
                            Впервые в России состоится выставка-продажа элитной недвижимости Армении, которая пройдет
                            12-13 апреля в гостинице “Ararat Park Hyatt Moscow”.</p>
                        <p style="color: #bfbfbd; font-weight: 600; font-size: 16px; text-shadow: -2px 1px 2px rgba(0,0,0,0.6);">
                            Это уникальная возможность для всех, кто интересуется покупкой недвижимости в Армении,
                            получить эксклюзивные предложения от ведущих девелоперов страны.</p>
                        <!-- Rating -->
                        <!--                            <div class="ratting-point mt-30 mb-30">-->
                        <!--                                <div class="features-ratting">-->
                        <!--                                    <h3>4.9</h3>-->
                        <!--                                </div>-->
                        <!--                                <div class="features-caption">-->
                        <!--                                    <h3>Rating based on 2500+ reviews</h3>-->
                        <!--                                    <div class="rating"> <span>-->
                        <!--                                            <i class="star-rating"></i>-->
                        <!--                                            <i class="star-rating"></i>-->
                        <!--                                            <i class="star-rating"></i>-->
                        <!--                                            <i class="star-rating"></i>-->
                        <!--                                            <i class="star-rating"></i>-->
                        <!--                                        </span> </div>-->
                        <!--                                </div>-->
                        <!--                            </div>-->
                        <div class="rating-iframe mt-30 mb-30">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2244.9197026431902!2d37.61907557733507!3d55.759897073086876!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46b54a5b60171e59%3A0x917c9835c8056849!2sArarat%20Park%20Hyatt%20Moscow!5e0!3m2!1sen!2sam!4v1741160330748!5m2!1sen!2sam"
                                    width="100%" height="300" frameborder="0" style="border:0;" allowfullscreen=""
                                    aria-hidden="false" tabindex="0"></iframe>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 hidden-on-mobile">
                        <div class="row g-3">
                            <div class="col-6 text-end"><img class="img-fluid rounded w-75 wow zoomIn"
                                                             data-wow-delay="0.1s" src="img/slider/firdus/img1.jpg"
                                                             style="margin-top: 25%;"></div>
                            <div class="col-6 text-start"><img class="img-fluid rounded w-100 wow zoomIn"
                                                               data-wow-delay="0.3s" src="img/slider/amanoo/img1.jpg">
                            </div>
                            <div class="col-6 text-end"><img class="img-fluid rounded w-50 wow zoomIn"
                                                             data-wow-delay="0.5s" src="img/slider/hevn/img1.jpg"></div>
                            <div class="col-6 text-start"><img class="img-fluid rounded w-75 wow zoomIn"
                                                               data-wow-delay="0.7s"
                                                               src="img/slider/pullman-residences-yerevan/img1.jpg">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<section class="services2 section-padding" data-scroll-index="1">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                @foreach($buildings as $building)
                    <div class="services2 @if($loop->index%2 == 1) left @endif mb-90">
                        <figure><img src="{{ url('storage/'.$building->bg_image) }}"
                                     style="height: 400px;object-fit: cover" alt="" class="img-fluid"></figure>
                        <div class="caption padding-left">
                            <h4><a href="/buildings/{{ $building->id}}">{{ strip_tags($building->title) }}</a></h4>
                            <p>{{ strip_tags($building->short_description) }}</p>
                            <div class="info-wrapper mt-20">
                                <div class="butn-dark"><a
                                        href="/buildings/{{ $building->id }}"><span>Узнать больше</span></a></div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div style="margin-top: 30px;" class="col-md-12">
            </div>
        </div>
    </div>
</section>


<section class="section-padding menu faq-1 bg-blck" style="padding-top: 0;">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <h3 class="sub-title border-bot-dark">Наш Партнер</h3>
            </div>
            <div class="col-md-9">
                <a style="margin-bottom: 20px" href="https://meluvis.com/" target="_blank">
                    <img src="./img/partner/logo.svg" style="width: 100%;"/>
                </a>
                <!--                    <div class="section-title whte"><span style="color: white;font-family: 'system-ui'">MELUVIS</span></div>-->
                <h6 style="font-family: 'Outfit', sans-serif;color:#adadad;margin-bottom: 3px;">Революция в маркетинге
                    недвижимости</h6>
                <h6 style="font-family: 'Outfit', sans-serif;color: #adadad;line-height: 30px" class="mb-30">Современная
                    3D-платформа, предназначенная для демонстрации и продажи недвижимости, предлагающая потенциальным
                    покупателям полную информацию о районах, зданиях и отдельных квартирах, доступных для продажи.</h6>
            </div>
        </div>
    </div>
</section>




























<!-- Rooms -->
<!--    <section class="rooms1 section-padding">-->
<!--        <div class="container">-->
<!--            <div class="row mb-30">-->
<!--                <div class="col-md-3">-->
<!--                    <div class="sub-title border-bot-light">Discover</div>-->
<!--                </div>-->
<!--                <div class="col-md-9">-->
<!--                    <div class="section-title">Rooms <span>&amp;</span> Suites</div>-->
<!--                    <p>Reserve the room you prefer (depending on availability). Choose from a variety of sizes and styles. Lorem ipsum viverra tristique justo duis vitae diaminte neque nivamus aestan artines in the nedana mis erodino fermen.</p>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="rooms1-carousel owl-theme owl-carousel">-->
<!--                <div class="rooms1-single">-->
<!--                    <div class="rooms1-img"> <img src="img/rooms/15.jpg" alt=""> </div>-->
<!--                    <div class="rooms1-content">-->
<!--                        <div class="row">-->
<!--                            <div class="col-md-6">-->
<!--                                <div class="rooms1-title"><a href="#">Junior Suite</a></div>-->
<!--                                <div class="rooms1-tagline">30 m<sup>2</sup> / 2 adults 1 children</div>-->
<!--                            </div>-->
<!--                            <div class="col-md-6">-->
<!--                                <div class="book">-->
<!--                                    <div><a href="room-details.html" class="butn-dark2"><span>Book</span></a></div>-->
<!--                                    <div><span>from</span><span class="price">$150</span></div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="rooms1-single">-->
<!--                    <div class="rooms1-img"> <img src="img/rooms/12.jpg" alt=""> </div>-->
<!--                    <div class="rooms1-content">-->
<!--                        <div class="row">-->
<!--                            <div class="col-md-6">-->
<!--                                <div class="rooms1-title"><a href="#">Family Room</a></div>-->
<!--                                <div class="rooms1-tagline">50 m<sup>2</sup> / 3 adults 2 children</div>-->
<!--                            </div>-->
<!--                            <div class="col-md-6">-->
<!--                                <div class="book">-->
<!--                                    <div><a href="room-details.html" class="butn-dark2"><span>Book</span></a></div>-->
<!--                                    <div><span>from</span><span class="price">$200</span></div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="rooms1-single">-->
<!--                    <div class="rooms1-img"> <img src="img/rooms/13.jpg" alt=""> </div>-->
<!--                    <div class="rooms1-content">-->
<!--                        <div class="row">-->
<!--                            <div class="col-md-6">-->
<!--                                <div class="rooms1-title"><a href="#">Double Room</a></div>-->
<!--                                <div class="rooms1-tagline">60 m<sup>2</sup> / 2 adults 1 children</div>-->
<!--                            </div>-->
<!--                            <div class="col-md-6">-->
<!--                                <div class="book">-->
<!--                                    <div><a href="room-details.html" class="butn-dark2"><span>Book</span></a></div>-->
<!--                                    <div><span>from</span><span class="price">$250</span></div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="rooms1-single">-->
<!--                    <div class="rooms1-img"> <img src="img/rooms/18.jpg" alt=""> </div>-->
<!--                    <div class="rooms1-content">-->
<!--                        <div class="row">-->
<!--                            <div class="col-md-6">-->
<!--                                <div class="rooms1-title"><a href="#">Deluxe Room</a></div>-->
<!--                                <div class="rooms1-tagline">65 m<sup>2</sup> / 2 adults 2 children</div>-->
<!--                            </div>-->
<!--                            <div class="col-md-6">-->
<!--                                <div class="book">-->
<!--                                    <div><a href="room-details.html" class="butn-dark2"><span>Book</span></a></div>-->
<!--                                    <div><span>from</span><span class="price">$300</span></div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="rooms1-single">-->
<!--                    <div class="rooms1-img"> <img src="img/rooms/19.jpg" alt=""> </div>-->
<!--                    <div class="rooms1-content">-->
<!--                        <div class="row">-->
<!--                            <div class="col-md-6">-->
<!--                                <div class="rooms1-title"><a href="#">Superior Room</a></div>-->
<!--                                <div class="rooms1-tagline">50 m<sup>2</sup> / 2 adults 1 children</div>-->
<!--                            </div>-->
<!--                            <div class="col-md-6">-->
<!--                                <div class="book">-->
<!--                                    <div><a href="room-details.html" class="butn-dark2"><span>Book</span></a></div>-->
<!--                                    <div><span>from</span><span class="price">$200</span></div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="rooms1-single">-->
<!--                    <div class="rooms1-img"> <img src="img/rooms/16.jpg" alt=""> </div>-->
<!--                    <div class="rooms1-content">-->
<!--                        <div class="row">-->
<!--                            <div class="col-md-6">-->
<!--                                <div class="rooms1-title"><a href="#">King Suite</a></div>-->
<!--                                <div class="rooms1-tagline">90 m<sup>2</sup> / 2 adults 1 children</div>-->
<!--                            </div>-->
<!--                            <div class="col-md-6">-->
<!--                                <div class="book">-->
<!--                                    <div><a href="room-details.html" class="butn-dark2"><span>Book</span></a></div>-->
<!--                                    <div><span>from</span><span class="price">$500</span></div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </section>-->
<!-- Promo Video -->
<!--    <section class="video-wrapper video section-padding bg-img bg-fixed" data-overlay-dark="5" data-background="img/slider/1.jpg">-->
<!--        <div class="container">-->
<!--            <div class="row justify-content-center">-->
<!--                <div class="col-lg-8 col-md-12 text-center">-->
<!--                   <span><i class="star-rating"></i><i class="star-rating"></i><i class="star-rating"></i><i class="star-rating"></i><i class="star-rating"></i></span>-->
<!--                    <div class="section-subtitle"><span>Patara Resort & Spa Hotel</span></div>-->
<!--                    <div class="section-title"><span>Hotel Promotional Video</span></div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="row">-->
<!--                <div class="text-center col-md-12">-->
<!--                    <a class="vid" href="https://youtu.be/QTwg1l8FqXw">-->
<!--                        <div class="vid-butn"> <span class="icon">-->
<!--                                <i class="ti-control-play"></i>-->
<!--                            </span> </div>-->
<!--                    </a>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </section>-->
<!--    &lt;!&ndash; Amenities &ndash;&gt;-->
<!--    <section class="amenities section-padding">-->
<!--        <div class="container">-->
<!--            <div class="row mb-30">-->
<!--                <div class="col-md-3">-->
<!--                    <div class="sub-title border-bot-light">Our Services</div>-->
<!--                </div>-->
<!--                <div class="col-md-9">-->
<!--                    <div class="section-title">Hotel Amenities</div>-->
<!--                    <p>Hotel ut nisl quam nestibulum ac quam nec odio elementum sceisue the aucan ligula. Orci varius natoque penatibus et magnis dis parturient monte nascete ridiculus mus nellentesque habitant morbine.</p>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="row">-->
<!--                <div class="col-md-12">-->
<!--                    <div class="owl-carousel owl-theme">-->
<!--                        <div class="item"> <span class="number">01</span>-->
<!--                            <div class="icon"><i class="flaticon-world"></i></div>-->
<!--                            <h5><a href="#">Pick Up &amp; Drop</a></h5>-->
<!--                            <p>We’ll pick up from airport while you comfy on your ride, mus nellentes.</p>-->
<!--                        </div>-->
<!--                        <div class="item"> <span class="number">02</span>-->
<!--                            <div class="icon"><i class="flaticon-car"></i></div>-->
<!--                            <h5><a href="#">Parking Space</a></h5>-->
<!--                            <p>Fusce tincidunt nis ace park norttito sit amet space, mus nellentesque habitant.</p>-->
<!--                        </div>-->
<!--                        <div class="item"> <span class="number">03</span>-->
<!--                            <div class="icon"><i class="flaticon-bed"></i></div>-->
<!--                            <h5><a href="#">Room Service</a></h5>-->
<!--                            <p>Room tincidunt nis ace park norttito sit amet space, mus nellentesque habitant.</p>-->
<!--                        </div>-->
<!--                        <div class="item"> <span class="number">04</span>-->
<!--                            <div class="icon"><i class="flaticon-swimming"></i></div>-->
<!--                            <h5><a href="#">Swimming Pool</a></h5>-->
<!--                            <p>Swimming pool tincidunt nise ace the park norttito sit space mus miss.</p>-->
<!--                        </div>-->
<!--                        <div class="item"> <span class="number">05</span>-->
<!--                            <div class="icon"><i class="flaticon-wifi"></i></div>-->
<!--                            <h5><a href="#">Fibre Internet</a></h5>-->
<!--                            <p>Wifi tincidunt nis ace park norttito sit amet space, mus nellentesque habitant.</p>-->
<!--                        </div>-->
<!--                        <div class="item"> <span class="number">06</span>-->
<!--                            <div class="icon"><i class="flaticon-breakfast"></i></div>-->
<!--                            <h5><a href="#">Breakfast</a></h5>-->
<!--                            <p>Eat tincidunt nisa ace park norttito sit amet space, mus nellentesque habitant</p>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </section>-->
<!--    &lt;!&ndash; Testiominals &ndash;&gt;-->
<!--    <section class="testimonials">-->
<!--        <div class="background bg-img bg-fixed section-padding pb-0" data-background="img/rooms/18.jpg" data-overlay-dark="4">-->
<!--            <div class="container">-->
<!--                <div class="row">-->
<!--                    <div class="col-md-3">-->
<!--                        <h3 class="sub-title border-bot-dark">Testiominals</h3>-->
<!--                    </div>-->
<!--                    <div class="col-md-8">-->
<!--                        <div class="section-title whte">What Client's Say?</div>-->
<!--                        <div class="testimonials-box">-->
<!--                            <div class="owl-carousel owl-theme">-->
<!--                                <div class="item"> <span>-->
<!--                                        <i class="star-rating"></i>-->
<!--                                        <i class="star-rating"></i>-->
<!--                                        <i class="star-rating"></i>-->
<!--                                        <i class="star-rating"></i>-->
<!--                                        <i class="star-rating"></i>-->
<!--                                    </span>-->
<!--                                    <h5>"Hotel was great. Location was excellent in that it was close to everywhere I wanted to go. The staff was incredible. At my every beckoning and call. Room was smaller than I'd like but this was NY so to be expected. A great experience all around!"</h5>-->
<!--                                    <div class="info">-->
<!--                                        <div class="author-img"> <img src="img/team/1.jpg" alt=""> </div>-->
<!--                                        <div class="cont">-->
<!--                                            <h6>Demeail S.</h6> <span>Customer Review</span>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                <div class="item"> <span>-->
<!--                                        <i class="star-rating"></i>-->
<!--                                        <i class="star-rating"></i>-->
<!--                                        <i class="star-rating"></i>-->
<!--                                        <i class="star-rating"></i>-->
<!--                                        <i class="star-rating"></i>-->
<!--                                    </span>-->
<!--                                    <h5>"Great space for events. They were able to cater to the event I was working while simultaneously having an event and a wedding on separate floors. Hotel is massive. Employees are very friendly and always willing to help if need be. Will definitely be having more events here in the future."</h5>-->
<!--                                    <div class="info">-->
<!--                                        <div class="author-img"> <img src="img/team/3.jpg" alt=""> </div>-->
<!--                                        <div class="cont">-->
<!--                                            <h6>Ray Smith</h6> <span>Customer Review</span>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </section>-->
<!-- Services -->
<!--    <section class="services section-padding">-->
<!--        <div class="container">-->
<!--            <div class="row mb-30">-->
<!--                <div class="col-md-3">-->
<!--                    <div class="sub-title border-bot-light">Discover</div>-->
<!--                </div>-->
<!--                <div class="col-md-9">-->
<!--                    <div class="section-title">Our Services</div>-->
<!--                    <p>Hotel ut nisl quam nestibulum ac quam nec odio elementum sceisue the aucan ligula. Orci varius natoque penatibus et magnis dis parturient monte nascete ridiculus mus nellentesque habitant morbine.</p>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="row">-->
<!--                <div class="col-md-4">-->
<!--                    <div class="item">-->
<!--                        <div class="item-wrap">-->
<!--                            <div class="img"> <img src="img/news/1.jpg" alt=""> </div>-->
<!--                            <div class="con">-->
<!--                                <div class="title-box">-->
<!--                                    <h3><a href="#">Restaurant & Bar</a></h3>-->
<!--                                </div>-->
<!--                                <div class="arrow"> <a href="#"><span class="ti-arrow-right"></span></a> </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="col-md-4">-->
<!--                    <div class="item">-->
<!--                        <div class="item-wrap">-->
<!--                            <div class="img"> <img src="img/news/2.jpg" alt=""> </div>-->
<!--                            <div class="con">-->
<!--                                <div class="title-box">-->
<!--                                    <h3><a href="#">Spa & Wellness</a></h3>-->
<!--                                </div>-->
<!--                                <div class="arrow"> <a href="#"><span class="ti-arrow-right"></span></a> </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="col-md-4">-->
<!--                    <div class="item">-->
<!--                        <div class="item-wrap">-->
<!--                            <div class="img"> <img src="img/news/5.jpg" alt=""> </div>-->
<!--                            <div class="con">-->
<!--                                <div class="title-box">-->
<!--                                    <h3><a href="#">Events & Meetings</a></h3>-->
<!--                                </div>-->
<!--                                <div class="arrow"> <a href="#"><span class="ti-arrow-right"></span></a> </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </section>-->
<!--    &lt;!&ndash; Booking Search &ndash;&gt;-->
<!--    <section class="section-padding bg-img bg-fixed" data-overlay-dark="3" data-background="img/rooms/18.jpg">-->
<!--        <div class="container">-->
<!--            <div class="booking-inner clearfix">-->
<!--                <form action="#" class="form1 clearfix">-->
<!--                    <div class="col1 c1">-->
<!--                        <div class="input1_wrapper border-l border-b border-t border-r">-->
<!--                            <label>Check in</label>-->
<!--                            <div class="input1_inner">-->
<!--                                <input type="text" class="form-control input datepicker" placeholder="Check in">-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="col1 c2">-->
<!--                        <div class="input1_wrapper border-l border-b border-t border-r">-->
<!--                            <label>Check out</label>-->
<!--                            <div class="input1_inner">-->
<!--                                <input type="text" class="form-control input datepicker" placeholder="Check out">-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="col2 c3">-->
<!--                        <div class="select1_wrapper border-l border-b border-t border-r">-->
<!--                            <label>Adults</label>-->
<!--                            <div class="select1_inner">-->
<!--                                <select class="select2 select" style="width: 100%">-->
<!--                                    <option value="1">1 Adult</option>-->
<!--                                    <option value="2">2 Adults</option>-->
<!--                                    <option value="3">3 Adults</option>-->
<!--                                    <option value="4">4 Adults</option>-->
<!--                                </select>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="col2 c4">-->
<!--                        <div class="select1_wrapper border-l border-b border-t border-r">-->
<!--                            <label>Children</label>-->
<!--                            <div class="select1_inner">-->
<!--                                <select class="select2 select" style="width: 100%">-->
<!--                                    <option value="1">Children</option>-->
<!--                                    <option value="1">1 Child</option>-->
<!--                                    <option value="2">2 Children</option>-->
<!--                                    <option value="3">3 Children</option>-->
<!--                                    <option value="4">4 Children</option>-->
<!--                                </select>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="col2 c5">-->
<!--                        <div class="select1_wrapper border-l border-b border-t border-r">-->
<!--                            <label>Rooms</label>-->
<!--                            <div class="select1_inner">-->
<!--                                <select class="select2 select" style="width: 100%">-->
<!--                                    <option value="1">1 Room</option>-->
<!--                                    <option value="2">2 Rooms</option>-->
<!--                                    <option value="3">3 Rooms</option>-->
<!--                                    <option value="4">4 Rooms</option>-->
<!--                                </select>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="col3 c6">-->
<!--                        <button type="submit" class="btn-form1-submit">Check Now</button>-->
<!--                    </div>-->
<!--                </form>-->
<!--            </div>-->
<!--        </div>-->
<!--    </section>-->
<!-- Blog Home -->
<!--    <section class="blog-home section-padding">-->
<!--        <div class="container">-->
<!--            <div class="row mb-30">-->
<!--                <div class="col-md-3">-->
<!--                    <div class="sub-title border-bot-light">Our Blog</div>-->
<!--                </div>-->
<!--                <div class="col-md-9">-->
<!--                    <div class="section-title">Latest News</div>-->
<!--                    <p>Hotel ut nisl quam nestibulum ac quam nec odio elementum sceisue the aucan ligula. Orci varius natoque senatibus et magnis narturient monte nascete ridiculus mus nellentesque habitant morbine.</p>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="row">-->
<!--                <div class="col-md-12">-->
<!--                    <div class="owl-carousel owl-theme">-->
<!--                        <div class="item bg-img" data-background="img/news/7.jpg">-->
<!--                            <div class="content">-->
<!--                                <div class="info">-->
<!--                                    <a href="blog.html"> <span><i class="ti-time" aria-hidden="true"></i>28 Dec 2025</span></a>-->
<!--                                </div>-->
<!--                                <a href="post.html">-->
<!--                                    <h5>2 Family Room Options with Double Bedrooms </h5>-->
<!--                                </a>-->
<!--                                <p>Nulla tincidunt ante the sit amet suscition ullamcorpen risus sigula pharetra sapien viverra odio ante masna.</p>-->
<!--                                <div class="arrow"> <a href="post.html"><span class="ti-arrow-right"></span></a> </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="item bg-img" data-background="img/news/3.jpg">-->
<!--                            <div class="content">-->
<!--                                <div class="info">-->
<!--                                    <a href="blog.html"> <span><i class="ti-time" aria-hidden="true"></i>26 Dec 2025</span></a>-->
<!--                                </div>-->
<!--                                <a href="post.html">-->
<!--                                    <h5>Luxury Hotel Experience: Heated Pools</h5>-->
<!--                                </a>-->
<!--                                <p>Nulla tincidunt ante the sit amet suscition ullamcorpen risus sigula pharetra sapien viverra odio ante masna.</p>-->
<!--                                <div class="arrow"> <a href="post.html"><span class="ti-arrow-right"></span></a> </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="item bg-img" data-background="img/news/9.jpg">-->
<!--                            <div class="content">-->
<!--                                <div class="info">-->
<!--                                    <a href="blog.html"> <span><i class="ti-time" aria-hidden="true"></i>24 Dec 2025</span></a>-->
<!--                                </div>-->
<!--                                <a href="post.html">-->
<!--                                    <h5>What is the Meaning of Resort Hotel?</h5>-->
<!--                                </a>-->
<!--                                <p>Nulla tincidunt ante the sit amet suscition ullamcorpen risus sigula pharetra sapien viverra odio ante masna.</p>-->
<!--                                <div class="arrow"> <a href="post.html"><span class="ti-arrow-right"></span></a> </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="item bg-img" data-background="img/news/8.jpg">-->
<!--                            <div class="content">-->
<!--                                <div class="info">-->
<!--                                    <a href="blog.html"> <span><i class="ti-time" aria-hidden="true"></i>22 Dec 2025</span></a>-->
<!--                                </div>-->
<!--                                <a href="post.html">-->
<!--                                    <h5>Luxury Hotel Bathroom Collections</h5>-->
<!--                                </a>-->
<!--                                <p>Nulla tincidunt ante the sit amet suscition ullamcorpen risus sigula pharetra sapien viverra odio ante masna.</p>-->
<!--                                <div class="arrow"> <a href="post.html"><span class="ti-arrow-right"></span></a> </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="item bg-img" data-background="img/news/2.jpg">-->
<!--                            <div class="content">-->
<!--                                <div class="info">-->
<!--                                    <a href="blog.html"> <span><i class="ti-time" aria-hidden="true"></i>20 Dec 2025</span></a>-->
<!--                                </div>-->
<!--                                <a href="post.html">-->
<!--                                    <h5>What are the Benefits of the Spa?</h5>-->
<!--                                </a>-->
<!--                                <p>Nulla tincidunt ante the sit amet suscition ullamcorpen risus sigula pharetra sapien viverra odio ante masna.</p>-->
<!--                                <div class="arrow"> <a href="post.html"><span class="ti-arrow-right"></span></a> </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="item bg-img" data-background="img/news/5.jpg">-->
<!--                            <div class="content">-->
<!--                                <div class="info">-->
<!--                                    <a href="blog.html"> <span><i class="ti-time" aria-hidden="true"></i>18 Dec 2025</span></a>-->
<!--                                </div>-->
<!--                                <a href="post.html">-->
<!--                                    <h5>Choosing a Hotel to Have a Business Meeting</h5>-->
<!--                                </a>-->
<!--                                <p>Nulla tincidunt ante the sit amet suscition ullamcorpen risus sigula pharetra sapien viverra odio ante masna.</p>-->
<!--                                <div class="arrow"> <a href="post.html"><span class="ti-arrow-right"></span></a> </div>-->
<!--                            </div>-->
<!--                        </div>-->
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
<style>
    .building-item .caption {
        position: relative;
        z-index: 2;
    }

    .bg-img {
        background-size: cover;
        background-position: center;
        min-height: 100vh;
    }
</style>
<!-- jQuery -->
<script src="js/jquery-3.6.3.min.js"></script>
<script src="js/jquery-migrate-3.0.0.min.js"></script>
<script src="js/modernizr-2.6.2.min.js"></script>
<script src="js/imagesloaded.pkgd.min.js"></script>
<script src="js/jquery.isotope.v3.0.2.js"></script>
<script src="js/pace.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/scrollIt.min.js"></script>
<script src="js/jquery.waypoints.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.stellar.min.js"></script>
<script src="js/jquery.magnific-popup.js"></script>
<script src="js/YouTubePopUp.js"></script>
<script src="js/select2.js"></script>
<script src="js/datepicker.js"></script>
<script src="js/smooth-scroll.min.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/custom.js?8"></script>
<script>
    function countdown() {
        var now = new Date();
        var eventDate = new Date(2025, 3, 12);
        console.log(eventDate)
        var currentTiime = now.getTime();
        var eventTime = eventDate.getTime();
        var remTime = eventTime - currentTiime;
        var s = Math.floor(remTime / 1000);
        var m = Math.floor(s / 60);
        var h = Math.floor(m / 60);
        var d = Math.floor(h / 24);
        h %= 24;
        m %= 60;
        s %= 60;
        h = (h < 10) ? "0" + h : h;
        m = (m < 10) ? "0" + m : m;
        s = (s < 10) ? "0" + s : s;
        document.getElementById("days").textContent = d;
        document.getElementById("days").innerText = d;
        document.getElementById("hours").textContent = h;
        document.getElementById("minutes").textContent = m;
        document.getElementById("seconds").textContent = s;
        setTimeout(countdown, 1000);
    }

    // countdown();


</script>
</body>
</html>
