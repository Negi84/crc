<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Climate Change</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="bootstrap/css/main.css">
        <script src="bootstrap/js/jquery.slim.min.js"></script>
        <script src="bootstrap/js/popper.min.js"></script>
        <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
        <link href="https://api.mapbox.com/mapbox-gl-js/v2.10.0/mapbox-gl.css" rel="stylesheet">
        <script src="https://api.mapbox.com/mapbox-gl-js/v2.10.0/mapbox-gl.js"></script>
        <style>
        @import url('https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap');
        body { margin: 0; padding: 0; }
        #map { position: absolute; top: 0; bottom: 0; width: 100%; }
        .mapboxgl-ctrl-logo {
            display: none !important;
        }
        .mapboxgl-ctrl-bottom-right{
          display: none!important;
        }
        .mapboxgl-ctrl-bottom-left{
          display: none!important;
        }
        .mapboxgl-canvas {
            position: absolute;
            left: 0;
            top: 0%!important;
        }
        a:hover {
            color: #0056b3;
            text-decoration: none!important;}
        .lead{
          color:#007bff!important;
        }
        .head-title{
          text-align: center;
          font-size: 2em;
          text-transform: uppercase;
          font-weight: 900;
          font-family:'Oswald', sans-serif;
        }
        a{
          font-family: sans-serif;
          color:#1d90bf;
          font-weight: 800;
        }
        .climate-change-background, .climate-change-background img{
          width: 100%;
          height: 100%;
        }
        .climate-change-background{
          position:absolute;
        }
        .heading-green{
          color: #51ca51;
        }
        .head-title div{
          color: #57b9e3;
        }
        .head-title div span{
          color: #1e9dd0;
        }
        .mapboxgl-canvas {
        left: -5%!important;
      }
        </style>
      </head>
<body>
  <div class="climate-change-background">
    <img src="bootstrap/images/background.png" alt="">
  </div>
<div class="container mb-3">
    <div class="row">
        <div class="col-sm-12 col-md-12 mb-2">
            <div class="">
                <a class="head-title" href="javascript:void(0)"><div>Climate <span>change</span> </div></a>
                <p class="sublead">Climate change refers to a change in the state of the climate that can be identified (e.g., by using statistical tests) by changes in the mean and/or the variability of its properties, and that persists for an extended period, typically decades or longer.</p>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
  <div class="row">

      <div class="col-md-4 col-sm-12 text-center">

        <div class="d-flex flex-row text-box pb-2">
          <img class="mr-3" src="bootstrap/images/4.png" alt="">
          <div class="d-flex flex-column">
            <h3 class="pt-2"> <a href="what-is-climate-change-and-how-does-it-affect-us"> What is climate change  and <br><span class="heading-green">how does it affect us?</span>  </a> </h3>
            <p>Climate change may be due to natural internal processes or external forcings such as modulations of the solar cycles, volcanic eruptions, and persistent anthropogenic changes in the composition of the atmosphere or in land use.</p>
          </div>
        </div>

        <div class="d-flex flex-row  text-box pb-2">
          <img class="mr-3" src="bootstrap/images/5.png" alt="">
          <div class="d-flex flex-column">
            <h3 class="pt-2"><a href="why-is-the-climate-changing">Why is the <br> <span class="heading-green">Climate changing?</span> </a></h3>
            <p>There are two main types of external sources leading to climate change. Some external factors occur naturally and contribute to the overall natural variability of the climate system, such as solar radiation and volcanism </p>
          </div>
        </div>

        <div class="d-flex flex-row text-box pb-2">
          <img class="mr-3" src="bootstrap/images/1.png" alt="">
          <div class="d-flex flex-column">
            <h3 class="pt-2"> <a href="impact-of-climate-changes">Impact of  <br> <span class="heading-green">climate changes </span> </a> </h3>
            <p>The planet's oceans and glaciers have also experienced changes—oceans are warming and the increased warming in the Arctic has contributed to melting permafrost, glacial retreat and sea ice loss cause sea levels to rise, threatening coastal and island communities.</p>
          </div>
      </div>

      </div>

      <div class="d-flex flex-row col-md-4 col-sm-12 ">
            <div class="content" id="map">
            </div>
      </div>

      <div class="col-md-4 col-sm-12 text-center">
        <div class="d-flex flex-row text-box pb-2">
          <div class="d-flex flex-column">
            <h3 class="pt-2"> <a href="severity-of-climate-change">Severity of <br> <span class="heading-green">Climate Change</span> </a></h3>
            <p>In a series of UN reports, thousands of scientists and government experts agreed that limiting the global temperature increase to no more than 1.5 °C would help avoid the worst climate impacts and preserve a liveable climate.</p>
          </div>
          <img class="ml-3" src="bootstrap/images/3.png" alt="">
        </div>

        <div class="d-flex flex-row text-box pb-2">
          <div class="d-flex flex-column">
            <h3 class="pt-2"><a href="climate-change-adaptation-cand-mitigation"> Climate Change <br> <span class="heading-green">adaptation and mitigation</span>  </a></h3>
            <p>Three broad categories of action against Climate Change are: cutting emissions, adapting to climate impacts, and financing required adjustments.  2022 is a critical year for action on mitigation and adaptation.</p>
          </div>
          <img class="ml-3" src="bootstrap/images/6.png" alt="">
        </div>

        <div class="d-flex flex-row text-box">
        <div class="d-flex flex-column">
          <h3 class="pt-2"> <a href="climate-change-vulnerability">  Climate change <br> <span class="heading-green">vulnerability</span> </a></h3>
          <p> The severity of impacts from extreme and non-extreme weather and climate events is highly dependent on the degree of vulnerability and exposure to these events. </p>
        </div>
        <img class="ml-3" src="bootstrap/images/2.png" alt="">
      </div>

      </div>

    </div>

</div>
<script>
	mapboxgl.accessToken = 'pk.eyJ1IjoidmF5dWFuYW5kYSIsImEiOiJjbDkydDV0MmcwNjlmNDFvN29raXdzcXFwIn0.asZzmJPtFaQ0YX02b0cEFA';
    const map = new mapboxgl.Map({
        container: 'map',
        zoom: 0.9,
        center: [-1000, 20],
        style: 'mapbox://styles/mapbox/satellite-v9',
        projection: 'globe' // Display the map as a globe
    });

    map.on('style.load', () => {
        map.setFog({
      'range': [-1, 2],
      'horizon-blend': 0,
      'space-color':'transparent'
      }); 
    });

    // The following values can be changed to control rotation speed:

    // At low zooms, complete a revolution every two minutes.
    const secondsPerRevolution = 120;
    // Above zoom level 5, do not rotate.
    const maxSpinZoom = 5;
    // Rotate at intermediate speeds between zoom levels 3 and 5.
    const slowSpinZoom = 3;

    let userInteracting = false;
    let spinEnabled = true;

    function spinGlobe() {
        const zoom = map.getZoom();
        if (spinEnabled && !userInteracting && zoom < maxSpinZoom) {
            let distancePerSecond = 360 / secondsPerRevolution;
            if (zoom > slowSpinZoom) {
                // Slow spinning at higher zooms
                const zoomDif =
                    (maxSpinZoom - zoom) / (maxSpinZoom - slowSpinZoom);
                distancePerSecond *= zoomDif;
            }
            const center = map.getCenter();
            center.lng -= distancePerSecond;
            // Smoothly animate the map over one second.
            // When this animation is complete, it calls a 'moveend' event.
            map.easeTo({ center, duration: 1000, easing: (n) => n });
        }
    }

    // Pause spinning on interaction
    map.on('mousedown', () => {
        userInteracting = true;
    });

    // Restart spinning the globe when interaction is complete
    map.on('mouseup', () => {
        userInteracting = false;
        spinGlobe();
    });

    // These events account for cases where the mouse has moved
    // off the map, so 'mouseup' will not be fired.
    map.on('dragend', () => {
        userInteracting = false;
        spinGlobe();
    });
    map.on('pitchend', () => {
        userInteracting = false;
        spinGlobe();
    });
    map.on('rotateend', () => {
        userInteracting = false;
        spinGlobe();
    });

    // When animation is complete, start spinning if there is no ongoing interaction
    map.on('moveend', () => {
        spinGlobe();
    });


    spinGlobe();
    map.scrollZoom.disable();
    map.doubleClickZoom.disable();
</script>
</body>
</html>
