<!DOCTYPE html>

<html>

<head>
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
    <script src="scripts/post_a_status.js"></script>
    <script src="scripts/reply.js"></script>
    <script src="scripts/toggle.js"></script>
    <script src="scripts/behaviour.js"></script>
    <script src="scripts/sticky_smart_header.js"></script>
    <script src="scripts/ajax.js"></script>
    <script src="scripts/load_more.js"></script>
    <script src="scripts/weather.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.0.5/handlebars.js"></script>
    <!-- For maps -->
    <link rel="stylesheet" type="text/css" href="https://js.api.here.com/v3/3.0/mapsjs-ui.css" />
    <script type="text/javascript" charset="UTF-8" src="https://js.api.here.com/v3/3.0/mapsjs-core.js"></script>
    <script type="text/javascript" charset="UTF-8" src="https://js.api.here.com/v3/3.0/mapsjs-service.js"></script>
    <script type="text/javascript" charset="UTF-8" src="https://js.api.here.com/v3/3.0/mapsjs-ui.js"></script>
    <script type="text/javascript" charset="UTF-8" src="https://js.api.here.com/v3/3.0/mapsjs-mapevents.js"></script>
    <script src="scripts/behaviour.js"></script>


</head>

<<body>
    <div class="container">
        <?php include('views/header.php'); ?>

            <main>
                <div class="contactsection">
                    <section>
                        <h1><u>Reach Us</u></h1>
                    </section>
                    <article class="contact">
                        <div id="map" style="width: 80%; height: 600px; background: grey;margin:auto" />
                        <script type="text/javascript" charset="UTF-8">
                            /**
                             * Moves the map to display over HolbertonSchool
                             *
                             * @param  {H.Map} map      A HERE Map instance within the application
                             */
                            function moveMapToSchool(map) {
                                map.setCenter({
                                    lat: 37.792124,
                                    lng: -122.3995689
                                });
                                map.setZoom(16);
                            }

                            /**
                             * Boilerplate map initialization code starts below:
                             */

                            //Step 1: initialize communication with the platform
                            var platform = new H.service.Platform({
                                app_id: 'AbDRPrtqHGluCPCcU2cu',
                                app_code: 'AWWknaLJDQz8Ra0mcLdeJQ',
                                useCIT: true,
                                useHTTPS: true
                            });
                            var defaultLayers = platform.createDefaultLayers();

                            //Step 2: initialize a map  - not specificing a location will give a whole world view.
                            var map = new H.Map(document.getElementById('map'),
                                defaultLayers.normal.map);

                            //Step 3: make the map interactive
                            // MapEvents enables the event system
                            // Behavior implements default interactions for pan/zoom (also on mobile touch environments)
                            var behavior = new H.mapevents.Behavior(new H.mapevents.MapEvents(map));

                            // Create the default UI components
                            var ui = H.ui.UI.createDefault(map, defaultLayers);

                            ui.addControl('zoomrectangle', new H.ui.ZoomRectangle({
                                alignment: 'right-middle'
                            }));

                            // Add  context menu item
                            map.addEventListener('contextmenu', function (e) {
                                //Extract the screen coordinates {x, y} from the "contextmenu" event
                                //Convert the screen coordinates {x, y} to geographical coordinates {latitude, longitude}
                                var coord = map.screenToGeo(e.viewportX, e.viewportY);

                                var x = coord.lat + "," + coord.lng + ",150";
                                var reverseGeocodingParameters = {
                                    prox: x,
                                    mode: 'retrieveAddress',
                                    maxresults: 1
                                };

                                // Send the RGC request over.
                                geocoder.reverseGeocode(reverseGeocodingParameters,
                                    function (result) {
                                        onRGCResult(result, e);
                                        e.stopPropagation();
                                    },
                                    function (e) {
                                        console.log(e);
                                    });

                            });

                            // Get an instance of the geocoding service:
                            var geocoder = platform.getGeocodingService();

                            /**
                             * Processes reverse geocoder response and
                             * adds a context menu item showing the associated address.
                             */
                            function onRGCResult(result, contextMenuEvent) {
                                var addressLabel = result.Response.View[0].Result[0].Location.Address.Label;

                                if (contextMenuEvent.items.length == 0) {
                                    contextMenuEvent.items.push(new H.util.ContextItem({
                                        label: addressLabel
                                    }));
                                }
                                contextMenuEvent.currentTarget.dispatchEvent(contextMenuEvent);
                            }
                            // Adding a map listener "onMapTap" on event "tap"
                            map.addEventListener('tap', function (e) {
                                onMapTap(e);
                            });

                            //Implementing "onMapTap" so that a simple marker is added at the tap location.
                            function onMapTap(e) {
                                var coord = map.screenToGeo(e.currentPointer.viewportX, e.currentPointer.viewportY);

                                marker = new H.map.Marker(map.screenToGeo(e.currentPointer.viewportX, e.currentPointer.viewportY));
                                map.addObject(marker);
                                var apiURL = 'https://isoline.route.cit.api.here.com/routing/7.2/calculateisoline.json'
                                calculateIsoline(apiURL, 'AbDRPrtqHGluCPCcU2cu', 'AWWknaLJDQz8Ra0mcLdeJQ', coord.lat, coord.lng, 'time', '600', 'onIsolineReceived');
                            }

                            // Implement the method "calculateIsoline" that will make the API call.
                            function calculateIsoline(apiURL, appId, appCode, latitude, longitude, rangeType, range, jsonpCallbackName) {
                                var apiCallURL = [
                apiURL,
                '?app_id=',
                appId,
                '&app_code=',
                appCode,
                '&mode=fastest;pedestrian', // Static mode to simplify the case.
                '&start=', ['geo!', latitude, ',', longitude].join(''),
                '&rangetype=',
                rangeType,
                '&range=',
                range,
                '&jsonCallback=',
                jsonpCallbackName
              ].join('');

                                var script = document.createElement('script');
                                script.src = apiCallURL;
                                document.body.appendChild(script);
                            }

                            //Implement the method "onIsolineReceived" that will be executed upon receiving response
                            function onIsolineReceived(result) {
                                if (result && result.response && result.response.isoline) {
                                    var rawShape = result.response.isoline[0].component[0].shape;

                                    var strip = new H.geo.Strip();
                                    for (x in rawShape) {
                                        var p = rawShape[x].split(',');
                                        var point = new H.geo.Point(p[0], p[1]);
                                        strip.pushPoint(point);
                                    }
                                    var polygon = new H.map.Polygon(strip);
                                    map.addObject(polygon);
                                    map.setViewBounds(polygon.getBounds());
                                }

                            }

                            // Now use the map as required...
                            moveMapToSchool(map);

                            // Add window resize listener to adjust the map dimensions.
                            window.addEventListener('resize', function () {
                                map.getViewPort().resize();
                            });
                        </script>
                    </article>
                </div>
                <div class="bottom-right">
                    <span>Welcome to Twitter clone. BETA</span>
                </div>
            </main>
            <?php include('views/footer.php'); ?>

    </div>
    </body>

</html>