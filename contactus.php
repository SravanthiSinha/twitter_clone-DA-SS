<!DOCTYPE html>

<html>
<title>Dan and Sravanthi's Twitter Clone Adventure</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- CSS style sheet -->
<link rel="stylesheet" href="styles/reset.css">
<link rel="stylesheet" href="styles/style.css">
<link rel="stylesheet" href="styles/mediaqueryhigh.css">
<link rel="stylesheet" href="styles/mediaquerymid.css">
<link rel="stylesheet" href="styles/mediaquerylow.css">
<!-- CSS style sheet -->
<!-- Fav Icon -->
<link rel="shortcut icon" type="image/png" href="images/leaf_960_720.png">
<!-- Fav Icon -->
<script src="scripts/enablejs.js"></script>


<script src="scripts/toggle.js"></script>
<script src="scripts/behaviour.js"></script>
<script src="scripts/sticky_smart_header.js"></script>


<link rel="stylesheet" href="https://cdn.jsdelivr.net/leaflet/1.0.0-beta.2/leaflet.css" />
<script src="https://cdn.jsdelivr.net/leaflet/1.0.0-beta.2/leaflet.js"></script>

<!-- Load Esri Leaflet from CDN -->
<script src="https://cdn.jsdelivr.net/leaflet.esri/2.0.0-beta.8/esri-leaflet.js"></script>
<!-- For maps -->
<script src="scripts/behaviour.js"></script>

<script src="scripts/enablejs.js"></script>
<script src="scripts/toggle.js"></script>
<script src="scripts/behaviour.js"></script>
<script src="scripts/sticky_smart_header.js"></script>
<script src="scripts/ajax.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.0.5/handlebars.js">
</script>
</head>

<body>
    <div class="container">
        <?php include('views/header.php'); ?>

            <main>
                <div class="contactsection">
                    <section>
                        <h1><u>Contact Us</u></h1>
                    </section>
                    <article class="contact">
                        <link rel="stylesheet" href="https://cdn.jsdelivr.net/leaflet.esri.geocoder/2.0.2/esri-leaflet-geocoder.css">
                        <script src="https://cdn.jsdelivr.net/leaflet.esri.geocoder/2.0.2/esri-leaflet-geocoder.js"></script>

                        <div id="map" class="map" style="width: 80%; height: 600px; background: grey;margin:auto"></div>

                        <script>
                            var map = L.map('map').setView([37.7833, -122.4167], 12);
                            var latlng = L.latLng(37.792124, -122.3995689);
                            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                                attribution: '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors'
                            }).addTo(map);

                            var geocodeService = L.esri.Geocoding.geocodeService();

                            geocodeService.reverse().latlng(latlng).run(function (error, result) {
                                L.marker(result.latlng).addTo(map).bindPopup(result.address.Match_addr);
                            });
                        </script>

                        <div class="bottom-right">
                            <span>Welcome to Twitter clone. BETA</span>
                        </div>
            </main>
            <?php include('views/footer.php'); ?>

                </div>
</body>

</html>