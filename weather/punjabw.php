<?php include "text.php" ?>
<html>

<head>
    <title>Punjab weather</title>
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
        <a class="weatherwidget-io" href="https://forecast7.com/en/31d1575d34/punjab/" data-label_1="PUNJAB"
            data-label_2="WEATHER" data-mode="Current" data-theme="dark">PUNJAB WEATHER</a>
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
    <a class="weatherwidget-io" href="https://forecast7.com/en/31d1575d34/punjab/" data-label_1="PUNJAB"
        data-label_2="WEATHER" data-mode="Forecast" data-theme="dark">PUNJAB WEATHER</a>
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
        <p style="font-weight: 3px;font-style: italic;"></p>
        <p>
            Punjab, a state in northern India, experiences a subtropical continental
            climate. Here are some key characteristics of the climate in Punjab: Hot
            Summers: Punjab has hot and dry summers, typically from April to June.
            During this period, temperatures can soar, with daytime temperatures often
            exceeding 40°C (104°F) or even higher. It's not uncommon for Punjab to
            experience heatwaves during the summer months.
        </p>
        <p>
        <h3>Cold Winters:</h3><br> Winters in Punjab, which last from November to February, are
        cold and can be quite chilly, especially during the night. December and
        January are the coldest months, with temperatures sometimes dropping below
        freezing, especially in the northern parts of the state.
        </p>
        <p>
        <h3>Monsoon Rainfall: </h3><br>Punjab receives a significant amount of its annual
        rainfall during the monsoon season, which typically occurs from July to
        September. During this time, the state experiences heavy rainfall, which
        is important for its agricultural activities. Dry Autumn and Spring: The
        transitional seasons of spring (March to April) and autumn (October to
        November) are relatively dry and mild. These seasons are considered more
        comfortable compared to the extremes of summer and winter.
        </p>
        <p>
        <h3>Fog in Winter:</h3><br> Dense fog can occur during the winter months, particularly
        in the northern and western regions of Punjab. This can lead to reduced
        visibility and can affect transportation.
        </p>
        <p>
        <h3>Agricultural Importance:</h3><br> The climate in Punjab, with its hot summers and
        fertile soil, is conducive to agriculture. The state is often referred to
        as the "Granary of India" due to its significant agricultural output,
        particularly in the production of wheat and rice.
        </p>
        <p>
            Overall, Punjab's climate is characterized by extremes of temperature
            between summer and winter, with distinct seasons and a significant
            dependence on the monsoon for agricultural purposes. These climatic
            conditions have a substantial impact on the state's agriculture and
            economy.
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
            location.replace("punjab.php")
        }
    </script>
</body>

</html>