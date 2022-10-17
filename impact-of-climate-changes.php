<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Climate Change</title>
        <meta charset="utf-8">
        <meta name="viewport" content="initial-scale=1,maximum-scale=1,user-scalable=no">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="bootstrap/css/impact-of-climate-changes.css">
        <link href="https://api.mapbox.com/mapbox-gl-js/v2.10.0/mapbox-gl.css" rel="stylesheet">
        <script src="https://api.mapbox.com/mapbox-gl-js/v2.10.0/mapbox-gl.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
      </head>
      <style>
        @import url('https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap');
        body{
            background-image: url(bootstrap/images/sub-module.png);
            height: 100%;
            width: 100%;
            background-repeat: no-repeat;
            background-size: cover;
            font-family: sans-serif;
        }
        .card{
            background-color: transparent;
        }
        .fs-18{
            font-size: 18px;
        }
        .lh-1-8{
            line-height: 1.8;
        }
        .lh-1-6{
            line-height: 1.6;
        }
        .main-header{
            color: #01a4cd;
            font-family: fantasy;
            text-transform: uppercase;
            letter-spacing: 2px;
            font-weight: 100!important;
        }
        .card-title{
            color : #238095!important;
            font-weight: bolder;
        }
        a.nav-link{
            color : #238095!important;
            font-weight: 600;
            font-family:'Oswald', sans-serif;
            font-size: 16px;
            padding-top: 4px;
            padding-bottom: 4px;
            padding-left: 8px;
            padding-right: 8px;
        }
        a.nav-link.active{
            color : white!important;
            background: #238095!important;
            font-size: 16px;
            padding-top: 4px;
            padding-bottom: 4px;
            padding-left: 8px;
            padding-right: 8px;
        }
        iframe{
            width: 100%;
            height:auto;
        }
        .main{
            position: absolute;
            height: 100%;
            width: 100%;
        }
        .main img{
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        .text-238095{
            color:#238095;
        }
        .nav-link{
            font-family:'Times New Roman', Times, serif;
            letter-spacing:1px;
            text-transform:capitalize;
            font-size:14px;
            text-transform: uppercase;
        }
        .reference-title{
            font-family:Verdana, Geneva, Tahoma, sans-serif;
            font-size: 16px;
        }
        .reference-links a{
            display: block;
            font-family: sans-serif;
            font-style: italic;
            color: black!important;
            opacity: 0.8;
            margin: 10px auto;
            word-wrap: break-word;
            overflow: hidden;
            background: #efeff2;
            padding: 3px 10px;
            border-radius: 10px;
        }
        .tab-pane p{
            color:#238095;
            padding: 1rem;
            background: #fcf2d8;
            border-radius: 10px
        }
        .reference-div{
            overflow: auto;
            max-height: 95vh;
        }
        .reference-div::-webkit-scrollbar {
            display: none;}
        .sub-module-nav-img{
            width: 14%;
            height: 14%;
        }
      </style>
<body class="py-3">
   <div class="d-flex">
    <div class="col-9">
        <div class="d-flex flex-column p-3 px-5 mb-4">
            <h1 class="pb-4 main-header card-title">
            Impacts of Climate Change
            </h1>
            <div class="text-justify fs-18 pb-0 lh-1-8 card-text text-238095">
            Climate change is happening. These real, observable changes are what we call climate change impacts because they are the visible ways that climate change is affecting the Earth. For example, many places have experienced changes in rainfall, more frequent natural disasters such as more severe droughts in many regions.  Deserts are expanding reducing land for growing food, while heat waves and wildfires are becoming more common.
            The planet's oceans and glaciers have also experienced changes—oceans are warming and the increased warming in the Arctic has contributed to melting permafrost, glacial retreat and sea ice loss cause sea levels to rise, threatening coastal and island communities.
            </div>
        </div>
            <div class="">
                <div class="card-body p-3 px-5">
                    <h4 class="card-title mb-4 pb-3 text-uppercase" style="color:#0d7b95!important">Natural Health Social Business</h4>
                    <div class="d-flex">
                        <div class="col-4 pl-0 pr-2 mr-2">
                            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">

                                <div class="d-flex flex-row justify-space-between align-items-center mb-4">
                                <img class="sub-module-nav-img mr-3" src="bootstrap/images/Hotter Temperature.png" alt="">
                                <a class="nav-link mb-2 active" id="v-pills-first-tab" data-bs-toggle="pill" href="#v-pills-first" role="tab" aria-controls="v-pills-first" aria-selected="true">
                                Hotter temperatures  </a>
                                </div>

                                <div class="d-flex flex-row justify-space-between align-items-center mb-4">
                                <img  class="sub-module-nav-img mr-3" src="bootstrap/images/increased drought.png" alt="">
                                <a class="nav-link mb-2" id="v-pills-second-tab" data-bs-toggle="pill" href="#v-pills-second" role="tab" aria-controls="v-pills-second" aria-selected="false" tabindex="-1">Increased drought </a>
                                </div>

                                <div class="d-flex flex-row justify-space-between align-items-center mb-4">
                                <img class="sub-module-nav-img mr-3" src="bootstrap/images/a warming rising ocean.png" alt="">
                                <a class="nav-link mb-2" id="v-pills-third-tab" data-bs-toggle="pill" href="#v-pills-third" role="tab" aria-controls="v-pills-third" aria-selected="false" tabindex="-1">Marine Environment </a>
                                </div>

                                <div class="d-flex flex-row justify-space-between align-items-center mb-4">
                                <img class="sub-module-nav-img mr-3" src="bootstrap/images/loss of species.png" alt="">
                                <a class="nav-link" id="v-pills-fourth-tab" data-bs-toggle="pill" href="#v-pills-fourth" role="tab" aria-controls="v-pills-fourth" aria-selected="false" tabindex="-1">Forest Fires </a>
                                </div>
                          
                            </div>
                        </div>
                        <div class="col-8 lh-1-6">
                            <div class="tab-content  text-605f5f text-justify mt-4 mt-md-0" id="v-pills-tabContent">
                                <div class="tab-pane fade active show" id="v-pills-first" role="tabpanel" aria-labelledby="v-pills-first-tab">
                                    <p>
                                    As greenhouse gas concentrations rise, so does the global surface temperature. The last decade, 2011-2021, is the warmest on record. Since the 1980s, each decade has been warmer than the previous one. Nearly all land areas are seeing more hot days and heat waves. Higher temperatures increase heat-related illnesses and make working outdoors more difficult. Temperatures in the Arctic have warmed at least twice as fast as the global average.
                                    </p>
                                </div>
                                <div class="tab-pane fade" id="v-pills-second" role="tabpanel" aria-labelledby="v-pills-second-tab">
                                    <p>
                                    Increase in temperature and erratic weather patterns have resulted in sudden and devastating droughts. Regions like east Africa have been severely affected.
                                    </p>
                                </div>
                                <div class="tab-pane fade" id="v-pills-third" role="tabpanel" aria-labelledby="v-pills-third-tab">
                                    <p>

                                    The impacts of climate change, such as increasing sea surface temperatures, ocean acidification and shifts in currents and wind patterns will significantly alter the physical and biological make-up of the oceans. Changes in temperatures and ocean circulation have the potential to change geographical fish distribution.
                                    </p>
                                </div>
                                <div class="tab-pane fade" id="v-pills-fourth" role="tabpanel" aria-labelledby="v-pills-fourth-tab">
                                    <p>
                                    Wildfires start more easily and spread more rapidly when conditions are hotter.
                                    </p>
                                        </div>
                                    </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    <div class="col-3 my-3 reference-div">
            <div class="card bg-white">
                <div class="card-body">
                    <div class="card-title text-center reference-title text-uppercase">
                        Reference
                    </div>
                    <hr>
                    <div class="py-1">
                    <iframe src="https://www.youtube.com/embed/Fg8YaPYBLLE" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <div class="py-1">
                    <iframe src="https://www.youtube.com/embed/EMFCbjPb5ng" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <hr/>
                    <div>
                        <div class="card-text reference-links">
                        <a href="https://www.epa.gov/climatechange-science/impacts-climate-change" target="_blank">https://www.epa.gov/climatechange-science/impacts-climate-change</a>
                        <a href="https://climate.ec.europa.eu/climate-change/consequences-climate-change_en" target="_blank">https://climate.ec.europa.eu/climate-change/consequences-climate-change_en</a>
                        <a href="https://phys.org/news/2021-06-climate-impacts-nature.html" target="_blank">https://phys.org/news/2021-06-climate-impacts-nature.html</a>
                        <a href="https://www.cdc.gov/climateandhealth/effects/default.htm" target="_blank">https://www.cdc.gov/climateandhealth/effects/default.htm</a>
                        </div>
                    </div>
                </div>
            </div>
    </div>
   </div>
</body>
</html>
