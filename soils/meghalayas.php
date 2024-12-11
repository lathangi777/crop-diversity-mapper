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

        </h1>
        <h1>Meghalaya Soil Types</h1>
    </header>
    <div class="container">
        <div class="row">
            <div class="soil-type">
                <h2>Red Soils</h2>
                <img src="https://media.istockphoto.com/id/1253538508/photo/red-ground-soil-texture-in-brazil.jpg?s=612x612&w=0&k=20&c=igWTvmgHWIVG3_fwzN4GfWUVoTdHz8eGp3GPY6tNFWQ="
                    alt="Loam Soil" class="soil-image" />
                <p>
                    Red soils are commonly found in the state and are primarily formed
                    as a result of weathering of crystalline rocks like granite and
                    gneiss. These soils are typically well-drained and have a reddish
                    color due to the presence of iron oxides. They are generally acidic
                    and may be suitable for certain types of crops, with proper soil
                    management.
                </p>
            </div>
        </div>

        <div class="row">
            <div class="soil-type">
                <h2>Alluvial Soils</h2>
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRO8hIpl9yJxboXqvfumMYitAMODe6037QvM1TbrHJG&s"
                    alt="Black Soil" class="soil-image" />
                <p>
                    Alluvial soils are found in the low-lying areas, riverbanks, and
                    valleys of Meghalaya. They are formed by the deposition of silt,
                    clay, and other minerals carried by rivers and streams. Alluvial
                    soils are usually fertile and suitable for a wide range of crops.
                </p>
            </div>
        </div>

        <div class="row">
            <div class="soil-type">
                <h2>Laterite Soil</h2>
                <img src="https://t4.ftcdn.net/jpg/01/39/20/75/360_F_139207501_9jBZwr8PtlBpe9ToJzs5hw6gAdifAdg9.jpg"
                    alt="Black Soil" class="soil-image" />
                <p>
                    Laterite soils are prevalent in areas with heavy rainfall and high
                    temperatures. They are highly leached and low in fertility, making
                    them less suitable for agriculture. These soils are often found in
                    the lower slopes and foothills of Meghalaya.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="soil-type">
                <h2>Mountain Soils</h2>
                <img src="https://media.istockphoto.com/id/1336523155/photo/coarse-sand-pile-with-cloudy-sky.jpg?s=612x612&w=0&k=20&c=myBP4avboidahhYS-Qh2QPq8Ve8Xs3eSVIU1pZM1EY4="
                    alt="Black Soil" class="soil-image" />
                <p>
                    In the hilly and mountainous regions of Meghalaya, various types of
                    mountain soils can be found. These soils are generally shallow and
                    stony, making agriculture challenging in such areas.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="soil-type">
                <h2>Peaty Soil</h2>
                <img src="https://img.freepik.com/premium-photo/peat-soil-planting-seedlings-flowers-ovary-closeup-natural-peat-from-swamps-selective-focus_330426-367.jpg"
                    alt="peat soil" class="soil-image" />
                <p>
                    Peaty soils are found in areas with waterlogged conditions, such as
                    wetlands and swamps. They are characterized by high organic matter
                    content. While these soils may not be suitable for most crops, they
                    can be used for specific agricultural practices.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="soil-type">
                <h2>Forest Soils</h2>
                <img src="https://www.indianetzone.com/photos_gallery/76/Mountain_Soil_in_India.jpg"
                    class="soil-image" />
                <p>
                    Meghalaya's hilly and forested terrain has soils rich in organic
                    matter due to the decomposition of plant and leaf litter. These
                    forest soils are often acidic and may require lime application for
                    agricultural purposes.
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
            location.replace("meghalaya.php")
        }
    </script>
</body>

</html>