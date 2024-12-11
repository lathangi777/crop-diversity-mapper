<?php include "text.php" ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>I Himachal Pradesh Soil Types</title>
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
            height: 450px;
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
        <h1>Hayana soil types</h1>
    </header>
    <div class="container">
        <div class="row">
            <div class="soil-type">
                <h2>Alluvial Soil</h2>
                <img
                    src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRO8hIpl9yJxboXqvfumMYitAMODe6037QvM1TbrHJG&s" />
                <p>
                    Alluvial soil is the most common soil type in Haryana. It is found
                    in the river basins of the Yamuna, Ghaggar, and Sutlej rivers.
                    Alluvial soil is generally fertile and suitable for agriculture. It
                    is composed of a mixture of sand, silt, and clay, making it ideal
                    for growing a variety of crops, including wheat, rice, and cotton.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="soil-type">
                <h2>Saline and Alkaline Soils</h2>
                <img src="https://thumbs.dreamstime.com/b/saline-soil-cattail-plant-grows-242348632.jpg"
                    alt="Black Soil" class="soil-image" />
                <p>
                    In some parts of Haryana, especially in areas near the southern
                    regions of the state, you can find saline and alkaline soils. These
                    soils have a high concentration of salts, making them unsuitable for
                    most crops. Soil reclamation measures are often required to make
                    these areas arable.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="soil-type">
                <h2>Black Soil</h2>
                <img src="https://www.pw.live/repositeries/topics/soil/image004.jpg" alt="Black Soil"
                    class="soil-image" />
                <p>
                    Black soil, also known as Regur soil or Cotton Soil, is found in
                    some parts of Haryana, particularly in the southern districts. This
                    soil type is dark in color and rich in clay content, which gives it
                    good water-retention properties. It is suitable for cotton and
                    certain oilseeds.
                </p>
            </div>
        </div>

        <div class="row">
            <div class="soil-type">
                <h2>Arid and Desert Soils</h2>
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSSbBLE1k-VungJceVjMAwJ7FyZ3lL_MrZqp7gk1uSo&s"
                    alt="Black Soil" class="soil-image" />
                <p>
                    In the western and southwestern parts of Haryana, bordering the Thar
                    Desert, you can find arid and desert soils. These soils are often
                    sandy and less fertile due to low organic matter content and poor
                    water-holding capacity. Agriculture in these regions is challenging,
                    and crops like millets and drought-resistant varieties are grown.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="soil-type">
                <h2>Desertic Soil</h2>
                <img src="https://media.istockphoto.com/id/1301663344/photo/sand-dunes-at-sunset.webp?b=1&s=170667a&w=0&k=20&c=dhxTpQIEDSm_b3iFS4p5fCIFQP7kOB7MV3WgkttNEeA="
                    alt="Black Soil" class="soil-image" />
                <p>
                    In the northwest of Haryana, close to the Thar Desert, desertic
                    soils are prevalent. These soils are sandy and arid, making
                    agriculture difficult. Desertic soils require special farming
                    practices and drought-resistant crops.
                </p>
            </div>
        </div>

        <div class="row">
            <div class="soil-type">
                <h2>Red and Yellow Soil</h2>
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS6ucKW0Bgnuu5tNwHAFX5qxWWMbw2aNlHn9S8TBja9&s"
                    alt="Silt Soil" class="soil-image" />
                <p>
                    Red and yellow soils can be found in some hilly and rocky regions of
                    Haryana. These soils are generally less fertile and suitable for
                    limited agricultural activities. They are characterized by their red
                    or yellow color and can be found in areas with significant
                    elevation.
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
            location.replace("haryana.php")
        }
    </script>

</body>

</html>