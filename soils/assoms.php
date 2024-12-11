<!--ASSAM SOIL TYPES-->
<?php include "text.php" ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Odisha Soil Types</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            /* Light grayish background */
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #289200;
            /* Green header */
            color: #fff;
            text-align: center;
            padding: 10px;
            /* Smaller header */
            font-size: 24px;
            /* Smaller font size */
        }

        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #827717;
            /* White content background */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            border-radius: 10px;
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        .row {
            width: calc(33.33% - 20px);
            /* Adjust the width to leave more space for spacing */
        }

        .soil-type {
            background-color: #ede499;
            /* Soil-like yellow background */
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            transition: background-color 0.3s;
            cursor: pointer;
            margin-bottom: 30px;
            /* Add more margin between divs */
            height: 480px;
            /* Set a fixed height for all divs */
            overflow: scroll;
        }

        .soil-type:hover {
            background-color: #ffac42;
            /* Darker orange on hover */
        }

        .soil-image {
            max-width: 100%;
            border-radius: 10px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.3);
            transition: transform 0.2s ease-in-out;
        }

        .soil-type:hover .soil-image {
            transform: scale(1.05);
        }

        h2 {
            color: #4caf50;
            /* Green heading */
            font-size: 24px;
            margin-top: 10px;
        }

        p {
            font-size: 16px;
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

        </h1>
        <h1>Assam Soil Types</h1>
    </header>
    <div class="container">
        <div class="row">
            <div class="soil-type">
                <h2>Red and Yellow Soils</h2>
                <img src="https://www.shutterstock.com/shutterstock/photos/1658029063/display_1500/stock-photo-deforestation-close-up-with-roots-rocks-showing-in-sunlight-red-and-yellow-rocks-where-soil-was-1658029063.jpg"
                    alt="Loam Soil" class="soil-image" />
                <p>
                    Red and yellow soils are found in some parts of Assam, particularly
                    in the central and southern regions. These soils are relatively
                    acidic and have varying fertility levels. They are suitable for
                    crops like tea and oilseeds but may require lime application to
                    reduce acidity.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="soil-type">
                <h2>Hill Soils</h2>
                <img src="https://previews.123rf.com/images/virynja/virynja1211/virynja121100183/16600510-soil-hill.jpg"
                    alt="Red Soil" class="soil-image" />
                <p>
                    In the hilly terrain of Assam, different types of hill soils can be
                    found, including mountain podzols and forest soils. These soils vary
                    in characteristics and are often suitable for specific types of
                    vegetation rather than traditional agriculture.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="soil-type">
                <h2>Alluvial Soils</h2>
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRO8hIpl9yJxboXqvfumMYitAMODe6037QvM1TbrHJG&s"
                    alt="Black Soil" class="soil-image" />
                <p>
                    Alluvial soil is the most common soil type in Assam and is found in
                    the river valleys and floodplains of the Brahmaputra and Barak
                    rivers. It is rich in organic matter, making it highly fertile and
                    suitable for rice cultivation, which is a major crop in the region.
                </p>
            </div>
        </div>

        <div class="row">
            <div class="soil-type">
                <h2>Laterite Soil</h2>
                <img src="https://t4.ftcdn.net/jpg/01/39/20/75/360_F_139207501_9jBZwr8PtlBpe9ToJzs5hw6gAdifAdg9.jpg"
                    alt="Black Soil" class="soil-image" />
                <p>
                    Laterite soils are found in hilly regions of Assam, especially in
                    the Karbi Anglong and North Cachar Hills. These soils are generally
                    acidic, rich in iron oxides, and often low in fertility. They are
                    not ideal for agriculture without appropriate soil management
                    practices.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="soil-type">
                <h2>Peat Soil</h2>
                <img src="https://img.freepik.com/premium-photo/peat-soil-planting-seedlings-flowers-ovary-closeup-natural-peat-from-swamps-selective-focus_330426-367.jpg"
                    alt="Black Soil" class="soil-image" />
                <p>
                    Peat soils are found in swampy and marshy areas, mainly in the
                    riverine and wetland regions of Assam. They are characterized by a
                    high content of organic matter and are typically acidic. These soils
                    are not suitable for most crops but can be used for wetland rice
                    cultivation.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="soil-type">
                <h2>Saline and Alkaline Soil</h2>
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTDIwqUpFyeqx-Do2pLJR8CuQoYTB1t5wPRENB9bhbfbA&s"
                    alt="peat soil" class="soil-image" />
                <p>
                    In some parts of Assam, especially in the lower reaches of the
                    Brahmaputra, saline and alkaline soils can be found. These soils
                    have a high salt content, making them unsuitable for most crops.
                    Reclamation and proper management may be needed to make them arable
                </p>
            </div>
        </div>
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
            location.replace("assom.php")
        }
    </script>
</body>

</html>