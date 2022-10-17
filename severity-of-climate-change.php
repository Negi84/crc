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
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
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
        iframe.ext-links{
            width: 100%;
            height: 100%;
        }
        .modal-dialog{
            max-width:80%;
            max-height:80%;
        }
        .border-radius-10px{
            border-radius: 10px;
        }
        .modal-backdrop.in {
	        opacity: 0.6;}
        .modal-content{
            height: 100%!important;
        }
        .modal-dialog{
            height:100%!important;
        }
        .cursor-pointer{
            cursor: pointer;
        }
      </style>
<body class="py-3">
   <div class="d-flex">
    <div class="col-9">
        <div class="d-flex flex-column p-3 px-5 mb-4">
            <h1 class="pb-4 main-header card-title">
            Severity of Climate Change 
            </h1>
            <div class="text-justify fs-18 pb-0 lh-1-8 card-text text-238095">
            Recent climate changes are widespread, quick, and intensifying, and unprecedented for thousands of years. Without immediate, rapid, and large-scale reductions in greenhouse gas emissions, the goal of limiting warming to 1.5°C will be unattainable. Climate change is already affecting all regions of the world in a variety of ways, and changes will increase with further warming. Some changes in the climate system, such as sea-level rise, cannot be reversed; however, some changes could be slowed, and others halted by limiting warming. Limiting global warming will require strong, rapid, and sustained reductions in carbon dioxide, methane, and other greenhouse gases. 
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
                    <iframe src="https://www.youtube.com/embed/F-jxtYeAy_Q" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <hr/>
                    <div>
                        <div class="card-text reference-links">
                        <a  class="cursor-pointer" data-toggle="modal" data-target="#carbonMap">The Carbon Map</a>
                        <a  class="cursor-pointer" data-toggle="modal" data-target="#dhaka">Dhaka ~ Climate Central</a>
                        <a  class="cursor-pointer" data-toggle="modal" data-target="#mumbai">Mumbai ~ Climate Central</a>
                        <a  class="cursor-pointer" data-toggle="modal" data-target="#dubai">Dubai ~ Climate Central</a>
                        <a  class="cursor-pointer" data-toggle="modal" data-target="#russia">Russia ~ Climate Central</a>
                        <div class="modal border-radius-10px fade show" id="carbonMap" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <iframe class="ext-links border-radius-10px" allow="fullscreen 'src'" frameBorder="0" src="https://www.carbonmap.org/#SeaLevel" title="Climate Central | Comparison: long-term sea level outcomes">
                                    </iframe>
                                </div>
                            </div>
                        </div>
                        <div class="modal border-radius-10px fade show" id="dhaka" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <iframe class="ext-links border-radius-10px" src="https://picturing.climatecentral.org/location/23.762466,90.3763871/embed?screenshot=false&header=true&labels=true&range=false&arrows=false&percent=50&left=1.5&right=3" title="Embed Dhaka Sea Level Rise Comparison" frameborder="0"></iframe>
                                </div>
                            </div>
                        </div>
                        <div class="modal border-radius-10px fade show" id="mumbai" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                <iframe class="ext-links border-radius-10px" src="https://picturing.climatecentral.org/location/18.9269015,72.8304976/embed?screenshot=false&header=true&labels=true&range=false&arrows=false&percent=50&left=1.5&right=3" title="Embed Mumbai Sea Level Rise Comparison" frameborder="0"></iframe>
                                </div>
                            </div>
                        </div>
                        <div class="modal border-radius-10px fade show" id="dubai" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                <iframe class="ext-links border-radius-10px" src="https://picturing.climatecentral.org/location/25.197197,55.2721824/embed?screenshot=false&header=true&labels=true&range=false&arrows=false&percent=50&left=1.5&right=3" title="Embed Dubai Sea Level Rise Comparison" frameborder="0"></iframe>
                                </div>
                            </div>
                        </div>
                        <div class="modal border-radius-10px fade show" id="russia" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                <iframe class="ext-links border-radius-10px" src="https://picturing.climatecentral.org/location/59.939811,30.3145594/embed?screenshot=false&header=true&labels=true&range=false&arrows=false&percent=50&left=1.5&right=3" title="Embed St. Petersburg Sea Level Rise Comparison" frameborder="0"></iframe>
                                </div>
                            </div>
                        </div>
                        <a href="https://climate.nasa.gov/images-of-change/?id=804#804-severe-monsoon-rains-cause-catastrophic-flooding-in-pakistan" target="_blank">https://climate.nasa.gov/images-of-change/?id=804#804-severe-monsoon-rains-cause-catastrophic-flooding-in-pakistan</a>
                        <a href="https://climate.nasa.gov/images-of-change/?id=803#803-declining-peyto-glacier-canada" target="_blank">https://climate.nasa.gov/images-of-change/?id=803#803-declining-peyto-glacier-canada</a>
                        </div>
                    </div>
                </div>
            </div>
    </div>
   </div>
</body>
</html>
