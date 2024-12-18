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
            </p>Maharashtra Soil Types
        </h1>
    </header>
    <div class="container">
        <div class="row">
            <div class="soil-type">
                <h2>Alluvial Soil</h2>
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRO8hIpl9yJxboXqvfumMYitAMODe6037QvM1TbrHJG&s"
                    alt="Loam Soil" class="soil-image">
                <p>
                    Found along the riverbanks and in the river basins, alluvial soils are fertile and well-suited for
                    agriculture. The Godavari and Tapi river basins have significant alluvial soil areas.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="soil-type">
                <h2>Red Soil</h2>
                <img src="https://media.istockphoto.com/id/1253538508/photo/red-ground-soil-texture-in-brazil.jpg?s=612x612&w=0&k=20&c=igWTvmgHWIVG3_fwzN4GfWUVoTdHz8eGp3GPY6tNFWQ="
                    alt="Red Soil" class="soil-image">
                <p>
                    Red soil is found in various parts of Maharashtra, including parts of Western Maharashtra and
                    Konkan. It gets its color from iron content. Red soils are generally well-drained but can be less
                    fertile. They are suitable for crops like groundnuts, pulses, and millets.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="soil-type">
                <h2>Black Soil </h2>
                <img src="https://www.pw.live/repositeries/topics/soil/image004.jpg" alt="Black Soil"
                    class="soil-image">
                <p>
                    Also known as "Regur" or "Cotton soil," this type of soil is predominant in parts of Vidarbha and
                    Marathwada regions. Black soil is rich in minerals, especially calcium and magnesium. It is
                    well-suited for cotton cultivation and certain oilseeds.

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
                    This soil type is mainly found in the coastal areas of Konkan and the Western Ghats region. It is
                    rich in iron and aluminum but can be less fertile due to its acidic nature.


                </p>
            </div>
        </div>
        <div class="row">
            <div class="soil-type">
                <h2>Arid Desert Soil</h2>
                <img src="https://cdn.pixabay.com/photo/2017/06/02/17/34/arid-soil-2366911_960_720.jpg" alt="Black Soil"
                    class="soil-image">
                <p>
                    In parts of Maharashtra with arid or semi-arid conditions, you may find desert soils. These soils
                    have low organic matter and fertility and are generally unsuitable for agriculture without extensive
                    irrigation and soil improvement.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="soil-type">
                <h2>Saline and Alkaline Soils</h2>
                <img src="https://www.agrilearner.com/wp-content/uploads/2018/06/salinity.png" alt="peat soil"
                    class="soil-image">
                <p>
                    In parts of Maharashtra, especially in areas with poor drainage, saline and alkaline soils can be
                    found. These soils are not suitable for most crops without proper reclamation measures.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="soil-type">
                <h2> Peat and Marshy Soils</h2>
                <img src="https://c8.alamy.com/comp/J2A0ED/dry-soil-of-the-uitkerkse-polder-near-uitkerke-west-vlaanderen-belgium-J2A0ED.jpg"
                    alt="Black Soil" class="soil-image">
                Peat soils are found in swampy areas, such as some parts of the Konkan region. They are organic-rich
                soils and are not suitable for agriculture without proper drainage and reclamation
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
            location.replace("maharastra.php")
        }
    </script>
</body>

</html>