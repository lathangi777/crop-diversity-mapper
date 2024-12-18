<?php include "text.php" ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Indian Soil Types</title>
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
            background-color: #EDE499;
            /* Soil-like yellow background */
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            transition: background-color 0.3s;
            cursor: pointer;
            margin-bottom: 20px;
            /* Add more margin between divs */
            height: 400px;
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

        </h1>
        <h1>Madhya Pradesh Soil Types</h1>
    </header>
    <div class="container">
        <div class="row">
            <div class="soil-type">
                <h2>Alluvial Soil</h2>
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRO8hIpl9yJxboXqvfumMYitAMODe6037QvM1TbrHJG&s"
                    alt="Loam Soil" class="soil-image">
                <p>
                    Alluvial soil is found in the low-lying areas along the banks of rivers such as the Narmada,
                    Chambal, and Betwa. It is fertile and suitable for a variety of crops, including wheat, rice, and
                    sugarcane.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="soil-type">
                <h2>Red Soil</h2>
                <img src="https://media.istockphoto.com/id/1253538508/photo/red-ground-soil-texture-in-brazil.jpg?s=612x612&w=0&k=20&c=igWTvmgHWIVG3_fwzN4GfWUVoTdHz8eGp3GPY6tNFWQ="
                    alt="Red Soil" class="soil-image">
                <p>
                    Red soil is widespread in parts of Madhya Pradesh. It is characterized by its reddish color due to
                    the presence of iron oxides. Crops like pulses, millets, and groundnuts can grow well in this soil
                    type.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="soil-type">
                <h2>Black Soil </h2>
                <img src="https://www.pw.live/repositeries/topics/soil/image004.jpg" alt="Black Soil"
                    class="soil-image">
                <p>
                    Black soil, also known as Regur or Vertisols, is one of the most famous soil types in the region. It
                    is rich in clay content and is highly suitable for cotton and oilseed crops.
                </p>
            </div>
        </div>
        <!-- Add more Indian soil types with images and details as needed -->

        <div class="row">
            <div class="soil-type">
                <h2> Laterite Soil</h2>
                <img src="https://t4.ftcdn.net/jpg/01/39/20/75/360_F_139207501_9jBZwr8PtlBpe9ToJzs5hw6gAdifAdg9.jpg"
                    alt="Black Soil" class="soil-image">
                <p>
                    Laterite soil is typically found in parts of eastern Madhya Pradesh. It is rich in iron and
                    aluminum, making it suitable for certain types of horticultural crops.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="soil-type">
                <h2>Arid Desert Soil</h2>
                <img src="https://cdn.pixabay.com/photo/2017/06/02/17/34/arid-soil-2366911_960_720.jpg" alt="Black Soil"
                    class="soil-image">
                <p>
                    In the western part of the state, especially in the areas near the Thar Desert, you can find arid
                    and desert soils. These soils are not very fertile and are suitable for drought-resistant crops.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="soil-type">
                <h2>Mountain Soil</h2>
                <img src="https://previews.123rf.com/images/realfoto/realfoto1311/realfoto131100020/24362627-mountain-soil-forest-in-nan-thailand.jpg"
                    alt="peat soil" class="soil-image">
                <p>
                    In the hilly regions of Madhya Pradesh, you'll find mountain soils. These soils are often
                    well-drained and suitable for horticulture and forest vegetation.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="soil-type">
                <h2> Peat and Marshy Soils</h2>
                <img src="https://c8.alamy.com/comp/J2A0ED/dry-soil-of-the-uitkerkse-polder-near-uitkerke-west-vlaanderen-belgium-J2A0ED.jpg"
                    alt="Black Soil" class="soil-image">
                In some wetland areas, peat and marshy soils are found. These soils are not suitable for most
                agricultural activities and are often used for wetland conservation.
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
            location.replace("madhya.php")
        }
    </script>
</body>

</html>