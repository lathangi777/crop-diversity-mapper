<?php include "text.php" ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Telangana Soil Types</title>
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
            </p>Telangana Soil Types
        </h1>
    </header>
    <div class="container">
        <div class="row">
            <div class="soil-type">
                <h2>Red Soils</h2>
                <img src="https://media.istockphoto.com/id/1253538508/photo/red-ground-soil-texture-in-brazil.jpg?s=612x612&w=0&k=20&c=igWTvmgHWIVG3_fwzN4GfWUVoTdHz8eGp3GPY6tNFWQ="
                    alt="Loam Soil" class="soil-image" />
                <p>
                    These soils are predominant in Telangana and are derived from
                    granite and gneiss rocks. They are often rich in iron and aluminum
                    oxides, which give them a reddish color. Red soils are well-drained
                    but are generally not very fertile. They require proper soil
                    management and amendments for agriculture.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="soil-type">
                <h2>Black Soils</h2>
                <img src="https://www.pw.live/repositeries/topics/soil/image004.jpg" alt="Red Soil"
                    class="soil-image" />
                <p>
                    Black soils, also known as regur soils or black cotton soils, are
                    found in some parts of Telangana. They are rich in clay minerals and
                    organic matter, making them highly suitable for agriculture. These
                    soils are known for their moisture-retaining capacity and are ideal
                    for growing crops like cotton, oilseeds, and pulses.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="soil-type">
                <h2>Alluvial Soils</h2>
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRO8hIpl9yJxboXqvfumMYitAMODe6037QvM1TbrHJG&s"
                    alt="Black Soil" class="soil-image" />
                <p>
                    Alluvial soils are found in river basins and are formed from the
                    deposition of silt, sand, and clay brought by rivers. They are
                    generally fertile and suitable for a wide range of crops. In
                    Telangana, you can find alluvial soils in areas along the Godavari
                    and Krishna riverbanks.
                </p>
            </div>
        </div>

        <div class="row">
            <div class="soil-type">
                <h2>Laterite Soil</h2>
                <img src="https://t4.ftcdn.net/jpg/01/39/20/75/360_F_139207501_9jBZwr8PtlBpe9ToJzs5hw6gAdifAdg9.jpg"
                    alt="Black Soil" class="soil-image" />
                <p>
                    Laterite soils are typically found in areas with heavy rainfall and
                    high temperatures. They are leached soils, which means they lose
                    nutrients due to heavy rainfall. These soils are not very fertile
                    and are found in parts of Telangana with such environmental
                    conditions.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="soil-type">
                <h2>Sandy Soils</h2>
                <img src="https://watermark.lovepik.com/photo/20211121/large/lovepik-sandy-beach-picture_500539373.jpg"
                    alt="Black Soil" class="soil-image" />
                <p>
                    Sandy soils are characterized by larger sand particles and are
                    generally well-draining. They are not very fertile and may require
                    organic matter and nutrients for agricultural purposes. Sandy soils
                    are found in drier regions of Telangana.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="soil-type">
                <h2>Saline and Alkaline Soil</h2>
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTDIwqUpFyeqx-Do2pLJR8CuQoYTB1t5wPRENB9bhbfbA&s"
                    alt="peat soil" class="soil-image" />
                <p>
                    In some parts of Telangana, particularly in the low-lying areas and
                    near lakes or water bodies, saline and alkaline soils can be found.
                    These soils have a high concentration of salts and are not suitable
                    for most crops without proper reclamation.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="soil-type">
                <h2>Forest and Hilly Soils</h2>
                <img src="https://www.indianetzone.com/photos_gallery/76/Mountain_Soil_in_India.jpg"
                    class="soil-image" />
                <p>
                    In the forested and hilly regions of Telangana, the soils may vary
                    depending on the local topography and vegetation. These soils may
                    range from acidic to neutral and may support diverse flora.
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
            location.replace("telangana.php")
        }
    </script>

</body>

</html>