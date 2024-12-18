<?php include "text.php" ?>
<html>

<head>
    <title>Tripura weather</title>
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
            </p>
            CURRENT DATA OF WEATHER
        </h1>
    </center>
    <div style="margin-top: 2%">
        <a class="weatherwidget-io" href="https://forecast7.com/en/23d9491d99/tripura/" data-label_1="TRIPURA"
            data-label_2="WEATHER" data-mode="Current" data-theme="dark">TRIPURA WEATHER</a>
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
    <a class="weatherwidget-io" href="https://forecast7.com/en/23d9491d99/tripura/" data-label_1="TRIPURA"
        data-label_2="WEATHER" data-mode="Forecast" data-theme="dark">TRIPURA WEATHER</a>
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
        <p>Tripura, a state in northeastern India, experiences a subtropical climate characterized by distinct seasons.
            Here are the major climate characteristics of Tripura:</p>

        <p>
        <h3>Hot and Humid Summers:</h3><br> During the summer months (March to June), Tripura experiences hot and humid
        weather. Temperatures can rise significantly during this period, often exceeding 30°C (86°F) or more. Humidity
        levels are relatively high, making the weather uncomfortable.</p>

        <p>
        <h3>Monsoon Season:</h3><br> The monsoon season in Tripura typically occurs from June to September. During this
        time, the state receives heavy rainfall due to the southwest monsoon winds. Rainfall is essential for
        agriculture, but excessive rainfall can lead to flooding in some areas.</p>

        <p>
        <h3>Post-Monsoon and Autumn: </h3><br>After the monsoon season, from October to February, Tripura experiences
        relatively dry and pleasant weather. The temperatures start to decrease, and the humidity levels also drop. This
        period is considered the best time to visit the state for tourism.</p>

        <p>
        <h3>Winter: </h3><br>The winter season, which lasts from December to February, is characterized by cooler
        temperatures. Nighttime temperatures can drop significantly, and foggy conditions are common in some parts of
        the state.</p>

        <p>
        <h3>Hill Areas:</h3><br> Tripura has some hilly regions in the eastern part of the state, near the border with
        Bangladesh. These areas have a slightly different climate compared to the plains. They tend to be cooler and
        receive more rainfall.</p>

        <p>It's important to note that climate conditions can vary within a state, and the above description provides a
            general overview of the climate in Tripura. Local weather patterns, elevation, and geographical factors can
            lead to variations in climate within different parts of the state. For the most up-to-date and
            region-specific weather information, it's advisable to consult local weather forecasts and meteorological
            sources.</p>
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
            location.replace("thripura.php")
        }
    </script>
</body>

</html>