<!--ASSAM STATE-->
<?php include "text.php" ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .card {

            height: 300px;
            width: 250px;
            border: 2px solid black;
            overflow: hidden;
            border-radius: 20px;
            display: flex;
            transition: 0.3s;
            margin: auto;
            background: #a2d4ab;
        }

        .card:hover {
            width: 900px;
        }

        .card1 {

            height: 300px;
            width: 450px;
            border: 2px solid black;
            overflow: hidden;
            border-radius: 20px;
            display: flex;
            transition: 0.3s;
            margin: auto;
            background: #a2d4ab;
        }

        .card1:hover:hover {
            width: 900px;
        }

        .card2 {

            height: 300px;
            width: 400px;
            border: 2px solid black;
            overflow: hidden;
            border-radius: 20px;
            display: flex;
            transition: 0.3s;
            margin: auto;
            background: #5dd873;
        }

        .card2:hover {
            width: 900px;
        }

        img {
            height: 300px;
            width: 500px;
            border-radius: 10px;


        }

        .content {
            margin: 30px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 18px;
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
            overflow: hidden;
        }

        h1 {
            margin-top: 70px;

        }

        h1:hover {
            color: #e85848;
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

<body
    style="background-image: url( https://www.greendna.in/cdn/shop/products/assam_3a67e0e5-d62d-4549-a3b6-a4b30334d5b3_600x.jpg?v=1629740325); background-size:cover;background-position: absolute;height:100vh;background-repeat: no-repeat;background-attachment: fixed;">
    <div>
        <button onclick="myfunction()" style="width:4%;height:7%"><img
                src="https://cdn-icons-png.flaticon.com/512/25/25694.png" style="width:100%;height:100%"></button>
        <button onclick="myfunction1()" style="width:4%;height:7%"><img
                src="https://thumb.ac-illust.com/ef/ef76a36c7a4f85f140bf3566836df260_t.jpeg"
                style="width:100%;height:100%"></button>
    </div>
    <p align="center" style="font-size: 70px;color: #e76528;">ASSAM</p>
    <div class="card">

        <img
            src="https://www.shutterstock.com/shutterstock/photos/313450100/display_1500/stock-vector-assam-state-india-vector-map-silhouette-illustration-isolated-on-india-map-editable-blank-vector-313450100.jpg">
        <div class="content">
            Assam is a northeastern state of India, known for its lush green landscapes, tea gardens, and rich
            biodiversity.
            It is the largest producer of tea in India and is famous for its Assam tea, which is renowned worldwide.

        </div>
    </div>
    <h1 align="center">types of soil</h1>

    <div class="card1">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQJR_Z8oL-N0VtVn5aZUPeI8zw8Uy4cDimQ3w&usqp=CAU"
            alt="">
        <div class="content" style="overflow:scroll">
            <ul>
                <li>Black Soil (Regur)</li>
                <li>red soil</li>
                <li>alluvial soil</li>
                <li>Laterite Soil</li>
                <li>Arid and Desert Soils</li>
                <li><a href="assoms.php" style="font-size: 40px;">SOIL</a></li>
            </ul>
        </div>
    </div>
    <h1 align="center">climatic conditions</h1>

    <div class="card1">
        <img src="https://climate.nasa.gov/internal_resources/2710/Effects_page_triptych.jpeg" alt="">
        <div class="content">
            <ul>
                <li>tropical climate</li>
                <li>subtropical climate</li>
                <li>sub-humid climate</li>
                <li><a href="assomw.php" style="font-size: 40px;">WEATHER</a></li>
            </ul>
        </div>
    </div>
    </div>
    </div>
    <h1 align="center">types of crops grown</h1>

    <div class="card1">
        <img src="https://www.croptrust.org/fileadmin/_processed_/0/2/csm_France_458927195c.jpeg" alt="">
        <div class="content">
            <ul>
                <li>Soybean</li>

                <li>Wheat</li>

                <li>Rice</li>


                <li><a href="assomc.php" style="font-size: 40px;">CROPS</a></li>
            </ul>
        </div>
    </div>
    <h1 align="center">types of irrigation systems</h1>

    <div class="card2">
        <img src="https://images.nationalgeographic.org/image/upload/v1638884234/EducationHub/photos/irrigation-sprinkler.jpg"
            alt="">
        <div class="content">
            <ul>
                <li> Canal Irrigation</li>

                <li> Tube Wells and Bore Wells</li>

                <li> Tanks and Reservoirs</li>

                <li>Drip Irrigation</li>

                <li>Traditional Methods</li>
            </ul>
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
            location.replace("indiamap.php")
        }
    </script>

</body>

</html>