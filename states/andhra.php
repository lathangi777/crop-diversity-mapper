<?php include "text.php" ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Andhra Pradesh Agriculture</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
            color: #333;
        }

        header {
            background-color: #4CAF50;
            color: white;
            text-align: center;
            padding: 20px;
        }

        h1 {
            margin: 0;
            font-size: 24px;
        }

        #flip-card-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-evenly;
        }

        .flip-card {
            width: 300px;
            height: 550px;
            /* Increase the height as desired */
            margin: 20px;
            perspective: 1000px;
        }

        .flip-card-inner {
            width: 100%;
            height: 100%;
            transform-style: preserve-3d;
            transition: transform 0.5s;
        }

        .flip-card:hover .flip-card-inner {
            transform: rotateY(180deg);
        }

        .flip-card-front,
        .flip-card-back {
            width: 100%;
            height: 100%;
            position: absolute;
            backface-visibility: hidden;
        }

        .flip-card-front {
            background-color: #4CAF50;
            color: white;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            font-size: 18px;
            font-weight: bold;
        }

        .flip-card-back {
            background-color: #fff;
            color: #333;
            transform: rotateY(180deg);
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 10px;
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
        <h1 styel="float:right;">Andhra Pradesh Agriculture Information</h1>
    </header>

    <section id="flip-card-container">
        <div class="flip-card">
            <div class="flip-card-inner">
                <div class="flip-card-front">
                    <h2>Crop Details</h2>
                </div>
                <div class="flip-card-back">
                    <h2>Crop Details</h2>
                    <p> Rice: Andhra Pradesh is a major producer of rice varieties like Sona Masuri, BPT 5204, and
                        Swarna.</p>

                    <p>Maize: Widely cultivated for human consumption and livestock fodder.</p>

                    <p>Groundnut (Peanut): Important oilseed crop for oil extraction and consumption.</p>

                    <p>Cotton: Significant producer of cotton fiber.</p>
                    Sugarcane: Grown in many regions with sugar mills for production.

                    <p>Chillies: Known for various types of chillies, including Guntur chilli.</p>

                    <p>Turmeric: Widely grown spice known for its quality and color.</p>
                    <a href="andhrac.php" style="font-size: 30px; font-weight: 30px">CROPS</a>

                </div>
            </div>
        </div>

        <div class="flip-card">
            <div class="flip-card-inner">
                <div class="flip-card-front">
                    <h2>Soil Details</h2>
                </div>
                <div class="flip-card-back">
                    <h2>Soil Details</h2>
                    <p> Alluvial Soil: Fertile soil in coastal plains, ideal for rice and sugarcane.</p>

                    <p>Red Soil: Predominant in Rayalaseema, suitable for groundnut and millets.</p>

                    <p>Black Soil: Found in parts of Telangana, good for cotton due to nutrient richness.</p>

                    <p>Sandy Soil: Coastal regions, used for paddy, coconut, and cashew.</p>

                    <p>Lateritic Soil: Hilly areas, not highly fertile, requires careful management.</p>

                    <p>Saline and Alkaline Soils: Coastal areas, limited suitability for most crops.</p>

                    <p>Loamy Soil: Mixture of sand, silt, and clay, versatile for various crops.</p>
                    <a href="andhras.php" style="font-size: 30px; font-weight: 30px">SOIL</a>
                </div>
            </div>
        </div>

        <div class="flip-card">
            <div class="flip-card-inner">
                <div class="flip-card-front">
                    <ceneter>
                        <h2>WEATHER</h2>
                        </center>
                </div>
                <div class="flip-card-back">


                    <p>Summer (March to June)</p>

                    <p>Monsoon Season (June to September)</p>

                    <p>Post-Monsoon Season (October to November)</p>


                    <p>
                        Winter (December to February)</p>
                    <a href="andhraw.php" style="font-size: 30px; font-weight: 30px">WEATHER</a>

                </div>
            </div>
        </div>
        <a href="index.php" style="float: center; font-size: 300%; color: black; margin-left: 45%">home</a>
    </section>
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