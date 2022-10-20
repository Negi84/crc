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
        .w-20per{
            width:10%;
        }
        .font-cursive{
            font-family: cursive;
        }
      </style>
<body class="py-3">
   <div class="d-flex">
    <div class="col-9">
        <div class="d-flex flex-column p-3 px-5 mb-4 font-cursive">
            <h1 class="pb-4 main-header card-title">
                Climate Change adaptation and mitigation
            </h1>
            <div class="text-justify fs-18 pb-4 lh-1-8 card-text text-238095">
                <h5 style="color:#073c47">Mitigation</h5>
                Mitigation addresses the causes of climate change and includes efforts to reduce, prevent or stabilize the flow into and levels of heat-trapping greenhouse gases in the atmosphere. This is done either by reducing the sources of these gases (e.g., burning fossil fuels) or by enhancing the reservoirs that accumulate and store them (e.g., the oceans, forests, and soils). The goal of mitigation is to avoid significant human impact on the Earth's climate and to stabilize greenhouse gas concentrations over a time frame sufficient to e.g., allow ecosystems to adapt naturally. Adaption refers to the adjustment in response to climate change. The aim is to reduce the risks posed by the harmful effects of climate change (such as rising sea levels, more intense extreme weather events or food insecurity). Harnessing the potential benefits associated with climate change is also included (e.g., higher yields of longer growing seasons in certain regions).
            </div>

            <div class="text-justify fs-18 pb-0 lh-1-8 card-text text-238095">
                <h5 style="color:#073c47">Adaptation</h5>
                While climate change is a global problem, it is being felt at the local level. Local authorities are therefore at the forefront of adaptation. Cities and towns around the world have focused on solving their own climate problems. They are working to build flood defences, plan for higher temperatures, install better-draining sidewalks to manage flooding, and improve water storage and use. Despite progress, adaptation gaps exist between current levels of adaptation and levels needed to respond to impacts and reduce climate risks. Most observed adaptation is fragmented, small in scale, incremental, sector-specific, designed to respond to current impacts or near-term risks, and focused more on planning rather than implementation which reduces the opportunity for transformational adaptation. Adaptation to water-related risks and impacts make up the majority of all documented adaptation. Many adaptation options exist but their implementation depends upon the capacity and effectiveness of governance and decision-making processes. These and other enabling conditions can also support climate resilient development.
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
                    <iframe src="https://www.youtube.com/embed/SDRxfuEvqGg" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <div class="py-1">
                    <iframe src="https://www.youtube.com/embed/7yHcXQoR1zA" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>

                    <div class="py-1">
                    <iframe src="https://www.youtube.com/embed/pLU8v8fAw7s" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>

                    <button class="cursor-pointer iframe-link mb-2" href="bootstrap/pdfs/IPCC_AR6_WGII_Chapter17.pdf" target="_blank" onclick="location.href = 'bootstrap/pdfs/IPCC_AR6_WGII_Chapter17.pdf' ">
                        <div>
                        <img class="w-20per" src="bootstrap/images/pdf-logo.png" alt="IPCC-AR6-WGII-PDF">
                        IPCC_AR6_WGII_Chapter17
                        </div>
                    </button>
                    <button class="cursor-pointer iframe-link" href="bootstrap/pdfs/IPCC_AR6_WGII_Chapter18.pdf" target="_blank" onclick="location.href = 'bootstrap/pdfs/IPCC_AR6_WGII_Chapter18.pdf' ">
                        <div>
                        <img class="w-20per" src="bootstrap/images/pdf-logo.png" alt="IPCC-AR6-WGII-PDF">
                        IPCC_AR6_WGII_Chapter18
                        </div>
                    </button>
                </div>
            </div>
    </div>
   </div>
</body>
</html>
