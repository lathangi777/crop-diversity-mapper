<?php include "text.php" ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Bihar crops</title>
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
        <h1>Major Crops In Bihar</h1>
    </header>
    <div class="container">
        <div class="crop-card">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRXSvisGXfhNLV40WDvjrDav1oPOysXqht33xInXtRdvw&s"
                alt="Crop 2" class="crop-image" />
            <h2 class="crop-name">Wheat</h2>
            <p class="crop-description">
                Wheat cultivation is an important part of agriculture in Bihar.<br />
                1. Varieties:<br />

                Bihar cultivates various wheat varieties, including high-yielding
                varieties like HD 2967, PBW 343, and HD 2733. The choice of variety
                depends on factors such as region, climate, and intended use.<br />
                2. Cultivation Regions:<br />

                Wheat is grown throughout Bihar, with significant cultivation in
                districts like Nalanda, Patna, Vaishali, and Samastipur. Different
                regions in Bihar cater to wheat cultivation, from the Gangetic plains
                to the plateau regions.<br />
            </p>
        </div>

        <div class="crop-card">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQkt57OXX88zUAwjey7m3NgemnRKq3V5WEqqtstc4F7&s"
                alt="Crop 2" class="crop-image" />
            <h2 class="crop-name">Rice</h2>
            <p class="crop-description">
                Rice cultivation is a vital component of agriculture in Bihar, one of
                the major rice-producing states in India.<br />
                1. Varieties:<br />

                Bihar cultivates a wide range of rice varieties, including both
                traditional and modern high-yielding varieties. Popular rice varieties
                in Bihar include Swarna, IR 64, Pusa Basmati, and many indigenous
                varieties.<br />
                2. Cultivation Regions:<br />
                Rice is grown throughout Bihar, with significant production in
                districts like Bhagalpur, Purnia, Samastipur, and Patna. Different
                regions in Bihar cater to both traditional and aromatic rice
                varieties.<br />
            </p>
        </div>
        <div class="crop-card">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTAFHQNhWu8Cw3ByqPbvsbEmYXpdBCIJuZ357nVD-lLJxwHECw_b_tvbTVfSwIwVlSHDOc&usqp=CAU"
                alt="Crop 2" class="crop-image" />
            <h2 class="crop-name">Maize</h2>
            <p class="crop-description">
                Maize cultivation is a vital component of agriculture in Bihar.<br />
                1. Varieties:<br />

                Bihar cultivates various maize varieties, including hybrid maize,
                local varieties, and improved varieties like Arka Abhiram and Pratap
                Makka 2. The choice of variety depends on factors such as region,
                climate, and intended use.<br />
                2. Cultivation Regions:<br />

                Maize is grown throughout Bihar, with significant cultivation in
                districts like Samastipur, Vaishali, Muzaffarpur, and Darbhanga.
                Different regions cater to maize cultivation, from the Gangetic plains
                to the plateau regions.<br />
            </p>
        </div>

        <div class="crop-card">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQqvAIYionJIVAOr8yhMUHtsiyk5Wh1bvlPWw&usqp=CAU"
                alt="Crop 2" class="crop-image" />
            <h2 class="crop-name">Pulses</h2>
            <p class="crop-description">
                Pulses cultivation is an important component of agriculture in
                Bihar.<br />

                1. Varieties:<br />

                Bihar cultivates a variety of pulses, including chickpeas (chana),
                pigeon peas (arhar or toor), lentils (masoor), black gram (urad),
                green gram (moong), and various other varieties. Different pulse
                varieties are grown depending on the region and climate.<br />
                2. Cultivation Regions:<br />

                Pulses are cultivated throughout Bihar, with significant production in
                districts like Gaya, Nalanda, Patna, and Bhagalpur. Different regions
                in Bihar cater to different pulse varieties.<br />
            </p>
        </div>

        <div class="crop-card">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTH-zdLGABmStgb0jPVcC-XwHMniyqdh1ebVQ&usqp=CAU"
                alt="Crop 2" class="crop-image" />
            <h2 class="crop-name">Mustard</h2>
            <p class="crop-description">
                Mustard cultivation is an essential part of agriculture in Bihar.
                <br />
                1. Varieties:<br />

                Bihar cultivates various mustard varieties, including traditional
                varieties like RGN 226, RL 1359, and Giriraj, as well as modern hybrid
                varieties such as Varuna and NRCDR 02. The choice of variety depends
                on factors like the region, climate, and intended use.<br />
                2. Cultivation Regions:<br />

                Mustard is grown across Bihar, with significant cultivation in
                districts like Patna, Vaishali, Nalanda, and Samastipur. Different
                regions in Bihar cater to mustard cultivation, from the Gangetic
                plains to the southern plateau.<br />
            </p>
        </div>

        <div class="crop-card">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR4QXubiryUBkyODJ38_HLbwjyy03fPhKkOQjmvCMcZ7xbyK8POOGr7AJ9PCzpeU-GERmo&usqp=CAU"
                alt="Crop 2" class="crop-image" />
            <h2 class="crop-name">Potato</h2>
            <p class="crop-description">
                Potato cultivation is an important agricultural activity in Bihar.
                Here is detailed information about potato cultivation in the state:<br />

                1. Varieties:<br />

                Bihar cultivates various potato varieties, including both traditional
                and modern high-yielding varieties. Popular potato varieties in Bihar
                include Kufri Jyoti, Kufri Chandramukhi, and Kufri Pukhraj.<br />
                2. Cultivation Regions:<br />

                Potatoes are grown in different parts of Bihar, with significant
                production in districts like Nalanda, Patna, Vaishali, and Samastipur.
                The choice of region depends on factors like soil type and climate.<br />
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
            location.replace("bihar.php")
        }
    </script>
</body>

</html>