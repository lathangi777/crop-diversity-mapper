<?php include "text.php" ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Telangana Crops</title>
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
            text-align: center;
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
            </p>Major Crops In Telangana
        </h1>
    </header>
    <div class="container">
        <div class="crop-card">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQkt57OXX88zUAwjey7m3NgemnRKq3V5WEqqtstc4F7&s"
                alt="Crop 1" class="crop-image" />
            <h2 class="crop-name">Paddy</h2>
            <p class="crop-description">
                Rice is a staple crop of Telangana and is grown throughout the state.
                It is well-suited to the region's tropical climate and abundant water
                resources. Telangana is known for producing high-quality rice
                varieties like BPT-5204 and Sona Masuri. Rice cultivation is a primary
                source of livelihood for many farmers, and it plays a vital role in
                the state's food security<br />
            </p>
        </div>
        <div class="crop-card">
            <img src="https://img1.exportersindia.com/product_images/bc-full/2018/9/5619932/whole-red-gram-1537348088-4031948.jpeg"
                alt="Crop 2" class="crop-image" />
            <h2 class="crop-name">Redgram(pigeon pea)</h2>
            <p class="crop-description">
                Red gram, also known as pigeon pea, is a significant pulse crop in
                Telangana. It is cultivated in rainfed areas and is crucial for both
                food security and crop rotation. Red gram is a valuable source of
                protein for the local population and contributes to soil fertility
                improvement.
            </p>
        </div>
        <div class="crop-card">
            <img src="https://files.worldwildlife.org/wwfcmsprod/images/Cotton_09.21.12_Industries/hero_small/74bop80spn_133837741.jpg"
                alt="Crop 2" class="crop-image" />
            <h2 class="crop-name">Cotton</h2>
            <p class="crop-description">
                Cotton is a major cash crop in Telangana, particularly in districts
                like Warangal and Adilabad. The state is known for producing
                long-staple cotton, which is essential for the textile industry.
                Cotton cultivation benefits from the state's warm climate and black
                soil. It significantly contributes to the textile and apparel sectors.
            </p>
        </div>
        <div class="crop-card">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSvYuIsOSjL7cRSiD0Skcu51q8fT4UTDCnHngwXIMfq&s"
                alt="Crop 2" class="crop-image" />
            <h2 class="crop-name">Groundnuts</h2>
            <p class="crop-description">
                Groundnuts are a significant crop in Telangana, especially in the
                districts of Mahabubnagar and Khammam. The semi-arid climate and
                well-drained soils make it an ideal region for groundnut cultivation.
                Groundnuts are used for oil extraction and as a snack food.
            </p>
        </div>
        <div class="crop-card">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTAFHQNhWu8Cw3ByqPbvsbEmYXpdBCIJuZ357nVD-lLJxwHECw_b_tvbTVfSwIwVlSHDOc&usqp=CAU"
                alt="Crop 2" class="crop-image" />
            <h2 class="crop-name">Maize</h2>
            <p class="crop-description">
                Maize is grown extensively in Telangana due to its versatility and
                adaptability to various soil and climatic conditions. It serves as
                both human food and animal feed. Maize cultivation has gained
                popularity as it provides a consistent source of income for farmers
                and meets the demand for poultry and livestock feed.
            </p>
        </div>
        <div class="crop-card">
            <img src="https://static.toiimg.com/photo/91792143.cms" alt="Crop 2" class="crop-image" />
            <h2 class="crop-name">Soyabean</h2>
            <p class="crop-description">
                Soybean cultivation has been on the rise in Telangana due to its high
                protein content and multiple uses. It is a valuable cash crop, with
                soybean oil and meal being key products. The state's climate,
                especially in northern Telangana, is suitable for soybean cultivation
            </p>
        </div>
        <div class="crop-card">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQA6HqNgcILqKGjs4WbTXsKRSaOAZatO6Uv4do2WhGL&s"
                alt="Crop 2" class="crop-image" />
            <h2 class="crop-name">Chilles</h2>
            <p class="crop-description">
                Telangana is renowned for its spicy red chillies, particularly the
                Guntur Sannam and Teja varieties. These chillies thrive in the state's
                hot and dry climate. They are a crucial ingredient in local cuisine,
                and the state is a major producer and exporter of chillies
            </p>
        </div>
        <div class="crop-card">
            <img src="https://image.telanganatoday.com/wp-content/uploads/2021/03/Turmeric_V_jpg--442x260-4g.webp?sw=412&dsz=442x260&iw=412&p=false&r=2.625"
                alt="Crop 2" class="crop-image" />
            <h2 class="crop-name">Turmeric</h2>
            <p class="crop-description">
                Turmeric cultivation is prominent in parts of Telangana, including
                Nizamabad and Warangal. The state is known for its high-quality
                turmeric with rich curcumin content. Turmeric is not only used for
                culinary purposes but also for its medicinal properties and as a dye.
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
            location.replace("telangana.php")
        }
    </script>
</body>

</html>