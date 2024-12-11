<?php include "text.php" ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Jharkand crops</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: linear-gradient(to right,
                    rgb(16, 37, 16),
                    rgb(165, 196, 115));
            margin: 0;
            padding: 0;
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
        <h1>Major Crops In Jharkhand</h1>
    </header>
    <div class="container">
        <div class="crop-card">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRIpUBAu0UYV9rUu71ZUqt8TQxyQ3yFPdCBww&usqp=CAU"
                alt="Crop 2" class="crop-image" />
            <h2 class="crop-name">Makhana</h2>
            <p class="crop-description">
                Makhana, also known as fox nut or gorgon nut, is a unique and
                nutritious crop that is cultivated in the state of Jharkhand, India,
                especially in regions with wetlands and water bodies.<br />
                Introduction to Makhana:<br />

                Makhana is the seed of the Euryale ferox plant, which is native to the
                wetlands of Jharkhand and other eastern Asian countries. The seeds are
                small, round, and white, with a taste and texture often likened to
                popcorn.<br />
                Growing Regions:<br />

                Makhana is predominantly cultivated in the eastern and northeastern
                districts of Jharkhand, including parts of Ranchi, Gumla, and Latehar.
                These areas have the necessary wetland ecosystem for makhana
                growth.<br />
            </p>
        </div>

        <div class="crop-card">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQkt57OXX88zUAwjey7m3NgemnRKq3V5WEqqtstc4F7&s"
                alt="Crop 2" class="crop-image" />
            <h2 class="crop-name"></h2>
            <p class="crop-description">
                Varieties of Rice:<br />

                Jharkhand cultivates a variety of rice strains, including traditional
                varieties and high-yielding modern cultivars. Some popular rice
                varieties grown in the state include Swarna, Mahsuri, BPT 5204, and
                IR-36.<br />
                Growing Regions:<br />

                Rice is grown throughout Jharkhand, with notable production in
                districts like Ranchi, Palamau, Hazaribagh, and Dhanbad. The crop is
                adapted to both upland and lowland ecosystems.<br />
            </p>
        </div>
        <div class="crop-card">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTAFHQNhWu8Cw3ByqPbvsbEmYXpdBCIJuZ357nVD-lLJxwHECw_b_tvbTVfSwIwVlSHDOc&usqp=CAU"
                alt="Crop 2" class="crop-image" />
            <h2 class="crop-name">Maize</h2>
            <p class="crop-description">
                Maize is an important cereal crop grown in the state of Jharkhand<br />

                Varieties of Maize:<br />

                Jharkhand cultivates various varieties of maize, including hybrids and
                open-pollinated varieties (OPVs). Some popular maize varieties grown
                in the state include Shaktiman-1, Vivek-9, and HM-4.<br />
                Growing Regions:<br />
                Maize is grown in various districts of Jharkhand, with significant
                production in areas like Ranchi, Palamau, and Gumla. It is adaptable
                to both upland and lowland ecosystems.<br />
            </p>
        </div>

        <div class="crop-card">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR4QXubiryUBkyODJ38_HLbwjyy03fPhKkOQjmvCMcZ7xbyK8POOGr7AJ9PCzpeU-GERmo&usqp=CAU"
                alt="Crop 2" class="crop-image" />
            <h2 class="crop-name">potato</h2>
            <p class="crop-description">
                Potato is an important tuber crop grown in the state of Jharkhand.<br />

                Varieties of Potato:<br />

                Jharkhand cultivates various potato varieties, including both early
                and late-maturing types. Some popular potato varieties grown in the
                state include Kufri Jyoti, Kufri Chandramukhi, and Kufri Badshah.<br />

                Growing Regions:<br />

                Potatoes are grown in various districts of Jharkhand, including
                Ranchi, Hazaribagh, and Ramgarh. The crop is adaptable to different
                elevations and soil types.<br />
            </p>
        </div>

        <div class="crop-card">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRR9ZULtphUmyI49z1uMRK4rEtD7YmjNUIc8v8kbdZgZ9j0MyuztiD6WsaVm8UzLb4VLUs&usqp=CAU"
                alt="Crop 2" class="crop-image" />
            <h2 class="crop-name">Oilseeds</h2>
            <p class="crop-description">
                Oilseeds are an important crop category in the state of Jharkhand,
                India.<br />
                Types of Oilseeds Cultivated:<br />
                Jharkhand cultivates several oilseed crops, including groundnut
                (peanut), mustard, sunflower, and soybean. These oilseeds are grown
                for oil extraction and various culinary and industrial uses.<br />
                Growing Regions:<br />

                Oilseeds are grown in various districts of Jharkhand, with notable
                production in areas like Ranchi, Dhanbad, and Bokaro. Different
                oilseeds are adapted to different regions based on agro-climatic
                conditions.<br />
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
            location.replace("jarkhandh.php")
        }
    </script>

</body>

</html>