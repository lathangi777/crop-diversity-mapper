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
            height: 470px;
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
        <h1>Chhattisgarh Soil Types</h1>
    </header>
    <div class="container">
        <div class="row">
            <div class="soil-type">
                <h2>Red and Yellow Soils</h2>
                <img src="https://www.shutterstock.com/shutterstock/photos/1658029063/display_1500/stock-photo-deforestation-close-up-with-roots-rocks-showing-in-sunlight-red-and-yellow-rocks-where-soil-was-1658029063.jpg"
                    alt="Loam Soil" class="soil-image" />
                <p>
                    These soils are predominantly found in the northern and western
                    parts of Chhattisgarh. They are typically rich in iron and aluminum
                    oxides, giving them a reddish or yellowish color. These soils are
                    well-drained but may have low fertility. They are suitable for crops
                    like pulses, oilseeds, and millets.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="soil-type">
                <h2>Black Soils</h2>
                <img src="https://www.pw.live/repositeries/topics/soil/image004.jpg" alt="Red Soil"
                    class="soil-image" />
                <p>
                    Black soils, also known as Regur or cotton soil, are found in some
                    parts of Chhattisgarh, especially in the southwestern regions. These
                    soils are rich in clay and organic matter and are known for their
                    high fertility. They are particularly suitable for crops like
                    cotton, soybeans, and some varieties of pulses.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="soil-type">
                <h2>Alluvial Soils</h2>
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRO8hIpl9yJxboXqvfumMYitAMODe6037QvM1TbrHJG&s"
                    alt="Black Soil" class="soil-image" />
                <p>
                    Alluvial soils are typically found in the river valleys and are
                    formed by the deposition of silt and clay carried by rivers. These
                    soils are generally fertile and are well-suited for agriculture. The
                    plains along the Mahanadi River in Chhattisgarh have alluvial soil.
                </p>
            </div>
        </div>

        <div class="row">
            <div class="soil-type">
                <h2>Laterite Soil</h2>
                <img src="https://t4.ftcdn.net/jpg/01/39/20/75/360_F_139207501_9jBZwr8PtlBpe9ToJzs5hw6gAdifAdg9.jpg"
                    alt="Black Soil" class="soil-image" />
                <p>
                    Laterite soils are found in areas with high rainfall and high
                    temperatures. They are characterized by their leaching nature, and
                    as a result, they are often low in fertility. These soils can be
                    found in parts of southern and eastern Chhattisgarh.
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
                <h2>Forest Soils</h2>
                <img src="https://www.indianetzone.com/photos_gallery/76/Mountain_Soil_in_India.jpg"
                    class="soil-image" />
                <p>
                    Chhattisgarh is rich in forest cover, and forest soils are found in
                    hilly and forested areas. These soils tend to be acidic and may not
                    be very suitable for agriculture, but they are vital for maintaining
                    the state's biodiversity.
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
            location.replace("chattisgadh.php")
        }
    </script>
</body>

</html>