<!DOCTYPE html>
<html lang="ru">
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

<!-- Navbar -->
@include('components.navbar')

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
<section class="restaurant-page section-padding" data-scroll-index="1">
    <div class="container">
        <div class="row mb-30">
            <div class="col-md-12">
                <div class="section-title">{{ strip_tags($building->title) }} </div>
                {!! $building->long_description[app()->getLocale()] !!}
            </div>
        </div>
    </div>
</section>
<!-- Map Section -->
<section>
    <div id="map" style="width: 100%; height: 400px; margin-top: 40px;"></div>
</section>

<script>
    const building = @json($building);

    function initMap() {
        const map = new google.maps.Map(document.getElementById("map"), {
            center: building.location
                ? { lat: building.location.coordinates[1], lng: building.location.coordinates[0] }
                : { lat: 40.1792, lng: 44.5060 },
            zoom: building.location ? 16 : 14
        });
        console.log(map)

        if (building.location) {
            new google.maps.Marker({
                position: { lat: building.location.coordinates[1], lng: building.location.coordinates[0] },
                map: map,
                title: `Building ID: ${building.id}`
            });
        }
    }

    window.addEventListener('load', () => {
        document.getElementById('preloader').style.display = 'none';
        document.querySelector('.preloader-bg').style.display = 'none';
    });
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDZrlzgVNXCPNCv-pGTjYN-Ic_DofQk8gE&callback=initMap" async defer></script>

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
