<?php include "text.php" ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Haryana crops</title>
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
            <h1>Major Crops In Haryana</h1>
        </header>
        <div class="container">
            <div class="crop-card">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTAFHQNhWu8Cw3ByqPbvsbEmYXpdBCIJuZ357nVD-lLJxwHECw_b_tvbTVfSwIwVlSHDOc&usqp=CAU"
                    alt="Crop 2" class="crop-image" />
                <h2 class="crop-name">Maize</h2>
                <p class="crop-description">
                    Maize (Zea mays) cultivation is an important agricultural activity in
                    Haryana, contributing significantly to the state's agricultural
                    economy.<br />

                    1. Varieties:<br />

                    Haryana cultivates a range of maize varieties, including hybrids and
                    improved open-pollinated varieties. Popular maize varieties grown in
                    the state include HM 4, HM 5, and Vivek Hybrid.<br />
                    2. Cultivation Seasons:<br />

                    Maize is grown in both Kharif (monsoon) and Rabi (winter) seasons in
                    Haryana. Kharif maize is planted from June to July and harvested from
                    September to October, while Rabi maize is planted from October to
                    November and harvested from March to April.<br />
                </p>
            </div>

            <div class="crop-card">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR9-Vmt8PAuRQxprZw-J7yShxStNoISaYmBpA&usqp=CAU"
                    alt="Crop 2" class="crop-image" />
                <h2 class="crop-name">Bajra</h2>
                <p class="crop-description">
                    Pearl millet, commonly known as bajra (Pennisetum glaucum), is an
                    important crop cultivated in Haryana and other parts of India. <br />

                    1. Varieties:<br />

                    Haryana cultivates various pearl millet varieties, including local
                    landraces and improved hybrids. Some popular bajra varieties grown in
                    the state include HB 3, HHB 67, and MH 1540.<br />
                    2. Cultivation Seasons:<br />

                    Bajra is primarily a Kharif (monsoon) crop in Haryana. Planting
                    typically starts in June and July with the onset of the monsoon, and
                    harvesting takes place from September to October.<br />
                </p>
            </div>
            <div class="crop-card">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTlGiMz2QD4xxyD1kxLfdNWBAOQyFk6ehSN0A&usqp=CAU"
                    alt="Crop 2" class="crop-image" />
                <h2 class="crop-name">Chickpeas</h2>
                <p class="crop-description">
                    Chickpea, also known as chana or gram (Cicer arietinum), is an
                    important pulse crop cultivated in Haryana and various parts of India.
                    <br />

                    1. Varieties:<br />

                    Haryana cultivates a range of chickpea varieties, including both desi
                    (small-seeded) and kabuli (large-seeded) types. Some popular desi
                    chickpea varieties grown in the state include BG 256, H 09-03, and
                    Pusa 362. Kabuli chickpea varieties like Pusa 1053 and Pusa 372 are
                    also cultivated.<br />
                    2. Cultivation Seasons:<br />

                    Chickpea is primarily a Rabi (winter) crop in Haryana. Planting
                    typically starts from October to November, and harvesting takes place
                    from February to March.<br />
                </p>
            </div>

            <div class="crop-card">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSIZRv65byCBRdTgbsy9rKfXgqjXa9WlOZM0uSMTozn&s"
                    alt="Crop 2" class="crop-image" />
                <h2 class="crop-name">Sugarcane</h2>
                <p class="crop-description">
                    Sugarcane (Saccharum officinarum) cultivation is an important
                    agricultural activity in Haryana.<br />
                    1. Varieties:<br />

                    Haryana cultivates various sugarcane varieties, including
                    high-yielding and disease-resistant ones. Some popular sugarcane
                    varieties grown in the state include CoH 92, CoH 131, and Co 0238.<br />
                    2. Cultivation Seasons:<br />

                    Sugarcane is primarily a tropical and subtropical crop that is grown
                    year-round in Haryana. The main planting season typically starts in
                    September to October, and harvesting can occur throughout the year
                    depending on the crop cycle.<br />
                </p>
            </div>

            <div class="crop-card">
                <img src="https://files.worldwildlife.org/wwfcmsprod/images/Cotton_09.21.12_Industries/hero_small/74bop80spn_133837741.jpg"
                    alt="Crop 2" class="crop-image" />
                <h2 class="crop-name">Cotton</h2>
                <p class="crop-description">
                    Cotton (Gossypium hirsutum) is an important cash crop cultivated in
                    Haryana.<br />
                    1. Varieties:<br />

                    Haryana cultivates several cotton varieties, including hybrid and Bt
                    (genetically modified) cotton varieties. Popular cotton varieties
                    grown in the state include RCH 776, RCH 134, and Bikaneri Nerma.<br />
                    2. Cultivation Seasons:<br />

                    Cotton is primarily a Kharif (monsoon) crop in Haryana. Planting
                    typically starts from June to July, and harvesting takes place from
                    September to October.<br />
                </p>
            </div>

            <div class="crop-card">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTH-zdLGABmStgb0jPVcC-XwHMniyqdh1ebVQ&usqp=CAU"
                    alt="Crop 2" class="crop-image" />
                <h2 class="crop-name">Mustard</h2>
                <p class="crop-description">
                    Mustard (Brassica juncea) cultivation is an important oilseed crop in
                    Haryana. <br />
                    1. Varieties:<br />

                    Haryana cultivates various mustard varieties suitable for both oilseed
                    and rabi (winter) forage purposes. Some popular mustard varieties
                    grown in the state include RH 749, RH 0749, and NPJ 112.<br />
                    2. Cultivation Seasons:<br />

                    Mustard is primarily a Rabi (winter) crop in Haryana. Planting
                    typically starts in October to November, and harvesting takes place
                    from February to March.<br />
                </p>
            </div>

            <div class="crop-card">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQkt57OXX88zUAwjey7m3NgemnRKq3V5WEqqtstc4F7&s"
                    alt="Crop 2" class="crop-image" />
                <h2 class="crop-name">Rice</h2>
                <p class="crop-description">
                    Rice (Oryza sativa) cultivation is an important agricultural activity
                    in Haryana.<br />

                    1. Varieties:<br />

                    Haryana cultivates a variety of rice varieties, including both
                    traditional and modern high-yielding varieties. Some popular rice
                    varieties grown in the state include Pusa Basmati, Pusa 44, and HBC
                    19.<br />
                    2. Cultivation Seasons:<br />

                    Rice is primarily a Kharif (monsoon) crop in Haryana. Planting
                    typically starts in June to July with the onset of the monsoon, and
                    harvesting takes place from September to October.<br />
                </p>
            </div>
            <div class="crop-card">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRXSvisGXfhNLV40WDvjrDav1oPOysXqht33xInXtRdvw&s"
                    alt="Crop 2" class="crop-image" />
                <h2 class="crop-name">Wheat</h2>
                <p class="crop-description">
                    Wheat (Triticum aestivum) cultivation is a key agricultural activity
                    in Haryana, contributing significantly to the state's food security
                    and economy. <br />
                    1. Varieties:<br />

                    Haryana cultivates a range of wheat varieties, including high-yielding
                    and disease-resistant varieties. Some popular wheat varieties grown in
                    the state include HD 2967, HD 3086, and WH 1105.<br />
                    2. Cultivation Seasons:<br />

                    Wheat is primarily a Rabi (winter) crop in Haryana. Planting typically
                    starts in November to December, and harvesting takes place from April
                    to May.<br />
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
                location.replace("haryana.php")
            }
        </script>
</body>

</html>