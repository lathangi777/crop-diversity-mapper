<?php include "text.php" ?>
<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
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
            backdrop-filter: blur(50px);
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
            background: transparent;
            -webkit-backdrop-filter: blur(5px);
            backdrop-filter: blur(50px);
            background-color: rgba(201, 224, 192, 0.4);
        }

        .column {
            flex: 55.33%;
            padding: 50px;
        }
    </style>
</head>

<body style="
      background-image: url(https://img.traveltriangle.com/blog/wp-content/uploads/2020/01/12-places-to-visit-in-nagaland-Cover_16th-Jan.jpg);
      background-size: cover;
      background-repeat: no repeat;
      backdrop-filter: blur(1px);
    ">
    <div style="
        color: black;
        font-size: 300%;
        font-weight: 1000;
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS',
          sans-serif;
      ">
        TELANGANA STATE
        <p style="float:left;">
            <button onclick="myfunction()">
                <img src="https://cdn-icons-png.flaticon.com/512/25/25694.png" alt="W3Schools.com" width="30"
                    height="40" style="background-color: white" />
            </button>
            <button onclick="myfunction1()">
                <img src="https://thumb.ac-illust.com/ef/ef76a36c7a4f85f140bf3566836df260_t.jpeg" alt="W3Schools.com"
                    width="30" height="40" style="background-color: white" />
            </button>
        </p>
    </div>
    <div class="row" style="background-attachment: fixed">
        <div class="col">
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRWRa8d3nrZD2OemWr7ngQcG1dd3UFuTwDxFw&usqp=CAU"
                            alt="Avatar" style="
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
                        <div>
                            <a href="telanganas.php" style="font-size: 30px; font-weight: 30px">SOIL</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="flip-card1">
                <div class="flip-card-inner1">
                    <div class="flip-card-front1">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ5NRmoPQipO7LQ8yy1Q_HwkD9Gz-S87bdu_w&usqp=CAU"
                            alt="irrigation" style="
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
                        <div>
                            <a href="#" style="font-size: 30px; font-weight: 30px">IRRIGATION</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="flip-card2">
                <div class="flip-card-inner2">
                    <div class="flip-card-front2">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRmH8D-pMHJN0RQ19dk94hr7WO1CtV6BoQfEA&usqp=CAU"
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
                        <div>
                            <a href="telanganac.php" style="font-size: 30px; font-weight: 30px">CROPS</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="flip-card3">
                <div class="flip-card-inner3">
                    <div class="flip-card-front3">
                        <img src="https://media.istockphoto.com/id/531889697/photo/weather-forecast-concept.jpg?s=612x612&w=0&k=20&c=FsYyo1HrL9WCpYt4RUzV39qIqEpz6ylTXxVxlh95lR8="
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
                        <div>
                            <a href="telanganaw.php" style="font-size: 30px; font-weight: 30px">WEATHER</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
            location.replace("indiamap.php")
        }
    </script>
</body>

</html>