<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Climate Change</title>
        <meta charset="utf-8">
        <meta name="viewport" content="initial-scale=1,maximum-scale=1,user-scalable=no">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="bootstrap/css/main.css">
        <script src="bootstrap/js/jquery.slim.min.js"></script>
        <script src="bootstrap/js/popper.min.js"></script>
        <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
        <link href="https://api.mapbox.com/mapbox-gl-js/v2.10.0/mapbox-gl.css" rel="stylesheet">
        <script src="https://api.mapbox.com/mapbox-gl-js/v2.10.0/mapbox-gl.js"></script>
        <style>
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
        #map {
            position: absolute;
            top: -93px!important;
            left:0px!important;
            bottom: 0;
            width: 100%;
        }
        .mb-10{
          margin-bottom: 6rem;
        }
        .mapboxgl-canvas {
            position: absolute;
            left: 0;
            top: -4rem!important;
        }
        a{
          color:black!important;
        }
        a:hover {
            color: #0056b3;
            text-decoration: none!important;}

        </style>
      </head>
<body>
<div class="container">
    <div class="row">
        <div class="col-sm-12 col-md-12 mb-10">
            <div class="page-title">
                <a href="cff.php"><h1 class="lead">Climate change</h1></a>
                <p class="sublead">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis .</p>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid mb-10">
  <div class="row">
      <div class="col-md-3 col-sm-12 text-center">
        <div class="text-box pb-3">
        <img src="bootstrap/images/cc-1.jpg" alt="">
          <h3> <a href=""> What is <span style="color:#007bff">climate change </span> and how does it affect us? </a> </h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor </p>
        </div>
        <div class="text-box pb-3">
        <img src="bootstrap/images/cc-2.webp" alt="">
          <h3><a href="#">Why is the <span style="color:#007bff">Climate changing?</span></a></h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor </p>
        </div>
        <div class="text-box pb-3">
        <img src="bootstrap/images/cc-3.webp" alt="">
          <h3> <a href="">Impact of <span style="color:#007bff"> climate changes </span></a> </h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
        </div>
      </div>
      <div class="col-md-6 col-sm-12 ">
        <div class="choose-box">
          <div class="inner-box">
            <div class="content" id="map">
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-12 text-center">
        <div class="text-box pb-3">
        <img src="bootstrap/images/cc-4.jpg" alt="">
          <h3> <a href="">Severity of <span style="color:#007bff"> Climate Change </span></a></h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
        </div>
        <div class="text-box pb-3">
        <img src="bootstrap/images/cc-5.webp" alt="">
          <h3><a href="#"> <span style="color:#007bff">Climate Change</span> adaptation and mitigation </a></h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor </p>
        </div>
        <div class="text-box">
        <img src="bootstrap/images/cc-6.jpg" alt="">
          <h3> <a href=""> <span style="color:#007bff"> Climate change </span> vulnerability</a></h3>
          <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor </p>
        </div>
      </div>
    </div>
</div>
<script>
	mapboxgl.accessToken = 'pk.eyJ1IjoidmF5dWFuYW5kYSIsImEiOiJjbDkydDV0MmcwNjlmNDFvN29raXdzcXFwIn0.asZzmJPtFaQ0YX02b0cEFA';
    const map = new mapboxgl.Map({
        container: 'map',
        zoom: 1.1,
        center: [-1000, 20],
        style: 'mapbox://styles/mapbox/satellite-v9',
        projection: 'globe' // Display the map as a globe
    });

    map.on('style.load', () => {
        map.setFog({
      'range': [-1, 2],
      'horizon-blend': 0,
      'space-color': '#e0dede',
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
