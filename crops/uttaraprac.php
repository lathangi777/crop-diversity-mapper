<?php include "text.php" ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Uttarpradesh crops</title>
    <style>
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
            text-align: auto;
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

        </h1>
        <h1>Major Crops In Uttarpradesh</h1>
    </header>
    <div class="container">
        <div class="crop-card">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRXSvisGXfhNLV40WDvjrDav1oPOysXqht33xInXtRdvw&s"
                alt="Crop 2" class="crop-image" />
            <h2 class="crop-name">Wheat</h2>
            <p class="crop-description">
                Wheat (Triticum aestivum) is a major cereal crop in Uttar Pradesh,
                contributing significantly to the state's agricultural production and
                food security.<br />
                1. Varieties:<br />

                Uttar Pradesh cultivates a wide range of wheat varieties, including
                both high-yielding modern varieties and traditional landraces. Some
                popular wheat varieties grown in the state include HD 2967, UP 2425,
                and PBW 343.<br />
                2. Cultivation Seasons:<br />

                Wheat is primarily a Rabi (winter) crop in Uttar Pradesh, sown from
                late October to December. It is harvested during the spring season,
                typically from March to April.<br />
            </p>
        </div>

        <div class="crop-card">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQkt57OXX88zUAwjey7m3NgemnRKq3V5WEqqtstc4F7&s"
                alt="Crop 2" class="crop-image" />
            <h2 class="crop-name">Rice</h2>
            <p class="crop-description">
                Rice (Oryza sativa) is one of the primary cereal crops cultivated in
                Uttar Pradesh, playing a crucial role in the state's agriculture and
                food security.<br />
                1. Varieties:<br />

                Uttar Pradesh cultivates various rice varieties, including both
                traditional and modern high-yielding varieties. Some popular rice
                varieties grown in the state include Pusa Basmati, Swarna, IR 64, and
                PR 106.<br />
                2. Cultivation Seasons:<br />

                Rice cultivation in Uttar Pradesh is primarily divided into two
                seasons: Kharif and Rabi. Kharif rice is sown during the monsoon
                season, from June to July, and harvested from September to October.
                Rabi rice is sown during the winter season, from November to December,
                and harvested from March to April.<br />
            </p>
        </div>
        <div class="crop-card">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSIZRv65byCBRdTgbsy9rKfXgqjXa9WlOZM0uSMTozn&s"
                alt="Crop 2" class="crop-image" />
            <h2 class="crop-name">Sugarcane</h2>
            <p class="crop-description">
                Sugarcane (Saccharum officinarum) is a major cash crop in Uttar
                Pradesh and plays a pivotal role in the state's agriculture and
                economy.<br />
                1. Varieties:<br />

                Uttar Pradesh cultivates a wide range of sugarcane varieties,
                including both traditional and improved hybrids. Some popular
                sugarcane varieties grown in the state include Co 0238, CoS 767, and
                Co 11015.<br />
                2. Cultivation Seasons:<br />

                Sugarcane is primarily a Kharif (monsoon) crop in Uttar Pradesh, sown
                from late February to early March. It is harvested during the
                post-monsoon season, typically from October to March.<br />
            </p>
        </div>

        <div class="crop-card">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQqvAIYionJIVAOr8yhMUHtsiyk5Wh1bvlPWw&usqp=CAU"
                alt="Crop 2" class="crop-image" />
            <h2 class="crop-name">Pulses</h2>
            <p class="crop-description">
                Pulses are an essential component of Uttar Pradesh's agriculture,
                providing a source of protein for its vast population. Here's detailed
                information about pulses cultivation in Uttar Pradesh:<br />

                1. Types of Pulses:<br />

                Uttar Pradesh cultivates a variety of pulses, including pigeon pea
                (arhar), chickpea (chana), lentil (masoor), green gram (moong), black
                gram (urad), and others. The choice of pulses depends on the region
                and agro-climatic conditions.<br />
                2. Cultivation Seasons:<br />

                Pulses in Uttar Pradesh are mainly cultivated during two seasons: Rabi
                (winter) and Kharif (monsoon). Rabi pulses, like chickpea and lentil,
                are sown from November to December and harvested from March to April.
                Kharif pulses, such as pigeon pea and green gram, are sown from June
                to July and harvested from September to October.<br />
            </p>
        </div>

        <div class="crop-card">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTAFHQNhWu8Cw3ByqPbvsbEmYXpdBCIJuZ357nVD-lLJxwHECw_b_tvbTVfSwIwVlSHDOc&usqp=CAU"
                alt="Crop 2" class="crop-image" />
            <h2 class="crop-name">Maize</h2>
            <p class="crop-description">
                Maize (Zea mays) is a significant cereal crop in Uttar Pradesh,
                contributing to both food and industrial sectors.<br />
                1. Varieties:<br />

                Uttar Pradesh cultivates a range of maize varieties, including hybrid
                and traditional varieties. Popular maize varieties grown in the state
                include HM 4, HM 8, HQPM 7, and Shaktiman.<br />
                2. Cultivation Seasons:<br />

                Maize is grown in both Kharif (monsoon) and Rabi (winter) seasons in
                Uttar Pradesh. Kharif maize is sown from June to July and harvested
                from October to November. Rabi maize is sown from November to December
                and harvested from March to April.<br />
            </p>
        </div>

        <div class="crop-card">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR4QXubiryUBkyODJ38_HLbwjyy03fPhKkOQjmvCMcZ7xbyK8POOGr7AJ9PCzpeU-GERmo&usqp=CAU"
                alt="Crop 2" class="crop-image" />
            <h2 class="crop-name">Potatoes</h2>
            <p class="crop-description">
                Potato (Solanum tuberosum) is an important vegetable and cash crop in
                Uttar Pradesh.<br />
                1. Varieties:<br />

                Uttar Pradesh cultivates a variety of potato varieties, including both
                early and late-maturing types. Some popular potato varieties grown in
                the state include Kufri Badshah, Kufri Chandramukhi, and Kufri
                Pukhraj.<br />
                2. Cultivation Seasons:<br />

                Potatoes in Uttar Pradesh are primarily grown during the Rabi (winter)
                season. Planting typically starts from late October to early November,
                and harvesting occurs from January to February.<br />
            </p>
        </div>

        <div class="crop-card">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRR9ZULtphUmyI49z1uMRK4rEtD7YmjNUIc8v8kbdZgZ9j0MyuztiD6WsaVm8UzLb4VLUs&usqp=CAU"
                alt="Crop 2" class="crop-image" />
            <h2 class="crop-name">Oilseeds(soyabean & Mustard)</h2>
            <p class="crop-description">
                Soybean and mustard are two important oilseed crops grown in Uttar
                Pradesh. Here's detailed information about soybean and mustard
                cultivation in the state:<br />

                Soybean Cultivation:<br />

                1. Varieties:
                <br />
                Uttar Pradesh cultivates various soybean varieties, including JS
                95-60, JS 335, and MACS 1249. The choice of variety depends on factors
                like soil type and agro-climatic conditions.<br />
                2. Cultivation Seasons:<br />

                Soybean is primarily a Kharif (monsoon) crop in Uttar Pradesh, sown
                from June to July. It is harvested during the post-monsoon season,
                typically from October to December.<br />
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
            location.replace("uttarapra.php")
        }
    </script>
</body>

</html>