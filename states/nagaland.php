<?php include "text.php" ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nagaland</title>
    <style>
        ::-webkit-scrollbar {
            width: 9px;

        }

        ::-webkit-scrollbar-thumb {
            background-color: #d04379;
            border-radius: 20px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background-color: #490249;
        }

        ::-webkit-scrollbar-track:hover {
            background-color: rgb(255, 255, 255);
        }

        .card {

            height: 300px;
            width: 300px;
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
    </style>
</head>g

<body
    style=" background-image: url(https://images.unsplash.com/photo-1542708993627-b6e5bbae43c4?q=80&w=1000&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MXx8bmFnYWxhbmR8ZW58MHx8MHx8fDA%3D); background-size:cover;background-position: center;height:100vh;background-repeat: no-repeat;background-attachment: fixed;;">
    <div>
        <button onclick="myfunction()" style="width:4%;height:7%"><img
                src="https://cdn-icons-png.flaticon.com/512/25/25694.png" style="width:100%;height:100%"></button>
        <button onclick="myfunction1()" style="width:4%;height:7%"><img
                src="https://thumb.ac-illust.com/ef/ef76a36c7a4f85f140bf3566836df260_t.jpeg"
                style="width:100%;height:100%"></button>
    </div>
    <p align="center" style="font-size: 70px;color: #bc0ed3; opacity:100;">NAGALAND</p>
    <div class="card">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQrZlA4TV85SDBwoRFwy9sHT21yA7SkbK7kQw&usqp=CAU">
        <div class="content">
            Nagaland is situated in the northeastern part of India, sharing its borders with the Indian states of Assam
            to the west, Arunachal Pradesh to the northeast, and Manipur to the south. It also shares international
            borders with Myanmar (Burma) to the east.Nagaland is characterized by its rugged terrain, lush green hills,
            and deep river valleys. The state is part of the Eastern Himalayas and experiences a pleasant climate.
        </div>
    </div>
    <h1 align="center">Types of soil</h1>

    <div class="card1">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRc5WnU_-7s5sPrwJNQcovDMU5lkZQ46Ce-xg&usqp=CAU"
            alt="">
        <div class="content" style="overflow:scroll">
            <ul>
                <li>Red Soil</li>
                <li>Laterite Soil</li>
                <li>Alluvial Soil</li>
                <li>Mountain Soil</li>
                <li>Sandy Soil</li>
                <li>Loamy Soil</li>
                <li><a href="nagalands.php" style="font-size: 40px;">SOIL</a></li>
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
                <li><a href="nagalandw.php" style="font-size: 40px;">WEATHER</a></li>
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


                <li><a href="nagalandc.php" style="font-size: 40px;">CROPS</a></li>
            </ul>
        </div>
    </div>
    <h1 align="center">Types of irrigation systems</h1>

    <div class="card2">
        <img src="https://images.nationalgeographic.org/image/upload/v1638884234/EducationHub/photos/irrigation-sprinkler.jpg"
            alt="">
        <div class="content">
            <ul>
                <li>Canal Irrigation</li>
                <li>Tube Well Irrigation</li>
                <li>Tank Irrigation</li>
                <li>River Lift Irrigation</li>
                <li>Rainwater Harvesting</li>
                <li>Drip Irrigation</li>
                <li>Sprinkler Irrigation</li>
                <li>Check Dam Irrigation</li>
                <li>Gravity Flow Irrigation</li>
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