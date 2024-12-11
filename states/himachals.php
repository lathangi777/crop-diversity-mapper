<?php include "text.php" ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>I Himachal Pradesh Soil Types</title>
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
            <h1>Himachal Pradesh Types</h1>
        </header>
        <div class="container">
            <div class="row">
                <div class="soil-type">
                    <h2>Alluvial Soil</h2>
                    <img
                        src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRO8hIpl9yJxboXqvfumMYitAMODe6037QvM1TbrHJG&s" />
                    <p>
                        Alluvial Soil: Alluvial soils are found in the lower regions of
                        Himachal Pradesh, particularly in the foothills of the Shivalik
                        Range. These soils are typically fertile and well-suited for
                        agriculture. They are formed by the deposition of sediments carried
                        by rivers and streams
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="soil-type">
                    <h2>Bhabar Soil</h2>
                    <img
                        src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSmCVhKVTEeqm8J3MdjsTzJLqCVDXYjt9dhxYdmVoO3dQ&s" />
                    <p>
                        Bhabar soils are also located in the Shivalik foothills and are
                        characterized by a rocky and stony texture. They are less fertile
                        than alluvial soils and require proper management for agriculture.
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="soil-type">
                    <h2>Glacial Soil</h2>
                    <img src="https://media.sciencephoto.com/c0/43/73/16/c0437316-800px-wm.jpg" alt="Black Soil"
                        class="soil-image" />
                    <p>
                        In higher altitudes, particularly in the higher reaches of the
                        Himalayas, you can find glacial soils. These soils are formed as a
                        result of the weathering of rocks and the deposition of material by
                        glaciers. They tend to be less fertile and require substantial
                        effort for cultivation.
                    </p>
                </div>
            </div>

            <div class="row">
                <div class="soil-type">
                    <h2>Podzolic Soil</h2>
                    <img src="https://cdn.britannica.com/91/147291-050-612EFF95/soil-Podzolic-topsoil-subsoil-layer-Wales.jpg?w=400&h=300&c=crop"
                        alt="Black Soil" class="soil-image" />
                    <p>
                        Podzolic soils are found in the temperate regions of Himachal
                        Pradesh. They are characterized by acidic conditions and leaching,
                        which can impact their fertility. These soils are typically located
                        in the high hills and the outer Himalayas.
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="soil-type">
                    <h2>Sierozem Soil</h2>
                    <img src="https://cdn.britannica.com/56/24256-004-084D5F27/soil-profile-layer-Spodosol-humus-surface-horizon.jpg?w=400&h=300&c=crop"
                        alt="Black Soil" class="soil-image" />
                    <p>
                        Sierozem soils are common in the arid and cold desert regions of
                        Himachal Pradesh, such as the Lahaul and Spiti valleys. They are
                        arid and sandy in nature and not particularly suitable for
                        agriculture without proper irrigation.
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="soil-type">
                    <h2>Forest Soils</h2>
                    <img src="https://c8.alamy.com/comp/H4BXH9/forest-soil-covered-with-autumn-leaves-H4BXH9.jpg"
                        alt="peat soil" class="soil-image" />
                    <p>
                        In the forested regions of Himachal Pradesh, you'll find forest
                        soils, which are characterized by a high content of organic matter
                        and are well-suited for supporting forest vegetation.
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="soil-type">
                    <h2>Red and Yellow Soil</h2>
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS6ucKW0Bgnuu5tNwHAFX5qxWWMbw2aNlHn9S8TBja9&s"
                        alt="Silt Soil" class="soil-image" />
                    <p>
                        Some areas in the state, particularly in the mid-altitude regions,
                        feature red and yellow soils. These soils are typically rich in iron
                        oxides and aluminum, making them suitable for agriculture when
                        properly managed
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="soil-type">
                    <h2>Peat Soil</h2>
                    <img src="https://img.freepik.com/premium-photo/peat-soil-planting-seedlings-flowers-ovary-closeup-natural-peat-from-swamps-selective-focus_330426-367.jpg"
                        alt="Silt Soil" class="soil-image" />
                    <p>
                        Peat soils are found in the wetlands and marshy areas of Himachal
                        Pradesh. They are rich in organic matter but may not be suitable for
                        agriculture due to their waterlogged conditions.
                    </p>
                </div>
            </div>

            <div class="row">
                <div class="soil-type">
                    <h2>Shale Soil</h2>
                    <img src="https://www.indianetzone.com/photos_gallery/76/Mountain_Soil_in_India.jpg"
                        class="soil-image" />
                    <p>
                        Shale soil is found in some parts of Himachal Pradesh and is
                        characterized by the presence of compacted, clay-like particles due
                        to the weathering of shale rock formations. It can be fertile but
                        may have drainage issues.
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
                location.replace("himachal.php")
            }
        </script>
</body>

</html>