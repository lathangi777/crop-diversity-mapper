<?php include "text.php" ?>
<html>

<head>
    <title>Goa weather</title>
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
    <div style="margin-top: 2%">
        <a class="weatherwidget-io" href="https://forecast7.com/en/15d3074d12/goa/" data-label_1="GOA"
            data-label_2="WEATHER" data-mode="Current" data-theme="dark">GOA WEATHER</a>
        <script>
            !(function (d, s, id) {
                var js,
                    fjs = d.getElementsByTagName(s)[0];
                if (!d.getElementById(id)) {
                    js = d.createElement(s);
                    js.id = id;
                    js.src = "https://weatherwidget.io/js/widget.min.js";
                    fjs.parentNode.insertBefore(js, fjs);
                }
            })(document, "script", "weatherwidget-io-js");
        </script>
        <center>
            <h1 style="color: black">PAST DATA OF WEATHER</h1>
        </center>
    </div>
    <div style="margin-top: 2%"></div>
    <a class="weatherwidget-io" href="https://forecast7.com/en/15d3074d12/goa/" data-label_1="GOA"
        data-label_2="WEATHER" data-mode="Forecast" data-theme="dark">GOA WEATHER</a>
    <script>
        !(function (d, s, id) {
            var js,
                fjs = d.getElementsByTagName(s)[0];
            if (!d.getElementById(id)) {
                js = d.createElement(s);
                js.id = id;
                js.src = "https://weatherwidget.io/js/widget.min.js";
                fjs.parentNode.insertBefore(js, fjs);
            }
        })(document, "script", "weatherwidget-io-js");
    </script>

    <i>
        <p style="font-weight: 3px; font-style: italic"></p>
        <p>
            Goa, a state in India, experiences a tropical monsoon climate. Here are
            some characteristics of the climate in Goa:
        </p>

        <p>
        <h3>Wet Season:</h3><br> Goa has a distinct wet season, which occurs during the
        monsoon months of June to September. During this period, the region
        receives heavy rainfall, and the weather is characterized by high
        humidity.
        </p>

        <p>
        <h3>Dry Season: </h3><br>The dry season in Goa typically lasts from October to May.
        During this time, the weather is warm and dry, with lower humidity
        levels. This period is the most popular for tourists visiting Goa
        because of the pleasant weather.
        </p>

        <p>
        <h3>Temperature:</h3><br> The temperature in Goa remains relatively warm throughout
        the year. The average temperature during the cooler dry season (November
        to February) ranges from 20°C to 30°C (68°F to 86°F), while in the
        hotter months (March to May), it can go higher, with temperatures
        occasionally exceeding 35°C (95°F).
        </p>

        <p>
        <h3>Humidity: </h3><br>Goa experiences high humidity levels during the monsoon
        season, which can make the weather feel uncomfortable. Humidity levels
        decrease during the dry season.
        </p>

        <p>
        <h3>Rainfall:</h3><br> Goa receives the majority of its annual rainfall during the
        monsoon season. Rainfall is relatively low during the dry season. The
        heavy monsoon rains are essential for agriculture and contribute to the
        lush green landscape.
        </p>

        <p>
        <h3>Cyclones:</h3><br> Occasionally, cyclones in the Arabian Sea can affect the
        coastal regions of Goa, bringing strong winds and heavy rainfall.
        </p>

        <p>
            Overall, Goa's tropical monsoon climate is characterized by a distinct
            wet season with heavy rains and a dry season with pleasant weather,
            making it a popular tourist destination for beachgoers and travelers
            seeking a warm, tropical climate.
        </p>
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
            location.replace("goa.php")
        }
    </script>
</body>

</html>