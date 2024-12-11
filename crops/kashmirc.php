<?php include "text.php" ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Jammu and Kashmir crops</title>
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

        </h1>
        <h1>Major Crops In Jammu and Kashmir</h1>
    </header>
    <div class="container">
        <div class="crop-card">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQdpqcFHJXuPVuWs_g9hszDytu0W5vXK_NL-w&usqp=CAU"
                alt="Crop 2" class="crop-image" />
            <h2 class="crop-name">Apples</h2>
            <p class="crop-description">
                Apple cultivation is one of the most significant horticultural
                activities in the Union Territory of Jammu and Kashmir.<br />

                1. Varieties:<br />

                Jammu and Kashmir are known for producing a wide variety of apples,
                including popular varieties like Red Delicious, Golden Delicious,
                McIntosh, and Granny Smith. Different regions within Jammu and Kashmir
                may have their own favored apple varieties.<br />
                2. Cultivation Seasons:<br />

                Apple cultivation in Jammu and Kashmir is primarily a Rabi (winter)
                crop. The planting season typically begins in late autumn, around
                November, and continues until early winter. Harvesting takes place
                from late summer to early autumn, around August to September.<br />
            </p>
        </div>

        <div class="crop-card">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR5FSUJOGfhtKjkSih2__tGgU6IJChVD3PIag&usqp=CAU"
                alt="Crop 2" class="crop-image" />
            <h2 class="crop-name">Saffron</h2>
            <p class="crop-description">
                Saffron (Crocus sativus) cultivation is an important and unique
                agricultural activity in Jammu and Kashmir, particularly in the region
                of Pampore.<br />
                1. Varieties:<br />

                The saffron variety cultivated in Jammu and Kashmir is known for its
                high-quality stigma (threads) that produce saffron spice. The specific
                variety grown in the region is commonly referred to as "Kashmiri
                Saffron."<br />
                2. Cultivation Seasons:<br />

                Saffron cultivation in Jammu and Kashmir is typically a Rabi (winter)
                crop. The planting season begins in late summer, around August to
                September, and continues into early autumn. Saffron flowers and stigma
                are harvested in the late autumn months, from October to November.<br />
            </p>
        </div>
        <div class="crop-card">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQkt57OXX88zUAwjey7m3NgemnRKq3V5WEqqtstc4F7&s"
                alt="Crop 2" class="crop-image" />
            <h2 class="crop-name">Rice</h2>
            <p class="crop-description">
                Rice cultivation in Jammu and Kashmir is an important agricultural
                activity, especially in the Kashmir Valley and the Jammu region. 1.
                Varieties:<br />

                Jammu and Kashmir cultivate a variety of rice types, including both
                traditional and improved varieties. Some popular rice varieties grown
                in the region include Basmati, Jaya, Ranbir Basmati, and Hybrid 4.<br />
                2. Cultivation Seasons:<br />

                Rice is primarily a Kharif (monsoon) crop in Jammu and Kashmir.
                Planting typically starts in late May to early June with the onset of
                the monsoon, and harvesting takes place from late September to
                October.<br />
            </p>
        </div>

        <div class="crop-card">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRXSvisGXfhNLV40WDvjrDav1oPOysXqht33xInXtRdvw&s"
                alt="Crop 2" class="crop-image" />
            <h2 class="crop-name">Wheat</h2>
            <p class="crop-description">
                Wheat cultivation is an essential agricultural activity in Jammu and
                Kashmir, especially in the Jammu region.<br />
                1. Varieties:<br />

                Jammu and Kashmir cultivates various wheat varieties, both
                high-yielding and traditional. Some popular wheat varieties grown in
                the region include HD 2967, PBW 621, and C 306.<br />
                2. Cultivation Seasons:<br />

                Wheat is primarily a Rabi (winter) crop in Jammu and Kashmir. Planting
                typically starts in late October to November, after the Kharif
                (monsoon) crop is harvested. Harvesting takes place from March to
                April.<br />
            </p>
        </div>

        <div class="crop-card">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQhUMoY-icqJoevS51h8hAZpuaY_g4WWGrCDg&usqp=CAU "
                alt="Crop 2" class="crop-image" />
            <h2 class="crop-name">Barley</h2>
            <p class="crop-description">
                Barley (Hordeum vulgare) cultivation is a significant agricultural
                activity in Jammu and Kashmir, particularly in the region's cooler and
                higher-altitude areas. <br />
                1. Varieties:<br />

                Jammu and Kashmir cultivate various barley varieties, including
                two-row and six-row barley types. Some popular barley varieties grown
                in the region include RD 2035, BH 393, and BH 75.<br />
                2. Cultivation Seasons:<br />

                Barley is primarily a Rabi (winter) crop in Jammu and Kashmir.
                Planting typically starts in late October to November and continues
                into early winter. Harvesting takes place from March to April.<br />
            </p>
        </div>

        <div class="crop-card">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTAFHQNhWu8Cw3ByqPbvsbEmYXpdBCIJuZ357nVD-lLJxwHECw_b_tvbTVfSwIwVlSHDOc&usqp=CAU"
                alt="Crop 2" class="crop-image" />
            <h2 class="crop-name">Maize</h2>
            <p class="crop-description">
                Maize (Zea mays) cultivation is an important agricultural activity in
                Jammu and Kashmir, contributing to both food security and livestock
                feed.<br />

                1. Varieties:<br />

                Jammu and Kashmir cultivates a variety of maize types, including dent,
                flint, and sweet corn. Some popular maize varieties grown in the
                region include Vivek, Vikram, and Pratap Makka.<br />
                2. Cultivation Seasons:<br />

                Maize is primarily a Kharif (monsoon) crop in Jammu and Kashmir.
                Planting typically starts from late June to July with the onset of the
                monsoon, and harvesting takes place from September to October.<br />
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
            location.replace("kashmir.php")
        }
    </script>
</body>

</html>