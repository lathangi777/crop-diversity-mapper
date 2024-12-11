<?php include "text.php" ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Odisha crops</title>
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
        <h1>Major Crops In Odisha</h1>
    </header>
    <div class="container">
        <div class="crop-card">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRHVJyWYwCn0ZthdzcW3FLui8dgjpXVi_i3Ng&usqp=CAU"
                alt="Crop 2" class="crop-image" />
            <h2 class="crop-name"></h2>
            <p class="crop-description">
                Jute is a natural fiber obtained from the stems of the jute plant
                (Corchorus spp.). Jute is known for its versatility and is used
                primarily in the manufacturing of textiles, bags, ropes, and various
                other products. While jute is not a major agricultural crop in the
                state of Odisha, it is cultivated to a limited extent. Here is some
                detailed information about jute cultivation in Odisha:<br />
                Cultivation Area:<br />
                Jute cultivation in Odisha is not as extensive as in some other states
                of India, like West Bengal and Bihar. It is primarily grown in certain
                districts of Odisha where the climate and soil conditions are suitable
                for jute cultivation.<br />
                Varieties:<br />
                Different varieties of jute are grown in Odisha. These include
                Corchorus capsularis (white jute) and Corchorus olitorius (tossa
                jute). These varieties have different characteristics and are used for
                various purposes.<br />
            </p>
        </div>

        <div class="crop-card">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSpoh9z-wfotL2iwxz1gPd6YwxPf7DXGs6XPQ&usqp=CAU"
                alt="Crop 2" class="crop-image" />
            <h2 class="crop-name">Pulses</h2>
            <p class="crop-description">
                Pulses, a group of leguminous crops that includes lentils, chickpeas,
                and pigeon peas, are an essential component of agriculture in the
                state of Odisha, India. Here's detailed information about pulses
                cultivation in Odisha:<br />
                Types of Pulses Cultivated:<br />

                Odisha cultivates a variety of pulses, including red gram (arhar dal),
                green gram (moong dal), black gram (urad dal), pigeon pea (tur dal),
                and chickpeas (chana). Different types of pulses are grown based on
                local preferences and agro-climatic conditions.<br />
                Growing Regions:<br />

                Pulses are cultivated throughout Odisha, with significant production
                in regions like Koraput, Bolangir, and Sundargarh. Coastal areas, with
                their favorable climate, are also conducive to pulses cultivation.<br />
            </p>
        </div>
        <div class="crop-card">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQkt57OXX88zUAwjey7m3NgemnRKq3V5WEqqtstc4F7&s"
                alt="Crop 2" class="crop-image" />
            <h2 class="crop-name">Rice</h2>
            <p class="crop-description">
                Varieties of Rice:<br />

                Odisha cultivates a wide range of rice varieties to suit its diverse
                agro-climatic conditions. Some popular rice varieties grown in the
                state include Sambalpuri, Masuri, Haldi, and Kalajeera.<br />
                Growing Regions:<br />

                Rice is cultivated throughout Odisha, with the coastal districts, such
                as Cuttack and Puri, being major rice-producing regions. The
                Chhattisgarh Plateau in western Odisha is also known for rice
                cultivation.<br />
            </p>
        </div>

        <div class="crop-card">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRR9ZULtphUmyI49z1uMRK4rEtD7YmjNUIc8v8kbdZgZ9j0MyuztiD6WsaVm8UzLb4VLUs&usqp=CAU"
                alt="Crop 2" class="crop-image" />
            <h2 class="crop-name">Oil seeds</h2>
            <p class="crop-description">
                Oilseeds are an essential crop category in the state of Odisha, India.
                They play a crucial role in providing edible oils and contributing to
                the agricultural economy.<br />
                Types of Oilseeds Cultivated:<br />
                Odisha cultivates various oilseeds, including groundnut (peanut),
                mustard, sunflower, and soybean. These oilseeds are grown to extract
                edible oils.<br />
                Growing Regions:<br />
                Groundnut is primarily grown in the coastal districts of Odisha, while
                mustard is cultivated in various regions. Sunflower and soybean are
                grown in districts with favorable agro-climatic conditions.<br />
            </p>
        </div>

        <div class="crop-card">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTnET0A_MMmFylvjmDUMp9owEnlocHuGuV0Zg&usqp=CAU "
                alt="Crop 2" class="crop-image" />
            <h2 class="crop-name">Sugarcane</h2>
            <p class="crop-description">
                Varieties of Sugarcane:<br />
                Odisha cultivates several varieties of sugarcane, including Co-0238,
                Co-0118, and Co-86032. These varieties are selected based on their
                suitability to the region's agro-climatic conditions.<br />

                Growing Regions:<br />

                Sugarcane is grown in various regions of Odisha, with prominent
                cultivation areas in districts like Cuttack, Ganjam, and Kendrapara.
                The coastal belt and river basins are known for sugarcane
                production.<br />
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
            location.replace("odisha.php")
        }
    </script>
</body>

</html>