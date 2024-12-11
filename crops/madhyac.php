<?php include "text.php" ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title> Madhyapradesh crops</title>
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
            </p>Major Crops In Madyapradesh
        </h1>
    </header>
    <div class="container">
        <div class="crop-card">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTH8AA0ey7MS3ku5lAv7aNs5Rny9uFegNUjYw&usqp=CAU "
                alt="Crop 2" class="crop-image" />
            <h2 class="crop-name">Soyabean</h2>
            <p class="crop-description">
                Soybean is one of the major oilseed crops grown in Madhya Pradesh, and the state is a leading producer
                of soybeans in India<br>
                1. Varieties:<br>

                Madhya Pradesh cultivates various soybean varieties, including both local and improved varieties.
                Popular varieties include JS 335, JS 9305, and JS 9560.<br>
                2. Cultivation Season:<br>

                Soybean is primarily a Kharif (summer) crop in Madhya Pradesh.
                Sowing typically takes place from June to July, and harvesting occurs from September to October.<br>
            </p>
        </div>


        <div class="crop-card">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRXSvisGXfhNLV40WDvjrDav1oPOysXqht33xInXtRdvw&s"
                alt="Crop 2" class="crop-image" />
            <h2 class="crop-name">Wheat</h2>
            <p class="crop-description">
                Wheat is one of the major cereal crops grown in Madhya Pradesh.<br>
                1. Varieties:<br>

                Madhya Pradesh cultivates various wheat varieties, including both high-yielding and traditional
                varieties.
                Popular varieties include HD 2967, GW 366, and Sharbati.<br>
                2. Cultivation Season:<br>

                Wheat is primarily a Rabi (winter) crop in Madhya Pradesh.
                Sowing typically takes place from November to December, and harvesting occurs from March to April.<br>
            </p>
        </div>
        <div class="crop-card">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQkt57OXX88zUAwjey7m3NgemnRKq3V5WEqqtstc4F7&s"
                alt="Crop 2" class="crop-image" />
            <h2 class="crop-name">Paddy</h2>
            <p class="crop-description">
                Paddy, also known as rice, is a significant cereal crop grown in Madhya Pradesh. Here is detailed
                information about paddy cultivation in the state:

                1. Varieties:

                Madhya Pradesh cultivates various rice varieties, including both traditional and improved high-yielding
                varieties.
                Popular varieties include HMT, Mahamaya, and Pratibha.
                2. Cultivation Season:

                Paddy is primarily a Kharif (summer) crop in Madhya Pradesh.
                Sowing typically takes place from June to July, and harvesting occurs from October to November.
            </p>
        </div>


        <div class="crop-card">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTlGiMz2QD4xxyD1kxLfdNWBAOQyFk6ehSN0A&usqp=CAU"
                alt="Crop 2" class="crop-image" />
            <h2 class="crop-name">Chickpea</h2>
            <p class="crop-description">
                Chickpea, also known as gram or chana, is an important pulse crop grown in Madhya Pradesh.<br>

                1. Varieties:<br>

                Madhya Pradesh cultivates various chickpea varieties, including both desi and kabuli types.
                Popular desi varieties include JG 315, JG 11, and JG 50, while kabuli varieties include Pusa 208, BG
                1053, and ICCV 2.<br>
                2. Cultivation Season:<br>

                Chickpea is primarily a Rabi (winter) crop in Madhya Pradesh.
                Sowing typically takes place from October to November, and harvesting occurs from February to March.<br>
            </p>
        </div>


        <div class="crop-card">
            <img src="https://files.worldwildlife.org/wwfcmsprod/images/Cotton_09.21.12_Industries/hero_small/74bop80spn_133837741.jpg"
                alt="Crop 2" class="crop-image" />
            <h2 class="crop-name">Cotton</h2>
            <p class="crop-description">
                Cotton is a major cash crop grown in Madhya Pradesh. Here is detailed information about cotton
                cultivation in the state:<br>

                1. Varieties:<br>

                Madhya Pradesh cultivates various cotton varieties, including both long-staple and medium-staple cotton.
                Popular varieties include DCH 32, DCH 345, and DHH 11.
                2. Cultivation Season:<br>

                Cotton is primarily a Kharif (summer) crop in Madhya Pradesh.
                Sowing typically takes place from June to July, and harvesting occurs from October to November.<br>
            </p>
        </div>


        <div class="crop-card">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSkc1DETqPoGjE5MPq7uIu_BU8Ong91UhSwJg&usqp=CAU"
                alt="Crop 2" class="crop-image" />
            <h2 class="crop-name">Urud dal and Arha dal</h2>
            </h2>
            <p class="crop-description">
                1. Arhar (Pigeon Pea):<br>

                Varieties:<br> Madhya Pradesh cultivates various arhar varieties, including the popular ICPL 88039, ICPL
                87119, and ICPL 161.
                <br> Cultivation Season:<br> Arhar is primarily a Kharif (summer) crop in Madhya Pradesh. Sowing
                typically takes place from June to July, and harvesting occurs from November to December.
                <br> 2. Urad (Black Gram):<br>

                Varieties:<br> Madhya Pradesh cultivates various urad varieties, including Pant U19, Pant U30, and Azad
                U.19.<br>
                Cultivation Season:<br> Urad is grown in both Kharif and Rabi seasons. Kharif sowing typically occurs
                from June to July, while Rabi sowing takes place from October to November. Harvesting varies
                accordingly.<br>
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
            location.replace("madhya.php")
        }
    </script>
</body>

</html>