<?php include "text.php" ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
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
        <h1>Punjab Soil Types</h1>
    </header>
    <div class="container">
        <div class="row">
            <div class="soil-type">
                <h2>Alluvial Soil</h2>
                <img
                    src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRO8hIpl9yJxboXqvfumMYitAMODe6037QvM1TbrHJG&s" />
                <p>
                    Alluvial soil is the most common soil type in Punjab. It is formed
                    by the deposition of silt and clay by the rivers, particularly the
                    Indus and its tributaries. Alluvial soil is generally fertile and
                    suitable for a wide range of crops.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="soil-type">
                <h2>Silt Loam Soil</h2>
                <img
                    src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQMZuy0b2BX8T4-df2SPPWxt5j5lhkG0UbeeA92el45&s" />
                <p>
                    Silt loam soil is a subtype of alluvial soil that contains a
                    balanced mix of sand, silt, and clay. This type of soil has good
                    moisture-retention properties and is highly suitable for crops like
                    wheat, rice, and sugarcane.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="soil-type">
                <h2>Clayey Soils</h2>
                <img src="https://www.shutterstock.com/shutterstock/photos/1922365577/display_1500/stock-photo-close-up-photo-of-sand-and-soil-a-real-close-up-of-a-part-of-the-earth-s-crust-ordinary-plain-1922365577.jpg"
                    alt="Black Soil" class="soil-image" />
                <p>
                    Clay soil is also present in parts of Punjab. It has a higher clay
                    content, which can make it heavy and prone to waterlogging,
                    especially during the rainy season. Proper drainage systems are
                    essential for cultivating crops in clay soil.
                </p>
            </div>
        </div>

        <div class="row">
            <div class="soil-type">
                <h2>Loam Soil</h2>
                <img src="https://www.worldatlas.com/r/w1200/upload/33/45/4c/sandy-loam-soil.jpg" alt="Black Soil"
                    class="soil-image" />
                <p>
                    Loam soil is a mixture of sand, silt, and clay, and it is often
                    considered ideal for farming. It has good water-holding capacity and
                    provides excellent support for a wide range of crops.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="soil-type">
                <h2>Saline and Alkaline Soils</h2>
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTDIwqUpFyeqx-Do2pLJR8CuQoYTB1t5wPRENB9bhbfbA&sg"
                    alt="Black Soil" class="soil-image" />
                <p>
                    Some areas of Punjab have saline and alkaline soils. These soils
                    have high salt content, making them unsuitable for most crops. Soil
                    reclamation techniques are required to make these areas arable.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="soil-type">
                <h2>Sandy Soil</h2>
                <img src="https://watermark.lovepik.com/photo/20211121/large/lovepik-sandy-beach-picture_500539373.jpg"
                    alt="peat soil" class="soil-image" />
                <p>
                    Sandy soil is found in certain pockets of Punjab. It has a low
                    water-retention capacity and tends to dry out quickly. These soils
                    are typically less fertile but can be improved with organic matter
                    and proper irrigation
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
                    Red soil is found in the hilly and forested areas of Punjab. It is
                    often acidic and less fertile compared to alluvial soils, making it
                    less suitable for intensive agriculture.
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
            location.replace("punjab.php")
        }
    </script>
</body>

</html>