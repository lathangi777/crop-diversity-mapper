<?php include "text.php" ?>
<html>

<head>
    <title>Uttar pradesh weather</title>
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
    </style>
</head>

<body style="background-color: rgb(248, 248, 219)">
    <center>
        <h1 style="color: black">
            <p style="float:left;">
                <button onclick="myfunction()">
                    <img src="https://cdn-icons-png.flaticon.com/512/25/25694.png" alt="W3Schools.com" width="30"
                        height="40" style="background-color: white" />
                </button>
                <button onclick="myfunction1()">
                    <img src="https://thumb.ac-illust.com/ef/ef76a36c7a4f85f140bf3566836df260_t.jpeg"
                        alt="W3Schools.com" width="30" height="40" style="background-color: white" />
                </button>
            </p>CURRENT DATA OF WEATHER
        </h1>
    </center>
    <a class="weatherwidget-io" href="https://forecast7.com/en/26d8580d95/uttar-pradesh/" data-label_1="UTTAR PRADESH"
        data-label_2="WEATHER" data-mode="Current" data-theme="dark">UTTAR PRADESH WEATHER</a>
    <script>
        !function (d, s, id) { var js, fjs = d.getElementsByTagName(s)[0]; if (!d.getElementById(id)) { js = d.createElement(s); js.id = id; js.src = 'https://weatherwidget.io/js/widget.min.js'; fjs.parentNode.insertBefore(js, fjs); } }(document, 'script', 'weatherwidget-io-js');
    </script>
    <center>
        <h1 style="color: black">

            PAST DATA OF WEATHER
        </h1>
    </center>
    </div>
    <div style="margin-top: 2%"></div>
    <a class="weatherwidget-io" href="https://forecast7.com/en/26d8580d95/uttar-pradesh/" data-label_1="UTTAR PRADESH"
        data-label_2="WEATHER" data-mode="Forecast" data-theme="dark">UTTAR PRADESH WEATHER</a>
    <script>
        !function (d, s, id) { var js, fjs = d.getElementsByTagName(s)[0]; if (!d.getElementById(id)) { js = d.createElement(s); js.id = id; js.src = 'https://weatherwidget.io/js/widget.min.js'; fjs.parentNode.insertBefore(js, fjs); } }(document, 'script', 'weatherwidget-io-js');
    </script>


    <i>
        <p style="font-weight: 3px; font-style: italic"></p>
        <p>Uttar Pradesh, a state in northern India, experiences a subtropical climate. The climate of Uttar Pradesh can
            be broadly categorized into three seasons:</p>

        <p>
        <h3>Summer (March to June):</h3><br>
        Summers in Uttar Pradesh are characterized by high temperatures and dry conditions. Daytime temperatures often
        exceed 40°C (104°F) in many parts of the state. This season can be quite hot and uncomfortable.</p>

        <p>
        <h3>Monsoon (July to September): </h3><br>The monsoon season brings relief from the scorching summer heat.
        During this period, Uttar Pradesh receives a significant amount of rainfall, which helps in cooling down the
        temperatures. However, heavy monsoon rains can also lead to flooding in some areas.</p>
        <p>

        <h3>Winter (October to February):</h3><br> Winters in Uttar Pradesh are generally cool and dry. Temperatures can
        drop significantly, especially in the northern and western parts of the state. Fog is common in many parts of
        Uttar Pradesh during the winter months.
        </p>

        <p>The specific climate conditions within Uttar Pradesh can vary from region to region due to its vast size and
            diverse geography. The southern parts of the state, such as Bundelkhand, may experience a more arid climate,
            while the northern plains and the Terai region may have a more humid climate due to their proximity to the
            Himalayas.</p>

        <p>Overall, Uttar Pradesh's climate is influenced by its location in the northern part of India, with distinct
            seasonal variations in temperature and rainfall.</p>

    </i>
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
            location.replace("uttarapra.php")
        }
    </script>
</body>

</html>