<?php include "text.php" ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Indian Soil Types</title>
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
            height: 460px;
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
            </p>Karnataka Soil Types
        </h1>
    </header>
    <div class="container">
        <div class="row">
            <div class="soil-type">
                <h2>Alluvial Soil</h2>
                <img
                    src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRO8hIpl9yJxboXqvfumMYitAMODe6037QvM1TbrHJG&s" />
                <p>
                    Alluvial soils are found in the river basins of Karnataka, primarily
                    along the banks of rivers like the Cauvery and Krishna. These soils
                    are fertile and suitable for a wide range of crops, including paddy,
                    sugarcane, and horticultural crops.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="soil-type">
                <h2>Laterite Soils</h2>
                <img src="https://st.adda247.com/https://adda247jobs-wp-assets-adda247.s3.ap-south-1.amazonaws.com/jobs/wp-content/uploads/sites/2/2023/01/12123527/01-19-1.png"
                    alt="Black Soil" class="soil-image" />
                <p>
                    Laterite soils are commonly found in the coastal regions of
                    Karnataka, where they develop due to the weathering of basaltic
                    rocks. These soils are often acidic and nutrient-poor, making them
                    less suitable for agriculture. However, they are used for plantation
                    crops like cashew, areca nut, and coconut.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="soil-type">
                <h2>Mountain Soils</h2>
                <img src="https://www.indianetzone.com/photos_gallery/76/Mountain_Soil_in_India.jpg" alt="Black Soil"
                    class="soil-image" />
                <p>
                    In the hilly regions of the Western Ghats, you can find mountain
                    soils. These soils are usually well-drained and have a mix of
                    organic matter. They are used for growing a variety of crops like
                    tea, coffee, and spices, making this region known for its
                    plantations.
                </p>
            </div>
        </div>

        <div class="row">
            <div class="soil-type">
                <h2>Sandy Loam Soils</h2>
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRd0abd8X7Yeb5dSwnQgmAFeLzgOi8pbo1-ciuMktmfiMEJO-ZQYFCk1X7ZRXv2t6iulw0&usqp=CAU"
                    alt="Black Soil" class="soil-image" />
                <p>
                    Sandy Loam Soils, which are a combination of sand and silt with good
                    drainage properties. These soils are often found in parts of the
                    coastal region and are suitable for growing crops like groundnuts
                    and oilseeds.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="soil-type">
                <h2>Saline and Alkaline Soils</h2>
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTDIwqUpFyeqx-Do2pLJR8CuQoYTB1t5wPRENB9bhbfbA&sg"
                    alt="Black Soil" class="soil-image" />
                <p>
                    In some parts of northern Karnataka, particularly near the inland
                    drainage areas, saline and alkaline soils can be found. These soils
                    have a high concentration of salts and are often unsuitable for
                    agriculture.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="soil-type">
                <h2>Sandy Soil</h2>
                <img src="https://watermark.lovepik.com/photo/20211121/large/lovepik-sandy-beach-picture_500539373.jpg"
                    alt="peat soil" class="soil-image" />
                <p>
                    Sandy soils can be found in parts of the coastal regions, especially
                    in the districts bordering the Arabian Sea. These soils have a
                    coarse texture and drain quickly. They are suitable for crops like
                    groundnuts and oilseeds.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="soil-type">
                <h2>Black Soil</h2>
                <img src="https://www.pw.live/repositeries/topics/soil/image004.jpg" alt="Silt Soil"
                    class="soil-image" />
                <p>
                    In some parts of Punjab, you can find black soil, also known as
                    regur soil. It is rich in clay and organic matter and is known for
                    its fertility. Black soil is suitable for crops like cotton,
                    soybeans, and pulses.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="soil-type">
                <h2>Red Soil</h2>
                <img src="https://media.istockphoto.com/id/1253538508/photo/red-ground-soil-texture-in-brazil.jpg?s=612x612&w=0&k=20&c=igWTvmgHWIVG3_fwzN4GfWUVoTdHz8eGp3GPY6tNFWQ="
                    alt="Silt Soil" class="soil-image" />
                <p>
                    Red soils are prevalent in various parts of Karnataka, particularly
                    in the northern and eastern regions. These soils are well-drained
                    and often rich in iron and aluminum, which gives them a reddish
                    color. They are suitable for crops like groundnuts, millets, and
                    pulses.
                </p>
            </div>
        </div>

        <div class="row">
            <div class="soil-type">
                <h2>Forest Soils</h2>
                <img src="https://www.indianetzone.com/photos_gallery/76/Mountain_Soil_in_India.jpg"
                    class="soil-image" />
                <p>
                    Karnataka has extensive forest cover, and the forest soils are
                    mostly found in these areas. These soils have a high content of
                    organic matter and are essential for maintaining the health of the
                    region's forests.
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
            location.replace("karnataka.php")
        }
    </script>
</body>

</html>