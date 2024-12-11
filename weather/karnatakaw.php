<?php include "text.php" ?>
<html>

<head>
    <title>
        karnataka weather
    </title>
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
        <a class="weatherwidget-io" href="https://forecast7.com/en/15d3275d71/karnataka/" data-label_1="KARNATAKA"
            data-label_2="WEATHER" data-mode="Current" data-theme="dark">KARNATAKA WEATHER</a>
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
    <a class="weatherwidget-io" href="https://forecast7.com/en/15d3275d71/karnataka/" data-label_1="KARNATAKA"
        data-label_2="WEATHER" data-mode="Forecast" data-theme="dark">KARNATAKA WEATHER</a>
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
            Karnataka, a state in South India, experiences a tropical wet and dry
            climate. This type of climate is often referred to as a "Tropical
            Savanna Climate" or "Tropical Monsoon Climate." Here are some key
            characteristics of Karnataka's climate:
        </p>

        <p>
        <h3>Seasons: </h3><br>Karnataka typically experiences three distinct seasons: summer,
        monsoon, and winter.
        </p>

        <p>
        <h3>Summer (March to June):</h3><br> During the summer months, Karnataka can get
        quite hot, with temperatures often exceeding 30°C (86°F) and sometimes
        reaching as high as 40°C (104°F) in some regions. This season is
        characterized by dry and hot weather.
        </p>

        <p>
        <h3>Monsoon (June to September): </h3><br>The monsoon season brings heavy rainfall to
        most parts of Karnataka. The southwest monsoon, which originates from
        the Arabian Sea, brings abundant rain to the state. This is a crucial
        period for agriculture and replenishing water resources.
        </p>

        <p>
        <h3>Winter (October to February):</h3><br> Karnataka's winter season is generally
        mild and dry. Temperatures are cooler during this time, with daytime
        temperatures ranging from 15°C to 30°C (59°F to 86°F), depending on the
        region.
        </p>

        <p>
        <h3>Varied Climate Zones:</h3><br> Karnataka's climate can vary significantly within
        the state due to its diverse topography. Coastal areas experience a more
        humid climate, while the interior regions, including the Deccan Plateau,
        have a drier climate.
        </p>

        <p>
        <h3>Rainfall:</h3><br> The state receives the majority of its annual rainfall during
        the monsoon season. Some regions, especially those along the Western
        Ghats, can receive very heavy rainfall.
        </p>

        <p>
        <h3>Cyclones:</h3><br> Occasionally, tropical cyclones in the Arabian Sea can affect
        the coastal regions of Karnataka, leading to heavy rains and strong
        winds.
        </p>

        <p>
        <h3>Agriculture: </h3><br>Karnataka's agriculture is highly dependent on the monsoon
        rains. Crops like rice, sugarcane, and millets are cultivated during the
        monsoon season, while the winter season is suitable for crops like
        pulses, oilseeds, and cotton.
        </p>

        <p>
            Keep in mind that specific weather conditions and climate patterns can
            vary from year to year, so it's essential to refer to current weather
            data and climate reports for more precise and up-to-date information
            about Karnataka's climate.
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
            location.replace("karnataka.php")
        }
    </script>
</body>

</html>