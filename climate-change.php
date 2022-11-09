<!DOCTYPE html>
<html lang="en">
<head>
  
    <title>Climate Change</title>
    <meta charset="utf-8">
    
    <link rel="stylesheet" href="bootstrap/css/bootstraps.min.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>

    <link href="https://api.mapbox.com/mapbox-gl-js/v2.10.0/mapbox-gl.css" rel="stylesheet">
    <script src="https://api.mapbox.com/mapbox-gl-js/v2.10.0/mapbox-gl.js"></script>

    <link href="bootstrap/css/climate-change.css" rel="stylesheet">
</head>
<body>
<div class="container">
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
  <div class="d-flex px-5">

      <div class="text-center px-0 mx-0">

        <div class="d-flex flex-column justify-content-center align-items-center text-box pb-2" style="height: 6rem;margin-bottom: 4rem;">
          <img src="bootstrap/images/homepage/WHAT IS CLIMATE CHANGE AND.png" alt="" style="width:35%">
          <div class="d-flex flex-column" style="height: 6rem;">
            <h3 class="pt-2"> <a href="what-is-climate-change-and-how-does-it-affect-us"> What is climate change  and <br><span class="heading-green">how does it affect us?</span>  </a> </h3>
            <p class="text-center">Climate change refers to a change in the state of the climate that can be identified (e.g., by using statistical tests) by changes in the mean and/or the variability of its properties, and that persists for an extended period, typically decades or longer.
            </p>
          </div>
        </div>

        <div class="d-flex flex-row  text-box" style="margin-bottom:0rem">
          <img src="bootstrap/images/homepage/2.png" alt="" style="width:25%">
          <div class="d-flex flex-column justify-content-end">
            <h3 class="pt-2 text-start"><a href="why-is-the-climate-changing">Why is the <br> <span class="heading-green">Climate changing?</span> </a></h3>
            <p>There are two main types of external sources leading to climate change. Some external factors occur naturally and contribute to the overall natural variability of the climate system, such as solar radiation and volcanism.</p>
          </div>
        </div>

        <div class="d-flex flex-column justify-content-center align-items-center text-box pb-2">
          <img  src="bootstrap/images/homepage/3.png" alt="" style="width: 30%;">
          <div class="d-flex flex-column">
            <h3 class="pt-2"> <a href="impact-of-climate-changes">Impacts of  <br> <span class="heading-green">climate changes </span> </a> </h3>
            <p class="text-center">Climate change is happening. These real, observable changes are what we call climate change impacts​​​​​​ because they are the visible ways that climate change is affecting the Earth.
            </p>
          </div>
      </div>

      </div>

      <div class="d-flex align-items-center justify-content-center px-0 mx-0">
            <img src="bootstrap/images/homepage/767.png" alt="" style="width:100%;margin-bottom:5rem;">
      </div>

      <div class="text-center px-0 mx-0">

        <div class="d-flex flex-column justify-content-center align-items-center text-box pb-2" style="height: 4rem;margin-bottom: 4rem;">
          <img  src="bootstrap/images/homepage/76.png" alt="" style="width:60%!important">
          <div class="d-flex flex-column" style="height: 4rem;">
            <h3 class="pt-2"><a href="climate-change-adaptation-cand-mitigation"> Climate Change <br> <span class="heading-green">adaptation and mitigation</span>  </a></h3>
            <p class="text-center">Three broad categories of action against Climate Change are: cutting emissions, adapting to climate impacts, and financing required adjustments.</p>
          </div>
        </div>

        <div class="d-flex flex-row text-box" style="margin-bottom:2.4rem">
        <div class="d-flex flex-column justify-content-end">
          <h3 class="pt-2 text-end"> <a href="climate-change-vulnerability">  Climate change <br> <span class="heading-green">vulnerability</span> </a></h3>
          <p class="text-end"> The severity of impacts from extreme and non-extreme weather and climate events is highly dependent on the degree of vulnerability and exposure to these events.</p>
        </div>
        <img src="bootstrap/images/homepage/566.png" alt="" style="width:30%">
      </div>

      <div class="d-flex flex-column justify-content-center align-items-center text-box pb-2">
          <img src="bootstrap/images/homepage/55.png" alt="" style="width: 35%;">
          <div class="d-flex flex-column">
            <h3 class="pt-2"> <a href="severity-of-climate-change">Severity of <br> <span class="heading-green">Climate Change</span> </a></h3>
            <p class="text-center">In a series of UN reports, thousands of scientists and government experts agreed that limiting the global temperature increase to no more than 1.5 °C would help avoid the worst climate impacts and preserve a liveable climate.</p>
          </div>
        </div>

      </div>

    </div>

</div>
<script>
	mapboxgl.accessToken = 'pk.eyJ1IjoidmF5dWFuYW5kYSIsImEiOiJjbDkydDV0MmcwNjlmNDFvN29raXdzcXFwIn0.asZzmJPtFaQ0YX02b0cEFA';
    const map = new mapboxgl.Map({
        container: 'map',
        // zoom: 0.9,
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
    map.resize();
</script>
</body>
</html>
