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
        .iframe-link{
            color : #238095!important;
            font-weight: 600;
            font-family:'Oswald', sans-serif;
            font-size: 16px;
            padding-top: 4px;
            padding-bottom: 4px;
            padding-left: 8px;
            padding-right: 8px;
            border:transparent;
            border-radius: 10px;
            margin-bottom: 10px;
        }
        .iframe-link:hover{
            background-color: #238095;
            color: ghostwhite!important;
            transition: background-color 1s ease, color 1s ease;
        }
        .close{
            position: absolute;
            z-index: 999;
            top: -15px;
            left: 101%;
            color: white;
            font-size: 4.8rem;
            opacity: 0.9;
        }
      </style>
<body class="py-3">
   <div class="d-flex">
    <div class="col-9">
        <div class="d-flex flex-column p-3 px-5 mb-4">
            <h1 class="pb-4 main-header card-title">
            Why is the Climate changing?
            </h1>
            <div class="text-justify fs-18 pb-3 lh-1-8 card-text text-238095">
            There have been previous periods of climate change, but the current changes are distinctly more rapid and not due to natural causes.    Instead, they are caused by the emission of greenhouse gases, mostly carbon dioxide (CO2) and methane. Burning fossil fuels for energy production creates most of these emissions. Certain agricultural practices, industrial processes, transport, buildings, landfills, and forest loss are additional sources.  Greenhouse gases are transparent to sunlight, allowing it to warm the Earth's surface. When the earth emits this heat as infrared radiation, it is absorbed by the gases, trapping the heat near the earth's surface and causing global warming and climate change.
            </div>

            <div class="text-justify fs-18 pb-0 lh-1-8 card-text text-238095">
            It is unequivocal that human influence has warmed the atmosphere, ocean and land. Widespread and rapid changes in the atmosphere, ocean, cryosphere, and biosphere have occurred. (cc. AR6_WGI_SPM)

            Human activities are estimated to have caused approximately 1.0°C of global warming5 above pre-industrial levels, with a likely range of 0.8°C to 1.2°C. Global warming is likely to reach 1.5°C between 2030 and 2052 if it continues to increase at the current rate. (cc. SR15)
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
                    <iframe src="https://www.youtube.com/embed/YGFp_hhi5wU" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <div class="py-1">
                    <iframe src="https://www.youtube.com/embed/B5Fwl4P4EW8" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <hr/>
                    <div>
                    <div class="card-text reference-links">
                        <button class="cursor-pointer iframe-link" data-toggle="modal" data-target="#openDataPlateform">Open Data Plateform</button>
                        <button class="cursor-pointer iframe-link" data-toggle="modal" data-target="#world">World ~ Climate Central</button>
                        <button class="cursor-pointer iframe-link" data-toggle="modal" data-target="#india">India ~ Climate Central</button>
                        <button class="cursor-pointer iframe-link" data-toggle="modal" data-target="#us">US ~ Climate Central</button>
                        <button class="cursor-pointer iframe-link" data-toggle="modal" data-target="#germany">Germany ~ Climate Central</button>
                        <button class="cursor-pointer iframe-link" data-toggle="modal" data-target="#denmark">Denmark ~ Climate Central</button>
                        <button class="cursor-pointer iframe-link" data-toggle="modal" data-target="#russia">Russia ~ Climate Central</button>
                        <div class="modal border-radius-10px fade show" id="openDataPlateform" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <div class="modal-content">
                                    <iframe class="ext-links border-radius-10px" allow="fullscreen 'src'" frameBorder="0" src="https://data.footprintnetwork.org/?_ga=2.188711912.1762111747.1665640712-1402344740.1665640712#/" title="Climate Central | Comparison: long-term sea level outcomes" >
                                    </iframe>
                                </div>
                            </div>
                        </div>
                        <div class="modal border-radius-10px fade show" id="world" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <div class="modal-content">
                                    <iframe class="ext-links border-radius-10px" src="https://data.footprintnetwork.org/?_ga=2.188711912.1762111747.1665640712-1402344740.1665640712#/countryTrends?cn=5001&type=BCtot,EFCtot" frameborder="0"></iframe>
                                </div>
                            </div>
                        </div>
                        <div class="modal border-radius-10px fade show" id="india" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <div class="modal-content">
                                <iframe class="ext-links border-radius-10px" src="https://data.footprintnetwork.org/?_ga=2.188711912.1762111747.1665640712-1402344740.1665640712#/countryTrends?type=BCtot,EFCtot&cn=100" title="Embed Mumbai Sea Level Rise Comparison" frameborder="0"></iframe>
                                </div>
                            </div>
                        </div>
                        <div class="modal border-radius-10px fade show" id="us" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <div class="modal-content">
                                <iframe class="ext-links border-radius-10px" src="https://data.footprintnetwork.org/?_ga=2.188711912.1762111747.1665640712-1402344740.1665640712#/countryTrends?type=BCtot,EFCtot&cn=231" title="Embed Dubai Sea Level Rise Comparison" frameborder="0"></iframe>
                                </div>
                            </div>
                        </div>
                        <div class="modal border-radius-10px fade show" id="germany" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <div class="modal-content">
                                <iframe class="ext-links border-radius-10px" src="https://data.footprintnetwork.org/?_ga=2.188711912.1762111747.1665640712-1402344740.1665640712#/countryTrends?type=BCtot,EFCtot&cn=79" title="Embed St. Petersburg Sea Level Rise Comparison" frameborder="0"></iframe>
                                </div>
                            </div>
                        </div>
                        <div class="modal border-radius-10px fade show" id="denmark" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <div class="modal-content">
                                <iframe class="ext-links border-radius-10px" src="https://data.footprintnetwork.org/?_ga=2.188711912.1762111747.1665640712-1402344740.1665640712#/countryTrends?type=BCtot,EFCtot&cn=54" title="Embed St. Petersburg Sea Level Rise Comparison" frameborder="0"></iframe>
                                </div>
                            </div>
                        </div>
                        <div class="modal border-radius-10px fade show" id="russia" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <div class="modal-content">
                                <iframe class="ext-links border-radius-10px" src="https://data.footprintnetwork.org/?_ga=2.188711912.1762111747.1665640712-1402344740.1665640712#/countryTrends?type=BCtot,EFCtot&cn=185" title="Embed St. Petersburg Sea Level Rise Comparison" frameborder="0"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
    </div>
   </div>
</body>
</html>
