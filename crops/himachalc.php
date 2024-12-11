<?php include "text.php" ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Himachalpradesh crops</title>
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
        <h1>Major Crops In Himachalpradesh</h1>
    </header>
    <div class="container">
        <div class="crop-card">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQdpqcFHJXuPVuWs_g9hszDytu0W5vXK_NL-w&usqp=CAU"
                alt="Crop 2" class="crop-image" />
            <h2 class="crop-name">Apples</h2>
            <p class="crop-description">
                Apple cultivation is a significant agricultural activity in Himachal Pradesh, and the state is known for
                its high-quality apples.<br>

                1. Varieties:<br>

                Himachal Pradesh cultivates a wide range of apple varieties, including Red Delicious, Golden Delicious,
                Royal Delicious, and Shimla.
                Different varieties are grown in different regions, depending on the altitude and climate.<br>
                2. Cultivation Regions:<br>

                Apple orchards are spread across the state, with prominent apple-growing districts like Shimla, Kullu,
                Kinnaur, and Chamba.
                The altitudes in these regions range from 1,500 meters to over 3,000 meters above sea level.<br>
            </p>
        </div>


        <div class="crop-card">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR4QXubiryUBkyODJ38_HLbwjyy03fPhKkOQjmvCMcZ7xbyK8POOGr7AJ9PCzpeU-GERmo&usqp=CAU"
                alt="Crop 2" class="crop-image" />
            <h2 class="crop-name">Potatoes</h2>
            <p class="crop-description">
                Potato cultivation is an essential part of agriculture in Himachal Pradesh.<br>
                1. Varieties:<br>

                Himachal Pradesh cultivates various potato varieties, including Kufri Jyoti, Kufri Chandramukhi, Kufri
                Pukhraj, and Kufri Badshah.
                Different varieties are chosen based on factors such as altitude and climate.<br>
                2. Cultivation Regions:<br>

                Potatoes are grown throughout the state, with significant cultivation in districts like Shimla, Solan,
                Kangra, and Una.
                The altitude varies from 1,000 meters to over 2,500 meters above sea level.<br>
            </p>
        </div>
        <div class="crop-card">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTAFHQNhWu8Cw3ByqPbvsbEmYXpdBCIJuZ357nVD-lLJxwHECw_b_tvbTVfSwIwVlSHDOc&usqp=CAU"
                alt="Crop 2" class="crop-image" />
            <h2 class="crop-name">Maize</h2>
            <p class="crop-description">
                Maize cultivation in Himachal Pradesh is an integral part of the state's agriculture.<br>

                1. Varieties:<br>

                Himachal Pradesh cultivates various maize varieties, including hybrid maize, local maize varieties, and
                quality protein maize (QPM).
                The choice of variety depends on factors such as altitude, climate, and intended use.<br>
                2. Cultivation Regions:<br>

                Maize is grown across the state, with significant cultivation in districts like Kangra, Solan, Shimla,
                and Kullu.
                The altitude ranges from 500 meters to 2,500 meters above sea level.<br>
            </p>
        </div>


        <div class="crop-card">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQhUMoY-icqJoevS51h8hAZpuaY_g4WWGrCDg&usqp=CAU "
                alt="Crop 2" class="crop-image" />
            <h2 class="crop-name">Barley</h2>
            <p class="crop-description">

                Barley cultivation in Himachal Pradesh is a significant agricultural activity, particularly in the
                higher altitudes of the state.<br>
                1. Varieties:<br>

                Himachal Pradesh cultivates various barley varieties, including two-rowed and six-rowed barley types.
                Varieties like RD 2035, BH 393, and DWRB 91 are commonly grown.<br>
                2. Cultivation Regions:<br>

                Barley is primarily cultivated in the higher altitudes of Himachal Pradesh, including districts like
                Kinnaur, Lahaul and Spiti, and parts of Chamba and Kullu.
                The altitude ranges from 2,500 meters to over 4,000 meters above sea level.<br>
            </p>
        </div>


        <div class="crop-card">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRXSvisGXfhNLV40WDvjrDav1oPOysXqht33xInXtRdvw&s"
                alt="Crop 2" class="crop-image" />
            <h2 class="crop-name">Wheat</h2>
            <p class="crop-description">
                Wheat cultivation in Himachal Pradesh is an essential part of the state's agriculture, particularly in
                the lower-altitude regions.<br>
                1. Varieties:<br>

                Himachal Pradesh cultivates various wheat varieties suitable for its agro-climatic conditions.
                Popular wheat varieties include HD 2967, PBW 343, and HD 2733.<br>
                2. Cultivation Regions:<br>

                Wheat is grown in the lower-altitude regions of Himachal Pradesh, including districts like Kangra, Una,
                and Hamirpur.
                The altitude in these areas ranges from 350 meters to 1,500 meters above sea level.<br>
            </p>
        </div>

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
    </script>\
    <script>
        function myfunction() {
            location.replace("index.php")
        }
    </script>
    <script>
        function myfunction1() {
            location.replace("himachal.php")
        }
    </script>
</body>

</html>