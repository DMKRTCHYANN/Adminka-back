<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <title>Invest Armenia | Map</title>
    <link rel="shortcut icon" href="img/favicon.png"/>
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css2?family=Libre+Caslon+Display&family=Outfit:wght@300;400&display=swap">
    <link rel="stylesheet" href="css/plugins.css"/>
    <link rel="stylesheet" href="css/style.css?24"/>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        #map {
            width: 100%;
            height: 860px;
            margin-top: 100px;
        }
    </style>
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
                <li class="nav-item"><a class="nav-link active" style="font-size: 16px" href="/">Главная страница</a></li>
                <li class="nav-item"><a class="nav-link" style="font-size: 16px" href="{{ route('contact') }}">Обратная Связь</a>
                <li class="nav-item"><a class="nav-link" style="font-size: 16px" href="{{ route('map') }}">Карта</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div id="map"></div>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDZrlzgVNXCPNCv-pGTjYN-Ic_DofQk8gE&callback=initMap" async
        defer></script>
<script>
    let map;

    const buildings = @json($buildings);

    function initMap() {
        const map = new google.maps.Map(document.getElementById("map"), {
            center: {lat: 40.1792, lng: 44.5060},
            zoom: 14
        });

        buildings.forEach(building => {
            if (building.location) {
                const markerIcon = {
                    url: '/img/markers.png',
                    scaledSize: new google.maps.Size(70, 80),
                };

                const marker = new google.maps.Marker({
                    position: {
                        lat: building.location.latitude,
                        lng: building.location.longitude,
                    },
                    map: map,
                    title: building.title,
                    icon: markerIcon,
                });

                const infowindow = new google.maps.InfoWindow({
                    content: `
                        <div style="text-align: center;">
                            <img src="${building.bg_image ? '/storage/' + building.bg_image : '/img/default.png'}" alt="${building.title}" style="width: 500px; height: auto; margin-bottom: 8px;">
                            <h4 style="margin: 8px 0;">${building.title}</h4>
                            <p style="margin: 4px 0;">${building.short_description}</p>
                            <a href="/buildings/${building.id}" target="_blank" style="color: blue; text-decoration: underline;">Подробнее</a>
                        </div>
                    `
                });
                marker.addListener("click", () => {
                    infowindow.open(map, marker);
                });
            }
        });
    }

    window.addEventListener('load', () => {
        document.getElementById('preloader').style.display = 'none';
        document.querySelector('.preloader-bg').style.display = 'none';
    });
</script>
</body>
</html>
