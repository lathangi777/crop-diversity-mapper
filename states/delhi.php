<?php include "text.php" ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tripura</title>
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

        .card {

            height: 300px;
            width: 280px;
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
            color: #e85848;
        }
    </style>
</head>

<body
    style="background-image: url(https://media.istockphoto.com/id/530741074/photo/red-fort-lal-qila-with-indian-flag-delhi-india.jpg?s=612x612&w=0&k=20&c=7BTI-dgQNPPTq2yARrwIBf2yIqO4PUPX1EJY5ITIyoM=); background-size:cover;background-position: absolute;height:100vh;background-repeat: no-repeat;background-attachment: fixed;">
    <div>
        <button onclick="myfunction()" style="width:4%;height:7%"><img
                src="https://cdn-icons-png.flaticon.com/512/25/25694.png" style="width:100%;height:100%"></button>
        <button onclick="myfunction1()" style="width:4%;height:7%"><img
                src="https://thumb.ac-illust.com/ef/ef76a36c7a4f85f140bf3566836df260_t.jpeg"
                style="width:100%;height:100%"></button>
    </div>
    <p align="center" ; style="font-size: 70px;color: #e76528;">DELHI</p>
    <div class="card">

        <img src="https://cdn5.vectorstock.com/i/1000x1000/37/79/delhi-map-vector-30393779.jpg">
        <div class="content">
            Delhi,[a] officially the National Capital Territory (NCT) of Delhi, is a city and a union territory of India
            containing New Delhi, the capital of India. Lying on both sides of the Yamuna river, but chiefly to the
            west, or beyond its right bank, Delhi shares borders with the state of Uttar Pradesh in the east and with
            the state of Haryana in the remaining directions. Delhi became a union territory on 1 November 1956 and the
            NCT in 1995.[15] The NCT covers an area of 1,484 square kilometres (573 sq mi).[5] According to the 2011
            census, Delhi's city proper population was over 11 million,[6][16] while the NCT's population was about 16.8
            million.[7].
        </div>
    </div>
    <h1 align="center">Types of soil</h1>

    <div class="card1">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQJR_Z8oL-N0VtVn5aZUPeI8zw8Uy4cDimQ3w&usqp=CAU"
            alt="">
        <div class="content" style="overflow:scroll">
            <ul>
                <li>Alluvial Soil</li>
                <li>Red Soil</li>
                <li>Laterite Soil</li>
                <li>Mountain Soil</li>
                <li>Clay Soil</li>
                <li>Loam Soil</li>
                <li>Sandy Soil</li>
                <li>Silt Soil</li>

            </ul>
        </div>
    </div>
    <h1 align="center">climatic conditions</h1>

    <div class="card1">
        <img src="https://climate.nasa.gov/internal_resources/2710/Effects_page_triptych.jpeg" alt="">
        <div class="content">
            <ul>
                <li>Tropical Monsoon Climate</li>
                <li>Subtropical climate</li>

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

                <li>Maize</li>

                <li>Pulses</li>

                <li>Oilseeds</li>

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