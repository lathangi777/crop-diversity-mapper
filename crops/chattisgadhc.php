<?php include "text.php" ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Chattisgarh crops</title>
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
            </p>Major Crops In Chattisgarh
        </h1>
    </header>
    <div class="container">
        <div class="crop-card">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQkt57OXX88zUAwjey7m3NgemnRKq3V5WEqqtstc4F7&s"
                alt="Crop 2" class="crop-image" />
            <h2 class="crop-name">Rice</h2>
            <p class="crop-description">
                Rice is a staple crop in Chhattisgarh, and it plays a crucial role in
                the state's agriculture and economy. Varieties:<br />

                Chhattisgarh cultivates various rice varieties, both traditional and
                modern high-yielding ones. Some popular varieties include Swarna, HMT,
                Mahamaya, and Kranti.<br />
                Cultivation Seasons:<br />

                Rice is grown in both Kharif (monsoon) and Rabi (winter) seasons in
                Chhattisgarh. The Kharif season, from June to October, is the main
                rice cultivation period. Rabi rice is grown from November to
                February.<br />
            </p>
        </div>

        <div class="crop-card">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTAFHQNhWu8Cw3ByqPbvsbEmYXpdBCIJuZ357nVD-lLJxwHECw_b_tvbTVfSwIwVlSHDOc&usqp=CAU"
                alt="Crop 2" class="crop-image" />
            <h2 class="crop-name">Maize</h2>
            <p class="crop-description">
                Maize is an important cereal crop in Chhattisgarh, contributing
                significantly to the state's agriculture and economy. Here's detailed
                information about maize cultivation in Chhattisgarh:<br />

                Varieties:<br />

                Chhattisgarh cultivates various maize varieties, including hybrids and
                open-pollinated varieties (OPVs). Some popular maize varieties grown
                in the state include HKI 1105, Shaktiman-1, and Vivek-551.<br />
                Cultivation Seasons:<br />

                Maize is grown in both Kharif (monsoon) and Rabi (winter) seasons in
                Chhattisgarh. Kharif maize is sown from June to July, while Rabi maize
                is planted from October to November.<br />
            </p>
        </div>
        <div class="crop-card">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRXE0ZX5U-N5XZZRnZm1j4nKtoSLacYj4JJnw&usqp=CAU"
                alt="Crop 2" class="crop-image" />
            <h2 class="crop-name">Tamarind</h2>
            <p class="crop-description">
                Tamarind (Tamarindus indica) is a tropical fruit-bearing tree commonly
                found in Chhattisgarh, and it holds cultural and culinary significance
                in the region.<br />
                Cultivation Areas:<br />

                Tamarind trees are widely distributed throughout Chhattisgarh, often
                found in both rural and urban areas. They thrive in various
                agro-climatic conditions, including plains and hilly regions.<br />
                Utilization:<br />

                Tamarind pulp is a common ingredient in Chhattisgarhi cuisine, known
                for its unique tangy and sour flavor. It is a key component in
                traditional Chhattisgarhi recipes like chutneys, curries, and
                tamarind-based sauces. Tamarind pulp is also used in snacks and
                beverages.<br />
            </p>
        </div>

        <div class="crop-card">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQqvAIYionJIVAOr8yhMUHtsiyk5Wh1bvlPWw&usqp=CAU"
                alt="Crop 2" class="crop-image" />
            <h2 class="crop-name">Pulses(lentils and peas)</h2>
            <p class="crop-description">
                Pulses, including lentils and peas, are an essential part of
                Chhattisgarh's agriculture and cuisine.<br />
                Varieties:<br />

                Chhattisgarh cultivates a variety of pulses, including pigeon pea
                (arhar or toor dal), chickpea (chana), green gram (moong dal), black
                gram (urad dal), and lentils (masoor dal). Different varieties of each
                pulse are grown to meet local preferences and market demand.<br />
                Cultivation Seasons:<br />

                Pulses are grown in both Kharif (monsoon) and Rabi (winter) seasons in
                Chhattisgarh. Pigeon pea and chickpea are typically Kharif crops,
                while green gram, black gram, and lentils are grown in the Rabi
                season.<br />
            </p>
        </div>

        <div class="crop-card">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTnET0A_MMmFylvjmDUMp9owEnlocHuGuV0Zg&usqp=CAU "
                alt="Crop 2" class="crop-image" />
            <h2 class="crop-name">Sugarcane</h2>
            <p class="crop-description">
                Sugarcane (Saccharum officinarum) is an important cash crop in
                Chhattisgarh, contributing significantly to the state's agriculture
                and economy.<br />
                Varieties:<br />

                Chhattisgarh cultivates various sugarcane varieties, including Co
                0238, Co 1148, Co 421, and Co 86032, among others. The choice of
                variety depends on factors like soil type and agro-climatic
                conditions.<br />
                Cultivation Seasons:<br />

                Sugarcane is predominantly a Kharif (monsoon) crop in Chhattisgarh,
                planted from June to July. It is harvested during the winter season,
                from November to March.<br />
            </p>
        </div>

        <div class="crop-card">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRR9ZULtphUmyI49z1uMRK4rEtD7YmjNUIc8v8kbdZgZ9j0MyuztiD6WsaVm8UzLb4VLUs&usqp=CAU"
                alt="Crop 2" class="crop-image" />
            <h2 class="crop-name">Oilseeds</h2>
            <p class="crop-description">
                Oilseeds, including soybean and groundnut, are important crops in
                Chhattisgarh, contributing to both agricultural production and the
                state's economy.<br />
                Soybean Cultivation:<br />

                Varieties:<br />Chhattisgarh cultivates various soybean varieties,
                with JS 93-05 being one of the popular choices.<br />
                Cultivation Season:<br />
                Soybean is primarily a Kharif (monsoon) crop, sown from June to
                July.<br />
                Agro-climatic Conditions:<br />
                The state's tropical climate and well-distributed rainfall favor
                soybean cultivation.<br />
                Farming Practices:<br />
                Soybean is grown as a rainfed crop in Chhattisgarh, and it's known for
                its nitrogen-fixing properties that improve soil fertility.<br />
                2. Groundnut Cultivation:<br />

                Varieties:<br />
                Groundnut varieties grown in Chhattisgarh include GG 2, GG 20, and M
                13.<br />
                Cultivation Season:<br />
                Groundnut is also primarily a Kharif crop, sown during the monsoon
                season.<br />
                Agro-climatic Conditions:<br />
                Groundnut thrives in well-drained soils and requires moderate
                rainfall.<br />
                Farming Practices:<br />
                It's often intercropped with other crops and is known for its drought
                resistance.<br />
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
            location.replace("chathisgadh.php")
        }
    </script>
</body>

</html>