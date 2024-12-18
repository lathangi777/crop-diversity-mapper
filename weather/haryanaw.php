<?php include "text.php" ?>
<html>

<head>
    <title>Bihar weather</title>
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
        <a class="weatherwidget-io" href="https://forecast7.com/en/29d0676d09/haryana/" data-label_1="HARYANA"
            data-label_2="WEATHER" data-mode="Current" data-theme="dark">HARYANA WEATHER</a>
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
    <a class="weatherwidget-io" href="https://forecast7.com/en/29d0676d09/haryana/" data-label_1="HARYANA"
        data-label_2="WEATHER" data-mode="Forecast" data-theme="dark">HARYANA WEATHER</a>
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
            Haryana, a state in northern India, experiences a predominantly
            monsoon-influenced climate. The climate in Haryana can be categorized as
            follows:
        </p>
        <p>
        <h3>Summer (March to June): </h3><br>Haryana witnesses hot and dry summers.
        Temperatures can often soar above 40°C (104°F) during this period. The
        region can also experience dust storms and occasional heatwaves.
        </p> Monsoon
        <p>
        <h3>(July to September):</h3><br> During the monsoon season, Haryana receives the
        majority of its annual rainfall. The southwest monsoon brings
        moisture-laden winds from the Arabian Sea, leading to a significant
        increase in humidity. Rainfall is essential for agriculture in the state.
        </p>
        <p>
        <h3>Post-Monsoon (October to November):</h3><br> After the monsoon season, temperatures
        begin to decrease, and the weather becomes more pleasant. This is a
        transitional period as the state moves from the wet season to the dry
        season.
        </p>
        <p>
        <h3>Winter (December to February):</h3><br> Winters in Haryana are cool and
        dry, with temperatures dropping significantly. The daytime temperatures
        generally range from 12°C to 25°C (54°F to 77°F), while nights can be
        quite chilly, often dropping below 5°C (41°F). Fog is common during the
        winter months.
        </p> Haryana's climate is influenced by its inland location and
        the proximity of the Thar Desert to the west. It is characterized by
        distinct seasons, with extreme heat during the summer and relatively cool
        temperatures during the winter. The monsoon season is crucial for the
        state's agriculture, as it helps replenish water resources and supports
        crop growth.
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
            location.replace("haryana.php")
        }
    </script>
</body>

</html>