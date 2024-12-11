<?php include "text.php" ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Ap crops</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: linear-gradient(to right,
                    rgb(16, 37, 16),
                    rgb(165, 196, 115));
            margin: 0;
            padding: 0;
        }

        header {
            background-image: linear-gradient(to top, #5430d6 0%, #c5434d 100%);
            color: white;
            text-align: center;
            padding: 10px 0;
        }

        .container {
            max-width: 1300px;
            margin: 20px auto;
            padding: 100px;
            background-image: linear-gradient(to top, #ee6a2d 0%, #e0949a 100%);
            box-shadow: 0 0 20px rgba(80, 5, 87, 0.1);
            border-radius: 10px;
        }

        .crop-card {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin: 40px;
            padding: 20px;
            background-color: rgb(92, 122, 151);
            box-shadow: 0 0 0 3px black;
            border: 1px solid #000000;
            border-radius: 50px;
            transition: transform 0.2s ease-in-out;
        }

        .crop-card:hover {
            transform: scale(1.08);
        }

        .crop-image {
            max-width: 25%;
            height: 25%;
            border-radius: 5px;
            margin-bottom: 7px;
        }

        .crop-name {
            font-size: 24px;
            font-weight: bold;
            text-align: center;
        }

        .crop-description {
            text-align: center;
        }

        ::-webkit-scrollbar {
            width: 9px;

        }

        ::-webkit-scrollbar-thumb {
            background-color: #5f5f5f;
            border-radius: 20px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background-color: #3e3d3d;
        }

        ::-webkit-scrollbar-track:hover {
            background-color: rgb(255, 255, 255);
        }
    </style>
</head>

<body>
    <header>
        <h1>
            <p style="float:left;">
                <button onclick="myfunction()">
                    <img src="https://cdn-icons-png.flaticon.com/512/25/25694.png" alt="W3Schools.com" width="30"
                        height="40" style="background-color: white" />
                </button>
                <button onclick="myfunction1()">
                    <img src="https://thumb.ac-illust.com/ef/ef76a36c7a4f85f140bf3566836df260_t.jpeg"
                        alt="W3Schools.com" width="30" height="40" style="background-color: white" />
                </button>
            </p>Major Crops In Andhrapradesh
        </h1>
    </header>
    <div class="container">
        <div class="crop-card">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQkt57OXX88zUAwjey7m3NgemnRKq3V5WEqqtstc4F7&s"
                alt="Crop 1" class="crop-image" />
            <h2 class="crop-name">Paddy</h2>
            <p class="crop-description">
                Rice is one of the primary staple crops of Andhra Pradesh,
                particularly in the coastal regions and river deltas.<br />
                The state is known for its high-quality rice varieties such as
                BPT-5204 and Sona Masuri.<br />
                The crop is well-suited to the tropical, humid climate of the coastal
                areas and thrives with the ample monsoon rainfall.<br />
                Rice farming is a significant source of livelihood for many farmers in
                the state.<br />
            </p>
        </div>
        <div class="crop-card">
            <img src="https://files.worldwildlife.org/wwfcmsprod/images/Cotton_09.21.12_Industries/hero_small/74bop80spn_133837741.jpg"
                alt="Crop 2" class="crop-image" />
            <h2 class="crop-name">Sugarcane</h2>
            <p class="crop-description">
                Sugarcane is a vital cash crop grown primarily in the coastal areas of
                Andhra Pradesh. The state is home to numerous sugar mills and produces
                a significant quantity of sugarcane. The crop requires well-irrigated
                fields and warm weather for optimal growth. Sugarcane is used not only
                for sugar production but also for jaggery and ethanol.
            </p>
        </div>
        <div class="crop-card">
            <img src="https://files.worldwildlife.org/wwfcmsprod/images/Cotton_09.21.12_Industries/hero_small/74bop80spn_133837741.jpg"
                alt="Crop 2" class="crop-image" />
            <h2 class="crop-name">Cotton</h2>
            <p class="crop-description">
                Cotton cultivation is prominent in the Deccan Plateau region and parts
                of Rayalaseema. Andhra Pradesh is a major cotton-producing state in
                India. The cotton crop is well-suited to the black soils of the Deccan
                Plateau. Cotton is a vital raw material for the textile industry, and
                its cultivation significantly contributes to the state's economy.
            </p>
        </div>
        <div class="crop-card">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSvYuIsOSjL7cRSiD0Skcu51q8fT4UTDCnHngwXIMfq&s"
                alt="Crop 2" class="crop-image" />
            <h2 class="crop-name">Groundnuts</h2>
            <p class="crop-description">
                Groundnuts are a key crop in the Rayalaseema region of Andhra Pradesh.
                The semi-arid climate and well-drained soils are ideal for groundnut
                cultivation. These legumes are a valuable source of protein and oil.
                Groundnuts are used in various forms, including cooking oil, peanut
                butter, and snacks..
            </p>
        </div>
        <div class="crop-card">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTAFHQNhWu8Cw3ByqPbvsbEmYXpdBCIJuZ357nVD-lLJxwHECw_b_tvbTVfSwIwVlSHDOc&usqp=CAU"
                alt="Crop 2" class="crop-image" />
            <h2 class="crop-name">Maize</h2>
            <p class="crop-description">
                Maize is grown extensively in Telangana and some parts of Rayalaseema.
                It is a versatile crop used for both human consumption and animal
                feed. Maize is known for its adaptability to different soil and
                climatic conditions, making it an important choice for farmers in
                various regions of Andhra Pradesh.
            </p>
        </div>
        <div class="crop-card">
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/f/f1/Sunflower_cultivation%2Ctadpatri%2CAP_-_panoramio.jpg/1200px-Sunflower_cultivation%2Ctadpatri%2CAP_-_panoramio.jpg?20170507154337"
                alt="Crop 2" class="crop-image" />
            <h2 class="crop-name">Sunflower</h2>
            <p class="crop-description">
                Sunflower cultivation is gaining popularity in the semi-arid regions
                of Andhra Pradesh. The oil extracted from sunflower seeds is used for
                cooking and as an ingredient in various food products. Sunflowers are
                known for their bright yellow blooms and their oil-rich seeds
            </p>
        </div>
        <div class="crop-card">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQA6HqNgcILqKGjs4WbTXsKRSaOAZatO6Uv4do2WhGL&s"
                alt="Crop 2" class="crop-image" />
            <h2 class="crop-name">Chilles</h2>
            <p class="crop-description">
                Andhra Pradesh is famous for its spicy red chillies, especially the
                Guntur chilli. These chillies thrive in the state's warm and dry
                climate. They are an essential ingredient in traditional Andhra
                cuisine and are also exported to various parts of the world. The state
                is a major chilli-producing region in India.
            </p>
        </div>
        <div class="crop-card">
            <img src="https://static.toiimg.com/thumb/msid-85341644,imgsize-1219494,width-400,resizemode-4/85341644.jpg"
                alt="Crop 2" class="crop-image" />
            <h2 class="crop-name">Tobacco</h2>
            <p class="crop-description">
                Tobacco cultivation is prevalent in the Prakasam and Nellore districts
                of Andhra Pradesh. The state produces high-quality tobacco used in the
                tobacco and cigarette industries. It requires well-drained soils and
                careful cultivation practices.
            </p>
        </div>
        <!-- Add more crop cards as needed -->
    </div>
    <script src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    <script>
        function googleTranslateElementInit() {
            new google.translate.TranslateElement(
                { pageLanguage: "en" },
                "google_translate_element"
            );
        }
    </script>
    <script>
        function myfunction() {
            location.replace("index.php")
        }
    </script>
    <script>
        function myfunction1() {
            location.replace("andhra.php")
        }
    </script>
</body>

</html>