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
@include('components.navbar')

<!-- Search Box -->
<input id="pac-input" class="controls" type="text" placeholder="Search Location">

<div id="map"></div>

<script
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDZrlzgVNXCPNCv-pGTjYN-Ic_DofQk8gE&libraries=places&callback=initMap"
    async defer></script>

<script>
    let map;
    const buildings = @json($buildings);

    function initMap() {
        const map = new google.maps.Map(document.getElementById("map"), {
            center: {lat: 40.1792, lng: 44.5060},
            zoom: 14
        });

        const input = document.getElementById('pac-input');
        const searchBox = new google.maps.places.SearchBox(input);

        map.controls[google.maps.ControlPosition.TOP_RIGHT].push(input);

        map.addListener('bounds_changed', () => {
            searchBox.setBounds(map.getBounds());
        });

        searchBox.addListener('places_changed', () => {
            const places = searchBox.getPlaces();
            if (places.length === 0) return;

            const bounds = new google.maps.LatLngBounds();
            places.forEach(place => {
                if (!place.geometry) return;
                if (place.geometry.viewport) {
                    bounds.union(place.geometry.viewport);
                } else {
                    bounds.extend(place.geometry.location);
                }
            });
            map.fitBounds(bounds);
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
                            <h4 style="margin: 8px 0;  color: black">${building.title}</h4>
                    <p>${building.short_description[locale]}</p>
                            <a href="/buildings/${building.id}" target="_blank" style="color: blue; text-decoration: underline;">{{__('messages.more')}}</a>
                        </div>
                    `
                });
                marker.addListener("click", () => {
                    infowindow.open(map, marker);
                });
            }
        });
    }

    const locale = "{{ app()->getLocale() }}";

    window.addEventListener('load', () => {
        document.getElementById('preloader').style.display = 'none';
        document.querySelector('.preloader-bg').style.display = 'none';
    });
</script>
<style>
#map {
    width: 100%;
    height: 860px;
    margin-top: 100px;
}
#pac-input {
    margin-top: 90px;
    position: absolute;
    top: 40px;
    right: 0;
    z-index: 1;
    left: 150px;
    transform: translateX(-50%);
    width: 300px;
    height: 40px;
    padding: 10px 15px 10px 40px;
    font-size: 16px;
    color: #000;
    background-color: #fff;
    border: 1px solid #d9d9d9;
    border-radius: 40px;
    box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1);
    outline: none;
    transition: box-shadow 0.2s ease-in-out;
}

#pac-input:focus {
    border-color: #4285f4;
    box-shadow: 0px 4px 8px rgba(66, 133, 244, 0.3);
}

</style>
</body>
</html>


