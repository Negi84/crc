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
        .font-cursive{
            font-family: cursive;
        }
      </style>
<body class="py-3">
   <div class="d-flex">
    <div class="col-9">
        <div class="d-flex flex-column p-3 px-5 mb-4">
            <h1 class="pb-4 main-header card-title">
            What is climate change and how does it affect us?
            </h1>
            <div class="text-justify fs-18 pb-3 lh-1-8 card-text text-238095 font-cursive">
            Global climate change refers to the average long-term changes over the entire Earth. These include warming temperatures and changes in precipitation, as well as the effects of Earth’s warming, such as rising sea levels, shrinking glaciers, ice melting at a faster rate than usual, frequent droughts and many more environmental events.
            
            Climate change is one of the most complex issues and the key global challenge of our time and refers to long-term changes in temperatures and weather patterns.  Climate change is primarily caused by the accumulation of greenhouse gases in the atmosphere, trapping the sun’s heat. This process is commonly known as the greenhouse effect.  The major driver of climate change since the mid-twentieth century has been the increasing levels of greenhouse gases in the atmosphere due to human activities. 
            </div>

            <div class="text-justify fs-18 pb-0 lh-1-8 card-text text-238095 font-cursive">
            Nowadays, the world is warming faster than ever before in recorded history. Warmer temperatures over time and changing weather patterns are interfering with nature's usual balance. As the system of earth is interconnected, this poses many risks to human beings and all other forms of life on Earth. Today, the consequences of climate change include, among others, intense droughts, water scarcity, severe fires, rising sea levels, flooding, melting polar ice, catastrophic storms, declining biodiversity and agricultural crop failure. Climate change is a global phenomenon produced by countless activities by individuals, communities and countries around the world.  The impacts of climate change are global and unprecedented in scale.
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
                        <a href="bootstrap/images/climate-change-impacts-2.jpg"><img class="w-100" src="bootstrap/images/climate-change-impacts-2.jpg" alt="climate-change-impacts"></a>
                    </div>
                    <div class="py-1">
                    <iframe src="https://www.youtube.com/embed/QlQ-MEZgRGY" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <!-- <div class="py-1">
                    <iframe src="https://www.youtube.com/embed/pLU8v8fAw7" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div> -->
                    <div class="py-1">
                    <iframe src="https://www.youtube.com/embed/g9uLN8oRbMw" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <div class="py-1">
                    <iframe src="https://www.youtube.com/embed/QlQ-MEZgRGY" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
    </div>
   </div>
</body>
</html>
