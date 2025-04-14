{{--<!DOCTYPE html>--}}
{{--<html>--}}
{{--<head>--}}
{{--    <meta charset="utf-8">--}}
{{--    <meta name="viewport" content="width=device-width, initial-scale=1">--}}
{{--    <style>--}}
{{--        .text-center {--}}
{{--            text-align: center;--}}
{{--        }--}}

{{--        #map {--}}
{{--            width: 100%;--}}
{{--            height: 860px;--}}
{{--        }--}}
{{--    </style>--}}
{{--    <title>Buildings Map</title>--}}
{{--</head>--}}
{{--<body>--}}
{{--<h1 class="text-center">Buildings Map</h1>--}}
{{--<div id="map"></div>--}}

{{--<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAkVQ9GmgG4F6VNlg-xRe4vy6MOS1IWDPI&callback=initMap" async--}}
{{--        defer></script>--}}
{{--<script>--}}
{{--    let map;--}}

{{--    function initMap() {--}}
{{--        map = new google.maps.Map(document.getElementById("map"), {--}}
{{--            center: {lat: 40.1792, lng: 44.5060},--}}
{{--            zoom: 14--}}
{{--        });--}}

{{--        fetch('/api/map/buildings')--}}
{{--            .then(response => response.json())--}}
{{--            .then(buildings => {--}}
{{--                buildings.forEach(building => {--}}
{{--                    if (building.location) {--}}
{{--                        const marker = new google.maps.Marker({--}}
{{--                            position: {--}}
{{--                                lat: building.location.latitude,--}}
{{--                                lng: building.location.longitude,--}}
{{--                            },--}}
{{--                            map: map,--}}
{{--                            title: building.title--}}
{{--                        });--}}

{{--                        const infowindow = new google.maps.InfoWindow({--}}
{{--                            content: `--}}
{{--                                <div style="text-align: center;">--}}
{{--                                    <img src="${building.bg_image}" alt="${building.title}" style="width: 100px; height: auto; margin-bottom: 8px;">--}}
{{--                                    <h4 style="margin: 8px 0;">${building.title}</h4>--}}
{{--                                    <p style="margin: 4px 0;">${building.short_description}</p>--}}
{{--                                    <a href="/buildings/${building.id}" target="_blank" style="color: blue; text-decoration: underline;">Подробнее</a>--}}
{{--                                </div>--}}
{{--`--}}
{{--                        });--}}
{{--                        marker.addListener("click", () => {--}}
{{--                            infowindow.open(map, marker);--}}
{{--                        });--}}
{{--                    }--}}
{{--                });--}}
{{--            })--}}
{{--            .catch(error => {--}}
{{--                console.error('Ошибка загрузки данных зданий:', error);--}}
{{--            });--}}
{{--    }--}}
{{--</script>--}}
{{--</body>--}}
{{--</html>--}}
    <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        .text-center {
            text-align: center;
        }

        #map {
            width: 100%;
            height: 860px;
        }
    </style>
    <title>Buildings Map</title>
</head>
<body>
<h1 class="text-center">Buildings Map</h1>
<div id="map"></div>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAkVQ9GmgG4F6VNlg-xRe4vy6MOS1IWDPI&callback=initMap" async
        defer></script>
<script>
    let map;

    function initMap() {
        map = new google.maps.Map(document.getElementById("map"), {
            center: {lat: 40.1792, lng: 44.5060},
            zoom: 14
        });

        fetch('/api/map/buildings')
            .then(response => response.json())
            .then(buildings => {
                buildings.forEach(building => {
                    if (building.location) {
                        const markerIcon = {
                            url: '/img/map-marker.png',
                            scaledSize: new google.maps.Size(80, 80),
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
                                    <img src="${building.bg_image}" alt="${building.title}" style="width: 100px; height: auto; margin-bottom: 8px;">
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
            })
            .catch(error => {
                console.error('Ошибка загрузки данных зданий:', error);
            });
    }
</script>
</body>
</html>
