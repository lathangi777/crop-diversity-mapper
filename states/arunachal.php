<?php include "text.php" ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arunachal</title>
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
            overflow: scroll;
        }

        h1 {
            margin-top: 70px;

        }

        h1:hover {
            color: #1f10a1;
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
    style="background-image: url(https://ihplb.b-cdn.net/wp-content/uploads/2021/10/Best-Places-to-Visit-in-Arunachal-Pradesh-750x430.jpg); background-size:cover;background-position: center;height:100vh;background-repeat: no-repeat;background-attachment: fixed;;">
    <div>
        <button onclick="myfunction()" style="width:4%;height:7%"><img
                src="https://cdn-icons-png.flaticon.com/512/25/25694.png" style="width:100%;height:100%"></button>
        <button onclick="myfunction1()" style="width:4%;height:7%"><img
                src="https://thumb.ac-illust.com/ef/ef76a36c7a4f85f140bf3566836df260_t.jpeg"
                style="width:100%;height:100%"></button>
    </div>
    <p align="center" style="font-size: 70px;color: #bc0ed3; opacity:100;">ARUNACHAL PRADESH</p>
    <div class="card">
        <img src="https://www.mapsofindia.com/maps/arunachalpradesh/arunachal-pradesh.jpg">
        <div class="content">
            Arunachal Pradesh is situated in the northeastern part of India and shares its borders with China to the
            north, Bhutan to the west, and the Indian states of Assam and Nagaland to the south. The state is known for
            its remote and mountainous terrain.Arunachal Pradesh is characterized by its breathtaking natural beauty,
            including snow-capped peaks, dense forests, deep valleys, and fast-flowing rivers. The state is part of the
            Eastern Himalayas and contains numerous mountain ranges
        </div>
    </div>
    <h1 align="center">Types of soil</h1>

    <div class="card1">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRc5WnU_-7s5sPrwJNQcovDMU5lkZQ46Ce-xg&usqp=CAU"
            alt="">
        <div class="content" style="overflow:scroll">
            <ul>
                <li>Hill soil</li>
                <li>Forest Soils</li>
                <li>alluvial soil</li>
                <li>Laterite Soil</li>
                <li>Clayey Soils</li>
                <li>Loamy Soils</li>
                <li>Sandy soil</li>
                <li>Forest soil</li>
                <li><a href="arunachals.php" style="font-size: 40px;">SOIL</a></li>
            </ul>
        </div>
    </div>
    <h1 align="center">Climatic Conditions</h1>

    <div class="card1">
        <img src="https://climate.nasa.gov/internal_resources/2710/Effects_page_triptych.jpeg" alt="">
        <div class="content">
            <ul>
                <li>Subtropical Highland Climate</li>
                <li>Tropical Monsoon Climate</li>
                <li><a href="arunachalw.php" style="font-size: 40px;">WEATHER</a></li>
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
                <li>Rice</li>

                <li>Rubber</li>

                <li>Tea</li>

                <li>spices</li>

                <li>Horticulture</li>


                <li><a href="arunachalc.php" style="font-size: 40px;">CROPS</a></li>
            </ul>
        </div>
    </div>
    <h1 align="center">Types of irrigation systems</h1>

    <div class="card2">
        <img src="https://images.nationalgeographic.org/image/upload/v1638884234/EducationHub/photos/irrigation-sprinkler.jpg"
            alt="">
        <div class="content">
            <ul>
                <li>Drip Irrigation</li>

                <li>Gravity Flow Irrigation</li>
                <li>Sprinkler Irrigation</li>
                <li>Rainwater Harvesting</li>
                <li> Canal Irrigation</li>

                <li>Tube Well Irrigation </li>

                <li> Tanks and Reservoirs</li>

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