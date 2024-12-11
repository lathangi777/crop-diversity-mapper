<?php include "text.php" ?>
<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
        }

        .flip-card {
            background-color: transparent;
            width: 300px;
            height: 300px;
            perspective: 1000px;
            margin-right: 30%;
        }

        .flip-card-inner {
            position: relative;
            width: 100%;
            height: 100%;
            text-align: center;
            transition: transform 0.6s;
            transform-style: preserve-3d;
            box-shadow: 0px 0px 30px black;
            border-radius: 20px;
        }

        .flip-card:hover .flip-card-inner {
            transform: rotateY(180deg);
        }

        .flip-card-front,
        .flip-card-back {
            position: absolute;
            width: 100%;
            height: 100%;
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
            border-radius: 20px;
        }

        .flip-card-front {
            background-color: #bbb;
            color: black;
        }

        .flip-card-back {
            background-color: #7ff839;
            background: rgb(157, 243, 234);
            color: rgb(22, 1, 1);
            transform: rotateY(180deg);
            overflow: scroll;
        }

        .flip-card1 {
            background-color: transparent;
            width: 300px;
            height: 300px;
            perspective: 1000px;
            border-radius: 20px;
            margin-left: 10%;
            margin-right: 30%;
        }

        .flip-card-inner1 {
            position: relative;
            width: 100%;
            height: 100%;
            text-align: center;
            transition: transform 0.6s;
            transform-style: preserve-3d;
            box-shadow: 0px 0px 30px black;
            border-radius: 20px;
        }

        .flip-card1:hover .flip-card-inner1 {
            transform: rotateY(180deg);
        }

        .flip-card-front1,
        .flip-card-back1 {
            position: absolute;
            width: 100%;
            height: 100%;
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
            border-radius: 20px;
        }

        .flip-card-front1 {
            background-color: #bbb;
            color: black;
        }

        .flip-card-back1 {
            background-color: #faf063;
            color: rgb(22, 1, 1);
            transform: rotateY(180deg);
            overflow: scroll;
        }

        .centered {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-size: 40px;
            color: #215801;
        }

        .flip-card2 {
            background-color: transparent;
            width: 300px;
            height: 300px;
            perspective: 1000px;
            border-radius: 20px;
            margin-left: 20%;
            margin-right: 30%;
        }

        .flip-card-inner2 {
            position: relative;
            width: 100%;
            height: 100%;
            text-align: center;
            transition: transform 0.6s;
            transform-style: preserve-3d;
            box-shadow: 0px 0px 30px black;
            border-radius: 20px;
        }

        .flip-card2:hover .flip-card-inner2 {
            transform: rotateY(180deg);
        }

        .flip-card-front2,
        .flip-card-back2 {
            position: absolute;
            width: 100%;
            height: 100%;
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
            border-radius: 20px;
        }

        .flip-card-front2 {
            background-color: #bbb;
            color: black;
        }

        .flip-card-back2 {
            background-color: #df8efa;
            color: rgb(22, 1, 1);
            transform: rotateY(180deg);
            overflow: scroll;
        }

        .flip-card3 {
            background-color: transparent;
            width: 300px;
            height: 300px;
            perspective: 1000px;
            border-radius: 20px;
            margin-left: 30%;
        }

        .flip-card-inner3 {
            position: relative;
            width: 100%;
            height: 100%;
            text-align: center;
            transition: transform 0.6s;
            transform-style: preserve-3d;
            box-shadow: 0px 0px 30px black;
            border-radius: 20px;
        }

        .flip-card3:hover .flip-card-inner3 {
            transform: rotateY(180deg);
        }

        .flip-card-front3,
        .flip-card-back3 {
            position: absolute;
            width: 100%;
            height: 100%;
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
            border-radius: 20px;
        }

        .flip-card-front3 {
            background-color: #bbb;
            color: black;
        }

        .flip-card-back3 {
            background-color: #fded10;
            color: rgb(19, 16, 11);
            transform: rotateY(180deg);
            overflow: scroll;
        }

        .row {
            display: flex;
            margin-top: 10%;
            margin-left: 4%;
        }

        .column {
            flex: 55.33%;
            padding: 50px;
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

<body style="
      background-image: url(https://media.easemytrip.com/media/Blog/India/637245472281678954/6372454722816789543img5H.png);
      background-size: cover;
      background-repeat: no repeat;
      overflow: scroll;
    ">
    <p style="float:left;">
        <button onclick="myfunction()">
            <img src="https://cdn-icons-png.flaticon.com/512/25/25694.png" alt="W3Schools.com" width="30" height="40"
                style="background-color: white" />
        </button>
        <button onclick="myfunction1()">
            <img src="https://thumb.ac-illust.com/ef/ef76a36c7a4f85f140bf3566836df260_t.jpeg" alt="W3Schools.com"
                width="30" height="40" style="background-color: white" />
        </button>
    </p>Major

    <div style="
        color: black;
        font-size: 300%;
        font-weight: 1000;
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS',
          sans-serif;
        margin-left: 35%;
      ">
        GOA STATE
    </div>
    <div class="row" style="background-attachment: fixed">
        <div class="col">
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <img src="https://wallpapers.com/images/featured/soil-wmd6mn3yi0cykl72.jpg" alt="Avatar" style="
                  width: 300px;
                  height: 300px;
                  border-radius: 20px;
                  background-attachment: fixed;
                " />
                    </div>
                    <div class="centered" style="color: black; font-weight: 20px; padding-bottom: 100px">
                        soil nature
                    </div>
                    <div class="flip-card-back">
                        <p>
                            Soil types can be broadly categorized into sandy, clayey, loamy,
                            and peaty soils, with various subtypes.
                        </p>
                        <p>
                            Each type has unique properties, including drainage, water
                            retention, and nutrient content.
                        </p>
                        <p>
                            Farmers often perform soil tests to determine the specific
                            characteristics of their soil, which can help with crop
                            selection and fertilization.
                        </p>
                        <a href="goas.php" style="font-size: 30px; font-weight: 30px">SOIL</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="flip-card1">
                <div class="flip-card-inner1">
                    <div class="flip-card-front1">
                        <img src="https://cdn.hswstatic.com/gif/Irrigation.jpg" alt="irrigation" style="
                  width: 300px;
                  height: 300px;
                  border-radius: 20px;
                  background-attachment: fixed;
                " />
                        <div class="centered" style="color: black; font-weight: 20px; padding-bottom: 100px">
                            irrigation systems
                        </div>
                    </div>
                    <div class="flip-card-back1">
                        <p>
                            irrigation systems vary based on water availability and
                            technology. Common types include:
                        </p>
                        <p>
                            Drip Irrigation: Provides water directly to the base of plants,
                            minimizing water wastage.
                        </p>
                        <p>
                            Sprinkler Irrigation: Sprays water over the crops like rainfall.
                        </p>
                        <p>Flood Irrigation: Involves flooding fields with water.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="flip-card2">
                <div class="flip-card-inner2">
                    <div class="flip-card-front2">
                        <img src="https://housing.com/news/wp-content/uploads/2023/04/Different-types-of-crops-based-on-usage-life-cycle-and-seasons-f.jpg"
                            alt="irrigation" style="
                  width: 300px;
                  height: 300px;
                  border-radius: 20px;
                  background-attachment: fixed;
                " />
                        <div class="centered" style="color: black; font-weight: 20px; padding-bottom: 100px">
                            types of crops
                        </div>
                    </div>
                    <div class="flip-card-back2">
                        <p>
                            The choice of crops depends on various factors, including soil
                            type, climate, and market demand.
                        </p>
                        <p>Examples of crops include:</p>
                        <p>Cereals (e.g., wheat, rice, maize)</p>
                        <p>Pulses (e.g., lentils, chickpeas)</p>
                        <p>Fruits (e.g., apples, oranges, bananas)</p>
                        <p>Vegetables (e.g., tomatoes, potatoes, carrots)</p>
                        <a href="goac.php" style="font-size: 30px; font-weight: 30px">CROPS</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="flip-card3">
                <div class="flip-card-inner3">
                    <div class="flip-card-front3">
                        <img src="https://images.edrawmind.com/article/types-of-climate-learn-to-mind-map/climate-in-four-seasons-1200.jpg"
                            alt="irrigation" style="
                  width: 300px;
                  height: 300px;
                  border-radius: 20px;
                  background-attachment: fixed;
                " />
                        <div class="centered" style="color: black; font-weight: 30px">
                            Climatic Conditions
                        </div>
                    </div>
                    <div class="flip-card-back3">
                        <p>
                            Climate greatly influences agriculture. Key factors include
                            temperature, rainfall, and seasonality.
                        </p>
                        <p>
                            Different crops require specific climate conditions: Temperate
                            climates are suitable for wheat and barley. Tropical climates
                            are ideal for rice and tropical fruits.
                        </p>
                        <p>
                            Arid regions may focus on drought-resistant crops. Extreme
                            weather events, such as droughts or floods, can impact crop
                            yields and require adaptation strategies.
                        </p>
                        <a href="goaw.php" style="font-size: 30px; font-weight: 30px">WEATHER</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <a href="index.php" style="float: center; font-size: 300%; color: black; margin-left: 45%">home</a>
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
            location.replace("indiamap.php")
        }
    </script>
</body>

</html>